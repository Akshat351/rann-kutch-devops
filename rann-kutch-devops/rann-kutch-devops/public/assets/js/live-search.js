// $(document).ready(function () {
//     // Initialize Select2 with AJAX
//     var oldSourceId = typeof oldSourceId !== 'undefined' ? oldSourceId : null;
//     $(".departure-input").select2({
//         minimumInputLength: 3,
//         width: "100%",
//         ajax: {
//             url: SITE_URL + "/departure-list", // Your AJAX endpoint
//             type: "GET",
//             dataType: "json",
//             data: function (params) {
//                 return {
//                     searchTerm: params.term // The search term to be sent to the server
//                 };
//             },
//             delay: 250, // Delay before sending a request
//             headers: {
//                 "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") // CSRF token
//             },
//             processResults: function (data) {
//                 return {
//                     results: $.map(data, function (item) {
//                         return {
//                             text: item.name, // The text to display in the dropdown
//                             id: item.id // The value of the option
//                         };
//                     })
//                 };
//             }
//         }
//     }).val(oldSourceId).trigger('change'); // Set the old value and trigger change to update the UI
// });

// $(document).ready(function () {
//     var oldSourceId = typeof oldSourceId !== 'undefined' ? oldSourceId : null;
//     $(".destination-input").select2({
//         minimumInputLength: 3,
//         width: "100%",
//         ajax: {
//             url: SITE_URL + "/destination-list",
//             type: "GET",
//             dataType: "json",
//             data: function (params) {
//                 return {
//                     searchTerm: params.term, // The search term to be sent to the server
//                 };
//             },
//             delay: 250, // Delay before sending a request
//             headers: {
//                 "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // CSRF token
//             },
//             processResults: function (data) {
//                 return {
//                     results: $.map(data, function (item) {
//                         return {
//                             text: item.name, // The text to display in the dropdown
//                             id: item.id, // The value of the option
//                         };
//                     }),
//                 };
//             },
//         },
//     }).val(oldSourceId).trigger('change');

// });


$(".source_id").on("keyup", function () {
    $(".source_ids_hidden").val("");
    let searchTerm = $(this).val();

    if (searchTerm.length >= 3) {
        $.ajax({
            url: SITE_URL + "/source-list",
            type: "GET",
            dataType: "json",
            data: { searchTerm: searchTerm },
            delay: 250,
            headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
            success: function (data) {
                let suggestions = $(".sourceSuggestions");
                suggestions.empty(); // Clear previous suggestions

                if (data.length > 0) {
                    $.each(data, function (index, item) {
                        suggestions.append('<a class="dropdown-item" href="javascript:void(0);" data-id="' + item.id + '">' + item.name + '</a>');
                    });

                    suggestions.show(); // Show the suggestion box
                } else {
                    suggestions.hide(); // Hide if no results
                }
            }
        });
    } else {
        $(".sourceSuggestions").hide(); // Hide the suggestion box if less than 3 characters
    }
});

// Handle the click event on a suggestion
$(document).on("click", ".sourceSuggestions .dropdown-item", function (e) {
    e.preventDefault();
    let selectedText = $(this).text();
    let selectedId = $(this).data("id");

    // Set the input field with the selected value
    $(".source_id").val(selectedText);
    let $tempSpan = $("<span>").text(selectedText).css({
        "font-size": $(".source_id").css("font-size"),
        "visibility": "hidden",
        "white-space": "nowrap",
    }).appendTo("body");

    let textWidth = $tempSpan.width() + 40; // Add extra space for padding

    // Adjust the input field's width based on the text width
    if ($(window).width()>1199 && textWidth > $(".source_id").width()) {
        $(".source_id").css("width", "100%");
    } else {
        $(".source_id").css("width", "100%"); // Reset to 100% if text width is less
    }

    // Clean up the temporary span
    $tempSpan.remove();

    // Optionally store the selected ID in a hidden input or in the data of the input field
    if (selectedId) {
        $(".source_ids_hidden").val(selectedId);
        $('#source_ids-error').hide();
    } else {
        $(".source_ids_hidden").val(""); // Reset hidden field if no destination is selected
    }
    $(".sourceSuggestions").hide(); // Hide the suggestion box

});

$(".destination_id").on("keyup", function () {
    $('.destination_ids_hidden').val('')
    let searchTerm = $(this).val();

    if (searchTerm.length >= 3) {
        $.ajax({
            url: SITE_URL + "/destination-list",
            type: "GET",
            dataType: "json",
            data: { searchTerm: searchTerm },
            delay: 250,
            headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
            success: function (data) {
                let suggestions = $(".destinationSuggestions");
                suggestions.empty(); // Clear previous suggestions

                if (data.length > 0) {
                    $.each(data, function (index, item) {
                        suggestions.append('<a class="dropdown-item" href="javascript:void(0);" data-id="' + item.id + '">' + item.name + '</a>');
                    });

                    suggestions.show(); // Show the suggestion box
                } else {
                    suggestions.hide(); // Hide if no results
                }
            }
        });
    } else {
        $(".destinationSuggestions").hide(); // Hide the suggestion box if less than 3 characters
    }
});

// Handle the click event on a suggestion
$(document).on("click", ".destinationSuggestions .dropdown-item", function (e) {
    e.preventDefault();

    let selectedText = $(this).text();
    let selectedId = $(this).data("id");
    // Set the input field with the selected value
    $(".destination_id").val(selectedText);

    let $tempSpan = $("<span>").text(selectedText).css({
        "font-size": $(".destination_id").css("font-size"),
        "visibility": "hidden",
        "white-space": "nowrap",
    }).appendTo("body");

    let textWidth = $tempSpan.width() + 40; // Add extra space for padding

    // Adjust the input field's width based on the text width
    if ($(window).width()>1199 && textWidth > $(".destination_id").width()) {
        $(".destination_id").css("width", "100%");
    } else {
        $(".destination_id").css("width", "100%"); // Reset to 100% if text width is less
    }

    // Clean up the temporary span
    $tempSpan.remove();

    // Optionally store the selected ID in a hidden input or in the data of the input field
    if (selectedId) {
        $(".destination_ids_hidden").val(selectedId);
        $('#destination_ids-error').hide();
    } else {
        $(".destination_ids_hidden").val(""); // Reset hidden field if no destination is selected
    }
    $(".destinationSuggestions").hide(); // Hide the suggestion box

});


/*  start script end for sightseeing form */

/*** script for airport source */
$(".airport_id").on("keyup", function () {
    $(".airport_ids_hidden").val("");
    let searchTerm = $(this).val();

    if (searchTerm.length >= 3) {
        $.ajax({
            url: SITE_URL + "/airport-list",
            type: "GET",
            dataType: "json",
            data: { searchTerm: searchTerm },
            delay: 250,
            headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
            success: function (data) {
                let suggestions = $(".airportSuggestions");
                suggestions.empty(); // Clear previous suggestions

                if (data.length > 0) {
                    $.each(data, function (index, item) {
                        suggestions.append('<a class="dropdown-item" href="javascript:void(0);" data-id="' + item.id + '">' + item.name + '</a>');
                    });

                    suggestions.show(); // Show the suggestion box
                } else {
                    suggestions.hide(); // Hide if no results
                }
            }
        });
    } else {
        $(".airportSuggestions").hide(); // Hide the suggestion box if less than 3 characters
    }
});

// Handle the click event on a suggestion
$(document).on("click", ".airportSuggestions .dropdown-item", function (e) {
    e.preventDefault();
    let selectedText = $(this).text();
    let selectedId = $(this).data("id");

    // Set the input field with the selected value
    $(".airport_id").val(selectedText);
    let $tempSpan = $("<span>").text(selectedText).css({
        "font-size": $(".airport_id").css("font-size"),
        "visibility": "hidden",
        "white-space": "nowrap",
    }).appendTo("body");

    let textWidth = $tempSpan.width() + 40; // Add extra space for padding

    // Adjust the input field's width based on the text width
    if ($(window).width()>1199 && textWidth > $(".airport_id").width()) {
        $(".airport_id").css("width", "100%");
    } else {
        $(".airport_id").css("width", "100%"); // Reset to 100% if text width is less
    }

    // Clean up the temporary span
    $tempSpan.remove();

    // Optionally store the selected ID in a hidden input or in the data of the input field
    if (selectedId) {
        $(".airport_ids_hidden").val(selectedId);
        $('#airport_ids-error').hide();
    } else {
        $(".airport_ids_hidden").val(""); // Reset hidden field if no destination is selected
    }
    $(".airportSuggestions").hide(); // Hide the suggestion box

});
/*** end script for airport source */
