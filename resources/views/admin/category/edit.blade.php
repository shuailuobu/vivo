@extends('layout.admins')

@section('title',$title)

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/category/{{$res->id}}" method='post' >
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">分类名</label>
    				<div class="mws-form-item">
    					<input type="text" name='catename' class="small" value="{{$res->catename}}">
    				</div>
    			</div>

    		    <div class="mws-form-row">
                    <label class="mws-form-label">父级分类</label>
                    <div class="mws-form-item">
                        <select class="small" name='pid' disabled>
                            <!-- <option value='0'>请选择</option> -->
                            @foreach($rs as $k => $v)
                                @if($res->pid == $v->id)
                                    <option value='{{$v->id}}' selected>{{$v->catename}}</option>
                                @else 
                                    <option value='0'>请选择</option>
                                @endif
                            
                            @endforeach
                        </select>
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
