@extends('Marketing.Landing.Layout.landing')

@section('content')

    <!-- Hero section -->
    @include('Marketing.Landing.Products.Sections.hero')
    <!-- Products section -->
    @include('Marketing.Landing.Products.Sections.products')
    <!-- CTA section -->
    @include('Marketing.Landing.Products.Sections.cta')


@endsection