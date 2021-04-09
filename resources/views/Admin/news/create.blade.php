@extends("layouts.admin")
@section("title","اضافة خبر جديد")

@section("content")
<div class="m-portlet m-portlet--mobile px-4 py-3">
    <form enctype="multipart/form-data" method='post' action='{{route("news.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">عنوان الخبر </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control m-input" placeholder="ادخل عنوان الخبر " name="title"
                                value='{{ old("title") }}'>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label" for="details">تفاصيل الخبر</label>
                        <div class="col-lg-6">
                            <textarea class="form-control" id="details" name="details"
                                rows="3">{{ old("details") }}</textarea>


                        </div>
                    </div>
                    <div class="m-form__group form-group row">
                        <label class="col-lg-3 col-form-label" for="image">صورة الخبر</label>
                        <input class="col-lg-6" type='file' name="image" id="image" />
                    </div>



                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="submit">إضافة</button>
                            <a href='{{route("news.index")}}' class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
