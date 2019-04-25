@extends('layout.admins')

@section('title',$title)

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">

    	@if(session('error'))
            <div class="mws-form-message warning">
                {{session('error')}}
            </div>
        @endif

    	<form class="mws-form" action="/admin/dopass/{{$id}}" method='post'>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">原密码</label>
    				<div class="mws-form-item">
    					<input type="password" name='oldpass' class="small">

    					<img src="/img/close.png" class='imgs' alt="">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">新密码</label>
    				<div class="mws-form-item">
    					<input type="password" name='password' class="small">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">确认密码</label>
    				<div class="mws-form-item">
    					<input type="password" name='repass' class="small">
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			{{csrf_field()}}
    			<input type="submit" value="修改" class="btn btn-primary">
    		</div>
    	</form>
    </div>    	
</div>
@stop

@section('js')
<script>
	alert($);
	// $('.imgs').click(function(){

	// 	//获取input框的type类型
	// 	var type  = $(this).prev().attr('type');

	// 	if(type == 'password'){

	// 		$(this).prev().attr('type','text');

	// 		$(this).attr('src','/img/open.png');
	// 	} else {

	// 		$(this).prev().attr('type','password');

	// 		$(this).attr('src','/img/close.png');
	// 	}
	// })
</script>
@stop

