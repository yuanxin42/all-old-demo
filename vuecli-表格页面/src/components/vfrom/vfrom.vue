<template>
    <div>
        <form class="ip-box" action="">
            <div class="v-ip" v-for="option in ip_options":key="option.id"> 
                <span>{{option.tit+option.val}}:</span>
                <input v-model="option.val" type="text">
            </div>
            <div class="clearfloat"></div>
            <p class="input_style">订单状态:<label class="input_style_module" v-for="val in ip_checks":key="val.id"><input type="checkbox" v-model="toggle">{{val.tit}}</label>   <!-- `toggle` 为 true 或 false --></p>
            <p class="input_style">下单时间:<label class="input_style_module" v-for="val in ip_radios":key="val.id"><input type="radio" name="Placeordertime" v-model="picked" value="a">{{val.tit}}</label> <!-- 当选中时，`picked` 为字符串 "a" --></p>  
            <input class="ip_sub" type="submit" value="查询">    
        </form>
    </div>

</template>
<script>
    export default{
        data(){
            return {
                ip_options:[
                    {id:'1',val:'',tit:'物料订单号'},
                    {id:'2',val:'',tit:'服务商商户号'},
                    {id:'3',val:'',tit:'收货人手机号'}
                ],
                ip_checks:[
                    {id:'1',val:'',tit:'申请中'},
                    {id:'2',val:'',tit:'已发货'},
                    {id:'3',val:'',tit:'已撤销'}
                ],
                ip_radios:[
                    {id:'1',val:'all',tit:'所有'},
                    {id:'2',val:'sometime',tit:'制定时间'}
                ]
            }     
        },
        methods:{
            
        }
    }
</script>
<style>
    .ip-box{
        width: 1000px;
        margin-left: 30px;
        /* display: flex; */
    }
    .v-ip{
        /* flex: 1; */
        width: 500px;
        height: 50px;
        margin-top: 10px;
        float: left;
    }
    .v-ip span{
        font-size: 20px;
        display: block;
        width: 150px;
        line-height: 40px;
        margin-top: 7px;
        float: left;
    }
    .v-ip input{
        margin-top: 13px;
        line-height: 50px;
        width: 250px;
        height: 25px;
        float: left;
    }
    .clearfloat{
        clear: both;
    }
    .input_style{
        margin-top: 30px;
        margin-bottom: 20px;
    }
    .input_style{
        font-size: 20px;
    }
    .input_style_module{
        margin-left: 20px;
        margin-right: 20px;
    }
    .ip_sub{
        width: 140px;
        height: 35px;
        background: #2f79b8;
        border: 0;
        border-radius: 7px;
        margin-top: 20px;
        font-size: 16px;
        color: white;
    }
</style>