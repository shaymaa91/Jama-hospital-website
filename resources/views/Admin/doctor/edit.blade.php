@extends("layouts.admin")
@section("title","تعديل بيانات الطبيب")

@section("content")
<div class="m-portlet m-portlet--mobile px-4 py-3">
    <form enctype="multipart/form-data" method='post' action='{{asset("admin/doctors/".$doctor->id)}}'>
        @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">اسم الطبيب </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" name="fullname"
                                value='{{ old("fullname",$doctor->fullname) }}'>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الدرجة العلمية </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="ادخل الدرجة العلمية "
                                name="degree" value='{{ old("degree",$doctor->degree) }}'>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label for="example-date-input" class="col-lg-3 col-form-label">تاريخ الميلاد </label>
                        <div class="col-6">
                            <input class="form-control m-input" type="date" name="date_of_birth"
                                value='{{ old("date_of_birth",$doctor->date_of_birth) }}' id="date_of_birth">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الإختصاص </label>
                        <div class="col-6">
                            <select class='form-control' name='specialize_id' id='specialize_id'>
                                <option value=''>-اختر الصنف-</option>
                                @foreach($specializes as $specialize)
                                <option {{old('specialize_id',$doctor->specialize_id)==$specialize->id?'selected':''}}
                                    value='{{$specialize->id}}'>{{$specialize->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">القسم </label>
                        <div class="col-lg-6">
                            <select class="form-control" name='department_id' id='department_id'>
                                <option selected>-اختر القسم- </option>
                                @foreach($departments as $department)
                                <option {{old('department_id',$doctor->department_id)==$department->id?'selected':''}}
                                    value='{{$department->id}}'>
                                    {{$department->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">المدينة </label>
                        <div class="col-lg-6">
                            <select class="form-control" name='city_id' id='city_id'>
                                <option selected>-اختر المدينة- </option>
                                @foreach($cities as $city)
                                <option {{old('city_id',$doctor->city_id)==$city->id?'selected':''}}
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
                                value='{{ old("address",$doctor->address) }}'>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">رقم الهاتف</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="رقم الهاتف " name="mobile"
                                value='{{ old("mobile",$doctor->mobile) }}'>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الراتب الشهري </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="ادخل الراتب الشهري "
                                name="salary" value='{{ old("salary",$doctor->salary) }}'>
                        </div>
                    </div>
                    <div class="m-form__group form-group row">
                        <label class=" col-lg-3 col-form-label">الحالة</label>
                        <div class="m-radio-inline col-lg-6">
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('status',$doctor->status)=='1'?"checked":""}} type="radio" name="status"
                                    checked="" value="1" aria-describedby="account_group-error"> فعال
                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('status',$doctor->status)=='0'?"checked":""}} type="radio" name="status"
                                    value="0"> غير
                                فعال
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
                                        src='{{asset("storage/assets/img/doctors/{$doctor->image}")}}'>
                                </div>
                                <div class="col-6"> <input class=" pt-3" type='file' name="image" id="image" />

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label" for="short_bio">نبذة عن الطبيب</label>
                        <div class="col-lg-6">
                            <textarea class="form-control" id="short_bio" name="short_bio"
                                rows="3">{{ old("short_bio",$doctor->short_bio) }}</textarea>


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
                            <a href='{{route("doctors.index")}}' class="btn btn-secondary">الغاء الامر</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
