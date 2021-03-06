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
<div class="col-md-12 recoment-header" > KẾT QUẢ TÌM KIẾM </div>
<div class="col-md-12"> Tìm thấy  {{count($results)}}  sản phẩm  liên quan từ khóa  {{$keyword}}  </div>
<div class=" row">
    <div class="product-index">
        @foreach($results as $item)
            <div class=" indicator-style category_product">
                <div class="single-product-inner">
                    <div class="single-product">
                        <div class="product-thumbnail-wrapper">
                            <a href="#" class="border-none">
                                <div class="product-image">
                                    <img alt="" id="" src="/img/{{ $item['image'] }}" width="170px" height="200px" style="object-fit: cover;">
                                </div>
                            </a>
                            <div class="product-button-list">
                                
                                    <div class="add-to-cart-list">
                                        <a class="btn-product btn-cart" href="{!!url('gio-hang/addcart/'.$item['id'])!!}">
                                            <i aria-hidden="true" class="fa fa-shopping-cart Addcart" data-id="{{$item['id']}}"></i>
                                        </a>
                                    </div>
                                
                                <div class="product-button-group">
                                    <a class="add-to-compare" href=""><i class="fa fa-info" aria-hidden="true" title="Thông tin chi tiết sản phẩm"></i></a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-content="{{$item['description']}}" data-id="{{$item['id']}}" class="btn-quickview view_product" data-target="#productModal"><i class="fa fa-search" aria-hidden="true"></i></a></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details-content text-center">
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="heading-title"  href="#" title="{{$item['name']}}">{{$item['name']}}</a>
                            <span class="price">
                                <span class="amount" >{{number_format($item['price'])}} VND</span>
                            </span>
                            
                                <a href="{{asset('/product/detail/').'/'.$item['id']}}" title="" class="btn btn-danger">Xem chi tiết</a>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
<div>
</div>
@endsection
