<main class="bg-background">
    <nav
        class="bg-dark md:bg-dark/90 text-light py-3 text-lg list-none flex justify-around font-semibold md:sticky md:top-0 md:z-50 ">
        <div
            class="font-sans font-bold text-2xl bg-gradient-to-t from-primary to-secondary text-transparent bg-clip-text relative tracking-widest">
            Karolis Raginkis
            <div class="absolute w-14 h-0.5 bg-gradient-to-t from-primary to-secondary rounded-full"></div>
        </div>
        </div>

        <button class="hamburger w-15 h-15 mix-blend-plus-lighter md:hidden"><img
                src="{{ asset('build/assets/hamburger.svg') }}" alt="hamburger_2"></button>

        {{-- desktop nav --}}
        <div class="md:flex gap-10 text-light tracking-tight hidden">
            <a href=""><span
                    class="bg-gradient-to-t from-primary to-secondary text-transparent bg-clip-text font-serif text-xl">01.
                </span>About</a>
            <a href=""><span
                    class="bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text font-serif text-xl">02.
                </span>Education</a>
            <a href=""><span
                    class="bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text font-serif text-xl">03.
                </span>Project</a>
            <a href=""><span
                    class="bg-gradient-to-l from-primary to-secondary text-transparent bg-clip-text font-serif text-xl">04.
                </span>Contact</a>
        </div>

    </nav>
    {{-- mobile nav --}}
    <div
        class="nav-menu-mobile pointer-events-none opacity-0 flex flex-col bg-dark text-light md:py-4 text-lg list-none transition-all duration-300 ease rounded-b-2xl justify-center items-start h-full pl-5 ">
        <a href="google.com"><span
                class="bg-gradient-to-t from-primary to-secondary text-transparent bg-clip-text font-serif text-xl">01.
            </span>About</a>
        <a href=""><span
                class="bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text font-serif text-xl">02.
            </span>Education</a>
        <a href=""><span
                class="bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text font-serif text-xl">03.
            </span>Project</a>
        <a href=""><span
                class="bg-gradient-to-l from-primary to-secondary text-transparent bg-clip-text font-serif text-xl">04.
            </span>Contact</a>
    </div>

    <section class="about-me-section max-w-5xl mx-auto md:flex items-center justify-center md:pb-10">
        <div class="flex-1">
            <h1
                class="from-primary to-secondary bg-gradient-to-b bg-clip-text text-transparent text-5xl tracking-wide font-serif">
                Backend
                Developer</h1>
            <p class="text-dark text-lg mt-12 font-serif">Passionate backend developer with a grasp of frontend
                technologies. I
                enjoy
                creating
                clean, scalable, and
                maintainable solutions — from APIs to full-stack applications.</p>
            <div class="flex space-x-10 justify-start items-center mt-5">
                <button
                    class="border rounded-2xl px-4 py-2 text-shadow-xl bg-dark font-bold  transition-all duration-500 hover:scale-105 ease-in-out">
                    <span
                        class="text-light hover:bg-black hover:from-primary hover:to-secondary hover:bg-gradient-to-b hover:bg-clip-text hover:text-transparent transition-all duration-500">Contact
                        Me</span>

                </button>
                <div class="flex justify-center gap-5 items-center">
                    <a class="hover:scale-110 transition-all duration-300" href="https://github.com/fotux"> <img
                            src="{{ asset('build/assets/github.svg') }}" alt="github" class="w-8 h-8"></a>
                    <a class="hover:scale-110 transition-all duration-300"
                        href="https://www.linkedin.com/in/karolis-raginskis/">
                        <img src="{{ asset('build/assets/linkedin.svg') }}" alt="linkedin" class="w-8 h-8"></a>

                </div>
            </div>


        </div>
        <div class="flex-1 ">
            <img src="{{ asset('build/assets/pixlr-image-generator-6883738872de360b5ab3e45d.png') }}"
                class="mix-blend-multiply w-full h-auto" alt="me">
        </div>
    </section>

    <section>
        <h1 class="text-center text-5xl text-dark font-medium mt-20 font-serif">My Skills</h1>

        <p class="text-center text-dark/70 text-lg my-10 max-w-5xl mx-auto font-serif">
            While I’m capable of working across the full stack, my main focus is backend development. I'm especially
            interested in Laravel projects and constantly improving in that area. JavaScript and frontend work are
            valuable tools I use when needed, but at the end of the day, I'm aiming for a backend developer position.
        </p>

        <div
            class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-5 gap-2 md:gap-10 justify-items-center items-stretch [perspective:800px]">

            <div
                class="group cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-b-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-glow-primary duration-100 transition-all ease">
                <div
                    class="bg-primary text-light absolute -top-5 px-[54px] rounded-t-2xl group-hover:shadow-glow-favorite group-hover:border-secondary transition-all duration-100 ease-out">
                    Favorite</div>
                <img src="{{ asset('build/assets/laravel.svg') }}" alt=""
                    class="mx-auto mb-4 w-20 h-20 group-hover:scale-105 duration-100 transition-all ease-in">
                <h1
                    class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4 group-hover:scale-115 duration-100 transition-all ease-in">
                    LARAVEL
                </h1>
                <p class="text-light/70 group-hover:scale-110 duration-100 transition-all ease-in">1 year Knowledge</p>
            </div>
            <x-skills src="build/assets/php.svg" name="PHP" knowledge="1 year Knowledge" alt="PHP" />
            <x-skills src="build/assets/js.svg" name="JS" knowledge="1 year Knowledge" alt="JS" />
            <x-skills src="build/assets/html.svg" name="HTML" knowledge="3 year Knowledge" alt="HTML" />
            <x-skills src="build/assets/css.svg" name="CSS" knowledge="3 year Knowledge" alt="CSS" />
            <x-skills src="build/assets/mysql.svg" name="MYSQL" knowledge="1 year Knowledge" alt="MYSQL" />
            <x-skills src="build/assets/tailwind.svg" name="TAILWIND" knowledge="1 year Knowledge" alt="TAILWIND" />
            <x-skills src="build/assets/wordpress.svg" name="WORDPRESS" knowledge="1 year Knowledge" alt="WORDPRESS" />
            <x-skills src="build/assets/git.svg" name="GIT" knowledge="1 year Knowledge" alt="GIT" />
        </div>
    </section>

    <section>
        <h1 class="text-center text-5xl text-dark font-medium mt-20 font-serif">My Projects</h1>
        <p class="text-center text-dark/70 text-lg font-serif my-10">
            Here’s a look at one of my recent projects. More are on the way — stay tuned!
        </p>


        <div class="bg-white max-w-5xl mx-auto shadow-2xl rounded-2xl relative overflow-hidden  ">

            <button class="btn-left absolute top-0 left-2 w-10 h-10 z-1"><img
                    src="{{ asset('build/assets/arrow-left.svg') }}" alt="arrow-left">
            </button>
            <button class="btn-right absolute top-0 right-2 w-10 h-10 z-1">
                <img src="{{ asset('build/assets/arrow-right.svg') }}" alt="arrow-right"></button>

            <div
                class="bg-white pt-10 rounded-2xl shadow-lg shadow-light/50 slider-wrapper flex transition-transform duration-500 ease-in-out ">
                {{-- slide 1 --}}

                <div class=" slide min-w-full">
                    <img src="{{ asset('build/assets/web-1.jpg') }}" alt=""
                        class=" object-contain  shadow-lg shadow-light/50">

                    <div class="bg-dark/90  shadow-md space-y-2 shadow-light/50 pb-5">
                        <h1
                            class="bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text font-serif text-xl text-center pt-5">
                            Cosmetologist Portfolio Website with Registration</h1>
                        <p class="text-light text-center">Laravel, Javascript (some Apline.Js), Tailwind</p>
                        <a class="text-light block mx-auto w-fit bg-secondary/60 rounded-2xl px-2"
                            href="http://portfolio.test/">View
                            Website -></a>
                    </div>
                </div>

                {{-- slide 2 --}}
                <div class=" slide min-w-full">
                    <img src="{{ asset('build/assets/web-1.jpg') }}" alt=""
                        class=" object-contain  shadow-lg shadow-light/50">

                    <div class="bg-dark/90  shadow-md space-y-2 shadow-light/50 pb-5">
                        <h1
                            class="bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text font-serif text-xl text-center pt-5">
                            Cosmetologist Portfolio Website with Registration</h1>
                        <p class="text-light text-center">Laravel, Javascript (some Apline.Js), Tailwind</p>
                        <a class="text-light block mx-auto w-fit bg-secondary/60 rounded-2xl px-2"
                            href="http://portfolio.test/">View
                            Website -></a>
                    </div>
                </div>

            </div>

            <div class="bg-white flex justify-center text-center text-2xl space-x-2 cursor-pointer py-2">
                <svg class="w-6 h-6 stroke-current text-dark hover:fill-secondary/60 transition-all duration-150 fill-white"
                    viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-width="3" />
                </svg>
                <svg class="w-6 h-6 stroke-current text-dark hover:fill-secondary/60 transition-all duration-150 fill-white"
                    viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-width="3" />
                </svg>
                <svg class="w-6 h-6 stroke-current text-dark hover:fill-secondary/60 transition-all duration-150 fill-white"
                    viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-width="3" />
                </svg>
                <svg class="w-6 h-6 stroke-current text-dark hover:fill-secondary/60 transition-all duration-150 fill-white"
                    viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-width="3" />
                </svg>
            </div>
        </div>
    </section>
</main>
