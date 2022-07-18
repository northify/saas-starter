<div id="more" class="pt-10 box-border leading-5 mt-2 md:mt-20 text-gray-800">
    <div class="flex flex-col items-center justify-start mx-auto overflow-hidden py-16 px-4 md:px-24 rounded-2xl max-w-7xl relative bg-gradient-to-b from-gray-100 to-gray-50">
        <div class="mb-14 leading-5 mb-8 text-center text-gray-900 max-w-3xl z-10">
            <p class="font-bold text-3xl mt-0 mb-6 text-gray-900 text-center">{{ $content['moreTitle'] }}</p>
            <p class="font-normal text-base mt-4 text-center text-gray-900 tracking-wide">{{ $content['moreSubTitle'] }}</p>
        </div>
        <img src="{{ $content['moreImage'] }}" class="z-20 border-0 inline-block leading-5 mt-0 max-w-full object-contain px-3 text-gray-800 align-middle" alt="{{ $content['moreImageAlt'] }}" />
        <div class="bg-no-repeat bg-cover box-border leading-5 overflow-visible absolute text-gray-800 z-0"
            style='will-change: transform; transform: translate3d(0px, 0px, 0px) scale3d(1.1322, 1.1322, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; inset: 0px; background-image: url("/landingpage/img/more-than-circles.svg"); background-position: 50% 50%; quotes: auto;'>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center mb-20 mt-20">
        {{-- Button --}}
        <a class="inline-flex items-center justify-center mb-2 btn-primary btn-lg rounded-full py-3 pl-6 pr-2 sm:w-auto sm:mb-0" @auth href="{{ route('home') }}" @else href="{{ route('register') }}" @endauth >
            <span class="text-xl mr-3">@auth Dashboard @else Get Started Now @endauth</span>
            <span class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-arrow-right fa-stack-1x fa-inverse text-primary"></i>
            </span>
        </a>
    </div>
</div>