@extends("layouts.admin")
@section("title","ادارة التصنيفات")

@section("title-side")
<a href="{{asset('admin/Specialize/create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة إختصاص جديد
        </span>
    </span>
</a>
@endsection

@section("content")
<div class="m-portlet m-portlet--mobile px-4 py-3">
    <div class="m-portlet__body">
        <form>
            <div class='row mb-3'>
                <div class='col-sm-8'>
                    <input type='text' value="{{request()->q}}" name="q" class='form-control'
                        placeholder='أدخل كلمة البحث هنا' />
                </div>
                <div class='col-sm-3'>
                    <select name="active" class='form-control'>
                        <option value=''>الحالة</option>
                        <option value='1'>فعال</option>
                        <option value='0'>غير فعال</option>
                    </select>
                </div>
                <div class='col-sm-1 text-right'>
                    <button type="submit" class='btn btn-primary'><i class='fa fa-search'></i></button>
                </div>
            </div>
        </form>
        <!--begin: Datatable -->
        @if($items->count()>0)
        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped- table-bordered table-hover">
                        <thead>
                            <tr role="row">
                                <th width='1%'>
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-group-checkable">
                                        <span></span>
                                    </label>
                                </th>
                                <th>الاسم</th>
                                <th>الحالة</th>
                                <th> اخر تحديث</th>
                                <th>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr role="row" class="odd">
                                <td>
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->active==0?'غير فعال':' فعال'}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>


                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('Specialize.show',$item->id)}}" title="عرض"><i
                                            class="la la-eye"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('Specialize.edit',$item->id)}}" title="تعديل"><i
                                            class="la la-edit"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('Specialize.delete',$item->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$item->name}} ؟')" title="حذف"><i class="flaticon-delete"></i> 
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$items->links()}}
                    @else
                    <div class="alert alert-info"> لا يوجد نتائج في البحث..... </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection