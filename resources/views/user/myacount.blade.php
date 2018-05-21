@extends('admin.home')
@section('content')
    <div class="container">
        <div class="row">
            <div >


                
                    <div class="row" style="font-size: 30px;margin-bottom: 4%; text-align: center;"> Thông tin tài khoản</div>
                    <div class="row" style="    margin-bottom: 4%;"> 
                        <div class="col-md-4" style="text-align: right;"> 
                        <div> Họ tên :</div>
                        <div> E-mail :</div>
                        <div> Địa chỉ : </div>
                        <div> Quyền : </div>
                    </div>
                    <div class=" col-md-4" style=" text-align: center;"> 
                        <div> {!!Auth::user()->name!!}</div>
                        <div> {!!Auth::user()->phone !!}</div>
                        <div> {!!Auth::user()->address!!}</div>
                        <div> 
                            @if(Auth::user()->status==1) Admin
                            @else Eidtor
                            @endif
                        </div>
                    </div>


                    </div>
                    <div class="row">
                        <form id="form-change-password" role="form" method="POST" action="{{ url('/admin/change-password') }}" novalidate class="form-horizontal">
                      <div class="col-md-9">             
                        <label for="current-password" class="col-sm-4 control-label" require>Current Password</label>
                        <div class="col-sm-8">
                          <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Password">
                            @if ($errors->has('current-password'))
                                         <span class="invalid-feedback" style="    color: red;">
                                         <strong>{{ $errors->first('current-password') }}</strong>
                                        </span>
                                     @endif
                          </div>
                            </div>
                            <label for="password" class="col-sm-4 control-label">New Password</label>
                            <div class="col-sm-8">
                              <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                             <span class="invalid-feedback" style="    color: red;">
                                             <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                         @endif
                              </div>
                            </div>
                            <label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
                            <div class="col-sm-8">
                              <div class="form-group">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
                                @if ($errors->has('password_confirmation'))
                                             <span class="invalid-feedback" style="    color: red;">
                                             <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                         @endif
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-6">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
            </form>
                    </div>
                    
            </div>
        </div>
    </div>
@endsection
