<nav>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="mm-toggle-wrap">
                    <div class="mm-toggle">
                        <i class="fa fa-align-justify"></i>
                    </div>
                    <span class="mm-label">Categories</span>
                </div>
                <div class="mega-container visible-lg visible-md visible-sm">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="mega-menu-category">
                            <ul class="nav">

                                {{--This is menu leve1--}}

                                @foreach($tired as $menu)
                                    @if($menu->Level2 != null)
                                        <li>
                                            <a href="{{ $menu->url }}">
                                                <i class="icon fa {{ $menu->icon }} fa-fw"></i> {{ $menu->name }} </a>
                                            <div class="wrap-popup column1">
                                                <div class="popup">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="nav">
                                                                @php $flag = explode(',',$menu->Level2); @endphp

                                                                @foreach($flag as $l2)
                                                                    @php $flag = explode('11',$l2); @endphp
                                                                    <li>
                                                                        <a href="{{ $flag[1] }}">
                                                                            <span>{{ $flag[0] }}</span>
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                                {{--<li>
                                                                    <a href="shop_grid.html">
                                                                        <span>Nikon</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop_grid.html">
                                                                        <span>Olympus</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop_grid.html">
                                                                        <span>ALPA</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop_grid.html">
                                                                        <span>Bolex</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop_grid.html">
                                                                        <span>Samsung </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop_grid.html">
                                                                        <span>Panasonic</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop_grid.html">
                                                                        <span>Thomson </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop_grid.html">
                                                                        <span>Bell & Howell</span>
                                                                    </a>
                                                                </li>--}}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li class="nosub">
                                            <a href="{{ $menu->url }}">
                                                <i class="icon fa {{ $menu->icon }} fa-fw"></i>{{ $menu->name }}</a>
                                        </li>
                                    @endif

                                @endforeach
                                {{--This is menu leve1--}}


                                {{--<li>
                                    <a href="#">
                                        <i class="icon fa fa-desktop fa-fw"></i> Computers</a>
                                    <div class="wrap-popup column1">
                                        <div class="popup">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="nav">
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Canon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Nikon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Olympus</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>ALPA</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bolex</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Samsung </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Panasonic</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Thomson </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bell & Howell</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="shop_grid.html">
                                        <i class="icon fa fa-apple fa-fw"></i> Apple Store</a>
                                    <div class="wrap-popup column1">
                                        <div class="popup">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="nav">
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Canon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Nikon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Olympus</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>ALPA</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bolex</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Samsung </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Panasonic</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Thomson </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bell & Howell</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nosub">
                                    <a href="#">
                                        <i class="icon fa fa-location-arrow fa-fw"></i> Car Electronic</a>
                                </li>

                                <li>
                                    <a href="shop_grid.html">
                                        <i class="icon fa fa-headphones fa-fw"></i> Headphones</a>
                                    <div class="wrap-popup column1">
                                        <div class="popup">
                                            <ul class="nav">
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>Envent Stereo</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>Sennheiser</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>Philips</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>Sony</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>Avantree</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>Bajaao</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>FiiO</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>Audio-Technica</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>LUXA2</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop_grid.html">
                                                        <span>Geekria</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon fa fa-microphone fa-fw"></i> Accessories</a>
                                    <div class="wrap-popup column1">
                                        <div class="popup">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="nav">
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Canon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Nikon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Olympus</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>ALPA</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bolex</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Samsung </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Panasonic</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Thomson </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bell & Howell</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nosub">
                                    <a href="shop_grid.html">
                                        <i class="icon fa fa-gamepad fa-fw"></i> Game &amp; Video</a>
                                </li>

                                <li class="nosub">
                                    <a href="shop_grid.html">
                                        <i class="glyphicon glyphicon-time"></i> Watches</a>
                                </li>

                                <li class="nosub">
                                    <a href="shop_grid.html">
                                        <i class="icon fa fa-lightbulb-o fa-fw"></i> Lights &amp; Lighting</a>
                                </li>--}}

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{--/.END MENU --}}



            <div class="col-md-9 col-sm-8">
                <div class="mtmegamenu">
                    <ul>
                        <li class="mt-root demo_custom_link_cms">
                            <div class="mt-root-item">
                                <a href="index.html">
                                    <div class="title title_font">
                                        <span class="title-text">Home</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="mt-root">
                            <div class="mt-root-item">
                                <a href="contact_us.html">
                                    <div class="title title_font">
                                        <span class="title-text">Contact Us</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="mt-root">
                            <div class="mt-root-item">
                                <a href="about_us.html">
                                    <div class="title title_font">
                                        <span class="title-text">about us</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="mt-root demo_custom_link_cms">
                            <div class="mt-root-item">
                                <a href="blog_full_width.html">
                                    <div class="title title_font">
                                        <span class="title-text">Blog</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>