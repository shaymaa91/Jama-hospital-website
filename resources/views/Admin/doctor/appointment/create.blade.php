@extends("layouts.admin")
@section("title","اضافة موعد جديد")

@section("content")
<div class="m-portlet m-portlet--mobile">
    <form method='post' action='{{route("appointment.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                    <label class=" col-form-label"> اسم الدكتور</label>
                        <div class="col-lg-5">
                        <select class="form -control" name="doctor_id" id="cities_id"
                                style="width:150px;height:34px">
                                <option value=""></option>

                        @foreach($doctors as $doctor)
                                <option {{old('doctor_id')==$doctor->fullname?'selected':''}}
                                    value='{{$doctor->fullname}}'>{{$doctor->fullname}} </option>
                                @endforeach



                            </select>
                    </div>
                   
                    <!--label class=" col-form-label"> الايام المتاحة</label>
                        <div class="col-lg-5">
                        <div class="form-group">
                        <select class="mul-select" multiple="true" name="day" id="cities_id"
                                style="width:150px;height:34px " >
                             
                                
                       <!-- @foreach($days as $day)
                                <option {{old('day')==$day->name?'selected':''}}
                                    value='{{$day->name}}'>{{$day->name}} </option>
                                    <option {{old('day')==$day->name?'selected':''}}
                                    value='{{$day->name}}'>{{$day->name}} </option>
                                    <option {{old('day')==$day->name?'selected':''}}
                                    value='{{$day->name}}'>{{$day->name}} </option>
                                    
                                @endforeach



                            </select>-->
                            <label class=" col-form-label">الايام المتاحة</label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control m-input" placeholder="ادخل الموعد" name="day"
                                value='{{ old("day") }}'>
                        </div>
                           
                        </div>
                    </div>
</div>
                    <div class="card">
                    <div clas="card-body">
                    <table class="table table-bordered table-left">
  <thead>
    <tr>
    <th></th>
      <th >بدء الدوام</th>
      <th >نهاية الدوام</th>
      <th >رسالة</th>
      <th> الحالة</th>
     
     
      <th><a href="#" class="btn btn-success add_more rounded-circle"> <i class="fa fa-plus"></i></a>
</th>
    </tr>

  </thead>
  <tbody class="addMoreProduct">

  <tr>
  <td class="no">1</td>
 
<td> <input type="time" name="starttime" id="quantity" class="form-control quantity"/>
                
            
</td>
       
  <td>
  <input type="time" name="endtime" id="quantity" class="form-control quantity"/></td>
  <td><input type="text" name="note" id="price" class="form-control price"/></td>
  <td> <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('status')=='active'?"checked":""}} type="radio" name="status_id" checked=""
                                    value="1" aria-describedby="account_group-error"> متاح <span></span>
                            </label>
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('status')=='unactive'?"checked":""}} type="radio" name="status_id"
                                    value="0"> غير
                                غير متاح
                                <span></span>
                            </label></td>
 
  
  
</tr>

</tbody>
</table>
                    </div>
                    </div>

                    </div>
                    </div>
                    
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="submit">إضافة</button>
                            <a href='' class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



@endsection
@section('js')
<script>
        $(document).ready(function(){
            $('.mul-select' ).select2({
                   
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
    </script>
    @endsection

