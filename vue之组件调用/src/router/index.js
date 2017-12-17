import Vue from 'vue'
import Router from 'vue-router'
// import HelloWorld from '@/components/HelloWorld'
import app from '../App'

Vue.use(Router)

export default new Router({
  // mode :'hash',
  routes: [
    {
      path: '/aa',
      name: 'aa',
      component: app.components.btn1
    },
    {
      path: '/bb',
      name: 'aa',
      component: app.components.btn2
    },
    {
      path: '/cc',
      name: 'aa',
      component: app.components.btn3
    },
  ]
})
