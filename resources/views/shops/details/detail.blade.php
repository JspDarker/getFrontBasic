@extends('shops.layouts.master')

@section('title')
    Page@Single::Product
@endsection


@section('content')
    <!-- Main Container -->
    @include('shops.details.product-one')
    <!-- Main Container End -->


    <!-- Related Product Slider -->
    @include('shops.details.related-slide')
    <!-- Related Product Slider End -->

@endsection


