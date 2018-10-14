<template lang="html">
  <div class="flex flex-col w-full pt-6 pb-8 sm:pt-8 sm:pb-10 bg-white rounded-lg shadow-lg text-black">
    <!-- Toolbar -->
    <div class="relative flex px-8 mb-4 sm:mb-0">
      <!-- <div class="relative flex-1">
        <svg class="cursor-pointer inline-block h-6 w-6 stroke-current transition" @mouseover="infoTooltipOpen = true" @mouseout="infoTooltipOpen = false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="12" y1="16" x2="12" y2="12"></line>
          <line x1="12" y1="8" x2="12" y2="8"></line>
        </svg>

        <portal-target name="contact-modal-info"></portal-target>
      </div> -->

      <div class="ml-auto">
        <svg class="cursor-pointer inline-block h-6 w-6 text-gray hover:text-gray-600 transition-fast stroke-current" @click="$emit('close')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </div>
    </div>

    <!-- Title -->
    <div class="flex items-center justify-center mb-8 px-8">
      <div class="text-center">
        <h2 class="mb-2 font-600 text-2xl">{{ messages[language].title }}</h2>
        <h3 class="font-400">{{ messages[language].subtitle }}</h3>
      </div>
    </div>

    <!-- Info tooltip -->
    <portal to="contact-modal-info">
      <!-- <info-tooltip class="w-full tracking-wide leading-tight"
      z-index="z-50"
      bg-color="bg-primary"
      text-color="text-primary-lightest"
      tooltip-arrow-border-color="border-primary"
      tooltip-arrow-position="top-left-top"
      icon-height="1.5rem"
      icon-width="1.5rem"
      :open="infoTooltipOpen"
      >
    </info-tooltip> -->
    </portal>

    <!-- Contact form -->
    <form action="https://formspree.io/prostairs.finishcarpentry@gmail.com" method="POST"
    class="flex-1 px-8 overflow-scroll">
      <label class="block mb-4">
        <span class="block my-2 text-sm font-700">
          {{ messages[language].email }}:
        </span>
        <input
        type="email"
        name="email"
        class="block w-full px-3 py-1 rounded bg-gray-200 leading-normal text-black"
        placeholder="email@example.com"></input>
      </label>

      <label class="block mb-4">
        <span class="block my-2 text-sm font-700">
          {{ messages[language].subject }}:
        </span>
        <input
        type="text"
        name="_subject"
        class="block w-full px-3 py-1 rounded bg-gray-200 leading-normal text-black"
        :value="messages[language].subject_placeholder"></input>
      </label>

      <span class="block my-2 text-sm font-700">
        {{ messages[language].message }}:
      </span>
      <textarea name="message" :placeholder="messages[language].message_placeholder"
      class="h-24 w-full px-3 py-3 rounded bg-gray-200 mb-4"></textarea>

      <button
      type="submit"
      class="btn hover:btn-lift flex items-center w-full mb-4 bg-primary text-primary-100 transition">
        <svg class="inline-block h-4 w-4 mr-2 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
          <polyline points="22,6 12,13 2,6"></polyline>
        </svg>
        {{ messages[language].submit_form }}
      </button>

      <span class="block mb-4 text-center">{{ messages[language].or }}</span>

      <a
      class="btn hover:btn-lift flex items-center w-full mb-4 bg-primary text-primary-100 font-bold tracking-loose transition"
      href="#"
      target="_blank"
      rel="noopener"
      >
        <svg class="inline-block h-4 w-4 mr-2 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
        </svg>
        {{ messages[language].call }}
      </a>

      <div class="text-sm text-gray-500">
        <p class="">
          {{ messages[language].not_sure }}
          <secondary-call-to-action
            class="text-primary no-underline hover:underline transition"
            :language="language"
            :first-letter-is-upper-case="false"
            :messages-replacement="{
              en: {
                call_to_action: messages.en.alternate_action
              },
              es: {
                call_to_action: messages.es.alternate_action
              },
              pt: {
                call_to_action: messages.pt.alternate_action
              }
            }"
            :show-icon-before-message="false"
            :show-icon-after-message="false">
          </secondary-call-to-action>
        </p>
      </div>
    </form>
  </div>
</template>

<script>
// import InfoTooltip from '../components/InfoTooltip.vue'
import SecondaryCallToAction from '../components/SecondaryCallToAction.vue'

export default {
  components: {
    SecondaryCallToAction
  },
  props: ['language'],
  data () {
    return {
      messages: {
        en: {
          title: 'Let\'s get in touch!',
          subtitle: 'Feel free to email or call us.',
          email: 'Email us',
          subject: 'Subject line',
          subject_placeholder: 'I want to hire you!',
          message: 'Message',
          message_placeholder: 'What\'s on your mind?',
          submit_form: 'Send message',
          or: 'or, you can call me:',
          call: 'Call us',
          not_sure: 'Not sure yet? To see examples of our work,',
          alternate_action: 'browse our Instagram.'
        },
        es: {
          title: 'Pongamonos en contacto!',
          subtitle: 'Le invitamos a enviar correo electrónico o llamar.',
          email: 'Enviar correo',
          subject: 'Sujeto',
          subject_placeholder: 'Quiero contratarle!',
          message: 'Mensaje',
          message_placeholder: 'Que está pensando?',
          submit_form: 'Enviar mensaje',
          or: 'o, puede llamarnos:',
          call: 'Llamar',
          not_sure: 'Aún no tiene certeza? Para ver ejemplos de nuestras obras,',
          alternate_action: 'mira nuestra Instagram.'
        },
        pt: {
          title: 'Vamos entrar em contato!',
          subtitle: 'Nós convidamos você a enviar email ou ligar.',
          email: 'Enviar email',
          subject: 'Assunto',
          subject_placeholder: 'Eu quero te contratar!',
          message: 'Mensagem',
          message_placeholder: 'O que você está pensando?',
          submit_form: 'Enviar mensagem',
          or: 'ou, você pode nos ligar:',
          call: 'Ligar',
          not_sure: 'Ainda não tenho certeza? Para ver exemplos de nossas obras,',
          alternate_action: 'olhe para o nosso Instagram.'
        }
      }
    }
  }
}
</script>
