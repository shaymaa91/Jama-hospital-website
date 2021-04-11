@extends("layouts.admin")
@section("title","التعديل على الدواء")

@section("title-side")
<!--a href="{{asset('admin/medicines/create')}}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة تصنيف جديد
        </span>
    </span>
</a-->
@endsection

@section("content")
<div class="m-portlet m-portlet--mobile px-4 py-3">
    <form method="post" action="{{asset('admin/medicines/'.$item->id)}}">
        @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">اسم الدواء</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="ادخل اسم الدواء"
                                name="midicine_name" value='{{ old("midicine_name",$item->midicine_name) }}'>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-3 col-form-label">تاريخ ادخال الدواء</label>
                        <div class="col-6">
                            <input class="form-control m-input" name="entry_date" type="date" placeholder=""
                                id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="example-email-input" class="col-3 col-form-label">تاريخ انتهاء الصلاحية</label>
                        <div class="col-6">
                            <input class="form-control m-input" name="expiration_date" type="date" placeholder=""
                                id="example-email-input">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label for="example-email-input" class="col-3 col-form-label">الكمية</label>
                        <div class="col-6">
                            <input class="form-control m-input" name="available_quantity" type="number" placeholder=""
                                id="example-email-input">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label for="example-email-input" class="col-3 col-form-label">السعر لكل واحدة</label>
                        <div class="col-6">
                            <input class="form-control m-input" name="price" type="number" placeholder=""
                                id="example-email-input">
                        </div>
                    </div>


                    <div class="m-form__group form-group row">
                        <label class="col-lg-3 col-form-label" for="details">الصورة الدواء</label>
                        <input class="col-lg-6" type='file' name="image" id="image" />
                    </div>
                    <div class="m-form__group form-group row">
                    <label class="col-lg-3 col-form-label">وصف الاستخدام</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="ادخل الوصف"
                                name="usage_description" value='{{ old("usage_description") }}'>
                        </div>
</div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary">تعديل</button>
                            <a href="{{asset('admin/medicines')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection