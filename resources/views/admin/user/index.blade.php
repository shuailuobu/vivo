@extends('layout.admins')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
        
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
        
     
        <div class="mws-form-message info">
   
        </div>


            <form action="/admin/user" method='get'>
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        显示
                        <select size="1" name="num" aria-controls="DataTables_Table_1">
                            <option value="10" >
                                10
                            </option>
                            <option value="20" >
                                20
                            </option>
                            <option value="30" >
                                30
                            </option>
                        </select>
                        条数据
                    </label>
                </div>
                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>
                        用户名:
                        <input type="text" name='search' value="" aria-controls="DataTables_Table_1">
                    </label>

                    <label>
                        邮箱:
                        <input type="text" name='email' value="" aria-controls="DataTables_Table_1">
                    </label>

                    <button class='btn btn-info'>搜索</button>
                </div>

            </form>


            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 30px;">
                            ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 80px;">
                            用户名
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                        style="width: 196px;">
                            邮箱
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                        style="width: 100px;">
                            手机号
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 97px;">
                            头像
                        </th>
                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 50px;">
                            状态
                        </th>

                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 97px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">

                   

                 
                    <tr class="odd">
                  
                    <tr class="even">
            
                        <td class="">
                           
                        </td>
                        <td class=" ">
                           
                        </td>
                        <td class=" ">
                        
                            
                        </td>
                        <td class=" ">
                          
                        </td>
                        <td class=" ">
                            <img src="" alt="" style='width: 70px'>
                        </td>
                        <td class=" ">
                            <!-- 三元运算符 -->
                        
                            
                            <!-- 自定义函数 -->
                          
                        </td>
                        <td class=" ">
                            <a class='btn btn-warning' href="">修改</a>

                            <form style='display:inline' action="" method='post'>
                             

                                

                                <button class='btn btn-danger'>删除</button>
                            </form>
                        </td>
                    </tr>
                 
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
             



            </div>
            
            <style>
                .pagination{
                    
                    margin:0px;
                }

                .pagination li{
                    float: left;
                    height: 20px;
                    padding: 0 10px;
                    display: block;
                    font-size: 12px;
                    line-height: 20px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    background-color: #444444;
                    text-decoration: none;
                    border-right: 1px solid rgba(0, 0, 0, 0.5);
                    border-left: 1px solid rgba(255, 255, 255, 0.15);
                    box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                
                }

                .pagination a{
                    color:#fff;
                }

                .pagination .active{
                    background-color: #97c730;
                    color: #323232;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                }

                .pagination .disabled{
                    color: #666666;
                    cursor: default;
                }
            </style>

            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
              
            </div>
        </div>
    </div>
</div>



<script>
    setTimeout(function(){
        $('.mws-form-message').slideUp(1200);
    },3000)
</script>
