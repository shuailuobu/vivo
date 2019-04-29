<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Config;
use App\Model\Admin\Sowing;
class SowingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载列表模块
        // return view('admin.sowing.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加模块
        return view('admin.sowing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $res = $request->except(['_token']);

        //往goods表里面存放数据
        //获取最后插入的id号
       $gid = Sowing::insertGetId($res);
        // dd($gid);

        //上传商品的图片
        if($request->hasFile('pic')){

            $files = $request->file('pic');
            // dd($files);
            $gs = [];
            foreach($files as $k => $v){

                $gr = [];

            

                // dump($v);
                //新的名字
                $name = rand(1111,9999).time();

                //后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('/uploads/',$name.'.'.$suffix);

                $gr['pic'] = '/uploads/'.$name.'.'.$suffix;

                $gs[] = $gr;

            }
        }

     
        try{
            $data = Sowing::find($gid)->createMany($gs);

            if($data){

                return redirect('/admin/sowing')->with('success','添加成功');
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
        //
    }
}
