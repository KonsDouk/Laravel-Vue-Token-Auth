import { createStore } from "vuex";

export default createStore({
  state: {
    authToken: null,

  },
  getters: {
    getToken(state){
      console.log('getToken', state.authToken)
      return state.authToken
    }
  },
  mutations: {
    setToken(state, val){
      state.authToken = val
      console.log('store', state.authToken)
    }
  },
  actions: {},
  modules: {},
});
