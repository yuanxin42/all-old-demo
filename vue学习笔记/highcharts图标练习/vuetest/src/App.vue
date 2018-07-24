<template>
  <div id="app">
    <img src="./assets/logo.png">
    <a href="http://localhost:8080/#/">1111</a><a href="http://localhost:8080/#/chat">2222</a>
    <router-view/>
  </div>
</template>
<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
<script>
export default {
  name: 'App'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
