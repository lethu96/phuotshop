@extends('client.master')

@section('content')
<div class="col-md-12 recoment-header" > SẢN PHẨM KHUYẾN MẠI </div>
<div class=" row">
    <div class="product-index">
        @foreach($sale as $item)
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
                                
                            </div>
                        </div>
                        <div class="phuotshop-item-card__badge-wrapper" style="">
                            <div class="phuotshop-badge phuotshop-badge--fixed-width phuotshop-badge--promotion" style="">
                                <div class="phuotshop-badge--promotion__label-wrapper phuotshop-badge--promotion__label-wrapper--vi-VN">
                                    <span class="percent">{{$item['sale']}}%</span>
                                    <span class="phuotshop-badge--promotion__label-wrapper__off-label phuotshop-badge--promotion__label-wrapper__off-label--vi-VN">giảm</span>
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
                            <a class="heading-title"  href="#" title="{{$item['name']}}"  style="height: 36px;">{{$item['name']}}</a>
                            <span class="price">
                                <span class="amount" > <strike> {{number_format($item['price'])}} </strike></span>
                                <span class="amount" >{{number_format((100-$item['sale'])*$item['price']/100)}} VND</span>
                            </span>
                            
                                <a href="{{asset('/product/detail/').'/'.$item['id']}}" title="" class="btn btn-danger">Xem chi tiết</a>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
      <center><div><a href="{{asset('list-sale')}}" style="color: #337ab7;"> Xem thêm >></a></div></center> 
    </div>
<div>
</div>
</div>


 <div class="clearfix"></div>
<div class="col-md-12 recoment-header "> MŨ BẢO HIỂM </div>
 <div class=" row">
    <div class="product-index">
       @foreach($data3 as $item)
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
                                    <a class="btn-product btn-cart" href="{!!url('gio-hang/addcart/'.$item->id)!!}">
                                        <i aria-hidden="true" class="fa fa-shopping-cart Addcart" data-id="{{$item['id']}}"></i>
                                    </a>
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
                        <a class="heading-title"  href="#" title="{{$item['name']}}" style="height: 36px;">{{$item['name']}}</a>
                        <span class="price">
                            <span class="amount" >{{number_format($item['price'])}} VND</span>
                        </span>
                        
                            <a href="{{asset('/product/detail/').'/'.$item['id']}}" title="" class="btn btn-danger">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
            <center> <a href="{{asset('/typeproduct/').'/'.$item['type_id']}} " style="color: #337ab7;">Xem thêm >></a></center>
    </div>
</div>
 <div class="clearfix"></div>

  <div class="clearfix"></div>
<div class="col-md-12 recoment-header ">BALO PHƯỢT </div>
 <div class=" row">
    <div class="product-index">
       @foreach($data1 as $item)
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
                                    <a class="btn-product btn-cart" href="{!!url('gio-hang/addcart/'.$item->id)!!}">
                                        <i aria-hidden="true" class="fa fa-shopping-cart Addcart" data-id="{{$item['id']}}"></i>
                                    </a>
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
                        <a class="heading-title"  href="#" title="{{$item['name']}}" style="height: 36px;">{{$item['name']}}</a>
                        <span class="price">
                            <span class="amount" >{{number_format($item['price'])}} VND</span>
                        </span>
                        
                            <a href="{{asset('/product/detail/').'/'.$item['id']}}" title="" class="btn btn-danger">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
            <center> <a href="{{asset('/typeproduct/').'/'.$item['type_id']}} " style="color: #337ab7;">Xem thêm >></a></center>
    </div>
</div>
 <div class="clearfix"></div>
@endsection
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
                                    <span class="amount"> {{number_format($item->price)}}đ</span>
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
                                    <span class="amount"> {{number_format($item->price)}} đ</span>
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
