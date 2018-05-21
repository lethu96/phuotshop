@extends('layouts.app')

@section('content')

<div class="col-md-8">
<div class="card">

    <div class="card-header">Reset Password</div>
    <div class="card-body">
     <form action="{{asset('/reset-pass')}}" method="POST">
       {{ csrf_field() }}

       <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
         <div class="col-md-6">
           <input type="email" placeholder="Email" name="email"  value="{{old('email')}}" class="form-control" required="" />
       </div>
   </div>   
  
     @if(Session::has('send_cussess'))
                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" id="noti">
                                <p>Nhà quản trị đã gửi mail cho bạn. Vui lòng kiểm tra mail </p>
                            </div>
                        </div>
                    </div>
        @endif
        @if(Session::has('fail'))
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" id="noti">
                                <p>Mail chưa có .Vui lòng đăng kí! </p>
                            </div>
                        </div>
                    </div>
        @endif
        <div class="col-md-6 offset-md-4">
            <button class="btn btn-primary">Send password reset</button>
        </div>
    </form>
     
</div> 
</div>

@endsection


  
 