<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\ElementaryLevel;
use App\Http\Models\HighLevel;
use App\Http\Models\MiddleLevel;
use App\Http\Requests\MiddlelevelRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MiddleLevelController extends Controller
{
    public function index()
    {
        $middlelevels=MiddleLevel::with('highlevel')->get();
        return view('admin.middle_level_index',compact('middlelevels'));
    }


    public function create()
    {
        $highlevels=HighLevel::all();

        return view('admin.middle_level_create',compact('highlevels'));
    }

    public function store(MiddlelevelRequest $request,MiddleLevel $middlelevel)
    {
        $middlelevel->fill($request->all());
        $middlelevel->save();
        Toastr::success('中级分类添加成功', 'OK');
        return redirect(route('admin.middlelevel.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $highlevels=HighLevel::all();
        $middlelevel= Middlelevel::with('highlevel')->find($id);
        return view('admin.middle_level_edit',compact('highlevels','middlelevel'));
    }


    public function update(MiddlelevelRequest $request,$id)
    {
        $middleLevel=MiddleLevel::find($id);
        $middleLevel->fill($request->all());
        $middleLevel->save();
        Toastr::success('修改成功', 'OK');
        return redirect(route('admin.middlelevel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(ElementaryLevel::where('middle_level',$id)->count()){
            $data = [
                'status' => 1,
                'msg' => '该高级分类下存在中级分类，请先删除相应的中级分类！',
            ];
        }else{
            $res=MiddleLevel::where('id',$id)->delete();
            if($res){
                $data = [
                    'status' => 0,
                    'msg' => '删除成功！',
                ];
            }
        }
        return $data;
    }

    //删除所选
    public function delall(Request $request)
    {
        $ids = $request->input('ids');
        if($ids){
            $res=ElementaryLevel::whereIn('middle_level', $ids)->count();
            if ($res){
                Toastr::warning('该中级分类下存在低级分类，请先删除低级分类:)','删除失败');
            }else{
                MiddleLevel::whereIn('id', $ids)->delete();
                Toastr::success('信息删除成功 :)','Success');
            }

        }else{
            Toastr::info('请选择相关信息 :)');
        }
        return redirect(route('admin.middlelevel.index'));
    }
}
