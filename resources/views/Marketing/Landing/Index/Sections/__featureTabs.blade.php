<!-- Tabs -->
<div
    x-data="{
        selectedId: null,
        init() {
            // Set the first available tab on the page on page load.
            this.$nextTick(() => this.select(this.$id('tab', 1)))
        },
        select(id) {
            this.selectedId = id
        },
        isSelected(id) {
            return this.selectedId === id
        },
        whichChild(el, parent) {
            return Array.from(parent.children).indexOf(el) + 1
        }
    }"
    x-id="['tab']"
	class="mt-16 grid grid-cols-1 items-center gap-y-2 pt-10 sm:gap-y-6 md:mt-20 lg:grid-cols-12 lg:pt-0"
	>
	
	<div class="-mx-4 flex overflow-x-auto pb-4 sm:mx-0 sm:overflow-visible sm:pb-0 lg:col-span-5">
		<!-- Tab List -->
		<div x-ref="tablist" role="tablist" class="relative z-10 flex gap-x-4 whitespace-nowrap px-4 sm:mx-auto sm:px-0 lg:mx-0 lg:block lg:gap-x-0 lg:gap-y-1 lg:whitespace-normal">
			<!-- Tab 1 -->
			<div>
				<div :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
					@click="select($el.id)"
					@mousedown.prevent
					@focus="select($el.id)"
					type="button"
					:tabindex="isSelected($el.id) ? 0 : -1"
					:aria-selected="isSelected($el.id)"
					:class="isSelected($el.id) ? 'bg-white text-blue-600 lg:bg-white/10 lg:ring-1 lg:ring-inset lg:ring-white/10' : 'text-blue-100'"
					class="group relative rounded-full py-1 px-4 lg:rounded-r-none lg:rounded-l-xl lg:p-6 cursor-pointer"
					role="tab"
					>
					<h3 class="font-display text-lg focus:outline-none lg:text-white">
						<span class="absolute inset-0 rounded-full lg:rounded-r-none lg:rounded-l-xl"></span>
						{{ $content['featuresTab1Title'] }}
					</h3>
					<p class="mt-2 hidden text-sm lg:block text-blue-100 group-hover:text-white">
						{{ $content['featuresTab1SubTitle'] }}
					</p>
				</div>
			</div>
			<!-- Tab 2 -->
			<div>
				<div :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
					@click="select($el.id)"
					@mousedown.prevent
					@focus="select($el.id)"
					type="button"
					:tabindex="isSelected($el.id) ? 0 : -1"
					:aria-selected="isSelected($el.id)"
					:class="isSelected($el.id) ? 'bg-white text-blue-600 lg:bg-white/10 lg:ring-1 lg:ring-inset lg:ring-white/10' : 'text-blue-100'"
					class="group relative rounded-full py-1 px-4 lg:rounded-r-none lg:rounded-l-xl lg:p-6 {{--hover:bg-white/10--}} lg:hover:bg-white/5 cursor-pointer"
					role="tab"
					>
					<h3 class="font-display text-lg focus:outline-none lg:text-white">
						<span class="absolute inset-0 rounded-full lg:rounded-r-none lg:rounded-l-xl"></span>
						{{ $content['featuresTab2Title'] }}
					</h3>
					<p class="mt-2 hidden text-sm lg:block text-blue-100 group-hover:text-white">
						{{ $content['featuresTab2SubTitle'] }}
					</p>
				</div>
			</div>
			<!-- Tab 3 -->
			<div>
				<div :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
					@click="select($el.id)"
					@mousedown.prevent
					@focus="select($el.id)"
					type="button"
					:tabindex="isSelected($el.id) ? 0 : -1"
					:aria-selected="isSelected($el.id)"
					:class="isSelected($el.id) ? 'bg-white text-blue-600 lg:bg-white/10 lg:ring-1 lg:ring-inset lg:ring-white/10' : 'text-blue-100'"
					class="group relative rounded-full py-1 px-4 lg:rounded-r-none lg:rounded-l-xl lg:p-6 {{--hover:bg-white/10--}} lg:hover:bg-white/5 cursor-pointer"
					role="tab"
					>
					<h3 class="font-display text-lg focus:outline-none lg:text-white">
						<span class="absolute inset-0 rounded-full lg:rounded-r-none lg:rounded-l-xl"></span>
						{{ $content['featuresTab3Title'] }}
					</h3>
					<p class="mt-2 hidden text-sm lg:block text-blue-100 group-hover:text-white">
						{{ $content['featuresTab3SubTitle'] }}
					</p>
				</div>
			</div>
			<!-- Tab 4 -->
			<div>
				<div :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
					@click="select($el.id)"
					@mousedown.prevent
					@focus="select($el.id)"
					type="button"
					:tabindex="isSelected($el.id) ? 0 : -1"
					:aria-selected="isSelected($el.id)"
					:class="isSelected($el.id) ? 'bg-white text-blue-600 lg:bg-white/10 lg:ring-1 lg:ring-inset lg:ring-white/10' : 'text-blue-100'"
					class="group relative rounded-full py-1 px-4 lg:rounded-r-none lg:rounded-l-xl lg:p-6 {{--hover:bg-white/10--}} lg:hover:bg-white/5 cursor-pointer"
					role="tab"
					>
					<h3>
						<h3 class="font-display text-lg focus:outline-none lg:text-white">
						<span class="absolute inset-0 rounded-full lg:rounded-r-none lg:rounded-l-xl"></span>
						{{ $content['featuresTab1Title'] }}
					</h3>
					<p class="mt-2 hidden text-sm lg:block text-blue-100 group-hover:text-white">
						{{ $content['featuresTab4SubTitle'] }}
					</p>
				</div>
			</div>
			
		</div>
	</div>


    <!-- Panels -->
    <div role="tabpanels" class="lg:col-span-7">
        <!-- Panel 1 -->
        <section
            x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
            :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
            role="tabpanel"
        >
			{{-- For small --}}
			<div class="relative sm:px-6 lg:hidden">
				<div class="absolute -inset-x-4 top-[-6.5rem] bottom-[-4.25rem] bg-white/10 ring-1 ring-inset ring-white/10 sm:inset-x-0 sm:rounded-t-xl"></div>
				<p class="relative mx-auto max-w-2xl text-base text-white sm:text-center">
					{{ $content['featuresTab1SubTitle'] }}
				</p>
			</div>

			<div class="mt-10 w-[45rem] overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 sm:w-auto lg:mt-0 lg:w-[67.8125rem]">
				<img alt="" src="/img/{{ $content['featuresTab1Img'] }}" width="2174" height="1464" decoding="async" data-nimg="future" class="w-full">
			</div>
        </section>
		<!-- Panel 2 -->
        <section
            x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
            :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
            role="tabpanel"
        >
			{{-- For small --}}
			<div class="relative sm:px-6 lg:hidden">
				<div class="absolute -inset-x-4 top-[-6.5rem] bottom-[-4.25rem] bg-white/10 ring-1 ring-inset ring-white/10 sm:inset-x-0 sm:rounded-t-xl"></div>
				<p class="relative mx-auto max-w-2xl text-base text-white sm:text-center">
					{{ $content['featuresTab2SubTitle'] }}
				</p>
			</div>
			<div class="mt-10 w-[45rem] overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 sm:w-auto lg:mt-0 lg:w-[67.8125rem]">
				<img alt="" src="/img/{{ $content['featuresTab2Img'] }}" width="2174" height="1464" decoding="async" data-nimg="future" class="w-full">
			</div>
        </section>
		<!-- Panel 3 -->
        <section
            x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
            :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
            role="tabpanel"
        >
			{{-- For small --}}
			<div class="relative sm:px-6 lg:hidden">
				<div class="absolute -inset-x-4 top-[-6.5rem] bottom-[-4.25rem] bg-white/10 ring-1 ring-inset ring-white/10 sm:inset-x-0 sm:rounded-t-xl"></div>
				<p class="relative mx-auto max-w-2xl text-base text-white sm:text-center">
					{{ $content['featuresTab3SubTitle'] }}
				</p>
			</div>
			<div class="mt-10 w-[45rem] overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 sm:w-auto lg:mt-0 lg:w-[67.8125rem]">
				<img alt="" src="/img/{{ $content['featuresTab2Img'] }}" width="2174" height="1464" decoding="async" data-nimg="future" class="w-full">
			</div>
        </section>
		<!-- Panel 4 -->
        <section
            x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
            :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
            role="tabpanel"
        >
			{{-- For small --}}
			<div class="relative sm:px-6 lg:hidden">
				<div class="absolute -inset-x-4 top-[-6.5rem] bottom-[-4.25rem] bg-white/10 ring-1 ring-inset ring-white/10 sm:inset-x-0 sm:rounded-t-xl"></div>
				<p class="relative mx-auto max-w-2xl text-base text-white sm:text-center">
					{{ $content['featuresTab4SubTitle'] }}
				</p>
			</div>
			<div class="mt-10 w-[45rem] overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 sm:w-auto lg:mt-0 lg:w-[67.8125rem]">
				<img alt="" src="/img/{{ $content['featuresTab4Img'] }}" width="2174" height="1464" decoding="async" data-nimg="future" class="w-full">
			</div>
        </section>
    </div>
</div>