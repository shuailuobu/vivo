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

    	<form class="mws-form" action="/admin/douserrole?id={{$res->id}}" method='post' >
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">用户名</label>
    				<div class="mws-form-item">
    					<input type="text" name='name' class="small" value="{{$res->name}}">
    				</div>
    			</div>

                <div class="mws-form-row">
                    <label class="mws-form-label">角色名</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            @foreach($roles as $k => $v)
                                @if(in_array($v->id, $ar))
                                    <li><input type="checkbox" name='role_id[]' value='{{$v->id}}' checked> <label>{{$v->rname}}</label></li>

                                @else 
                                    <li><input type="checkbox" name='role_id[]' value='{{$v->id}}' > <label>{{$v->rname}}</label></li>

                                @endif
                            @endforeach
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
	<script>
		/*setTimeout(function(){

			$('.mws-form-message').hide();

		},3000)*/

		$('.mws-form-message').delay(3000).fadeOut(1200);
	</script>
@stop