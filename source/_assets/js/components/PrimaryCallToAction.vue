<template>
  <div @click="modalOpen = !modalOpen">
    <svg
      v-if="showIconBeforeMessage"
      class="inline-block h-4 w-4 mr-2 stroke-current"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
      fill="none"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round">
      <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
      <polyline points="22,6 12,13 2,6"></polyline>
    </svg>

    <span>{{ messages[language].call_to_action }}</span>

    <svg
      v-if="showIconAfterMessage"
      class="inline-block h-4 w-4 ml-2 stroke-current"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
      fill="none"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round">
      <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
      <polyline points="22,6 12,13 2,6"></polyline>
    </svg>

    <portal to="modals">
      <modal-background
      z-index="z-50"
      :open="modalOpen"
      content-max-width="max-w-sm"
      close-event="close-primary-cta"
      @close-primary-cta="modalOpen = false">
        <contact-form :language="language" :open="modalOpen" @close="modalOpen = false"></contact-form>
      </modal-background>
    </portal>
  </div>
</template>

<script>
import ModalBackground from '../components/ModalBackground.vue'
import ContactForm from '../components/ContactForm.vue'

export default {
  components: {
    ModalBackground,
    ContactForm,
  },
  props: ['language', 'messagesReplacement', 'firstLetterIsUpperCase', 'showIconBeforeMessage', 'showIconAfterMessage'],
  data () {
    return {
      modalOpen: false,
      messages: {
        en: {
          call_to_action: 'Contact Prostairs'
        },
        es: {
          call_to_action: 'Contactar Prostairs'
        },
        pt: {
          call_to_action: 'Contactar Prostairs'
        }
      }
    }
  },
  methods: {
    upperCaseFirstLetter (str) {
      return str[0].toUpperCase() + str.slice(1)
    },
    lowerCaseFirstLetter (str) {
      return str[0].toLowerCase() + str.slice(1)
    },
    replaceMessages(messagesReplacement) {
      this.messages = messagesReplacement
    }
  },
  created () {
    // replace message
    if(this.messagesReplacement) {
      this.replaceMessages(this.messagesReplacement)
    }

    // uppercase message
    var language, message
    if(this.firstLetterIsUpperCase) {
      for (language in this.messages) {
        for (message in this.messages[language]) {
          this.messages[language][message] = this.upperCaseFirstLetter(this.messages[language][message])
        }
      }
    } else {
      for (language in this.messages) {
        for (message in this.messages[language]) {
          this.messages[language][message] = this.lowerCaseFirstLetter(this.messages[language][message])
        }
      }
    }
  }
}
</script>
