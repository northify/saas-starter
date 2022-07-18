<section id="testimonials" class="container px-4 py-8"  x-data="{ testimonialActive: 1 }" x-cloak>
    <div class="w-full md:w-5/6">
        <div class="mb-4 text-center">
            <div class="w-16 h-16 shadow-lg rounded-full bg-white inline-flex items-center justify-center text-white relative z-10">
                <i class="fas fa-quote-left fa-2x text-gray-900"></i>
            </div>
        </div>
        <div class="mb-10 text-center">
            <span class="text-2xl md:text-3xl text-gray-800 mx-0 px0">{{ $testimonials['testimonialTitle'] }} <span class="font-bold">{{ env('COMPANY_NAME') }}</span></span>
        </div>
        @foreach($testimonials['testimonialList'] as $testimonial)
            @foreach($content['testimonials'] as $selectedTestimonials)
                @if($testimonial['id'] == $selectedTestimonials['id'])
                <div class="text-left" x-show.immediate="testimonialActive === {{ $testimonial['id'] }}">
                    <div x-show.transition="testimonialActive == {{ $testimonial['id'] }}">
                        <p class="mt-5 text-2xl text-gray-900 italic font-light tracking-wide leading-normal">
                            {{ $testimonial['testimonial1'] }}
                        </p>
                        <p class="mt-5 mb-8 text-2xl text-gray-900 italic font-light tracking-wide leading-normal">
                            {{ $testimonial['testimonial2'] }}
                        </p>
                        <div>
                            <p class="text-base font-bold tracking-widest text-gray-900">{{ $testimonial['author'] }}</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        @endforeach
        
    </div>
    <div class="mt-10">
        @foreach($testimonials['testimonialList'] as $testimonial)
            @foreach($content['testimonials'] as $selectedTestimonials)
                @if($testimonial['id'] == $selectedTestimonials['id'])
                    <button @click.prevent="testimonialActive = {{ $testimonial['id'] }}" class="text-white inline-flex items-center justify-center bg-gray-200 w-4 h-4 p-0 mb-2 rounded-full focus:outline-none" :class="{'text-white inline-flex items-center justify-center bg-gray-200 w-4 h-4 p-0 mb-2 rounded-full': testimonialActive != {{ $testimonial['id'] }}, 'inline-flex items-center justify-center bg-gray-900 w-4 h-4 p-0 mb-2 rounded-full': testimonialActive == {{ $testimonial['id'] }} }"></button>
                @endif
            @endforeach
        @endforeach
    </div>
    
</section>