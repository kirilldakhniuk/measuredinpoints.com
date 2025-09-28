<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')

        <style>
            .scroller {
                animation: 20s scroll alternate infinite;
            }

            @keyframes scroll {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-100%);
                }
            }
        </style>
    </head>
    <body
        class="flex min-h-screen flex-col items-center justify-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:p-8 dark:bg-[#0a0a0a]"
    >
        <div
            class="absolute top-4 right-0 left-0 overflow-hidden bg-[#0a0a0a] text-white dark:bg-white dark:text-[#0a0a0a]"
        >
            <div class="scroller flex space-x-1 text-lg whitespace-nowrap">
                @for ($i = 0; $i < 31; $i++)
                    <span class="px-3 py-1">Coming soon</span>
                @endfor
            </div>
        </div>

        <h1 class="text-3xl dark:text-white">Our plans are measured in points — Scrum Masters</h1>

        <div
            class="absolute right-0 bottom-4 left-0 overflow-hidden bg-[#0a0a0a] text-white dark:bg-white dark:text-[#0a0a0a]"
        >
            <div class="scroller flex space-x-1 text-lg whitespace-nowrap">
                @for ($i = 0; $i < 31; $i++)
                    <span class="px-3 py-1">Coming soon</span>
                @endfor
            </div>
        </div>
    </body>
</html>
