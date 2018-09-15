import Vue from 'vue';

var PortalVue = require('portal-vue')
Vue.use(PortalVue)

import Velocity from 'velocity-animate'

import ValueProposition from './components/ValueProposition.vue'
import PrimaryCallToAction from './components/PrimaryCallToAction.vue'
import SecondaryCallToAction from './components/SecondaryCallToAction.vue'

let app = new Vue({
  el: "#app",
  data: {
    language: 'en',
    en: {

    },
    es: {

    },
    pt: {

    }
  },
  methods: {
    setLanguage () {
      console.log(this.language);
    }
  },
  components: {
    ValueProposition,
    PrimaryCallToAction,
    SecondaryCallToAction
  }
});
