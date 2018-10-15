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
    <form
      action="https://formspree.io/prostairs.finishcarpentry@gmail.com"
      method="POST"
      class="flex-1 mb-4 sm:mb-8 px-8 overflow-scroll">
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

    <!-- blue -->
    <div class="w-full flex items-center justify-center">
      <svg class="h-3 sm:h-4" viewBox="0 0 4321 638" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M60 437.5V637.5H460L660 437.5V37.5H460V237.5H260V437.5H60Z" fill="#B2B8D2"/>
        <rect y="400" width="320" height="75" rx="37.5" fill="#3E4E8E"/>
        <rect x="200" y="200" width="320" height="75" rx="37.5" fill="#3E4E8E"/>
        <path d="M430 37.5C430 16.7893 446.789 0 467.5 0H652.5C673.211 0 690 16.7893 690 37.5V37.5C690 58.2107 673.211 75 652.5 75H467.5C446.789 75 430 58.2107 430 37.5V37.5Z" fill="#3E4E8E"/>
        <path d="M1169.05 436.656H1043.53V627.637H944V13.4494H1169.05C1308.33 13.4494 1377.97 82.1906 1377.97 219.673C1377.97 290.207 1360.33 344.005 1325.07 381.065C1290.4 418.126 1238.39 436.656 1169.05 436.656ZM1043.53 350.58H1168.16C1239.89 350.58 1275.75 306.944 1275.75 219.673C1275.75 177.831 1267.08 147.345 1249.75 128.217C1232.41 109.089 1205.22 99.5253 1168.16 99.5253H1043.53V350.58Z" fill="#3E4E8E"/>
        <path d="M1462.09 627.637V179.325H1558.92V233.122C1609.73 200.246 1660.54 179.026 1711.35 169.462V267.194C1659.94 277.356 1616.01 290.506 1579.55 306.646L1559.82 314.715V627.637H1462.09Z" fill="#3E4E8E"/>
        <path d="M1806.77 227.743C1837.85 188.889 1889.26 169.462 1960.99 169.462C2032.72 169.462 2083.83 188.889 2114.31 227.743C2145.39 266.596 2160.94 324.877 2160.94 402.584C2160.94 480.292 2145.99 538.871 2116.11 578.323C2086.22 617.774 2034.51 637.5 1960.99 637.5C1887.47 637.5 1835.76 617.774 1805.87 578.323C1775.99 538.871 1761.04 480.292 1761.04 402.584C1761.04 324.877 1776.28 266.596 1806.77 227.743ZM1880.29 519.146C1894.04 543.056 1920.94 555.011 1960.99 555.011C2001.04 555.011 2027.94 543.056 2041.69 519.146C2055.43 495.236 2062.31 456.083 2062.31 401.688C2062.31 347.293 2054.84 308.738 2039.89 286.023C2025.55 263.309 1999.25 251.951 1960.99 251.951C1922.73 251.951 1896.13 263.309 1881.19 286.023C1866.84 308.738 1859.67 347.293 1859.67 401.688C1859.67 456.083 1866.54 495.236 1880.29 519.146Z" fill="#3E4E8E"/>
        <path d="M2569.15 271.677C2498.61 262.113 2447.5 257.331 2415.82 257.331C2384.14 257.331 2362.03 261.217 2349.47 268.987C2337.52 276.16 2331.54 287.816 2331.54 303.956C2331.54 320.095 2338.12 331.452 2351.27 338.027C2365.01 344.603 2396.69 352.373 2446.31 361.34C2496.52 369.708 2532.09 383.158 2553.01 401.688C2573.93 420.218 2584.39 453.094 2584.39 500.316C2584.39 547.539 2569.15 582.208 2538.66 604.325C2508.77 626.442 2464.84 637.5 2406.86 637.5C2370.39 637.5 2324.37 632.419 2268.78 622.257L2240.98 617.774L2244.57 536.181C2316.3 545.745 2368 550.527 2399.68 550.527C2431.36 550.527 2453.78 546.642 2466.93 538.871C2480.68 531.101 2487.55 518.249 2487.55 500.316C2487.55 482.384 2480.98 470.13 2467.83 463.555C2455.27 456.382 2424.49 448.91 2375.47 441.139C2327.06 432.771 2291.49 419.919 2268.78 402.584C2246.06 385.25 2234.7 353.569 2234.7 307.542C2234.7 261.515 2250.25 227.145 2281.33 204.43C2313.01 181.716 2353.36 170.359 2402.37 170.359C2440.63 170.359 2487.55 175.141 2543.14 184.705L2570.94 190.084L2569.15 271.677Z" fill="#3E4E8E"/>
        <path d="M2919.5 262.711H2795.77V459.968C2795.77 496.431 2798.46 520.64 2803.84 532.595C2809.22 544.55 2822.97 550.527 2845.08 550.527L2918.6 547.838L2923.09 625.844C2883.04 633.615 2852.55 637.5 2831.63 637.5C2780.82 637.5 2745.86 625.844 2726.73 602.532C2708.2 579.219 2698.93 535.285 2698.93 470.728V262.711H2641.55V179.325H2698.93V49.3144H2795.77V179.325H2919.5V262.711Z" fill="#3E4E8E"/>
        <path d="M3331.41 317.405V521.835C3332.01 534.986 3335.29 544.849 3341.27 551.424C3347.85 557.402 3357.71 561.287 3370.86 563.08L3368.17 637.5C3316.76 637.5 3277.01 626.442 3248.92 604.325C3201.1 626.442 3152.98 637.5 3104.56 637.5C3015.5 637.5 2970.97 589.979 2970.97 494.937C2970.97 449.508 2982.92 416.632 3006.83 396.308C3031.34 375.985 3068.7 363.731 3118.91 359.546L3234.57 349.684V317.405C3234.57 293.495 3229.19 276.758 3218.43 267.194C3208.27 257.63 3193.03 252.848 3172.71 252.848C3134.45 252.848 3086.63 255.239 3029.25 260.021L3000.56 261.814L2996.97 192.774C3062.12 177.233 3121.9 169.462 3176.29 169.462C3231.29 169.462 3270.74 181.417 3294.65 205.327C3319.16 228.639 3331.41 265.999 3331.41 317.405ZM3130.57 428.587C3089.32 432.173 3068.7 454.589 3068.7 495.833C3068.7 537.078 3086.93 557.7 3123.39 557.7C3153.28 557.7 3184.96 552.918 3218.43 543.354L3234.57 537.975V418.724L3130.57 428.587Z" fill="#3E4E8E"/>
        <path d="M3454.1 627.637V179.325H3551.83V627.637H3454.1ZM3454.1 103.112V0H3551.83V103.112H3454.1Z" fill="#3E4E8E"/>
        <path d="M3670.38 627.637V179.325H3767.21V233.122C3818.02 200.246 3868.83 179.026 3919.64 169.462V267.194C3868.23 277.356 3824.3 290.506 3787.83 306.646L3768.11 314.715V627.637H3670.38Z" fill="#3E4E8E"/>
        <path d="M4305.48 271.677C4234.95 262.113 4183.84 257.331 4152.16 257.331C4120.48 257.331 4098.36 261.217 4085.81 268.987C4073.85 276.16 4067.87 287.816 4067.87 303.956C4067.87 320.095 4074.45 331.452 4087.6 338.027C4101.35 344.603 4133.03 352.373 4182.64 361.34C4232.85 369.708 4268.42 383.158 4289.34 401.688C4310.26 420.218 4320.72 453.094 4320.72 500.316C4320.72 547.539 4305.48 582.208 4274.99 604.325C4245.11 626.442 4201.17 637.5 4143.19 637.5C4106.73 637.5 4060.7 632.419 4005.11 622.257L3977.32 617.774L3980.9 536.181C4052.63 545.745 4104.34 550.527 4136.02 550.527C4167.7 550.527 4190.11 546.642 4203.26 538.871C4217.01 531.101 4223.89 518.249 4223.89 500.316C4223.89 482.384 4217.31 470.13 4204.16 463.555C4191.61 456.382 4160.82 448.91 4111.81 441.139C4063.39 432.771 4027.82 419.919 4005.11 402.584C3982.4 385.25 3971.04 353.569 3971.04 307.542C3971.04 261.515 3986.58 227.145 4017.66 204.43C4049.34 181.716 4089.69 170.359 4138.71 170.359C4176.96 170.359 4223.89 175.141 4279.48 184.705L4307.27 190.084L4305.48 271.677Z" fill="#3E4E8E"/>
      </svg>
    </div>
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
