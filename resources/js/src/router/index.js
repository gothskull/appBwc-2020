import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
	mode : 'history',
	routes : 
	[
		{path : '/', name: 'Home', component : () => import('../views/Home.vue') }, 
		/*PROYECTOS*/
		{path : '/ListaProyectos', name: 'ListaProyectos', component : () => import('../views/Proyectos/ListaProyectos.vue') },
		{path : '/NvoProyecto', name: 'NvoProyecto', component : () => import('../views/Proyectos/NvoProyecto.vue') },
		{path : '/ListaCategorias', name: 'ListaCategorias', component : () => import('../views/Proyectos/Categorias/ListaCategorias.vue') },
		
	]
})