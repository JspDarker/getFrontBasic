<!-- Main Container -->
<div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-main">
                <div class="product-view-area">
                    <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">

                        @if($item->new != 0 & $item->status != 0)
                            <div class="icon-new-label new-right">New</div>
                            <div class="icon-sale-label sale-left">Sale</div>
                        @else
                            <div class="icon-new-label new-right">New</div>
                        @endif
                        <div class="large-image">
                            <a href="sources/images/products/{{ $item->image }}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:{{ $item->name }}tX:20">
                                <img style="width: 100%;!important;" class="zoom-img" src="sources/images/products/{{ $item->image }}" alt="{{ $item->name }}"> </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">

                        <div class="product-name">
                            <h1>{{ $item->name }}</h1>
                        </div>
                        <div class="price-box">
                            @if($item->promotion_price == 0)
                                <p class="special-price">
                                    <span class="price-label">Special Price</span>
                                    <span class="price">{{ number_format($item->price) }} vnđ</span>
                                </p>

                            @else
                                <p class="special-price">
                                    <span class="price-label">Special Price</span>
                                    <span class="price">{{ number_format($item->price) }} vnđ</span>
                                </p>
                                <p class="old-price">
                                    <span class="price-label">Regular Price:</span>
                                    <span class="price">{{ number_format($item->promotion_price) }} vnđ</span>
                                </p>
                            @endif
                        </div>

                        <div class="short-description">
                            <h2>Quick Overview</h2>
                            <p>{{ $item->detail }}</p>

                        </div>

                        <div class="product-variation">
                            <form action="#" method="post">
                                <div class="cart-plus-minus">
                                    <label for="qty">Quantity:</label>
                                    <div class="numbers-row">
                                        <div   class="dec qtybutton">
                                            <i class="fa fa-minus">&nbsp;</i>
                                        </div>
                                        <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                             class="inc qtybutton">
                                            <i class="fa fa-plus">&nbsp;</i>
                                        </div>
                                    </div>
                                </div>
                                <button class="button pro-add-to-cart" title="Add to Cart" type="button">
                      <span>
                        <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Main Container End -->