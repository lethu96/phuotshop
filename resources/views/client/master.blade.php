<!DOCTYPE html>
<html>
<head>
    <title></title>
    @include('client.header_script')
    <style type="text/css">
        .phuotshop-item-card__badge-wrapper {
    position: absolute;
    right: 0;
    top: 0;
}
.phuotshop-item-card__badge-wrapper .phuotshop-badge {
    float: right;
    margin-left: .5rem;
}
.phuotshop-badge--promotion {
    background-color: rgba(255,212,36,.9);
}
.phuotshop-badge--fixed-width {
    width: 38px;
    height: 35px;
}

.phuotshop-badge {
    display: inline-block;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    position: relative;
    padding: 4px 2px 3px;
}
.phuotshop-badge--promotion__label-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: center;
    position: relative;
    font-weight: 700;
    line-height: 12px;
    color: #ff5722;
    text-transform: uppercase;
    font-size: 1.2rem;
}
.phuotshop-badge--promotion__label-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: center;
    position: relative;
    font-weight: 700;
    line-height: 12px;
    color: #ff5722;
    text-transform: uppercase;
    font-size: 1.2rem;
}
.phuotshop-badge--promotion__label-wrapper__off-label {
    color: #fff;
    margin: 2px 0;
}
.phuotshop-badge--promotion__label-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: center;
    position: relative;
    font-weight: 700;
    line-height: 12px;
    color: #ff5722;
    text-transform: uppercase;
    font-size: 1.2rem;
}
.phuotshop-badge--promotion:after {
    content: "";
    width: 0;
    height: 0;
    left: 0;
    bottom: -4px;
    border-style: solid;
    position: absolute;
    border-width: 0 19px 4px;
    border-color: transparent rgba(255,212,36,.9);
}
.recoment-header
{
    font-size: 1.7rem;
    color: black;
    font-weight: 500;
    margin-top: 1%;
    margin-bottom: 1%;
}

#wrap {
  margin: 50px 100px;
  display: inline-block;
  position: relative;
  height: 60px;
  float: right;
  padding: 0;
  position: relative;
}
 .search-container {
  float: right;
}

 input[type=text] {
  padding: 6px;
  margin-top: 5px;
  font-size: 17px;
  border: none;
}

 .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #fe603b;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

 .search-container button:hover {
  background: #fe603b;
  border: none;
}

@media screen and (max-width: 600px) {
 .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
}

   </style>
</head>
<body>
    @include('client.header')
<section class="main-content-eight">
    <!-- Product Sell Area Start -->
    <div class="product-sell-area section-padding">
        <div class="container">
            <div class="row">
                @yield('nav')
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</section>
@include('client.footer')
@include('client.footer_script')
</body>
</html>
