@extends('Landing.Layout.landing')

@section('content')

    <!-- Hero section -->
    @include('Landing.Index.Sections.hero')
    <!-- Testimonial/stats section -->
    @include('Landing.Index.Sections.testimonials')
    <!-- Logo cloud section -->
    @include('Landing.Index.Sections.logos')
    <!-- CTA section -->
    @include('Landing.Index.Sections.cta')

@endsection