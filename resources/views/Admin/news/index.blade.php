@extends("layouts.admin")
@section("title", "إدارة الأخبار ")
@section("title-side")
<a href="{{asset('admin/news/create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة خبر جديد
        </span>
    </span>
</a>
@endsection

@section("content")
<div class="m-portlet m-portlet--mobile px-4 py-3">
    <div class="m-portlet__body">
        <form class='mb-3'>
            <div class="row">
                <div class='col-4'>
                    <input name='q' id='q' value='{{request()->q}}' autofocus type="text" class='form-control  p-4'
                        placeholder="ابحث هنا..." />
                </div>

                <div class='col-4'>
                    <input type="submit" class='btn btn-primary mr-2' value='بحث' />
                    <input type="submit" class='btn btn-secondary' value='مسح البحث'
                        onclick="document.getElementById('q').value = ''; return true;" />
                </div>

            </div>
        </form>

        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">
                    @if($jama_news->count()>0)
                    <table
                        class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                        id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                        <thead>
                            <tr role="row">
                                <th>
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-group-checkable">
                                        <span></span>
                                    </label>
                                </th>

                                <th>عنوان الخبر </th>
                                <th>تاريخ النشر</th>
                                <th>صورة الخبر </th>
                                <th>الناشر</th>
                                <th width='15%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jama_news as $jama)
                            <tr role="row" class="odd">
                                <td width="1%"  tabindex="0">
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>

                                <td>{{$jama->title }}</td>
                                <td>{{$jama->created_at}}</td>
                                <td><img height=50 width= 50 src='{{asset("storage/assets/img/news/{$jama->image}")}}' alt=""></td>
                                <td>{{$jama->auth_name}}</td>
                                <td>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('news.show',$jama->id)}}" title="عرض"><i
                                            class="la la-eye"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('news.edit',$jama->id)}}" title="تعديل"><i
                                            class="la la-edit"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('news.delete',$jama->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$jama->name}} ؟')" title="حذف"><i class="flaticon-delete"></i>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $jama_news->links() }}
                    @else
                    <div class='alert alert-info'><b>نأسف</b> !لا توجد نتائج
                        <button type="button" class="close pt-0" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
