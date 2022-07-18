@extends('Marketing.Create.Layout.create')

@section('content')

    @include('Marketing.Create.Index.Sections.hero')
    @include('Marketing.Create.Index.Sections.sidebar-content')
    @include('Marketing.Create.Index.Sections.more')
    {{--@include('cookieConsent::index')--}}
@endsection
