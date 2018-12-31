<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\HighLevel;
use App\Http\Models\MiddleLevel;
use App\Http\Requests\HighLevelRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class HighLevelController extends Controller
{
    public function index()
    {
        $highlevels=HighLevel::all();
        return view('admin.high_level_index',compact('highlevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.high_level_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HighlevelRequest $request,highlevel $highlevel)
    {
        $highlevel->fill($request->all());
        $highlevel->save();
        Toastr::success('顶级分类添加成功', 'OK');
        return redirect(route('admin.highlevel.index'));
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
        $highlevel= highlevel::find($id);
        return view('admin.high_level_edit',compact('highlevel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(highlevelRequest $request,$id)
    {
        $highlevel=HighLevel::find($id);
        $highlevel->fill($request->all());
        $highlevel->save();
        Toastr::success('修改成功', 'OK');
        return redirect(route('admin.highlevel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(MiddleLevel::where('high_level_id',$id)->count()){
            $data = [
                'status' => 1,
                'msg' => '该高级分类下存在中级分类，请先删除相应的中级分类！',
            ];
        }else{
            $res=HighLevel::where('id',$id)->delete();
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
            $res=MiddleLevel::whereIn('high_level_id', $ids)->count();
            if ($res){
                Toastr::warning('该高级分类下存在中级分类，请先删除中级分类成功:)','删除失败');
            }else{
                HighLevel::whereIn('id', $ids)->delete();
                Toastr::success('信息删除成功 :)','Success');
            }
        }else{
            Toastr::info('请选择相关信息 :)');
        }
        return redirect(route('admin.highlevel.index'));
    }

    //获取高级分类下的中级分类
    public function middlelevels(Request $request)
    {
        $high_level_id = Input::get('high_level_id');
        $middle_levels = MiddleLevel::where('high_level_id', '=', $high_level_id)->get();
        return response()->json($middle_levels);
    }
}
