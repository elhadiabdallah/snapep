import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './pages/Home'
import About from './pages/About'
import Login from './pages/auth/Login'
import Register from './pages/auth/Register'
import ErrorPage from './pages/errors/Page404'

import NProgress from 'nprogress'
import 'nprogress/nprogress.css';
NProgress.configure({ rtl: true, easing: 'ease', speed: 500, trickle: true,trickleSpeed: 200 , showSpinner: true, minimum: 0.1 });Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/login',
    name: 'Login',
    component: Login
  },
  {
    path: '/register',
    name: 'Register',
    component: Register
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '*',
    name: 'error',
    component: ErrorPage    
  }
]

const router = new VueRouter({
  mode: 'history',
  linkActiveClass: 'text-black',
  base: process.env.BASE_URL,
  routes
})

router.beforeResolve((to, from, next)=>{
  if(to.path){
    NProgress.start()
  }
  next()
})
router.afterEach(()=>{
  NProgress.done()
})

export default router