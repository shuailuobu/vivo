<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use App\Model\Admin\Category;
use App\Model\Admin\Goods;
use App\Model\Admin\Goodsimg;
class Goodscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取商品的数据
        $res = Goods::
        where('gname','like','%'.$request->search.'%')->
        paginate($request->input('num',10));

        return view('admin.goods.index',[
            'title'=>'商品的列表页面',
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
         $res = Category::select(DB::raw('*,concat(path,id) as paths'))
        ->orderBy('paths')
        ->get();

        foreach ($res as $k => $v) {
            //$v->path  0,1, 0,
            // $level = count(explode(',', $v->path))-2;
            $level = substr_count($v->path,',')-1;

            $v->catename = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$level).$v->catename;
        }

        return view('admin.goods.create',[
            'title'=>'商品的添加页面',
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
        $res = $request->except(['_token','gimg']);

        //往goods表里面存放数据
        //获取最后插入的id号
        $gid = Goods::insertGetId($res);
        // dd($gid);

        //上传商品的图片
        if($request->hasFile('gimg')){

            $files = $request->file('gimg');

            $gs = [];
            foreach($files as $k => $v){

                $gr = [];

                $gr['gid'] = $gid;

                // dump($v);
                //新的名字
                $name = rand(1111,9999).time();

                //后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./upload/admin/goodsimg/',$name.'.'.$suffix);

                $gr['gimg'] = '/upload/admin/goodsimg/'.$name.'.'.$suffix;

                $gs[] = $gr;

            }
        }

        try{
            $data = Goods::find($gid)->gimgs()->createMany($gs);

            if($data){

                return redirect('/admin/goods')->with('success','添加成功');
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
         $res = Category::select(DB::raw('*,concat(path,id) as paths'))
        ->orderBy('paths')
        ->get();

        foreach ($res as $k => $v) {
            //$v->path  0,1, 0,
            // $level = count(explode(',', $v->path))-2;
            $level = substr_count($v->path,',')-1;

            $v->catename = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$level).$v->catename;
        }

        //通过id获取数据
        $rs = Goods::where('id',$id)->first();

        $gimgs = Goodsimg::where('gid',$id)->get();

        return view('admin.goods.edit',[
            'title'=>'商品的修改页面',
            'rs'=>$rs,
            'res'=>$res,
            'gimgs'=>$gimgs
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
         //表单验证
        //商品的基本信息修改
        $res = $request->except('_token','_method','gimg');

        Goods::where('id',$id)->update($res);
    
        //商品的文件上传  跟新添加的商品一致
        if($request->hasFile('gimg')){

            $files = $request->file('gimg');

            $gs = [];
            foreach($files as $k => $v){

                $gr = [];

                $gr['gid'] = $id;

                // dump($v);
                //新的名字
                $name = rand(1111,9999).time();

                //后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./upload/admin/goodsimg/',$name.'.'.$suffix);

                $gr['gimg'] = '/upload/admin/goodsimg/'.$name.'.'.$suffix;

                $gs[] = $gr;

            }
        }

        try{
            $data = Goods::find($id)->gimgs()->createMany($gs);

            if($data){

                return redirect('/admin/goods')->with('success','修改成功');
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
        //一对多的删除
        $rs = Goodsimg::where('gid',$id)->get();

        foreach($rs as $k => $v){

            unlink('.'.$v->gimg);
        }

        //删除表goods里面的信息
        $gs = Goods::find($id);

        $gs->delete();

        //删除和goods表相关联的信息
        $data = $gs->gimgs()->delete();
       
        if($data){

            return redirect('/admin/goods')->with('success','删除成功');
        } else {

            return back()->with('error','删除失败');
            

        }
    }
}
