<template>
  <button class="btn"
  @click="modalOpen = true"
  >
    <svg class="inline-block h-4 w-4 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
    </svg>

    <span class="mx-2">{{ messages[language].call_to_action }}</span>

    <portal to="modals">
      <modal-overlay z-index="z-40" :open="modalOpen" @close="modalOpen = false">
        <contact-form :language="language" :open="modalOpen" @close="modalOpen = false"></contact-form>
      </modal-overlay>
    </portal>
  </button>
</template>

<script>
import ModalOverlay from '../components/ModalOverlay.vue'
import ContactForm from '../components/ContactForm.vue'

export default {
  props: ['language'],
  components: {
    ModalOverlay,
    ContactForm
  },
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
  }
}
</script>
