@extends('client.master')
@section('content')
<div class="container">
    <hr>
    <div class="my-account-section__header-title">Hồ Sơ Của Tôi </div>
    <div class="my-account-section__header-subtitle">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
    <div> <a href="{{url('user-change-password')}}" style="color: #00BFF3;">Đổi mật khẩu</a> </div>
    <div class="my-account-profile__left">
        <div class="input-with-label">
            <div class="input-with-label__wrapper">
                <div class="input-with-label__label">
                    <label>Email</label>
                </div>
                <div class="input-with-label__content">
                    <div class="my-account__inline-container">
                        <div class="my-account__input-text">{!!Auth::user()->email!!}</div>
                        <!-- <button class="my-account__no-background-button my-account-profile__change-button">Thay đổi</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="input-with-label">
            <div class="input-with-label__wrapper">
                <div class="input-with-label__label">
                    <label>Số điện thoại</label>
                </div>
                <div class="input-with-label__content">
                    <div class="my-account__inline-container">
                        <div class="my-account__input-text">{!!Auth::user()->phone !!}</div>
                        <!-- <button class="my-account__no-background-button my-account-profile__change-button">Thay đổi</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="input-with-label">
            <div class="input-with-label__wrapper">
                <div class="input-with-label__label">
                    <label>Họ Tên </label>
                </div>
                <div class="input-with-label__content">
                    <div class="my-account__inline-container">
                        <div class="my-account__input-text">{!!Auth::user()->name!!}</div>
                        <!-- <button class="my-account__no-background-button my-account-profile__change-button">Thay đổi</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="input-with-label">
            <div class="input-with-label__wrapper">
                <div class="input-with-label__label">
                    <label>Giới tính</label>
                </div>
                <div class="input-with-label__content">
                    <div class="my-account__inline-container">
                        <div class="my-account__input-text">{!!Auth::user()->gender!!}</div>
                        <!-- <button class="my-account__no-background-button my-account-profile__change-button">Thay đổi</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="input-with-label">
            <div class="input-with-label__wrapper">
                <div class="input-with-label__label">
                    <label>Địa chỉ  </label>
                </div>
                <div class="input-with-label__content">
                    <div class="my-account__inline-container">
                        <div class="my-account__input-text">{!!Auth::user()->address!!}</div>
                        <!-- <button class="my-account__no-background-button my-account-profile__change-button">Thay đổi</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="input-with-label">
            <div class="input-with-label__wrapper">
                <div class="input-with-label__label">
                    <label>Ngày sinh</label>
                </div>
                <div class="input-with-label__content">
                    <div class="date-selection__container">
                        <input type="date" name="" value="{!!Auth::user()->birthday!!}">
                    </div>
                </div>
            </div>
        </div>
        <div class="input-with-label">
            <div class="input-with-label__wrapper">
                <div class="input-with-label__label">
                    <label>Ngày đăng kí </label>
                </div>
                <div class="input-with-label__content">
                    <div class="my-account__inline-container">
                        <div class="my-account__input-text">{!!Auth::user()->created_at !!}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="my-account-page__submit"><button class="btn btn-solid-primary btn--m btn--inline">Lưu</button></div> -->
    </div>
    <div class="my-account-profile__right"> 
        <div class="my-account-section__header-title">Lịch sử mua hàng </div>
        <div >
                <table class="table table-bordered table-hover text-center">
                    <thead style="background-color: #F0F0F0;font-weight: bold;">
                            <th> ID</th>                                        
                            <th> Mã đơn hàng</th>  
                            <th> sản phẩm </th>
                            <th> Số lương</th>
                            <th> Thành tiền</th>               
                            <th> Ngày đặt hàng</th>
                            <th> Hình thức thanh toán</th>
                            <th>Trạng thái đơn hàng </th>                                     
                                                                 
                        </tr>
                    </thead>
                    <tbody>
                    <?php  $stt=0;?>
                        @foreach($data as $row)
                            <?php $stt++;?>
                            <tr>
                                <td>{{ $stt}}</td>
                                <td>HD{{ $row->madonhang}}</td>
                                <td> <div> <img width="100px" height="100px" src="img/{{ $row->image }}"></div> 
                                    <div> {{ $row->name}}</div></td>
                                <td>{{$row->soluong}}</td>
                                <td>{{ number_format($row->soluong*$row->price) }} VNĐ</td>
                                <td>{{ $row->created_at}}</td>
                                <td>{{ $row->type}}</td>
                                <td>@if($row->status==0) Chưa thanh toán
                                @else Đã thanh toán
                                @endif</td>

                                
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection
