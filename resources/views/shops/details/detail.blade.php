@extends('shops.layouts.master')

@section('title')
    Page@Single::Product
@endsection


@section('content')
    <!-- Main Container -->
    @foreach($items as $item)
        @include('shops.details.product-one')
    @endforeach
    <!-- Main Container End -->


    <!-- Related Product Slider -->
    @include('shops.details.related-slide')
    <!-- Related Product Slider End -->

@endsection

@section('scripts')
    <!--cloud-zoom js -->
    <script type="text/javascript" src="sources/js/cloud-zoom.js"></script>
@stop

