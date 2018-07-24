<template>
  <div class="hello">
    <x-chart :id="id" :option="option"></x-chart>
  </div>
</template>

<script>

import HighCharts from 'highcharts'
import XChart from './Chats.vue'
import options from '../assets/chart-options/options'
export default {
  name: 'HelloWorld',
  data () {
    let option = options.bar
    return {
      option: option,
      id: 'test'
    }
  },
  components: {
    XChart
  },
  mounted() {
    console.log(this.option)
    HighCharts.chart(this.id,this.option)
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#test {
  width: 400px;
  height: 400px;
  margin: 40px auto;
}
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
