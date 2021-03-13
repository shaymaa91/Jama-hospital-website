<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Specialize\CreateRequest;
use App\Http\Requests\Specialize\EditRequest;
use App\Models\specialize;
use Session;

class SpecializeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q=$request->q;

         $active=$request->active;
         $items=specialize::whereRaw("true");

         if($active)
         {
             $items->where("active",$active);
         }
         if($active=="0")
         {
             
             $items->where("active",$active);
         }
         if($q)
         {
             $items->whereRaw('(name like ? )',["%$q%"]);
         }
         
        
         $items=$items->paginate(10)
         ->appends([
             'q'=>$q,
             'active'=>$active
         ]);
 

        return view("admin.Specialize.index")->with("items",$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.Specialize.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $data=$request->all();        
        Specialize::create($data);
        Session::flash("msg","تم اضافة الإختصاص بنجاح");
    
        return redirect (route("Specialize.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item= Specialize::find($id);
        if(!$item)
        {
            session()->flash("msg","Invalid ID");
            return redirect(route("Specialize.index"));
        }

        return view("admin.Specialize.show",compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= Specialize::find($id);
        if(!$item)
        {
            session()->flash("msg","Invalid ID");
            return redirect(route("Specialize.index"));

        }
        return view("admin.Specialize.edit",compact('item'));
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
        $item=Specialize::find($id);
        $data=$request->all();
        if($request['active']==1){
        $data['active']=1;
        }
        else{
        $data['active']=0;
        }
        $item->update($data);  
        Session::flash("msg"," تم التعديل بنجاح");
  
        return redirect (route("Specialize.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Specialize::find($id);
        $item->delete();
        Session::flash("msg","تم حذف التصنيف بنجاح");
        return redirect (route("Specialize.index"));
    }
}