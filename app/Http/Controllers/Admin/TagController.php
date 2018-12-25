<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Tag;
use App\Http\Requests\TagRequest;
use Brian2694\Toastr\Facades\Toastr; //引入这个
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tag::all();
        return view('admin.tag_index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request,Tag $tag)
    {
        $tag->fill($request->all());
        $tag->save();
        Toastr::success('标签添加成功', 'OK');
        return redirect(route('admin.tag.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag= Tag::find($id);
        return view('admin.tag_edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request,Tag $tag)
    {
        $tag->fill($request->all());
        $tag->save();
        Toastr::success('标签修改成功', 'OK');
        return redirect(route('admin.tag.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Tag::where('id',$id)->delete();
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
        Link::whereIn('id', $ids)->delete();
        Toastr::success('信息删除成功 :)','Success');
        return redirect(route('admin.link.index'));
    }
}
