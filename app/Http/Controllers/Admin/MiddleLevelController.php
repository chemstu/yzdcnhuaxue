<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\HighLevel;
use App\Http\Models\MiddleLevel;
use App\Http\Requests\MiddlelevelRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MiddleLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $middlelevels=MiddleLevel::with('highlevel')->get();
        return view('admin.middle_level_index',compact('middlelevels'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $highlevels=HighLevel::all();

        return view('admin.middle_level_create',compact('highlevels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MiddlelevelRequest $request,MiddleLevel $middlelevel)
    {
        $middlelevel->fill($request->all());
        $middlelevel->save();
        Toastr::success('中级分类添加成功', 'OK');
        return redirect(route('admin.middlelevel.index'));
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
        $res=MiddleLevel::where('id',$id)->delete();
        if($res){
            $data = [
                'status' => 0,
                'msg' => '删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '删除失败，请稍后重试！',
            ];
        }
        return $data;
    }

    //删除所选
    public function delall(Request $request)
    {
        $ids = $request->input('ids');
        if($ids){
            MiddleLevel::whereIn('id', $ids)->delete();
            Toastr::success('信息删除成功 :)','Success');

        }else{
            Toastr::info('请选择相关信息 :)');
        }
        return redirect(route('admin.middlelevel.index'));
    }
}
