require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router'

Vue.use(VueRouter)

let routes = [
    { path: '/inicio', component: require('./components/Inicio.vue').default },
    { path: '/perfil', component: require('./components/Perfil.vue').default },
    { path: '/usuarios', component: require('./components/Usuarios.vue').default },
    { path: '/organizaciones', component: require('./components/Organizaciones.vue').default },
    { path: '/zonas', component: require('./components/Zonas.vue').default },
    { path: '/actividad_comercial', component: require('./components/ActividadComercial.vue').default }
  ]

  const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  })

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    router
});
