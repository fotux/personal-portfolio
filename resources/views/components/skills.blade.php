@props(['alt' => '', 'src' => '', 'name' => '', 'knowledge' => ''])


<div
    class="group cards text-center font-bold border-2 shadow-2xl bg-dark border-light text-light rounded-2xl flex flex-col justify-between items-center h-full p-5 hover:border-secondary hover:shadow-glow-primary duration-100 transition-all ease">
    <img src="{{ asset($src) }}" alt="{{ $alt }}"
        class="mx-auto mb-4 w-20 h-20 group-hover:scale-105 duration-100 transition-all ease-in">
    <h1
        class="text-xl bg-gradient-to-b from-primary to-secondary text-transparent bg-clip-text my-4 group-hover:scale-115 duration-100 transition-all ease-in">
        {{ $name }}
    </h1>
    <p class="text-light/70 group-hover:scale-110 duration-100 transition-all ease-in">{{ $knowledge }}</p>
</div>
