@extends("layouts.admin")

@section("title-side")
<a href="{{asset('admin/doctors/create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة طبيب جديد
        </span>
    </span>
</a>
@endsection


@section("content")

<h2 class="text-center m-5 pt-5"> طبيب: {{$doctor->fullname }}</h2>

<div class="container d-flex justify-content-center align-items-center flex-column">
    <div class="card mb-3" style="max-width: 640px;">
        <div class="row ">
            <div class="col-md-6">
                <img class="card-img" style="height:300px;width:300px"
                    src='{{asset("storage/assets/img/{$doctor->image}")}}'>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">{{$doctor->fullname }}</h5>
                    <p class="card-text">
                    <ul>
                        <li> البريد الالكتروني: {{ $doctor->user->email }}</li>
                        <li> الدرجة العلمية: {{ $doctor->degree }}</li>
                        <li> الإختصاص: {{ $doctor->specialize->name??'' }}</li>
                        <li> القسم: {{ $doctor->department->title??'' }} </li>
                        <li> الراتب الشهري : {{ $doctor->salary }} </li>
                        <li> الحالة: {{$doctor->active=='1'?"فعال":"غير فعال"}} </li>
                        <li> نبذة عن الطبيب: {{ $doctor->short_bio }}</li>
                    </ul>
                    </p>

                </div>
            </div>
        </div>

    </div>
    <div class="">
        <p class="card-text">
            <a href='{{ route("doctors.edit",$doctor->id) }}' class='btn btn-sm btn-info'>تعديل</a>
            <a class='btn btn-light' href='{{route("doctors.index")}}'>إالغاء</a>


        </p>
    </div>

</div>
@endsection