@extends('admin.home')

@section('content')
    <div class="setcolor">
            <div class="page-title">
              <div class="title_left">
                <h3>List property</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <p class="text-muted"><button type="button" class="btn btn-info btn-md" id="add"  ><a href="{{asset('/property/create')}}" > <i class="fa fa-plus-circle" aria-hidden="true"></i>Thêm mới</a>
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
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Product
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Size
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Color
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" > Number
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" > Action
                                        </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($property as $item)
                                        <tr>
                                            <td>{{$item['product_id']}}</td>
                                            <td>{{$item['size_id']}}</td>
                                            <td>{{$item['color_id']}}</td>
                                            <td> {{$item['qty']}}</td>
                                            <td>
                                                <a href="{{asset('/property/destroy/').'/'.$item['product_id']}}/{{$item['size_id']}}/{{$item['color_id']}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không??')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                           <center> {!!$property->links()!!}</center>
                    </div>
                </div>
            </div>
        </div>
    </div>

            </div>

@endsection
