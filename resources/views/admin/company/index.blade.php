@extends('admin.home')

@section('content')
    <div class="setcolor">
            <div class="page-title">
              <div class="title_left">
                <h3>List Type Product</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <p class="text-muted"><button type="button" class="btn btn-info btn-md" id="add"  ><a href="{{asset('/company/create')}}" > <i class="fa fa-plus-circle" aria-hidden="true"></i>Thêm mới</a>
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
                                    <!-- <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="datatable_length">
                                                <label>Show 
                                                    <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> 
                                                entries</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="datatable_filter" class="dataTables_filter">
                                                <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable">
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                  <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 157px;">Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 259px;">Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 259px;">Adress
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 259px;">Phone
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 117px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Note
                                        </th>
                                    </tr>
                                  </thead>


                                  <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{$item['name']}}</td>
                                            <td>{{$item['email']}}</td>
                                            <td>{{$item['address']}}</td>
                                            <td>{{$item['phone']}}</td>
                                            <td>{{$item['status']}}</td>
                                            <td>
                                                <a href="{{asset('/company/update/').'/'.$item['id']}}" class="btn btn-primary ">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{asset('/company/destroy/').'/'.$item['id']}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không??')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" id="datatable_previous">
                                            <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous
                                            </a>
                                        </li>
                                        <li class="paginate_button active">
                                            <a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1
                                            </a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2
                                            </a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">3
                                            </a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0">4
                                            </a>
                                        </li>
                                        <li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0">5
                                        </a>
                                    </li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0">6</a>
                                    </li>
                                    <li class="paginate_button next" id="datatable_next">
                                        <a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

            </div>

@endsection
