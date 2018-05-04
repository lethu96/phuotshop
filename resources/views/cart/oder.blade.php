@extends('client.master')
@section('content')
<div class="container">
  <div >
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home"><a href="#" title=""> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="#" title=""> Đặt hàng</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$slug!!}</a>
    </h3>              
    <div >              
      <div class="row">
        <div >
          <div class="panel panel-success">
            <div class="panel-body">   
            <legend class="text-left">Xác nhận thông tin đơn hàng</legend> 
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Hình ảnh</th>
                      <th>Tên sản phẩm</th>
                      <th>SL</th>
                      <th>Giá</th>
                      <th>Thành tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach(Cart::content() as $row)
                    <tr>
                      <td><img src="/img/{{$row->options->img}}" alt="dell" width="200" height="100"></td>
                      <td>{!!$row->name!!}</td>
                      <td class="text-center">                        
                          <span>{!!$row->qty!!}</span>
                      </td>
                      <td>{!! number_format($row->price)!!} VND</td>
                      <td>{!!  number_format($row->qty * $row->price)!!} VND</td>
                    </tr>
                  @endforeach                    
                    <tr>
                      <td colspan="3"><strong>Tổng cộng :</strong> </td>
                      <td>{!!Cart::count()!!}</td>
                      <td colspan="2" style="color:red;">{!!Cart::subtotal();!!} VND</td>                      
                    </tr>                    
                  </tbody>
                </table>                
              </div>
              {{-- form thong tin khach hang dat hang           --}}
              @if ($_GET['paymethod'] =='cod' )
              <form action="" method="POST" role="form">
                <legend class="text-left">Xác nhận thông tin khách hàng</legend>
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="">

                    - Tên khách hàng : <input type=" text" name="" value="{{ Auth::user()->name }}"> &nbsp;
                  </label>
                </div>
                <div class="form-group">
                  <label for="">
                  - Điện thoại: <input type="text " name="" value="{{ Auth::user()->phone }}"> &nbsp;
                  </label>
                </div class="form-group">
                <div>
                  <label for="">
                   - Địa chỉ: <input type="" name="" value="{{ Auth::user()->address }}">
                   </label>
                </div>              
                <div class="form-group">
                  <label for="">Các ghi chú khác</label>
                  <textarea name="txtnote" id="inputtxtNote" class="form-control" rows="4" required="required">                    
                  </textarea>
                </div>              
                <button type="submit" class="btn btn-primary pull-right"> Đặt hàng (COD)</button> 
              </form>
              @else 
              <form action="{!!url('/payment')!!}" method="Post" accept-charset="utf-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label for="">
                    - Tên khách hàng : <strong>{{ Auth::user()->name }} </strong> &nbsp;
                    - Điện thoại: <strong> {{ Auth::user()->phone }}</strong> &nbsp;
                    - Địa chỉ: <strong> {{ Auth::user()->address }}</strong>
                  </label>
                </div>
                  <br>                
                <button type="submit" class="btn btn-danger pull-left"> Thanh toán qua Paypal </button> &nbsp;
              </form>
              @endif
            </div>
          </div>   
        </div>
      </div>     
    </div> 
</div>
</div>
@endsection