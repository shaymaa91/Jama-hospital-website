<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Storage;
use App\Models\jama_news;

class JamaNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $q = $request->q;

        $query = jama_news::whereRaw('true');



        if($q){
            $query->whereRaw('(title like ?)',["%$q%"]);
        }


        $jama_news = $query->paginate(7)
        ->appends([
            'q'     =>$q
        ]);

        return view("admin.news.index",compact('jama_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jama_news = jama_news::all();
        return view("admin.news.create",compact('jama_news'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = $request->image->store("public/assets/img/news/");
        $imageName = $request->image->hashName();

        $requestData = $request->all();
        $requestData['news_img'] = $imageName;
        $requestData['auth_name'] = auth()->user()->name;
        if(auth()->user()->image){
            $requestData['auth_img'] = auth()->user()->image;
        }
        else{
            $requestData['auth_img'] = 'default.jpg';
        }


        //insert on jama_news table
        jama_news::create($requestData);

        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("news.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemDB = jama_news::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم حذف المستخدم بنجاح");
        return redirect(route("news.index"));
    }
}
