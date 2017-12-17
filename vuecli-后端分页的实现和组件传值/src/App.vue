<template>
  <div>
      <vfrom></vfrom>
      <vtable></vtable>
      <pagination></pagination>
  </div>

</template>

<script>
import vfrom from "./components/vfrom/vfrom"
import vtable from "./components/vtable/vtable"
import pagination from "./components/pagination/pagination"
export default {
 components:{
   vfrom,
   vtable,
   pagination
 }
}
</script>

<style>
</style>
