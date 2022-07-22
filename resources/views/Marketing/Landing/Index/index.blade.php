@extends('Marketing.Landing.Layout.landing')

@section('content')

    <!-- Hero section -->
    @include('Marketing.Landing.Index.Sections.hero')
    <!-- Testimonial/stats section -->
    @include('Marketing.Landing.Index.Sections.features')
    <!-- Logo cloud section -->
    @include('Marketing.Landing.Index.Sections.logos')
    <!-- CTA section -->
    @include('Marketing.Landing.Index.Sections.cta')

@endsection