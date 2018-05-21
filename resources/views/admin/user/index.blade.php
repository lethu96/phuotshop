@extends('admin.home')

@section('content')
    <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>List Type USer</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <p class="text-muted"><button type="button" class="btn btn-info btn-md" id="add"  ><a href="{{asset('/user/create')}}" > <i class="fa fa-plus-circle" aria-hidden="true"></i>Thêm mới</a>
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
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                  <thead>

                                  </thead>


                                  <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{$item['name']}}</td>
                                            <td>{{$item['gender']}}</td>
                                            <td>{{$item['email']}}</td>
                                            <td>{{$item['address']}}</td>
                                            <td>{{$item['phone']}}</td>
                                            <td>@if($item['status']==1) Amdin
                                            @else Editor
                                            @endif </td>
                                            <td>
                                                <a href="{{asset('/user/update/').'/'.$item['id']}}" class="btn btn-primary ">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{asset('/user/destroy/').'/'.$item['id']}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không??')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

            </div>

@endsection
