<template>
  <div>
    <myheader></myheader>
      <div>1</div>
      <div>
        <router-link to="aa">btn1</router-link>
        <router-link to="bb">btn2</router-link>
        <router-link to="cc">btn3</router-link>
      </div>
       <router-view></router-view>
  </div>
</template>

<script>
import myheader from "./components/header/header";
import btn1 from "./components/btn1/btn1"
import btn2 from "./components/btn2/btn2"
import btn3 from "./components/btn3/btn3"
export default {
 components:{
   myheader,
   btn1,
   btn2,
   btn3
 }
}
</script>

<style>
</style>
