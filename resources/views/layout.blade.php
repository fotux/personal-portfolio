<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <!-- tailwind server side -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    {{-- tailwind for github --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    boxShadow: {
                        'glow-primary': '0px 0px 3px 5px #2dd33d',
                        'glow-favorite': '0px -2px 3px 6px #2dd33d',
                    },
                    colors: {
                        secondary: '#5eead4',
                        primary: '#2dd33d',
                        dark: '#0f172a',
                        light: '#ddf8f4',
                        background: '#e7e7e7',
                    },
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>

    {{-- js for github --}}
    <script>
        const cards = document.querySelectorAll(".cards");

        cards.forEach((card) => {
            card.addEventListener("mousemove", (e) => {
                const rect = card.getBoundingClientRect();

                // rotation
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                // center position
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                // rotations from center
                const rotateX = (centerX - x) / 10;
                const rotateY = -(centerY - y) / 10;

                card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.10)`;
            });
        });

        cards.forEach((card) => {
            card.addEventListener("mouseleave", () => {
                card.style.transform = `rotateX(0deg) rotateY(0deg) scale(1)`;
            });
        });

        // hamburger
        const hamburger = document.querySelector(".hamburger");
        const menuMobile = document.querySelector(".nav-menu-mobile");
        const aboutMeSection = document.querySelector(".about-me-section");

        hamburger.addEventListener("click", () => {
            menuMobile.classList.toggle("opacity-100");
        });

        // tracking whole page scrolling
        window.addEventListener("scroll", () => {
            const rect = aboutMeSection.getBoundingClientRect();
            if (rect.top < 100) {
                menuMobile.classList.remove("opacity-100");
            }
        });

        // slides
        const slidesWrapper = document.querySelector(".slider-wrapper");
        const slides = document.querySelectorAll(".slide");
        const btnLeft = document.querySelector(".btn-left");
        const btnRight = document.querySelector(".btn-right");

        let currentSlide = 0;
        const totalSlides = slides.length;
        console.log(totalSlides);

        function updateSlidePosition() {
            slidesWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        btnLeft.addEventListener("click", () => {
            if (currentSlide > 0) {
                currentSlide--;
                updateSlidePosition();
            }
        });

        btnRight.addEventListener("click", () => {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
                updateSlidePosition();
            }

            console.log("currentSlide");
        });
    </script>
</head>


<body>
    @include('index')
</body>

</html>
