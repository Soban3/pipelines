import Vue from 'vue'
import App from './App.vue'
import './assets/styles/index.css'

import PerfectScrollbar from 'vue2-perfect-scrollbar'
import 'vue2-perfect-scrollbar/dist/vue2-perfect-scrollbar.css'
Vue.use(PerfectScrollbar)

import axios from 'axios';

Vue.prototype.$axios = axios

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
