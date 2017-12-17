<template>
    <div id="box">
        <table class="table_box">
            <tr class="table_style">
                <td>订单号</td>
                <td>服务商商户号</td>
                <td>订单类型</td>
                <td>订单状态</td>
                <td>申请时间</td>
                <td>商品总数</td>
                <td>积分消耗</td>
                <td>操作</td>
            </tr>
            <tr v-for="val in table_data":key="val.num" class="other_table_style">
                 <td v-for="val2 in val" :key="val2">{{val2}}</td>
            </tr> 
        </table>      
    </div>
</template>
<script>
    export default{
        data(){
            return{
                table_data:[
                {
                    num:"213123213",
                    servicenum:"123123",
                    type:"服务商平台",
                    state:"申请中",
                    time:"2016-06-18",
                    Totalnumber:"300",
                    consumption:"500",
                    operation:"详情"
                },
                {
                    num:"213123213",
                    servicenum:"123123",
                    type:"服务商平台",
                    state:"申请中",
                    time:"2016-06-18",
                    Totalnumber:"300",
                    consumption:"500",
                    operation:"详情"
                },
                {
                    num:"213123213",
                    servicenum:"123123",
                    type:"服务商平台",
                    state:"申请中",
                    time:"2016-06-18",
                    Totalnumber:"300",
                    consumption:"500",
                    operation:"详情"
                }
             ]
            }
            
        }
    }
</script>
<style>
    #box{
        width: 100%;
        margin-top: 50px;
    }
    .table_box{
        width: 100%;
    }
    .table_style{
        width: 100%;
        display: inline-block;
         display: flex; 
        overflow: hidden; 
        border-right: 1px solid black;
        border-bottom: 1px solid black;
    }
    .table_style td{
        height: 40px;
        line-height: 40px;
        border-left: 1px solid black;
        border-top: 1px solid black;
        text-align: center;
        display: inline-block;
        flex: 1; 
    }
    .table_style_time{
         width: 50%; 
    }
    .other_table_style{
        width: 100%;
        display: inline-block;
        display: flex;
        border-bottom: 1px solid black; 
    }
    .other_table_style td{
        text-align: center;
        display: inline-block;
        overflow: hidden;
        flex: 1;
        height: 80px;
        line-height: 80px; 
    }
</style>

