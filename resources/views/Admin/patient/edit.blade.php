@extends("layouts.admin")
@section("title","تعديل بيانات المريض")

@section("content")
<div class="m-portlet m-portlet--mobile px-4 py-3">
    <form enctype="multipart/form-data" method='post' action='{{asset("admin/patients/".$patient->id)}}'>
        @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">اسم المريض </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" name="fullname"
                                value='{{ old("fullname",$patient->fullname) }}'>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label for="example-date-input" class="col-lg-3 col-form-label">تاريخ الميلاد </label>
                        <div class="col-6">
                            <input class="form-control m-input" type="date" name="date_of_birth"
                                value='{{ old("date_of_birth",$patient->date_of_birth) }}' id="date_of_birth">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">فصيلة الدم </label>
                        <div class="col-6">
                            <select class='form-control' name='blood_group' id='blood_group'>
                                <option value=''>-اختر الصنف-</option>
                                <option {{old('blood_group',$patient->blood_group)=='A+'?'selected':''}} value='A+'>
                                    A+</option>
                                <option {{old('blood_group',$patient->blood_group)=='A-'?'selected':''}} value='A-'>
                                    A-</option>
                                <option {{old('blood_group',$patient->blood_group)=='B+'?'selected':''}} value='B+'>
                                    B+</option>
                                <option {{old('blood_group',$patient->blood_group)=='B-'?'selected':''}} value='B-'>
                                    B-</option>
                                <option {{old('blood_group',$patient->blood_group)=='O+'?'selected':''}} value='O+'>
                                    O+</option>
                                <option {{old('blood_group',$patient->blood_group)=='O-'?'selected':''}} value='O-'>
                                    O-</option>
                                <option {{old('blood_group',$patient->blood_group)=='AB'?'selected':''}} value='AB'>
                                    AB</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">المدينة </label>
                        <div class="col-lg-6">
                            <select class="form-control" name='city_id' id='city_id'>
                                <option selected>-اختر المدينة- </option>
                                @foreach($cities as $city)
                                <option {{old('city_id',$patient->city_id)==$city->id?'selected':''}}
                                    value='{{$city->id}}'>
                                    {{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">العنوان </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="عنوان الإقامة" name="address"
                                value='{{ old("address",$patient->address) }}'>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">رقم الهاتف</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="رقم الهاتف " name="mobile"
                                value='{{ old("mobile",$patient->mobile) }}'>
                        </div>
                    </div>

                    <div class="m-form__group form-group row">
                        <label class=" col-lg-3 col-form-label">جنس المريض</label>
                        <div class="m-radio-inline col-lg-6">
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('gender',$patient->gender)=='M'?"checked":""}} type="radio" name="gender"
                                    checked="" value="M" aria-describedby="account_group-error"> ذكر
                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('gender',$patient->gender)=='F'?"checked":""}} type="radio" name="gender"
                                    value="F">أنثى

                                <span></span>
                            </label>
                        </div>
                        <span class="m-form__help"></span>
                    </div>


                    <div class="m-form__group form-group row">
                        <label class="col-lg-3 col-form-label" for="details">الصورة الشخصية</label>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-1 mr-3" id="uploaded-img">
                                    <img class="rounded" style="height:50px;width:50px"
                                        src='{{asset("storage/assets/img/patients/{$patient->image}")}}'>
                                </div>
                                <div class="col-6"> <input class=" pt-3" type='file' name="image" id="image" />

                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="submit">تعديل</button>
                            <a href='{{route("patients.index")}}' class="btn btn-secondary">الغاء الامر</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
