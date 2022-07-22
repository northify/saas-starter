<div x-data="{ moblieOpen: false}">

    <div class="relative">
        <div class="flex justify-between items-center max-w-7xl mx-auto border-b-2 border-gray-100 px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ $nav['logoRoute'] }}">
                    <span class="sr-only">{{ env('APP_NAME') }}</span>
                    <img class="h-8 w-auto sm:h-10" src="{{ $nav['logoUrl'] }}" alt="{{ $nav['logoAlt'] }}">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button @click="moblieOpen = !moblieOpen" @keydown.escape="moblieOpen = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
            @foreach($nav['navigation'] as $item)
                <a href="{{ $item['route'] }}" class="text-base font-medium text-gray-500 hover:text-gray-900"> {{ $item['routeName'] }} </a>
            @endforeach
            </nav>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="{{ $nav['loginRoute'] }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"> {{ $nav['loginName'] }} </a>
                <a href="{{ $nav['registerRoute'] }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-blue-600 px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:bg-blue-500"> {{ $nav['registerName'] }} </a>
            </div>
        </div>

        <div x-show="moblieOpen" 
            @click.away="moblieOpen = false"
            x-transition:enter="duration-200 ease-out" 
            x-transition:enter-start="opacity-0 scale-95" 
            x-transition:enter-end="opacity-100 scale-100" 
            x-transition:leave="duration-100 ease-in" 
            x-transition:leave-start="opacity-100 scale-100" 
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="{{ $nav['logoUrl'] }}" alt="{{ $nav['logoAlt'] }}">
                        </div>
                        <div class="-mr-2">
                            <button @click="moblieOpen = !moblieOpen" @keydown.escape="moblieOpen = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 border-t-2 border-gray-100">
                        <nav class="mt-10 grid grid-cols-1 gap-7">
                            @foreach($nav['navigation'] as $item)
                            <a href="{{ $item['route'] }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                <div class="ml-4 text-base font-medium text-gray-900">{{ $item['routeName'] }}</div>
                            </a>
                            @endforeach
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5">
                    <div class="mt-6">
                        <a href="{{ route('login') }}" class="w-full flex items-center justify-center bg-blue-600 px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:bg-blue-600"> {{ $nav['registerName'] }} </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a href="{{ route('register') }}" class="text-gray-900"> {{ $nav['loginName'] }} </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>