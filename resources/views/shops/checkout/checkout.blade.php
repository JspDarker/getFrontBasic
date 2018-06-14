@extends('shops.layouts.master')

@section('title')
    Page@Info::CheckOut
@endsection


@section('content')

    <!-- Main Container -->
    <section class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-main col-sm-12 col-xs-12">
                    <div class="page-content checkout-page"><div class="page-title">
                            <h2>Checkout</h2>
                        </div>
                        @include('shops.checkout.info-customer')
                        @include('shops.checkout.product-view')
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Main Container End -->

@endsection


@section('script-ajax')

@endsection