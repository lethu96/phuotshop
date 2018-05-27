@extends('client.master')

@section('nav')
<div class="col-sm-3">
    <div class="right-widget">
        <div class="single-effect-2">
            <a href="#">
                <img src="{{asset('img/slider/mac2.png')}}" alt="">
                <span class="s s1"></span>
                <span class="s s2"></span>
                <span class="s s3"></span>
                <span class="s s4"></span>
                <span class="s s5"></span>
                <span class="s s6"></span>
                <span class="s s7"></span>
                <span class="s s8"></span>
                <span class="s s9"></span>
                <span class="s s10"></span>
                <span class="s s11"></span>
                <span class="s s12"></span>
                <span class="s s13"></span>
                <span class="s s14"></span>
                <span class="s s15"></span>
            </a>
        </div>
        <div class="widget-tab first-widget-tab">
            <div class="widget-tab-menu">
                <!--  Nav tabs -->
                <ul role="tablist" class="tab-nav-menu">
                    <li class="first-item active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="new" href="#new" aria-expanded="false">New</a></li>
                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="latest" href="#latest" aria-expanded="true">Latest</a></li>
                    
                </ul>
            </div>
            <div class="widget-tab-content tab-content">
                <div id="new" class="tab-pane fade in active" role="tabpanel">
                    <ul class="product-list-widget">
                        @foreach($new as $item)
                         <li>
                                <a href="" class="thumbnail">
                                    <img src="/img/{{ $item->image }}" alt="" href="{{asset('/product/detail/').'/'.$item->id}}">
                                </a>
                                <div class="content">
                                    <a href="{{asset('/product/detail/').'/'.$item->id}}">{{$item->name}}</a>
                                    <span class="amount"> {{number_format($item->price)}}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div id="latest" class="tab-pane fade" role="tabpanel">
                    <ul class="product-list-widget">
                        @foreach($last as $item)
                         <li>
                                <a href="" class="thumbnail">
                                    <img src="/img/{{ $item->image }}" alt="" href="{{asset('/product/detail/').'/'.$item->id}}">
                                </a>
                                <div class="content">
                                    <a href="{{asset('/product/detail/').'/'.$item->id}}">{{$item->name}}</a>
                                    <span class="amount"> {{number_format($item->price)}}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div id="viewed" class="tab-pane fade in" role="tabpanel">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="modal-content">
        <div class="modal-header" style="background: aliceblue; color:grey">
            <h3>Thông Tin Chi tiết sản phẩm</h3>
        </div>
        <div class="modal-body">
            <div class="modal-product">
                <form method="POST" action="{{url('gio-hang/addtocart')}}" >
                    {{csrf_field()}}
                     <input type="hidden" name="id" value="{{$product['id']}}" >
                    <div class="product-images">
                        <div class="main-image images">
                            <img alt="" id="img_view" src="/img/{{$product['image']}}" >
                        </div>
                    </div>
                    <div class="product-info">
                        <h1 id="title_view" style="color:blue">{{$product['name']}}</h1>
                        <div class="price-box">
                            <p class="price"><span class="special-price"><span class="amount" id="price_view" style="color:red">{{number_format($product['price'])}}  VND</span></span></p>
                        </div>
                        <div class="price-box">
                            <font style="font-weight: bold;">Thuế VAT</font> : <span style="color:red">Giá Trên chưa bao gồm thuế VAT</span>
                        </div>
                        <div class="price-box">
                            <font style="font-weight: bold;">Bảo Hành</font> : <span>12 Tháng</span>
                        </div>
                        <div class="price-box">
                            <font style="font-weight: bold;">Thời gian vận chuyển</font> : <span>7 ngày sau khi đặt hàng</span>
                        </div>
                        <div>
                           
                            </div>
                        <div class="quick-add-to-cart">
                            <div class="price-box">
                                <font style="font-weight: bold;">Đổi trả trong vòng </font>  : 72 giờ
                            </div>
                            <div>
                             @if($properties!=null)

                                <div> <label> Size </label>  - <label> Màu</label> :  </div>
                                <select name="getcount" style="height: 35px;margin-bottom: 15px">
                                       @foreach($properties as $item)
                                        <option value="{{$item->id}}">
                                            {{$item->sizename}} - {{$item->colorname}} 
                                        </option>
                                        @endforeach
                                   </select>
                                   
                                 </div>
                            @else
                        </div>
                            @endif

                            <div class="numbers-row">
                                <input type="number" name="number"  id="number" value="1" min="1" max="100" onclick="this.focus()" >
                            </div>
                            
                            <button class="single_add_to_cart_button Addcart" data-id="{{$product['id']}}" type="submit"></i> Thêm vào giỏ hàng </button>
                        </div>

                        <div class="quick-desc" id="content_view">
                            {{$product['title']}}
                        </div>
                        <div class="social-sharing">
                            <div class="widget widget_socialsharing_widget">
                                <h3 class="widget-title-modal">Share this product</h3>
                                <ul class="social-icons">
                                    <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div id="content" style="margin-top: 30px;">
        <h1 class="text-center">Bài Viết về sản phẩm</h1>
        {!! $product['description'] !!}
    </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 cmt">
                <div class="fb-like"
                     data-href=""
                     data-layout="standard"
                     data-action="like"
                     data-show-faces="true">
                </div>
                <div class="fb-share-button"
                     data-href=""
                     data-layout="button_count" data-size="small" data-mobile-iframe="true"><a
                            class="fb-xfbml-parse-ignore" target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A84%2Foto%2Fshow-car%2FToyouta%2520Fortuner&amp;src=sdkpreparse">Chia
                        sẻ</a></div>
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-comments" style="margin-top:5%;"
                     data-href=""
                     data-numposts="10"></div>
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <!-- Your like button code -->
            </div>
@endsection