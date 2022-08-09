@extends('Marketing.Landing.Layout.landing')

@section('content')

    <!-- Hero section -->
    @include('Marketing.Landing.Index.Sections.hero')
    <!-- Features section -->
    @include('Marketing.Landing.Index.Sections.features')
    <!-- Extended Features section -->
    @include('Marketing.Landing.Index.Sections.moreInfo')
    <!-- CTA section -->
    @include('Marketing.Landing.Index.Sections.cta')
    <!-- Works With Logo cloud section -->
    @include('Marketing.Landing.Index.Sections.testimonials')
    <!-- Works With Logo cloud section -->
    @include('Marketing.Landing.Index.Sections.faqs')

@endsection