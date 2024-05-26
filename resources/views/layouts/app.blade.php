<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://unpkg.com/simplebar@latest/dist/simplebar.css"
    />
    @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/dark.js'])
    <title>Prakerin | @yield('title')</title>
    <script>

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        document.addEventListener('livewire:navigated', () => {
            initFlowbite();

            var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
            var themeToggleBtn = document.getElementById('theme-toggle');
            var contentContainer = document.getElementById('content-container');

            function setTheme(theme) {
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark');
                    contentContainer.classList.add('dark-scrollbar');
                } else {
                    document.documentElement.classList.remove('dark');
                    contentContainer.classList.remove('dark-scrollbar');
                }
                localStorage.setItem('color-theme', theme);
            }

            function updateIcon() {
                if (localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') &&
                        window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    themeToggleLightIcon.classList.remove('hidden');
                    themeToggleDarkIcon.classList.add('hidden');
                } else {
                    themeToggleDarkIcon.classList.remove('hidden');
                    themeToggleLightIcon.classList.add('hidden');
                }
            }

            updateIcon();

            themeToggleBtn.addEventListener('click', function() {
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');

                if (document.documentElement.classList.contains('dark')) {
                    setTheme('light');
                } else {
                    setTheme('dark');
                }
            });

            window.addEventListener('beforeunload', function() {
                if (!localStorage.getItem('color-theme')) {
                    localStorage.setItem('color-theme', document.documentElement.classList.contains(
                        'dark') ? 'dark' : 'light');
                }
            });

            
        });



    </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <style>
        .fl-wrapper {
         z-index: 60;
       }

     </style>
    @include('components.navbar')
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        @include('components.sidebar')
        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
            <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
                {{ $slot }}
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
</body>
</html>
