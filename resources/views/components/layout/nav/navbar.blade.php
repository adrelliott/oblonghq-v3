@props([
    'search' => "hide",   //pass something like search="show" when calling component to show this
    'notifications'  => "hide",
    'profile',
])
<!-- Top Nav -->
<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
        <x-layout.nav.hamburger />
        @if($search != "hide" )
            <x-layout.nav.search />
        @else
            <div class="flex justify-center flex-1 lg:mr-32"></div>
        @endif

        <ul class="flex items-center flex-shrink-0 space-x-6">

            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <x-layout.nav.teams-menu />
            @endif

            @if($notifications != "hide" )
                <x-layout.nav.notifications-menu />
            @endif

            @empty($profile)
                <x-layout.nav.profile-menu />
            @endempty

        </ul>
    </div>
</header>
