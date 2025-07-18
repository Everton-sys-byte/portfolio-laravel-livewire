<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Everton Soares' }}</title>
    <link rel="icon" href="{{ asset('/images/favicon.ico') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/mainStyle.css') }}">
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer','GTM-54JTQPHD');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54JTQPHD" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <x-navigation />
    <!-- End Google Tag Manager (noscript) -->

    {{ $slot }}

    <x-footer class="bg-primary d-flex flex-column align-items-center justify-content-center"
        style="height: 400px; margin-top: 20px" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            const sections = $("section[id]");
            const navLinks = $(".nav-bar ul li a, .nav-mobile-container ul li a");

            $(window).scroll(function() {
                const scrollTop = $(window).scrollTop();
                $('.nav-bar').toggleClass("active", scrollTop > 80);

                sections.each(function() {
                    const sectionTop = $(this).offset().top - 80;
                    const sectionBottom = sectionTop + $(this).outerHeight();
                    const id = $(this).attr("id");

                    if (scrollTop >= sectionTop && scrollTop < sectionBottom) {
                        navLinks.removeClass("active");
                        navLinks.each(function() {
                            if ($(this).attr("href") === "#" + id) {
                                $(this).addClass("active");
                            }
                        });
                    }
                });
            })

            // Botão do menu mobile (hamburger)
            $(".burger-button-container").click(function() {
                $(".nav-mobile-container").toggleClass("active");
            });

            const Toast = Swal.mixin({
                toast: true,
                position: "bottom-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });

            window.addEventListener('show-toast', event => {
                const detail = event.detail[0];
                Toast.fire({
                    icon: detail.icon,
                    title: detail.title,
                    text: detail.message
                });
            });
        })
    </script>
</body>

</html>
