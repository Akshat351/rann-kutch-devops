$(function () {
  // Add custom validation method for letters and spaces only
  if (!$.validator.methods.lettersSpaces) {
    $.validator.addMethod("lettersSpaces", function (value, element) {
      return this.optional(element) || /^[A-Za-z\s]+$/.test(value);
    }, "Only letters and spaces are allowed.");
  }

  // Apply validation to both forms
  $("#form-one-way, #form-round-trip").each(function () {
    $(this).validate({
      ignore: [],

      // ✅ Validation Rules
      rules: {
        source_id: {
          lettersSpaces: true,
        },
        destination_id: {
          lettersSpaces: true,
        },
        source_ids: {
          required: true,
        },
        destination_ids: {
          required: true,
        },
        mobile: {
          required: true,
          digits: true,
          minlength: 10,
          maxlength: 10,
        },
        pickup_date: {
          required: true,
        },
        // ✅ Only apply return_date validation if the form is round trip
        return_date: {
          required: function (element) {
            return $(element).closest("form").attr("id") === "form-round-trip";
          },
          // ✅ Check if return date is after pickup date
          greaterThan: function (element) {
            return $(element).closest("form").attr("id") === "form-round-trip";
          },
        },
      },

      // ✅ Custom Messages
      messages: {
        source_id: "Only letters and spaces are allowed.",
        destination_id: "Only letters and spaces are allowed.",
        source_ids: "Please select pickup city from the list.",
        destination_ids: "Please select drop city from the list.",
        mobile: {
          required: "Please enter your phone number.",
          digits: "Please enter only numbers.",
          minlength: "Phone number must be 10 digits.",
          maxlength: "Phone number must be 10 digits.",
        },
        pickup_date: "Please select pickup date.",
        return_date: {
          required: "Please select return date.",
          greaterThan: "Return date must be after pickup date.",
        },
      },

      // ✅ Error Placement
      errorPlacement: function (error, element) {
        const elId = element.attr("id");
        const labelTarget = $("#" + elId + "-error");
        if (labelTarget.length) {
          labelTarget.html(error.text()).css({
            "display": "block",
            "visibility": "visible",
            "opacity": "1"
          });
        } else {
          error.insertAfter(element);
        }
      },

      // ✅ Clear errors on success
      success: function (label, element) {
        const elId = $(element).attr("id");
        const errorLabel = $("#" + elId + "-error");
        if (errorLabel.length) {
          errorLabel.html("").addClass("hidden").hide();
        }
      },

      // ✅ Show errors callback - ensures errors are displayed
      showErrors: function(errorMap, errorList) {
        // Call default behavior
        this.defaultShowErrors();

        // Manually show error messages in labels for date fields
        $.each(errorMap, function(key, value) {
          const element = $("[name='" + key + "']");
          const elId = element.attr("id");
          if (elId) {
            const errorLabel = $("#" + elId + "-error");
            if (errorLabel.length) {
              errorLabel.html(value).css({
                "display": "block",
                "visibility": "visible",
                "opacity": "1"
              });
            }
          }
        });
      },

      // ✅ Submit Handler (Dynamic redirect)
      submitHandler: function (form) {
        const makeSlug = (s) =>
          s
            .toLowerCase()
            .replace(/\s+/g, "-")
            .replace(/[^a-z0-9-]/g, "")
            .replace(/-+/g, "-")
            .replace(/^-|-$/g, "");

        const pickupText = $(form).find("#source_id").val().trim();
        const dropText = $(form).find("#destination_id").val().trim();

        const redirectUrl = `/${makeSlug(pickupText)}-to-${makeSlug(dropText)}-taxi`;
        form.action = redirectUrl;
        form.method = "POST";
        form.submit();
      },
    });
  });

  // ✅ Add custom validation method for date comparison
  $.validator.addMethod(
    "greaterThan",
    function (value, element) {
      const form = $(element).closest("form");
      const pickupDateValue = form.find("#pickup_dates").val();

      if (!pickupDateValue || !value) {
        return true; // Let required validator handle empty values
      }

      // Parse dates (adjust format based on your date input format)
      const pickupDate = new Date(pickupDateValue);
      const returnDate = new Date(value);

      return returnDate > pickupDate;
    },
    "Return date must be after pickup date."
  );
});


$(function () {
  $.validator.addMethod("lettersSpaces", function (v, e) {
    return this.optional(e) || /^[A-Za-z\s]+$/.test(v);
  }, "Only letters and spaces allowed");

  $("#form-local").validate({
    ignore: [],
    rules: {
      source_id:  { required: true, maxlength: 30, lettersSpaces: true },
      mobile:     { required: true, digits: true, minlength: 10, maxlength: 10 },
      pickup_date:{ required: true }
    },
    messages: {
      source_id:  "Enter a valid city/area",
      mobile:     "Enter a 10-digit number",
      pickup_date:"Select date"
    },
    // No submitHandler here → native form submit goes to the Blade-set action
  });
});


$(function () {
  // Custom rule: letters & spaces for visible pickup text
  if (!$.validator.methods.lettersSpaces) {
    $.validator.addMethod("lettersSpaces", function (value, element) {
      return this.optional(element) || /^[A-Za-z\s]+$/.test(value);
    }, "Only letters and spaces are allowed.");
  }

  $("#form-rental").validate({
    ignore: [], // include hidden fields like source_ids

    // IMPORTANT: keys match name=""
    rules: {
      source_id:   { required: true, maxlength: 60, lettersSpaces: true },
      source_ids:  { required: true }, // hidden id from suggestions
      mobile:      { required: true, digits: true, minlength: 10, maxlength: 10 },
      pickup_date: { required: true }
    },

    messages: {
      source_id:   { required: "Please enter pickup location." },
      source_ids:  "Please select a pickup location from the list.",
      mobile:      "Please enter a valid 10-digit phone number.",
      pickup_date: "Please select the rental start date."
    },

    // Put errors into your labels if present, else after element
    errorPlacement: function (error, element) {
      const elId = element.attr("id"); // e.g. "source_ids_hidden"
      const $label = elId ? $("#" + elId + "-error") : $();
      if ($label.length) {
        $label.text(error.text()).show();
      } else {
        error.insertAfter(element);
      }
    },

    // Clear label on success
    success: function (label, element) {
      const elId = $(element).attr("id");
      if (elId) $("#" + elId + "-error").text("");
    },

    // Do NOT override action/method; let the form submit to Blade action
    submitHandler: function (form) {
      form.submit();
    }
  });

  // Optional: live input sanitation for visible pickup text
  $("#source_id").on("input", function () {
    let v = $(this).val().replace(/[^A-Za-z\s]/g, "");
    if (v.length > 60) v = v.substring(0, 60);
    $(this).val(v);
  });
});


$(function () {
    // Initialize validation on your airport form
    $("#form-airport").validate({
        ignore: [],

        // ✅ Validation rules
        rules: {
            airport_id: {
                lettersSpaces: true,
            },
            source_id: {
                lettersSpaces: true,
            },
            airport_ids: {
                required: true,
                maxlength: 50,
            },
            source_ids: {
                required: true,
                maxlength: 50,
            },
            mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            pickup_date: {
                required: true,
                date: true,
            },
        },

        // ✅ Custom error messages
        messages: {
            airport_id: "Only letters and spaces are allowed.",
            source_id: "Only letters and spaces are allowed.",
            airport_ids: {
                required: "Please enter the airport from the list.",
            },
            source_ids: {
                required: "Please select pickup city from the list.",
            },
            mobile: {
                required: "Please enter your phone number",
                digits: "Only numbers are allowed",
                minlength: "Phone number must be 10 digits",
                maxlength: "Phone number must be 10 digits",
            },
            pickup_date: {
                required: "Please select your flight date",
            },
        },

        // ✅ Show errors properly
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },

        highlight: function (element) {
            $(element).addClass("border-red-500");
        },
        unhighlight: function (element) {
            $(element).removeClass("border-red-500");
        },
    });
});


// Disable past dates in all date inputs
document.addEventListener('DOMContentLoaded', function () {
  const today = new Date();
  const todayStr = today.toISOString().split('T')[0];
  const currentYear = today.getFullYear();

  const dateInputs = document.querySelectorAll('input[type="date"]');

  dateInputs.forEach(input => {
    // Prevent past dates entirely
    input.setAttribute('min', todayStr);
    // Prevent >4-digit years
    input.setAttribute('max', '9999-12-31');

    // Validate year (no past years)
    const validateYear = (el) => {
      if (!el.value) { el.setCustomValidity(''); return; }
      const [y] = el.value.split('-');
      const year = parseInt((y || '').replace(/\D/g, ''), 10);
      if (!isNaN(year) && year < currentYear) {
        el.setCustomValidity('Year cannot be in the past.');
      } else {
        el.setCustomValidity('');
      }
    };

    // Normalize on input/paste: keep year to 4 digits and validate
    input.addEventListener('input', function () {
      if (!this.value) return;
      const parts = this.value.split('-');
      if (parts.length > 0) {
        parts[0] = (parts[0] || '').replace(/\D/g, '').slice(0, 4);
        this.value = parts.join('-');
      }
      validateYear(this);
      // live feedback without submitting
      if (this.validationMessage) this.reportValidity();
    });

    // Block typing a 5th digit in the year segment
    input.addEventListener('keydown', function (e) {
      if (!/^\d$/.test(e.key)) return;
      const val = this.value || '';
      const pos = this.selectionStart || 0;
      const sel = (this.selectionEnd || 0) - pos;
      const year = (val.split('-')[0] || '').replace(/\D/g, '');
      if (pos <= 4 && sel === 0 && year.length >= 4) e.preventDefault();
    });

    // Re-validate on blur/change
    input.addEventListener('change', function () {
      validateYear(this);
    });
  });
});


$(document).ready(function () {

    // ✅ Custom method: disallow past time if pickup_date is today
    $.validator.addMethod("pickupTimeNotPast", function (value, element) {
        var pickupDate = $("input[name='pickup_date']").val();
        if (!pickupDate || !value) return true; // skip if empty

        var selectedDate = new Date(pickupDate);
        var today = new Date();

        // Check if pickup date is today
        if (
            selectedDate.getFullYear() === today.getFullYear() &&
            selectedDate.getMonth() === today.getMonth() &&
            selectedDate.getDate() === today.getDate()
        ) {
            // Convert value ("HH:mm") to hours and minutes
            var [hours, minutes] = value.split(":");
            var selectedTime = new Date();
            selectedTime.setHours(hours, minutes, 0, 0);

            // Compare time — disallow past time
            if (selectedTime < today) {
                return false;
            }
        }
        return true;
    }, "Pickup time cannot be in the past");

    // ✅ Apply validation
    $('#cabbookingform').validate({
        rules: {
            mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            pickup_date: {
                required: true
            },
            pickup_time: {
                required: true,
                pickupTimeNotPast: true // ⬅️ use custom rule here
            },
            return_date: {
                required: function () {
                    return $('.return-fields').is(':visible');
                },
                greaterThan: "#pickup_date"
            },
            return_time: {
                required: function () {
                    return $('.return-fields').is(':visible');
                }
            }
        },
        messages: {
            mobile: {
                required: "Mobile number is required",
                digits: "Please enter only digits",
                minlength: "Mobile number must be 10 digits",
                maxlength: "Mobile number must be 10 digits"
            },
            pickup_date: {
                required: "Pickup date is required"
            },
            pickup_time: {
                required: "Pickup time is required",
                pickupTimeNotPast: "Pickup time cannot be in the past"
            },
            return_date: {
                required: "Return date is required",
                greaterThan: "Return date cannot be before pickup date"
            },
            return_time: {
                required: "Return time is required"
            }
        },
        errorElement: 'span',
        errorClass: 'text-xs text-red-600',
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        }
    });
});

$(function () {
  // Apply validation to both forms
  $("#cabbookingmodalform").each(function () {
    $(this).validate({
      ignore: [],

      // ✅ Validation Rules
      rules: {
        source_ids: {
          required: true,
        },
        destination_ids: {
          required: true,
        },
        mobile: {
          required: true,
          digits: true,
          minlength: 10,
          maxlength: 10,
        },
        pickup_date: {
          required: true,
        },
      },

      // ✅ Custom Messages
      messages: {
        source_ids: "Please select pickup city from the list.",
        destination_ids: "Please select drop city from the list.",
        mobile: {
          required: "Please enter your phone number.",
          digits: "Please enter only numbers.",
          minlength: "Phone number must be 10 digits.",
          maxlength: "Phone number must be 10 digits.",
        },
        pickup_date: "Please select pickup date.",
      },

      // ✅ Error Placement
      errorPlacement: function (error, element) {
        const elId = element.attr("id");
        const fallbackTarget = element;
        const labelTarget = $("#" + elId + "-error");
        if (labelTarget.length) {
          labelTarget.text(error.text());
        } else {
          error.insertAfter(fallbackTarget);
        }
      },

      // ✅ Clear errors on success
      success: function (label, element) {
        const elId = $(element).attr("id");
        $("#" + elId + "-error").text("");
      },

      // ✅ Submit Handler (Dynamic redirect)
      submitHandler: function (form) {

        form.submit();
      },
    });
  });
});
$(function () {
  $("#contactform").validate({
    ignore: [],

    // ✅ Validation Rules
    rules: {
      name: { required: true },
      mobile: {
        required: true,
        digits: true,
        minlength: 10,
        maxlength: 10,
      },
      email: {
        required: false,
        email: true,
      },
      tripType: { required: true },
      hiddenRecaptcha: {
        required: function () {
          // Validate only when captcha not solved
          return grecaptcha.getResponse() === '';
        },
      },
    },

    // ✅ Custom Messages
    messages: {
      name: "Please enter your full name.",
      mobile: {
        required: "Please enter your phone number.",
        digits: "Please enter only numbers.",
        minlength: "Phone number must be 10 digits.",
        maxlength: "Phone number must be 10 digits.",
      },
      email: "Please enter a valid email address.",
      tripType: "Please select a service.",
      hiddenRecaptcha: "Please complete the CAPTCHA verification.",
    },

    // ✅ Where to show the error
    errorPlacement: function (error, element) {
      if (element.attr("name") === "hiddenRecaptcha") {
        error.insertAfter(".g-recaptcha"); // place below captcha box
      } else {
        error.insertAfter(element);
      }
    },

    // ✅ Clear errors on success
    success: function (label, element) {
      $(element).next("label.error").remove();
    },

    // ✅ Final Submit Handler
    submitHandler: function (form) {
      // Before submitting, double-check reCAPTCHA
      if (grecaptcha.getResponse() === '') {
        alert("Please verify that you're not a robot.");
        return false;
      }
      $("#loading-spinner").removeClass("hidden");
      form.submit();
    },
  });
});


$("input[name='mobile']").on("keypress input", function (e) {
    // Block invalid characters while typing
    if (e.type === "keypress" && !/[0-9]/.test(e.key)) {
        e.preventDefault();
    }
    // Clean pasted or dragged text
    this.value = this.value.replace(/[^0-9]/g, '');
});

// Real-time input filtering for location fields - prevent numbers and special characters
$(document).ready(function() {
    // Filter pickup and drop-off location fields
    $("input[name='source_id'], input[name='destination_id'], input[name='airport_id']").on("input", function() {
        // Remove all characters except letters and spaces
        this.value = this.value.replace(/[^A-Za-z\s]/g, '');
    });

    // Also prevent typing numbers and special characters
    $("input[name='source_id'], input[name='destination_id'], input[name='airport_id']").on("keypress", function(e) {
        // Allow control keys: backspace (8), tab (9), enter (13), escape (27), delete (46)
        // Allow arrow keys and other navigation keys
        if (e.which === 8 || e.which === 9 || e.which === 13 || e.which === 27 || e.which === 46 ||
            (e.which >= 35 && e.which <= 40)) {
            return true;
        }
        // Allow only letters and space
        const char = String.fromCharCode(e.which || e.keyCode);
        if (!/^[A-Za-z\s]$/.test(char)) {
            e.preventDefault();
            return false;
        }
        return true;
    });
});

$("input[name='name']").on("input", function () {
    this.value = this.value.replace(/[^\p{L}\s]/gu, '');
});
