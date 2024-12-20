<nav x-data="{ open: false }" class="mx-auto nav bg-white border-b border-gray-100 min-w-[90%] md:min-w-0 w-max rounded-2xl drop-shadow-lg absolute top-5 right-0 left-0">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
        <div class="flex justify-between h-16 min-w-[50rem]">

                    <!-- Logo -->
                    <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block w-auto text-gray-800 fill-current h-9" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')" wire:navigate>
                        {{ __('Home') }}
                    </x-nav-link>

                    <x-nav-link :href="route('news')" :active="request()->routeIs('news')" wire:navigate>
                        {{ __('News') }}
                    </x-nav-link>

                    <x-nav-link :href="route('events')" :active="request()->routeIs('events')" wire:navigate>
                        {{ __('Events') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('galleries')" :active="request()->routeIs('galleries')" wire:navigate>
                        {{ __('Galleries') }}
                    </x-nav-link>
                </div>

            
            <div class="items-center justify-center hidden py-3 space-x-2 sm:-my-px sm:ms-10 sm:flex">

                <a class="flex items-center justify-center h-full px-6 text-sm text-white rounded-xl bg-gradient-to-br from-blue-900 to-blue-600" 
                href="https://drive.google.com/drive/folders/1XVKYhDNLWCRxzYRc9opasEyo6Dp6puUX?usp=sharing">
                    Get 4Hyped!
                </a>

            </div>
         

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

    </div>
</nav>
