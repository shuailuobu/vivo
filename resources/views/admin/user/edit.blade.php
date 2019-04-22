@extends('layout.admins')

@section('title',$title)

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">

		@if (count($errors) > 0)
		    <div class="mws-form-message error">
		    	错误信息是:
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style='font-size:16px'>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

    	<form class="mws-form" action="/admin/user/{{$res->id}}" method='post' enctype='multipart/form-data'>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">用户名</label>
    				<div class="mws-form-item">
    					<input type="text" name='name' class="small" value="{{$res->name}}">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">邮箱</label>
    				<div class="mws-form-item">
    					<input type="text" name='email' class="small" value="{{$res->email}}">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">手机号</label>
    				<div class="mws-form-item">
    					<input type="text" name='phone' class="small" value="{{$res->phone}}">
    				</div>
    			</div>

				<div class="mws-form-row">
                	<label class="mws-form-label">头像</label>
                	<div class="mws-form-item">
                    	<div class="fileinput-holder" style="position: relative;">

                            <img src="{{$res->profile}}" alt="">
	                    	<input type="file" name='profile' style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;"></span>
	                    </div>
                    </div>
                </div>


    			<div class="mws-form-row">
    				<label class="mws-form-label">状态</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li><label><input type="radio" name='status' value='1' @if($res->status == 1) checked @endif> 开启</label></li>
    						<li><label><input type="radio" name='status' value='0'  @if($res->status == 0) checked @endif> 禁用</label></li>
    						
    					</ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			{{csrf_field()}}
                 {{method_field('PUT')}}
    			<input type="submit" value="修改" class="btn btn-primary">
    		</div>
    	</form>
    </div>    	
</div>
@stop

@section('js')
	<script>
		/*setTimeout(function(){

			$('.mws-form-message').hide();

		},3000)*/

		$('.mws-form-message').delay(3000).fadeOut(1200);
	</script>
@stop