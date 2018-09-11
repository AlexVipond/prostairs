<template>
  <div class="btn btn-lg mb-6 sm:mb-0 sm:mr-6" :class="[bgColor, textColor]" @click="modalOpen = true">
    <slot></slot>

    <portal to="modals">
      <modal-overlay z-index="z-40" :open="modalOpen" @close="modalOpen = false">
        <contact-form :open="modalOpen" @close="modalOpen = false"></contact-form>
      </modal-overlay>
    </portal>
  </div>
</template>

<script>
import ModalOverlay from '../components/ModalOverlay.vue'
import ContactForm from '../components/ContactForm.vue'

export default {
  props: ['bgColor', 'textColor'],
  components: {
    ModalOverlay,
    ContactForm
  },
  data () {
    return {
      modalOpen: false
    }
  }
}
</script>
