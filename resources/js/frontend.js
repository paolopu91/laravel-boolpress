import Vue from "vue";
import Frontend from "./Frontend.vue";
//importo vue router
import VueRouter from "vue-router";
import { routes }  from "./routes";

Vue.use(VueRouter);

new Vue({
    el: "#app",
    render: h=> h(Frontend),

    router: new VueRouter({
         routes
    })
})