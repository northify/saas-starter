<section id="why" class="container px-4 py-8 pb-8 md:mb-12 mx-auto">
    <h4 class="mb-1 text-2xl md:text-3xl font-bold leading-tight text-gray-900">{{ $content['whyTitle'] }}</h4>
    <p class="mb-12 text-base text-gray-700">{{ $content['whySubTitle'] }}</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-x-16 lg:gap-x-24 gap-y-8">
        @foreach($content['whyFeatureList'] as $listItem)
        <div>
            <h3 class="mb-2 text-2xl font-semibold leading-tight text-gray-900">{{ $listItem['title'] }}</h3>
            <p class="text-base text-gray-700">{{ $listItem['description'] }}</p>
        </div>
        @endforeach
    </div>
</section>