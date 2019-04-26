<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Role;
use App\Model\Admin\Permission;
use DB;
class RoleController extends Controller
{

     /**
     * 角色权限的页面
     *
     * @return \Illuminate\Http\Response
     */
    public function roleper($id)
    {
        //根据id获取相应的信息
        $res = Role::find($id);

        //把权限的信息获取
        $pers = Permission::get();

        //获取当前的角色有哪些权限
        $info = $res->pers;

        //通过模型的多对多 找到角色对用哪些权限
        //然后进行遍历 组成一个数组
        $arr = [];
        foreach($info as $k => $v){

            $arr[] = $v->id;
        }


        return view('admin.role.roleper',[
            'title'=>'角色权限添加页面',
            'res'=>$res,
            'pers'=>$pers,
            'arr'=>$arr
        ]);
    }

    /**
     *  处理角色权限的方法
     *
     * @return \Illuminate\Http\Response
     */
    public function doroleper(Request $request)
    {
        //获取角色的id
        $roleid = $request->rid;
        //获取权限的id
        $perid = $request->per_id;

        //根据角色id删除响应的信息
        DB::table('role_per')->where('role_id',$roleid)->delete();

        //遍历权限的id  拼成一个二维数组
        $arr = [];
        foreach($perid as $k => $v){

            $rs = [];

            $rs['role_id'] = $roleid;
            $rs['per_id'] = $v;

            $arr[] = $rs;
        }

        //给角色权限添加信息
        $data = DB::table('role_per')->insert($arr);
        //判断
        if($data){

            return redirect('/admin/role');
        } else {

            return back();
        }




    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = Role::where('rname','like','%'.$request->search.'%')->paginate($request->input('num',10));



        return view('admin.role.index',[
            'title'=>'角色的列表页面',
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
        return view('admin.role.create',['title'=>'角色添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs = $request->only('rname');

        try{
            $data = Role::create($rs);

            if($data){
               return redirect('/admin/role')->with('success','添加成功'); 
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 根据id获取响应的数据
        $rs = Role::find($id);

        return view('admin.role.edit',[
            'title'=>'角色的修改页面',
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
       $res = $request->only('rname');

        $data = Role::where('id',$id)->update($res);

        if($data){

            return redirect('admin/role')->with('success','修改成功');
        } else {

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
          $data = Role::destroy($id);

        if($data){

            return redirect('admin/role')->with('success','删除成功');
        } else {

            return back()->with('error','删除失败');
        }
    
    }
}
