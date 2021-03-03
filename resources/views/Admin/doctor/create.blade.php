@extends("layouts.admin")
@section("title","اضافة طبيب جديد")

@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method='post' action='{{route("doctor.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">

                    <div class="form-group m-form__group row">
                        <label class=" col-form-label">الاسم كاملاً</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control m-input" placeholder="ادخل اسمك كاملاً"
                                name="fullname" value='{{ old("fullname") }}'>

                        </div>


                        <label class=" col-form-label">الدرجة العلمية</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control m-input" placeholder="ادخل الدرجة العلمية"
                                name="degree" value='{{ old("degree") }}'>

                        </div>
                       
</div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label">اسم الدكتور </label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control m-input" placeholder="ادخل اسم الدكتور "
                                name="username" value='{{ old("username") }}'>
                        </div>
                        <label class=" col-form-label">ادخل الايميل </label>
                        <div class="col-lg-4">
                            <input type="email" class="form-control m-input" placeholder="ادخل الايميل" name="email"
                                value='{{ old("email") }}'>
                        </div>

                    </div>
                    <!--for row-->
                    <div class="form-group m-form__group row">
                        <label class="col-form-label">تاريخ الميلاد </label>
                        <div class="col-lg-4">
                            <input type="date" class="form-control m-input" placeholder="ادخل تاريخ الميلاد  "
                                name="date_of_birth" value='{{ old("date_of_birth") }}'>
                        </div>
                        <label class=" col-form-label">االجنس </label>
                        <div class="col-lg-4">

                            <div class="m-radio-inline ">
                                <label class="m-radio m-radio--solid m-radio--brand">
                                    <input {{old('gender')=='f'?"checked":""}} type="radio" name="gender" checked=""
                                        value="female" aria-describedby="account_group-error"> ذكر
                                    <span></span>
                                </label>
                                <label class="m-radio m-radio--solid m-radio--brand">
                                    <input {{old('gender')=='m'?"checked":""}} type="radio" name="gender"
                                        value="male">أنثى
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label for="specialist_id"> التخصص</label>
                        <div class="col-lg-2">

                            <select class="form -control" name="specialist" id="cities_id"
                                style="width:150px;height:34px">
                                <option> </option>
                                @foreach($specialists as $specialist)
                                <option {{old('specialist')==$specialist->id?'selected':''}}
                                    value='{{$specialist->name}}'>{{$specialist->name}} </option>
                                @endforeach



                            </select>
                        </div>
                        <label class=" col-form-label">الراتب</label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control m-input" placeholder="ادخل الراتب" name="salary"
                                value='{{ old("salary") }}'>
                        </div>
                        <label for="department_id">القسم</label>
                        <div class="col-lg-2">
                            <select class="form -control" name="department" id="cities_id"
                                style="width:150px;height:34px">
                                <option value=""></option>

                                @foreach($departments as $department)
                                <option {{old('department')==$department->id?'selected':''}}
                                    value='{{$department->title}}'>{{$department->title}}> </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label>المدينة</label>
                        <div class="col-lg-2">
                            <select class="form -control" name="city" id="cities_id">
                                <option value="">select value</option>

                                @foreach($cities as $city)
                                <option {{old('city')==$city->id?'selected':''}} value='{{$city->name}}'>{{$city->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <label class=" col-form-label">العنوان</label>
                        <div class="col-lg- 2">
                            <input type="text" class="form-control m-input" placeholder="ادخل العنوان" name="address"
                                value='{{ old("address") }}'>
                        </div>



                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label">رقم الهاتف</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control m-input" placeholder="ادخل رقم الهاتف " name="mobile"
                                value='{{ old("mobile") }}'>
                        </div>

                        <label class="col-form-label">الصورة الشخصية <i class="fa fa-user-md "></i> </label>

                        <div class="col-lg-4">
                            <input class="" type='file' name="image" id="image" />
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label">سيرة ذاتية قصيرة</label>
                        <div class="col-lg-4">
                            <br><br>
                            <input type="text" class="form-control m-input" placeholder="" name="short_bio"
                                value='{{ old("short_bio") }}' style="width:300px;height:60px;margin-right:-130px">
                        </div>
                    </div>

                    <div class="m-form__group form-group row">
                        <label class=" col-lg-3 col-form-label">الحالة</label>
                        <div class="m-radio-inline col-lg-6">
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('status')=='active'?"checked":""}} type="radio" name="status" checked=""
                                    value="active" aria-describedby="account_group-error"> متاح <span></span>
                            </label>
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('status')=='unactive'?"checked":""}} type="radio" name="status"
                                    value="unactive"> غير
                                غير متاح
                                <span></span>
                            </label>
                        </div>
                        <span class="m-form__help"></span>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="submit">إضافة</button>
                            <a href='{{route("user.index")}}' class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection