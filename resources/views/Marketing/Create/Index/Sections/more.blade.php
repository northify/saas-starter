<div id="more" class="pt-10 box-border leading-5 mt-2 md:mt-20 text-gray-800">
    <div class="flex flex-col items-center justify-start mx-auto overflow-hidden py-16 px-4 md:px-24 rounded-2xl max-w-7xl relative bg-gradient-to-b from-gray-100 to-gray-50">
        <div class="mb-14 leading-5 mb-8 text-center text-gray-900 max-w-3xl z-10">
            <p class="font-bold text-3xl mt-0 mb-6 text-gray-900 text-center">{{ $content['moreTitle'] }}</p>
            <p class="font-normal text-base mt-4 text-center text-gray-900 tracking-wide">{{ $content['moreSubTitle'] }}</p>
        </div>
        <img src="{{ $content['moreImage'] }}" class="z-20 border-0 inline-block leading-5 mt-0 max-w-full object-contain px-3 text-gray-800 align-middle" alt="{{ $content['moreImageAlt'] }}" />
    </div>
    <div class="flex flex-col items-center justify-center mb-20 mt-20">
        {{-- Button --}}
        <a class="inline-flex items-center justify-center w-full mb-2 bg-blue-600 text-white rounded-full py-3 pl-6 pr-2 sm:w-auto sm:mb-0" @auth href="{{ route('home') }}" @else href="{{ route('register') }}" @endauth >
            <span class="text-xl mr-3">@auth Dashboard @else Get Started Now @endauth</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>