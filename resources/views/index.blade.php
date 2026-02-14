<x-layouts.main :title="__('Home')">
    <div class="flex flex-col items-center gap-12">
        <h1 class="text-3xl dark:text-white">Our plans are measured in points — Scrum Masters</h1>
        <a
            href="{{ route('measures.create') }}"
            class="hover:bg-accent border-3 border-black px-6 py-3 text-xl shadow-[4px_4px_0px_0px_rgba(0,_0,_0,_0.8)] hover:text-white dark:border-white dark:text-white dark:shadow-[4px_4px_0px_0px_rgba(255,_255,_255,_0.9)] dark:hover:text-black"
        >
            Start
        </a>
    </div>

    <footer></footer>
</x-layouts.main>
