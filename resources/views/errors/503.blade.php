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
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
    <div class="overflow-hidden absolute top-4 left-0 right-0 bg-[#0a0a0a] dark:bg-white text-white dark:text-[#0a0a0a]">
        <div class="scroller flex space-x-1 whitespace-nowrap text-lg">
            @for ($i = 0; $i < 31; $i++)
                <span class="py-1 px-3">Coming soon</span>
            @endfor
        </div>
    </div>

    <h1 class="text-3xl dark:text-white">Our plans are measured in points — Scrum Masters</h1>

    <div class="overflow-hidden absolute bottom-4 left-0 right-0 bg-[#0a0a0a] dark:bg-white text-white dark:text-[#0a0a0a]">
        <div class="scroller flex space-x-1 whitespace-nowrap text-lg">
            @for ($i = 0; $i < 31; $i++)
                <span class="py-1 px-3">Coming soon</span>
            @endfor
        </div>
    </div>
</body>
</html>
