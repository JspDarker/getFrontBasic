@extends('shops.layouts.master')



@section('content')
    <!-- Home Slider Start -->
    @include('shops.includes.slider')



    <!-- main container TOP SALLER -->
    @include('shops.indexPage.top-sell')
    <!-- end main container TOP SALLER -->

    <!--special-products-->
    @include('shops.indexPage.special')

    <!--/.special-products-->


    <!-- category area start TODO: Khong can lam cai nay -->
    @include('shops.indexPage.category-area')
    <!-- category-area end -->

@endsection

@section('script-ajax')

@endsection



@section('title')
    Page@Index
@endsection