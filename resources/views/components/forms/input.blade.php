<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 lg:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a href="{{ route('dashboard') }}" class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200">
            {{ config('app.name', 'Your Dashboard') }}
        </a>
        <ul class="mt-6">
            {{ $slot }}
        </ul>
    </div>
</aside>
