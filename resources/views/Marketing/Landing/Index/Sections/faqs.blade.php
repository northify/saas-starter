<div class="pt-20 pb-40">
	<div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
		<div class="mx-auto max-w-2xl md:text-center pb-16">
			<h2 class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">{{ $content['faqTitle'] }}</h2>
			<p class="mt-4 text-lg tracking-tight text-slate-700">{{ $content['faqSubTitle'] }}</p>
		</div>
		<div class="lg:grid lg:grid-cols-2 lg:gap-24 lg:items-center">
			<div>
				<h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">{{ $content['faqFirstQuestion'] }}</h2>
				<p class="mt-6 max-w-3xl text-lg leading-7 text-gray-500">{{ $content['faqFirstAnswer'] }}</p>
			</div>
			<div class="mt-12 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
				<div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
					<img class="max-h-10" src="/img/logos/platforms/{{ $content['faqFirstAnswerLogo1'] }}" alt="{{ $content['faqFirstAnswerLogo1Alt'] }}">
				</div>

				<div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
					<img class="max-h-10" src="/img/logos/platforms/{{ $content['faqFirstAnswerLogo2'] }}" alt="{{ $content['faqFirstAnswerLogo2Alt'] }}">
				</div>

				<div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
					<img class="max-h-14" src="/img/logos/platforms/{{ $content['faqFirstAnswerLogo3'] }}" alt="{{ $content['faqFirstAnswerLogo3Alt'] }}">
				</div>

				<div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
					<img class="max-h-12" src="/img/logos/platforms/{{ $content['faqFirstAnswerLogo4'] }}" alt="{{ $content['faqFirstAnswerLogo4Alt'] }}">
				</div>

				<div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
					<img class="max-h-10" src="/img/logos/platforms/{{ $content['faqFirstAnswerLogo5'] }}" alt="{{ $content['faqFirstAnswerLogo5Alt'] }}">
				</div>
				
				<div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
					<img class="max-h-8" src="/img/logos/platforms/{{ $content['faqFirstAnswerLogo6'] }}" alt="{{ $content['faqFirstAnswerLogo6Alt'] }}">
				</div>
			</div>
		</div>
		<div class="mt-12">
			<dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-12 lg:grid-cols-3">
			@foreach($faqs['faqList'] as $faq)
				@foreach($content['faqList1'] as $selectedFaqs)
					@if($faq['id'] == $selectedFaqs['id'])
					<div>
						<dt class="text-lg leading-6 font-medium text-gray-900">{{ $faq['question'] }}</dt>
						<dd class="mt-2 text-base text-gray-500">{{ $faq['answer'] }}</dd>
					</div>
					@endif
				@endforeach
			@endforeach
			</dl>
		</div>
		<div class="mt-16 text-center">
			<a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
				Give it a try
				<svg xmlns="http://www.w3.org/2000/svg" class="ml-2 -mr-0.5 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
				</svg>
			</a>
		</div>
	</div>
</div>