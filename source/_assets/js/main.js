import Vue from 'vue';

var PortalVue = require('portal-vue')
Vue.use(PortalVue)

import Velocity from 'velocity-animate'

import ValueProposition from './components/ValueProposition.vue'
import PrimaryCallToAction from './components/PrimaryCallToAction.vue'
import SecondaryCallToAction from './components/SecondaryCallToAction.vue'
import LanguageSetter from './components/LanguageSetter.vue'

let app = new Vue({
  el: "#app",
  data: {
    language: 'en',
    languageSetterOpen: false,
    messages: {
      en: {
        primary_call_to_action: 'Contact Prostairs',
        secondary_call_to_action: 'See our work'
      },
      es: {
        primary_call_to_action: 'Contactar Prostairs',
        secondary_call_to_action: 'Ver nuestras obras'
      },
      pt: {
        primary_call_to_action: 'Contactar Prostairs',
        secondary_call_to_action: 'Ver nossos trabalhos'
      }
    }
  },
  methods: {
    setLanguage (language) {
      this.language = language
    }
  },
  components: {
    ValueProposition,
    PrimaryCallToAction,
    SecondaryCallToAction,
    LanguageSetter
  }
});
