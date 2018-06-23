<div class="shop-inner">
    <div class="page-title">
        <h2>Apple</h2>
    </div>

    <div class="product-grid-area">
        <ul class="products-grid">

        @foreach($items as $item)
            <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                <div class="product-item">
                    <div class="item-inner">
                        <div class="product-thumbnail">
                            @if($item->new != 0 & $item->status != 0)
                                <div class="icon-new-label new-right">New</div>
                                <div class="icon-sale-label sale-left">Sale</div>
                            @else
                                <div class="icon-new-label new-right">New</div>
                            @endif


                            <div class="pr-img-area">
                                <a title="{{ $item->name }}" href="{{ route('girds.single',$item->id_url) }}">
                                    <figure>
                                        <img class="first-img" src="sources/images/products/{{ $item->image }}" alt="">
                                        <img class="hover-img" src="sources/images/products/{{ $item->image }}" alt="">
                                    </figure>
                                </a>
                                <button type="button" class="add-to-cart-mt">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span> Add to Cart</span>
                                </button>
                            </div>

                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title">
                                    <a title="{{ $item->name }}" href="{{ $item->url }}">{{ $item->name }}</a>
                                </div>
                                <div class="item-content">
                                @if($item->promotion_price == 0)
                                    <div class="item-price">
                                        <div class="price-box">
                                          <span class="regular-price">
                                            <span class="price">{{ number_format($item->price) }} vnđ</span>
                                          </span>
                                        </div>
                                    </div>
                                @else
                                    <div class="item-price">
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">{{ number_format($item->price) }} vnđ</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price-label">Regular Price:</span>
                                                <span class="price">{{ number_format($item->promotion_price) }} vnđ</span>
                                            </p>
                                        </div>
                                    </div>
                                @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach

        </ul>
    </div>
    <div class="pagination-area ">
        <ul>
            <li>
                <a class="active" href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>
</div>