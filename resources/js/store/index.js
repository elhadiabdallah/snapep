import Vue from 'vue'
import Vuex from 'vuex'
//import auth from './auth'
import axios from 'axios'
Vue.use(Vuex)

axios.defaults.withCredentials = true
axios.defaults.baseURL = 'http://127.0.0.1:8000/api'

export default new Vuex.Store({
state: {
  user: null,
},
mutations: {
  SET_USER(state, user){
    state.user = user
  }
},
actions: {
  async login({dispatch}, credentials){
    await axios.get('/sanctum/csrf-cookie')
    await axios.post('/login', credentials )
    return dispatch.getUser()
  },
  getUser({commit}){
    axios.get('/user').then(res=>{
      commit('SET_USER', res.data)
    }).catch(()=>{
      commit('SET_USER', null)
    })
  }
},
modules: {}
})