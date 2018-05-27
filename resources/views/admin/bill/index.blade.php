@extends('admin.home')

@section('content')
    <div class="setcolor">
            <div class="page-title">
              <div class="title_left">
                <h3>Danh sách hóa đơn</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                            </button>
                            </p>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                             
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                              <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Mã đơn hàng
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Tên khách hàng
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Địa chỉ </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Số điện thoại </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Ngày đặt hàng</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Tổng tiền</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Hình thức thanh toán</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"> Trạng thái đơn hàng </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Ghi chú
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 117px;">Hành động</th>
                                                </tr>
                                              </thead>


                                              <tbody>
                                                @foreach($data as $item)
                                                    <tr>
                                                        <td>HD{{$item['id']}}</td>
                                                        <td>{{$item['name_customer']}}</td>
                                                        <td>{{$item['address_customer']}}</td>
                                                        <td>{{$item['phone_customer']}}</td>
                                                        <td>{{date("d-m-Y", strtotime($item['created_at']))}}</td>
                                                        <td>{{$item['total']}}</td>
                                                        <td>{{$item['type']}}</td>
                                                        <td> @if($item['status']==1) Đã thanh toán 
                                                            @elseif($item['status']==0)  Chưa thanh toán
                                                            @else Đã hủy
                                                            @endif
                                                        </td>
                                                        <td>{{$item['note']}}</td>
                                                        <td>
                                                            <a href="{{asset('/bill-update/').'/'.$item['id']}}" class="btn btn-primary ">
                                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="{{asset('/bill-destroy/').'/'.$item['id']}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không??')">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="{{asset('/bill-detail/').'/'.$item['id']}}" class="btn btn-success ">
                                                                <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                            </div>
                        </div>
                           <center> {!!$data->links()!!}</center>
                    </div>
                </div>
            </div>
        </div>
    </div>

            </div>

@endsection
