@extends('admin.home')
@section('content')
    <div class="container">
        <div class="row">
            <div >


                
                    <div class="row"> Thông tin tài khoản</div>
                    <div> </div>
                    <div class="col-md-2"> 
                        <div> Họ tên</div>
                        <div> E-mail</div>
                        <div> Địa chỉ</div>
                        <div> Quyền</div>
                    </div>
                    <div class=" col-md-5"> 
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
        </div>
    </div>
@endsection
