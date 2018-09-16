import Vue from 'vue';

var PortalVue = require('portal-vue')
Vue.use(PortalVue)

import Velocity from 'velocity-animate'

import ValueProposition from './components/ValueProposition.vue'
import PrimaryCallToAction from './components/PrimaryCallToAction.vue'
import SecondaryCallToAction from './components/SecondaryCallToAction.vue'
import DropdownMenu from './components/DropdownMenu.vue'

let app = new Vue({
  el: "#app",
  data: {
    language: 'pt',
    languages: [
      {
        code: 'en',
        name: 'English'
      },
      {
        code: 'es',
        name: 'Español'
      },
      {
        code: 'pt',
        name: 'Português'
      }
    ],
    dropdownOpen: false,
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
  computed: {
    languageName () {
      let language = this.languages
        .find(language => language.code === this.language)

      return language.name
    },
    inactiveLanguages () {
      return this.languages.filter(language => language.code !== this.language)
    }
  },
  methods: {
    toggleDropdown () {
      this.dropdownOpen = !this.dropdownOpen
    },
    setLanguage (languageCode) {
      this.language = languageCode
    }
  },
  components: {
    ValueProposition,
    PrimaryCallToAction,
    SecondaryCallToAction,
    DropdownMenu
  }
});
