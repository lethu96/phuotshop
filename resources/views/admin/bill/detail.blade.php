@extends('admin.home')

@section('content')
    <div class="setcolor" >
    <h3>Chi Tiết Hóa Đơn HD{{$bill['id']}} </h3>
    <div class="row" style="font-size: 16px;
    margin: 10px 0px;">
      <div class="col-md-2"> Tên khách hàng :  </div>
    <div class="col-md-4" style="font-weight: bold;"> {{$bill['name_customer']}}</div>
    </div>
    <div class="row" style="font-size: 16px;
    margin: 10px 0px;">
      <div class="col-md-2"> Số điện thoại : </div>
    <div class="col-md-4" style="font-weight: bold;"> {{$bill['address_customer']}}</div>
    </div>
    <div class="row" style="font-size: 16px;
    margin: 10px 0px 18px;">
      <div class="col-md-2"> Địa chỉ :  </div>
    <div class="col-md-4" style="font-weight: bold;"> {{$bill['phone_customer']}}</div>
    </div>
    
     <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
      <thead>
        <tr role="row">
          <th> STT</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Sản Phẩm
            </th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Hình ảnh
            </th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Số lượng </th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Đơn giá
            </th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Thành tiền </th>
        </tr>
      </thead>


      <tbody>
        <?php  $stt=0;?>
        @foreach($detail as $item)
        <?php $stt++;?>
            <tr>
              <td>{{ $stt}}</td>
                <td>{{$item->proname}}</td>
                <td> <img width="100px" height="100px" src="/img/{{$item->proimage}}"></td>
                <td>{{$item->qty}}</td>
                <td>{{$item->price}}</td>
                <td>{{number_format($item->price*$item->qty)}} VNĐ</td>
            </tr>
        @endforeach
        </tbody>
    </table>
     <div style ="float:right;font-weight: bold;"> Tổng tiền :{{number_format($bill['total'])}} VNĐ </div>
  </div>
    </div>

@endsection
