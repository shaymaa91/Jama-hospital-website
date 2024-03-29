@extends("auth.auth-main")
@section('title','تسجيل مستخدم جديد')
@section('main-title','تسجيل مستخدم جديد')
@section('sub-title','الرجاء إدخال التفاصيل الخاصة بك لتسجيل حسابك')

@section('auth-content')
<form class="m-login__form m-form" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="text" id="name" value="{{old('name')}}" placeholder="الاسم بالكامل"
            name="name" autocomplete="on" required autofocus>
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="email" id="email" placeholder="البريد الالكتروني"
            value="{{old('email')}}" name="email" autocomplete="on" required>
    </div>
    
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="password" placeholder="كلمة المرور" name="password" id="password"
            required>
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input m-login__form-input--last" type="password" placeholder="تأكيد كلمة المرور"
            id="password_confirmation" name="password_confirmation" required>
    </div>

    <div class="m-login__form-action">
        <button id="" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn"
            style="background-color: #a5c422; border-color: #a5c422;">تسجيل
            مستخدم جديد</button>&nbsp;&nbsp;
        <button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn"
            style="color: #a5c422; border-color: #a5c422;">إلغاء الأمر</button>

    </div>
    <div class="row m-login__form-sub">
        <div class="col m--align-center m-login__form-right">
            <a href="{{ route('login') }}" id="m_login_forget_password" class="m-link">لديك حساب بالفعل؟</a>

        </div>
    </div>
</form>
@endsection