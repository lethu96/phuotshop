@extends('client.master')
@section('content')
<div class="container">
  <div>            
    <div >              
      <div class="row">
        <div >
          <div >
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
            </div>
            @elseif (Session()->has('flash_level'))
              <div class="alert alert-success">
                  <ul>
                      {!! Session::get('flash_massage') !!} 
                  </ul>
              </div>
          @endif
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Hình ảnh</th>
                      <th>Tên sản phẩm</th>
                      <th>SL</th>
                      <th>Giá</th>
                      <th>Thành tiền</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach(Cart::content() as $row)
                    <tr>
                      <td><img src="/img/{{$row->options->img}}" alt="dell" width="200" height="100"></td>
                      <td>{!!$row->name!!}</td>
                      <td class="text-center">                        
                          @if (($row->qty) >1)
                          <a href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-down')!!}" class="cart_quantity_up"><span class="glyphicon glyphicon-minus"></span>-</a> 
                          @else
                            <a href="#"><span class="glyphicon glyphicon-minus"></span></a> 
                          @endif
                          <input type="text" class="qty text-center" value=" {!!$row->qty!!}" style="width:30px; font-weight:bold; font-size:15px; color:blue;" readonly="readonly"> 
                        <a class="cart_quantity_down" href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-up')!!}"><span class="glyphicon glyphicon-plus-sign">+</span></a>
                      </td>
                      <td>{!! number_format($row->price) !!} VND</td>
                      <td>{!! number_format($row->qty * $row->price) !!} VND</td>
                      <td><a href="{!!url('gio-hang/delete/'.$row->rowId)!!}" onclick="return confirm('Bạn có muốn xóa sản phẩm này khỏi giỏ hàng không??')" ><i class="fa fa-trash-o" aria-hidden="true"  style="font-size:25px;color:red;"></i></a> </td>
                    </tr>
                  @endforeach                    
                    <tr>
                      <td colspan="3"><strong>Tổng cộng :</strong> </td>
                      <td>{!!Cart::count()!!}</td>
                      <td colspan="2" style="color:red;">{!!Cart::subtotal()!!} VND</td>                      
                    </tr>                    
                  </tbody>
                </table>                
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 no-paddng">
              @if(Cart::count() !=0)
                @if (Auth::guest())
                  <div class="input-group">
                      <select name="paymethod" id="inputPaymethod" class="form-control" required="required">
                        <option value="cod">COD (thanh toán khi nhận hàng)</option>
                        <option value="paypal">Paypal (Thanh toán qua Paypal)</option>                      
                      </select>
                    </div>
                  <a class="btn btn-large btn-warning pull-right" href="{!!url('/login')!!}" >Tiến hàng thanh toán</a>
                @else
                  <form action="{!!url('/dat-hang')!!}" method="get" accept-charset="utf-8">                    
                    <div class="input-group">
                    <label for="paymethod">Chọn phương thức thanh toán</label>
                      <select name="paymethod" id="inputPaymethod" class="form-control" required="required">
                        <option value="">Hãy chọn phương thức thanh toán</option> 
                        <option value="paypal">Thanh toán trực tuyến ( Paypal )</option> 
                        <option value="cod"> Thanh toán khi nhận hàng ( COD )</option>
                      </select>
                    </div>
                    <hr>
                      <button type="submit" class="btn btn-danger pull-right">Tiến hành thanh toán</button>
                      <a href="{!!url('/phuotshop')!!}" type="button" class="btn btn-large btn-primary pull-left">Tiếp tục mua hàng</a>
                  </form>
                @endif
              @endif
              </div>
              <hr>
            </div>
          </div>   
        </div>
      </div>     
    </div> 
</div>
</div>
@endsection