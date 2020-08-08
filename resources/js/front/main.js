import Vue from 'vue';
import router from "./router";
import store from "./store"
import App from "./App";
import axios from "axios"


// 后端地址
Vue.prototype.$url = APP_URL + '/api/v1'


// 对请求方式进行全局注册

Vue.prototype.$http = axios
new Vue({
    router,
    store,
    render: h => h(App)
}).$mount("#app")
