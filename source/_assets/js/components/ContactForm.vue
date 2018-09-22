<template>
  <div class="flex flex-col max-h-full max-w-sm w-screen pt-8 bg-white rounded-lg shadow-lg text-black">
    <!-- Toolbar -->
    <div class="relative flex px-8">
      <div class="relative flex-1">
        <!-- <svg class="cursor-pointer inline-block h-6 w-6 text-primary hover:scale-110 active:scale-100 stroke-current transition" @mouseover="infoDropdownOpen = true" @mouseout="infoDropdownOpen = false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="12" y1="16" x2="12" y2="12"></line>
          <line x1="12" y1="8" x2="12" y2="8"></line>
        </svg>

        <portal-target name="contact-modal-info"></portal-target> -->
      </div>

      <div class="ml-auto">
        <svg class="cursor-pointer inline-block h-6 w-6 text-grey hover:text-grey-darker transition-fast stroke-current" @click="$emit('close')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </div>
    </div>

    <!-- Title -->
    <div class="flex items-center justify-center mb-8 px-8">
      <div class="text-center">
        <h2 class="mb-2 font-bold text-2xl">{{ messages[language].welcome }}</h2>
        <h3 class="font-normal">{{ messages[language].keep_going }}</h3>
      </div>
    </div>

    <!-- Info dropdown -->
    <portal to="contact-modal-info">
      <info-dropdown class="w-full tracking-wide leading-tight"
      z-index="z-50"
      bg-color="bg-primary"
      text-color="text-primary-lightest"
      dropdown-arrow-border-color="border-primary"
      dropdown-arrow-position="top-left-top"
      icon-height="1.5rem"
      icon-width="1.5rem"
      :open="infoDropdownOpen"
      >
      </info-dropdown>
    </portal>

    <!-- Contact form -->
    <div class="flex-1 overflow-scroll px-8 pb-8">
      <a
      class="btn bg-blue-darker text-blue-lightest w-full mb-8"
      href="mailto:prostairs.finishcarpentry@gmail.com"
      target="_blank"
      rel="noopener"
      >
        Email us
      </a>

      <a href="tel:1-978-327-8575" class="btn bg-blue-darker text-blue-lightest w-full mb-8">
        Call us
      </a>
    </div>
  </div>
</template>

<script>
// import InfoDropdown from '../components/InfoDropdown.vue'

export default {
  props: ['language', 'open'],
  data () {
    return {
      messages: {
        en: {
          welcome: 'Great choice!',
          keep_going: 'Let\'s get in touch.',
        },
        es: {
          welcome: 'Great choice!',
          keep_going: 'Let\'s get in touch.',
        },
        pt: {
          welcome: 'Great choice!',
          keep_going: 'Let\'s get in touch.',
        }
      }
    }
  }
}
</script>
