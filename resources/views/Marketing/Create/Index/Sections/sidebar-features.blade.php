<section id="features" class="container px-4 py-8 mb-8 md:mb-24 mx-auto">
    <h2 class="mb-4 text-2xl md:text-3xl font-bold leading-tight text-gray-900">{{ $content['featureTitle'] }}</h2>
    <p class="mb-16 text-base text-gray-700">{{ $content['featureSubTitle'] }}</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-x-16 lg:gap-x-24 gap-y-8">
        @foreach($content['featureList'] as $listItem)
        <div class="ml-3 md:ml-0">
            <h3 class="mb-2 text-xl md:text-2xl font-semibold leading-tight text-gray-900">{{ $listItem['title'] }}</h3>
            <p class="text-base text-gray-700">{{ $listItem['description'] }}</p>
        </div>
        @endforeach
    </div>
</section>