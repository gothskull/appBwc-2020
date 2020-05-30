import Vue from 'vue'
import router from './router'
import store from './store/store'

require('../bootstrap.js')

window.Vue = require('vue');

require('./plugins/')

import App from './App.vue'
import Global from './global-components.js'


const app = new Vue({
	el : '#app',
	components : {
		App,
		Global
	},
	router,
	render: h => h(App)
}).$mount('#app')