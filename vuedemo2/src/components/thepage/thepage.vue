<template>
    <div>
        <h5 class="page-header">新增叠加计费套餐</h5>
        <div class="page-contain">
            <div class="page_title row">
                <div class="title_box col-md-5 row">
                    <span class="title_left col-md-6">商户号：</span>
                    <span class="title_right col-md-6">12320324</span>
                </div>
                <div class="title_box col-md-5 row">
                    <span class="title_left col-md-6">财付通商户号：</span>
                    <span class="title_right col-md-6">12320324</span>
                </div>
                 <div class="title_box col-md-5 row">
                    <span class="title_left col-md-6">商户号：</span>
                    <span class="title_right col-md-6">12320324</span>
                </div>
                <div class="title_box col-md-5 row">
                    <span class="title_left col-md-6">商户号:</span>
                    <span class="title_right col-md-6">12320324</span> 
                </div>
            </div>
            <h5 class="page-now-tit">当前结算套餐</h5>
            <div class="page-table">
                <table>
                    <tr class="row page-table-top">
                        <td class="col-md-2">结算套餐</td>
                        <td class="col-md-2">分类</td>
                        <td class="col-md-4">套餐内容</td>
                        <td class="col-md-2">开始时间</td>
                        <td class="col-md-2">结束时间</td> 
                    </tr>
                    <tr class="row">
                        <td class="col-md-2">1232321321313</td>
                        <td class="col-md-2">默认</td>
                        <td class="col-md-4">默认——鞍山酒店；撒娇；了撒娇啊是到了拉萨的啊距离喀什 默认——鞍山酒店；撒娇；了撒娇啊是到了拉萨的啊距离喀什</td>
                        <td class="col-md-2">自签约之日</td>
                        <td class="col-md-2">2014-45-42（长期有效）</td>
                    </tr>
                </table>
            </div>
            <h5 class="page-now-tit">新增叠加计费套餐</h5> 
            <ul class="page-form">
                <li><span>结算套餐:</span><select class="page-form-select" name=""> 
                        <option>请选择套餐</option> 
                        <option value="1">DIVCSS5</option> 
                    </select>                   
                </li>
                <li><span>开始日期:</span>自签约之日
                </li>
                <li><span>结束日期</span><input class="page-form-input" type="date" name="user_date">

                </li>
                <li><span>申请运营:</span><input  class="page-form-input" type="text" value="请输入您的电话号码" onfocus="if(value=='请输入您的电话号码') {value=''}" onblur="if (value=='') {value='请输入您的电话号码'}">

                </li>
                <li><span>申请商户行业:</span><input class="page-form-input"  type="text" value="请输入您的电话号码" onfocus="if(value=='请输入您的电话号码') {value=''}" onblur="if (value=='') {value='请输入您的电话号码'}">

                </li>
                <li><span>新增原因:</span><textarea rows="2" cols="150">
                     在w3school，你可以找到你所需要的所有的网站建设教程。
                </textarea>

                </li>
                <li><span>相关证明:</span>

                </li>
            </ul>
        </div>

    </div>
</template>
<script>
    export default{

    }
</script>
<style>
    *{
        padding: 0;
        margin: 0;
        /* overflow: hidden; */
    }
    li{
        list-style: none;
    }
    .page-header{
        height: 50px;
        line-height: 50px;
        background: #f2f2f2;
        border-bottom: 1px solid gray;
        padding-left: 3%;
    }
    .page-contain{
        padding-top: 50px;
        padding-left: 5%;
        padding-right: 10%;
    }
    .page_title{
        width: 60%;
    }
    .title_box{       
        margin-right: 10% ;
    }
     .title_left{
        height: 30px;
        line-height: 30px;
        font-weight: 600;
    }
    .title_right{
        height: 30px;
        line-height: 30px;
    } 
    .page-now-tit{
        height: 50px;
        line-height: 50px;
        font-weight: 600;
    }
    .page-table{
        border-bottom:  1px solid gray;
        margin-bottom: 30px;
    }
    .page-table-top{
        /* width: 80%; */
        background: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    .page-table-top td{
        font-weight: 600;
    }
    .page-table tr{
        border-top:1px solid gray;
        border-left: 1px solid gray;
    }
    .page-table td{
        border-right: 1px solid gray;
        height: 65px;
    }
    .page-form{
        margin-left: -5% ;
    }
    .page-form li{
        /* background: red; */
        height: 50px;
        line-height: 50px;
        margin-bottom: 20px;
    }
    .page-form li span{
        width: 10%;
        display: inline-block;
        text-align: right;
        margin-right: 10%;
    }
    .page-form-select{
        display: inline-block;
         width: 70%; 
         margin-top: -70px;
    }
    .page-form-input{
         height: 30px;
        /* text-align: center;  */
        padding-left: 10px;
        line-height: 30px;
    }
</style>
