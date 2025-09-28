<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <head>
            @include('partials.head')
        </head>
    </head>
    <body
        class="flex min-h-screen flex-col items-center justify-between bg-[#FDFDFC] p-6 text-[#1b1b18] lg:p-8 dark:bg-[#0a0a0a]"
    >
        <header class="mb-6 w-full max-w-[335px] text-sm not-has-[nav]:hidden lg:max-w-4xl">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            wire:navigate
                            href="{{ route('login') }}"
                            class="inline-block border border-transparent px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:shadow-[0px_2px_0px_0px_rgba(0,_0,_0,_0.8)] dark:text-[#EDEDEC] dark:hover:shadow-[0px_2px_0px_0px_rgba(255,_255,_255,_0.9)]"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                wire:navigate
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:shadow-[0px_2px_0px_0px_rgba(0,_0,_0,_0.8)] dark:text-[#EDEDEC] hover:dark:shadow-[0px_2px_0px_0px_rgba(255,_255,_255,_0.9)]"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        {{ $slot }}
    </body>
</html>
