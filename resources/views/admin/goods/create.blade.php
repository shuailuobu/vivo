@extends('layout.admins')

@section('title',$title)

@section('content')

<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>


<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">

    	<form class="mws-form" action="/admin/goods" method='post' enctype='multipart/form-data'>
    		<div class="mws-form-inline">


                <div class="mws-form-row">
                    <label class="mws-form-label">选择分类</label>
                    <div class="mws-form-item">
                        <select class="small" name='cateid'>
                            <option value='0'>请选择</option>
                            @foreach($res as $k => $v)
                            <option value='{{$v->id}}'>{{$v->catename}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="mws-form-row">
                    <label class="mws-form-label">商品图片</label>
                    <div class="mws-form-item">
                        <div class="fileinput-holder" style="position: relative;">
                            <input type="file" name='gimg[]' multiple style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;"></span>
                        </div>
                    </div>
                </div>


    			<div class="mws-form-row">
    				<label class="mws-form-label">商品名</label>
    				<div class="mws-form-item">
    					<input type="text" name='gname' class="small">
    				</div>
    			</div>

                <div class="mws-form-row">
                    <label class="mws-form-label">颜色</label>
                    <div class="mws-form-item">
                        <input type="text" name='color' class="small">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">内存</label>
                    <div class="mws-form-item">
                        <input type="text" name='size' class="small">
                    </div>
                </div>

    		<div class="mws-form-row">
                    <label class="mws-form-label">详情</label>
                    <div class="mws-form-item">
                        <script id="editor" type="text/plain" name='content' style="width:750px;height:400px;"></script>
                    </div>
                    <script>
                    var ue = UE.getEditor('editor');
                    </script>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">价格</label>
                    <div class="mws-form-item">
                        <input type="text" name='price' class="small">
                    </div>
                </div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">状态</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li><label><input type="radio" name='status' value='1' checked> 上架</label></li>
    						<li><label><input type="radio" name='status' value='0' > 下架</label></li>
    						
    					</ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			{{csrf_field()}}
    			<input type="submit" value="添加" class="btn btn-primary">
    		</div>
    	</form>
    </div>    	
</div>
@stop

@section('js')

@stop