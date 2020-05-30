import Vue from 'vue'
import Header from './components/layout/Header.vue'
import Subheader from './components/layout/Subheader.vue'
import Navegacion from './components/layout/Navegacion.vue'
import Headermobile from './components/layout/Header-mobile.vue'
import Sidebar from './components/layout/sidebar.vue'
import Footer from './components/layout/Footer.vue'
import QuickPanel from './components/layout/Quick-panel.vue'
import Scrolltop from './components/layout/Scrolltop.vue'
import Toolbar from './components/layout/Toolbar.vue'
import Demopanel from './components/layout/Demopanel.vue'
import Chat from './components/layout/Chat.vue'
import TitleSection from './components/layout/TitleSection.vue'

Vue.component(Header.name,Header)
Vue.component(Navegacion.name,Navegacion)
Vue.component(Headermobile.name,Headermobile)
Vue.component(Sidebar.name,Sidebar)
Vue.component(Subheader.name,Subheader)
Vue.component(Footer.name,Footer)
Vue.component(QuickPanel.name,QuickPanel)
Vue.component(Scrolltop.name,Scrolltop)
Vue.component(Toolbar.name,Toolbar)
Vue.component(Demopanel.name,Demopanel)
Vue.component(Chat.name,Chat)
Vue.component(TitleSection.name,TitleSection)

export default{
	Header,
	Sidebar,
	Navegacion,
	Headermobile,
	Subheader,
	Footer,
	QuickPanel,
	Scrolltop,
	Toolbar,
	Demopanel,
	Chat,
	TitleSection
}
