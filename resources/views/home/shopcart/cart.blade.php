@extends('layout.home')
@section('title','购物车')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/homes/common/css/base.min.css" />
    <link rel="stylesheet" href="/homes/common/css/cart.min.css" />
<link rel="stylesheet" href="/js/jquery-3.2.1.min.js" />



@section('luobu')
<script src="jquery-3.2.1.min.js"></script>
<div class="page-main">

    <div class="container">
        <div class="cart-loading loading hide" id="J_cartLoading">
            <div class="loader"></div>
        </div>
       
       
     
        <div id="J_cartBox" class="">
            <div class="cart-goods-list">
                <div class="list-head clearfix">
                    <div class="col col-check"> <i class="iconfont icon-checkbox icon-checkbox-selected" id="J_selectAll">√</i>
                        全选
                    </div>
                    <div class="col col-img">&nbsp;</div>
                    <div class="col col-name">商品名称</div>
                    <div class="col col-price">单价</div>
                    <div class="col col-num">数量</div>
                    <div class="col col-total">小计</div>
                    <div class="col col-action">操作</div>
                </div>
                <div class="list-body" id="J_cartListBody">
                  @foreach($res as $k=>$v)
                    <div class="item-box" data-cid="{{$v->id}}">
                        <div class="item-table J_cartGoods" data-sid="{{$v->id}}" >
                            <div class="item-row clearfix">
                                <div class="col col-check"> <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox">√</i>
                                </div>
                                <div class="col col-img">
                                    <a href="//item.mi.com/1151900011.html" target="_blank">
                                        <img alt="" src="{{$v->gimg}}" width="80" height="80"></a>
                                </div>
                                <div class="col col-name">
                                    <div class="tags">{{$v->name}}</div>
                                    <h3 class="name">
                                        <a href="//item.mi.com/1151900011.html" target="_blank"></a>
                                    </h3>
                                </div>
                                <div class="col col-price">
                                <span class="amount">{{$v->price}}</span>

                                </div>
                                <div class="col col-num">
                                    <div class="change-goods-num clearfix J_changeGoodsNum">
                                      
                                            <i class="minus">-</i>
                                       
                                       <input type="text" name="quantity" value="1" class="qty" />
                                        
                                            <i class="plus">+</span>
                                      
                                    </div>
                                </div>
                                <div class="col col-total">
                                   
                                    ￥<span class="xiaoji">{{$v->price}}</span>
                                </div>
                                <div class="col col-action">
                                    <a id="2151900016_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods">
                                        <i class="iconfont"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                 @endforeach
  
                </div>
            </div>


            <div class="cart-bar clearfix" id="J_cartBar">
                <div class="section-left">
                    <a href="" class="back-shopping J_goShoping"  >继续购物</a>
                 
                    <span class="total-price">
                      未登录,不能下订单和保存商品数量哦!
                    </span>
                  
                </div>

                <span class="total-price">
                    合计（不含运费）： <em id="J_cartTotalPrice">10000元</em>
                    元
                </span>
            
              
                <a href="javascript:void(0);" class="btn btn-a btn btn-primary" id="J_goCheckout">去结算</a>
             
                <div class="no-select-tip hide" id="J_noSelectTip">
                    请勾选需要结算的商品
                    <i class="arrow arrow-a"></i>
                    <i class="arrow arrow-b"></i>
                </div>
            </div>
        </div>
    
        <div class="cart-recommend hide" id="J_historyRecommend"></div>
    

    </div>
</div>
<script>

  //加法
$('.plus').click(function(){
    //让数量发生改变
    // alert(1);
    // alert($('.qty').val());
    var pn = $(this).prev().val().trim();
    pn++;
    $(this).prev().val(pn);
  })
 
</script>
@stop