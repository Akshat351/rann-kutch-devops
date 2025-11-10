<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['meta_title'] }}</title>
    {{-- <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" /> --}}
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="{{ $data['meta_title'] }}">
    <meta property="og:description" content="{{ $data['meta_description'] }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ route('home') }}/assets/images/rann-of-kutch-logo.png">
    <meta property="og:image:secure_url" content="{{ route('home') }}/assets/images/rann-of-kutch-logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Rann Kutch Taxi">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description" content="{{ $data['meta_description'] }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="P0zCHOnSnFIw-R5XFeHxATsZqlkuj2C-bcFWXNWbYEQ" />
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/index-BsYGgocP.css') }}">


    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: 'hsl(24, 95%, 55%)',
                        'primary-hover': 'hsl(24, 95%, 48%)',
                        secondary: 'hsl(190, 70%, 95%)',
                        accent: 'hsl(205, 100%, 50%)',
                        trust: 'hsl(195, 85%, 45%)',
                        muted: 'hsl(40, 15%, 92%)',
                        'muted-foreground': 'hsl(220, 10%, 45%)',
                        background: 'hsl(40, 20%, 98%)',
                        foreground: 'hsl(220, 15%, 12%)',
                        border: 'hsl(40, 20%, 90%)',
                    }
                }
            }
        }
    </script>

    @yield('styles')
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PJVB7N3271"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PJVB7N3271');
</script>
</head>

<body class="min-h-screen bg-background text-foreground">


    <div id="snackbar" class="snackbar">
        <i class="fas fa-exclamation-circle"></i>
        <span id="snackbar-message"></span>
    </div>


    @include('partials.front.header')
    @yield('content')
    @include('partials.front.footer')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{ asset('assets/js/jquery-validation.js') }}"></script>
    <script src="{{ asset('assets/js/index-D_GFucp1.js') }}"></script>
    <script>
        var SITE_URL = '@php echo URL::to('/'); @endphp';
    </script>
    @yield('scripts')

    <script>
        function showSnackbar(message) {
            const el = document.getElementById("snackbar");
            document.getElementById("snackbar-message").textContent = message;
            el.classList.add("show");
            setTimeout(() => el.classList.remove("show"), 4000);
        }

        @if (session('bookride_error_msg'))
            showSnackbar(@json(session('bookride_error_msg')));
        @endif

        @if (session('error'))
            showSnackbar(@json(session('error')));
        @endif

        @if (session('success'))
            showSnackbar(@json(session('success')));
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                showSnackbar(@json($error));
            @endforeach
        @endif
    </script>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }

        // Mobile dropdown functionality - Common for all pages
        // Use event delegation to handle dynamically loaded content
        document.addEventListener('click', function(e) {
            const dropdownBtn = e.target.closest('.mobile-dropdown-btn');
            if (!dropdownBtn) return;

            e.preventDefault();
            e.stopPropagation();

            const content = dropdownBtn.nextElementSibling;
            const icon = dropdownBtn.querySelector('svg');

            if (!content || !content.classList.contains('mobile-dropdown-content')) return;

            const isOpen = !content.classList.contains('hidden');

            // Close all dropdowns
            document.querySelectorAll('.mobile-dropdown-content').forEach(item => {
                item.classList.add('hidden');
            });
            document.querySelectorAll('.mobile-dropdown-btn svg').forEach(svg => {
                svg.style.transform = 'rotate(0deg)';
            });

            // Toggle current dropdown
            if (isOpen) {
                content.classList.add('hidden');
                if (icon) icon.style.transform = 'rotate(0deg)';
            } else {
                content.classList.remove('hidden');
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    </script>
</body>

</html>
