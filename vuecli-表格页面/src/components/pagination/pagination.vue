<template>
<!-- 比如总共的数据条数的4532条 模拟分页  -->
<div class="pagebox"> 
    <ul class="pagination">
         <li class="pagination_nobtn">总共{{alldata}}:</li> 
         <li class="pagination_btn"><a href="1">首页</a></li> 
         <li class="pagination_btn pagination_pn" @click="prepage"><a href="#"><</a></li> 
         <li class="pagination_nobtn"><a href="">{{thispage}}/{{Finalpage}}</a></li> 
         <li class="pagination_btn pagination_pn" @click="nextpage"><a href="#">></a></li> 
         <li class="pagination_btn"><a v-bind:href="Finalpage">尾页</a></li>
         <li class="pagination_nobtn"><input v-model="gopagenum" class="btn_input" type="text"></li> 
         <li class="pagination_btn"><a @click='gopage' href="#">跳转</a></li> 
    </ul>
</div>
</template>


<script>
    export default{
        data(){
            return{
                alldata:"4532",
                thispage:"1",
                gopagenum:""
            }
        },
        methods:{
            nextpage:function(){
                if((this.thispage+1)<=parseInt(this.alldata/10)){
                    this.thispage++;
                    // window.location.href=this.thispage
                }else{
                   return this.thispage;  
                }                     
            },
            prepage:function(){
                if(this.thispage>1){
                    return this.thispage--;
                }else{
                  return  this.thispage;  
                }   
            },gopage:function(){
                this.thispage = this.gopagenum;
            }
        },
        computed: {
            Finalpage:function(){
                return parseInt(this.alldata/10)
            }
        }
    }
</script>
<style>
    li{
        list-style: none;
    }
    a{
        text-decoration: none;
        color: black;
    }
    .pagebox{
        margin-top: 50px;
        float: right;
        margin-right: 100px;
    }
    .pagination_btn{
        width: 60px;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        margin-right: 10px;
        border: 1px solid gray;
        text-align: center;
        border-radius: 5px;
    }
    .pagination_pn{
        width: 30px;
    }
    .btn_input{
        width: 80px;
        height: 30px;
        border: 1px solid gray;
        border-radius: 5px;
    }
    .pagination_nobtn{
        margin-right: 10px;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        text-align: center;
    }
</style>
