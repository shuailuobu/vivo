<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequest;
use App\Model\Admin\User;
use Intervention\Image\ImageManagerStatic as Image;
use Hash;
class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          $res = User::orderBy('id','asc')
            ->where(function($query) use($request){
                //检测关键字
                $name = $request->search;
                $email = $request->email;
                //如果用户名不为空
                if(!empty($name)) {
                    $query->where('name','like','%'.$name.'%');
                }
                //如果邮箱不为空
                if(!empty($email)) {
                    $query->where('email','like','%'.$email.'%');
                }
            })
            ->paginate($request->input('num', 10));

        return view('admin.user.index',[
            'title'=>'用户的列表页面',
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
        return view('admin.user.create',['title'=>'用户的添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequest $request)
    {

$res = $request->except('_token','profile','repass');

        //文件上传
        if($request->hasFile('profile')){
            //获取文件信息
            $file = $request->file('profile');

            //修改名字
            $name = rand(1111,9999).time();

            //获取文件的后缀
            $suffix = $file->getClientOriginalExtension();

            $names = $name.'.'.$suffix;

            $file->move('./upload/admin',$names);

            //服务器里面需要有裁剪的图片
            $img = Image::make("upload/admin/{$names}");

            //等比缩放
            $width = $img->width() / 5;
            $height = $img->height() / 5;
            $img->resize($width, $height);

            $imgs = str_random(10).'.'.$suffix;

            $img->save("upload/admin/{$imgs}");

            //把图片保存到数据库中
            $res['profile'] = "/upload/admin/{$imgs}";
        }

        //密码
        //hash
        $res['password'] = Hash::make($request->password);

        //网数据库中添加数据
        $data = User::create($res);

        if($data){

            return redirect('/admin/user')->with('success','添加成功'); 
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
        //根据id获取响应的数据
        $res = User::find($id);

        return view('admin.user.edit',['title'=>'用户的修改页面','res'=>$res]);
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
        //获取请求的信息
        $res = $request->except('_token','_method','profile');

        //文件上传
        if($request->hasFile('profile')){
            //获取文件信息
            $file = $request->file('profile');

            //修改名字
            $name = rand(1111,9999).time();

            //获取文件的后缀
            $suffix = $file->getClientOriginalExtension();

            $names = $name.'.'.$suffix;

            $file->move('./upload/admin',$names);

            //服务器里面需要有裁剪的图片
            $img = Image::make("upload/admin/{$names}");

            //等比缩放
            $width = $img->width() / 5;
            $height = $img->height() / 5;
            $img->resize($width, $height);

            $imgs = str_random(10).'.'.$suffix;

            $img->save("upload/admin/{$imgs}");

            //把图片保存到数据库中
            $res['profile'] = "/upload/admin/{$imgs}";
        }

        //修改数据
        $data = User::where('id', $id)->update($res);

        if($data){

            return redirect('/admin/user')->with('success','修改成功');
        } else {

            return back();

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
         //根据id值删除用户
        $data = User::where('id',$id)->delete();

        if($data){

            return redirect('/admin/user')->with('success','删除成功');
        } else {

            return back();
        }

    
    }
}
