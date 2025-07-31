<main class="bg-background">
    <nav class="bg-dark text-light py-4 text-lg list-none flex justify-around font-semibold ">
        <div
            class="font-sans font-bold text-2xl from-primary to-secondary bg-gradient-to-b text-transparent bg-clip-text relative tracking-widest">
            Karolis Raginkis
            <div class="absolute w-14 h-0.5 bg-gradient-to-t from-primary to-secondary rounded-full"></div>
        </div>
        </div>

        <button class="hamburger w-15 h-15 mix-blend-plus-lighter md:hidden"><img
                src="{{ asset('build/assets/hamburger.svg') }}" alt="hamburger_2"></button>

        {{-- desktop nav --}}
        <div class="md:flex gap-10 text-light tracking-tight hidden">
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
            <p class="text-dark text-lg mt-6 font-serif">Passionate backend developer with a grasp of frontend
                technologies. I
                enjoy
                creating
                clean, scalable, and
                maintainable solutions — from APIs to full-stack applications.</p>
            <button
                class="border rounded-2xl px-4 py-2 mt-6 text-shadow-xl bg-dark font-bold  transition-all duration-500 hover:scale-105 ease-in-out">
                <span
                    class="text-light hover:bg-black hover:from-primary hover:to-secondary hover:bg-gradient-to-b hover:bg-clip-text hover:text-transparent transition-all duration-500">Contact
                    Me</span>
            </button>





        </div>
        <div class="flex-1 ">
            <img src="{{ asset('build/assets/pixlr-image-generator-6883738872de360b5ab3e45d.png') }}"
                class="mix-blend-multiply w-full h-auto" alt="me">
        </div>
    </section>

    <section>

        <h1 class="text-center text-5xl text-dark font-medium my-30 font-serif">My Skills</h1>

        <div
            class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-5 gap-2 md:gap-10 justify-items-center items-stretch [perspective:800px]">
            <div
                class="group cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-b-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-[var(--glow-primary)] duration-100 transition-all ease">
                <div
                    class="bg-primary text-light absolute -top-5 px-13.5 rounded-t-2xl group-hover:shadow-[var(--glow-favorite)] group-hover:border-secondary transition-all duration-100 ease-out">
                    Favorite</div>
                <img src="{{ asset('build/assets/laravel.svg') }}" alt="" class="mx-auto mb-4 w-20 h-20">
                <h1 class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4">
                    LARAVEL
                </h1>
                <p class="text-light/70">1 year Knowledge</p>
            </div>
            <div
                class="group cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-[var(--glow-primary)] duration-100 transition-all ease">
                <img src="{{ asset('build/assets/PHP.svg') }}" alt=""
                    class="mx-auto mb-4 w-20 h-20 group-hover:scale-105 duration-100 transition-all ease-in">
                <h1
                    class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4 group-hover:scale-115 duration-100 transition-all ease-in">
                    PHP
                </h1>
                <p class="text-light/70 group-hover:scale-110 duration-100 transition-all ease-in">1 year Knowledge</p>
            </div>

            <div
                class="cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-[var(--glow-primary)] duration-100 transition-all ease">
                <img src="{{ asset('build/assets/js.svg') }}" alt="" class="mx-auto mb-4 w-20 h-20">
                <h1 class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4">JS
                </h1>
                <p class="text-light/70">1 year Knowledge</p>
            </div>



            <div
                class="cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-[var(--glow-primary)] duration-100 transition-all ease">
                <img src="{{ asset('build/assets/html.svg') }}" alt="" class="mx-auto mb-4 w-20 h-20">
                <h1 class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4">HTML
                </h1>
                <p class="text-light/70">3 year Knowledge</p>
            </div>

            <div
                class="cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-[var(--glow-primary)] duration-100 transition-all ease">
                <img src="{{ asset('build/assets/css.svg') }}" alt="" class="mx-auto mb-4 w-20 h-20">
                <h1 class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4">CSS
                </h1>
                <p class="text-light/70">3 year Knowledge</p>
            </div>

            <div
                class="cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-[var(--glow-primary)] duration-100 transition-all ease">
                <img src="{{ asset('build/assets/mysql.svg') }}" alt="" class="mx-auto mb-4 w-20 h-20">
                <h1 class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4">MYSQL
                </h1>
                <p class="text-light/70">1 year Knowledge</p>
            </div>

            <div
                class="cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-[var(--glow-primary)] duration-100 transition-all ease">
                <img src="{{ asset('build/assets/tailwind.svg') }}" alt="" class="mx-auto mb-4 w-20 h-20">
                <h1 class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4">
                    TAILWIND</h1>
                <p class="text-light/70">1 year Knowledge</p>
            </div>

            <div
                class="cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-[var(--glow-primary)] duration-100 transition-all ease">
                <img src="{{ asset('build/assets/wordpress.svg') }}" alt="" class="mx-auto mb-4 w-20 h-20">
                <h1 class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4">
                    WORDPRESS</h1>
                <p class="text-light/70">1 year Knowledge</p>
            </div>

            <div
                class="cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-[var(--glow-primary)] duration-100 transition-all ease">
                <img src="{{ asset('build/assets/git.svg') }}" alt="" class="mx-auto mb-4 w-20 h-20">
                <h1 class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4">GIT
                </h1>
                <p class="text-light/70">2 year Knowledge</p>
            </div>
        </div>


    </section>


    <section>
        <h1 class="text-center text-4xl my-30">My Projects</h1>

</main>
