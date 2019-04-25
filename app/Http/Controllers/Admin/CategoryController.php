<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Category;

use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
           //把分类中的数据列出来
        $res = Category::select(DB::raw('*,concat(path,id) as paths'))->
        where('catename','like','%'.$request->search.'%')->
        orderby('paths')->
        paginate($request->input('num',10));

        foreach ($res as $k => $v) {
            //$v->path  0,1, 0,
            // $level = count(explode(',', $v->path))-2;
            $level = substr_count($v->path,',')-1;

            $v->catename = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$level).$v->catename;
        }

        return view('admin.category.index',[
            'title'=>'分类的列表页面',
            'res'=>$res,
            'request'=>$request

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         //构造器或者模型方式
        $res = Category::select(DB::raw('*,concat(path,id) as paths'))
        ->orderBy('paths')
        ->get();

        foreach ($res as $k => $v) {
            //$v->path  0,1, 0,
            // $level = count(explode(',', $v->path))-2;
            $level = substr_count($v->path,',')-1;

            $v->catename = str_repeat('+',$level).$v->catename;
        }

        return view('admin.category.create',[
            'title'=>'添加分类的页面',
            'res'=>$res

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //获取数据
        $res = $request->except('_token');

        if($res['pid'] == '0'){

            $res['path'] = '0,';
        } else {

            $rs = Category::where('id',$res['pid'])->first();

            $res['path'] = $rs->path.$rs->id.',';
        }

        try{
            $data = Category::create($res);

            if($data){

                return redirect('/admin/category')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back()->with('error','添加失败');
        }
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
          $res = Category::find($id);

        // dump($res);

        $rs = Category::select(DB::raw('*,concat(path,id) as paths'))
        ->orderBy('paths')
        ->get();

        foreach ($rs as $k => $v) {
            //$v->path  0,1, 0,
            // $level = count(explode(',', $v->path))-2;
            $level = substr_count($v->path,',')-1;

            $v->catename = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$level).$v->catename;
        }



        return view('admin.category.edit',[
            'title'=>'分类的修改页面',
            'res'=>$res,
            'rs'=>$rs
        ]);
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
         //获取数据
        $rs = $request->only('catename','status');

         try{
            $data = Category::where('id',$id)->update($rs);

            if($data){

                return redirect('/admin/category')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // 根据id获取path响应的数据
        $res = Category::where('id', $id)->first();

        $path = $res->path.$res->id.',';

        Category::where('path','like','%'.$path.'%')->delete();

        $data = Category::destroy($id);

        // dd($data);

        if($data){
            return redirect('/admin/category')->with('success','删除成功');
        } else {

             return back()->with('error','删除失败');
        }
    }
}
