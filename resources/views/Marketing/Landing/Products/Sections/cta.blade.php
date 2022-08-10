<section class="relative overflow-hidden bg-blue-600 py-32">
	<img alt=""src="/img/cta-background.jpg" width="2347" height="1244" decoding="async" data-nimg="future" class="absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2" loading="lazy">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
        <div class="mx-auto max-w-lg text-center">
            <h2 class="font-display text-3xl tracking-tight text-white sm:text-4xl">{{ $content['ctaTitle'] }}</h2>
            <p class="mt-4 text-lg tracking-tight text-white">{{ $content['ctaSubTitle'] }}</p>
			<a href="{{ $content['ctaButtonLink'] }}" class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-white text-slate-900 hover:bg-blue-50 active:bg-blue-200 active:text-slate-600 focus-visible:outline-white mt-10">
				{{ $content['ctaButtonText'] }}
			</a>
        </div>
    </div>
</section>
