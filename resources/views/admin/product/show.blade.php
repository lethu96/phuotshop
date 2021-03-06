@extends('admin.home')

@section('content')
          <div class="setcolor">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
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
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/product/update')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$id}}" >
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name"  name="name" required="required" class="form-control col-md-7 col-xs-12" value="{{$data['name']}}" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tye Product 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="typeProduct"  name="typeProduct" readonly  class="form-control col-md-7 col-xs-12" value="{{$typeProduct->name}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Title 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title"  name="title" readonly  class="form-control col-md-7 col-xs-12" value="{{$data['title']}}">
                        </div>
                      </div>
                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Description 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<textarea style="height: 500px; width: 500px;" readonly>{!! $data['description'] !!} </textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Size - Color
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          @if($properties!=null)
                             @foreach($properties as $item)
                              <div> {{$item->sizename}} - {{$item->colorname}}  </div>
                              @endforeach
                            @else
                            <div> None  </div>
                            @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Price 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="price"  name="price" readonly class="form-control col-md-7 col-xs-12" value="{{$data['price']}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Sum
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="sum"  name="qty" readonly class="form-control col-md-7 col-xs-12" value="{{$data['qty']}}" style="overflow: scroll;">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<img width="200px" height="200px" src="/img/{{ $data['image'] }}">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button"><a href="{{asset('/product')}}" style="color: white;">Back</a> </button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

 <script type="text/javascript">
     function loadFile(event) {
            var output = document.getElementById('image_show');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
</script>
@endsection
