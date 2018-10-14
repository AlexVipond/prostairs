<template>
  <!-- @click="modalOpen = !modalOpen" -->
  <a href="https://www.instagram.com/prostairs.finishcarpentry/" target="_blank" rel="noopener">
    <svg
      v-if="showIconBeforeMessage"
      class="inline-block h-4 w-4 mr-2 stroke-current"
      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
      fill="none"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round">
      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
      <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
    </svg>

    <span>{{ messages[language].call_to_action }}</span>

    <svg
      v-if="showIconAfterMessage"
      class="inline-block h-4 w-4 ml-2 stroke-current"
      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
      fill="none"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round">
      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
      <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
    </svg>

    <!-- <portal to="modals">
      <modal-background z-index="z-40" :open="modalOpen" @close="modalOpen = false">
        <contact-form :language="language" :open="modalOpen" @close="modalOpen = false"></contact-form>
      </modal-background>
    </portal> -->
  </a>
</template>

<script>
// import ModalBackground from '../components/ModalBackground.vue'

export default {
  components: {
    // ModalBackground,
  },
  props: ['language', 'messagesReplacement', 'firstLetterIsUpperCase', 'showIconBeforeMessage', 'showIconAfterMessage'],
  data () {
    return {
      messages: {
        en: {
          call_to_action: 'See our work'
        },
        es: {
          call_to_action: 'Ver nuestras obras'
        },
        pt: {
          call_to_action: 'Ver nossas obras'
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
