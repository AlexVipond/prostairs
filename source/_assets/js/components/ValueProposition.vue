<template>
  <div class="">
    <div class="text-xl md:text-2xl text-primary-gray-200 text-shadow-md">
      <h3 class="block mb-2 font-500">{{ messages[language].value_secondary }}.</h3>
      <h3 class="block font-500">{{ messages[language].value_tertiary }}.</h3>
    </div>

    <h2 class="inline-block mt-4 mb-12 p-1 font-600 text-3xl md:text-5xl leading-none text-primary-100 text-shadow-md">{{ messages[language].value_primary }}.</h2>

    <p
      class="mb-12 text-lg md:text-2xl leading-normal text-primary-gray-200 text-shadow-md"
      v-html="messages[language].value_description">
    </p>
  </div>
</template>

<script>
export default {
  props: ['language'],
  data () {
    return {
      messages: {
        en: {
          value_primary: 'Prostairs Finish Carpentry',
          value_secondary: 'Design',
          value_tertiary: 'Installation',
          value_description: 'We provide the\
          <span class="font-600 text-gray-100">finishing touch</span>\
          <br class="hidden sm:block">\
          to make your\
          <span class="font-600 text-gray-100">house</span>\
          feel like a\
          <span class="font-600 text-gray-100">home</span>.'
        },
        es: {
          value_primary: 'Prostairs Carpintería de obra',
          value_secondary: 'Diseño',
          value_tertiary: 'Instalación',
          value_description: 'Proporcionamos el \
          <span class="font-600 text-gray-100">toque final</span>\
          <br class="hidden sm:block">\
          para convertir su\
          <span class="font-600 text-gray-100">casa</span>\
          en su\
          <span class="font-600 text-gray-100">hogar</span>.'
        },
        pt: {
          value_primary: 'Prostairs Carpintaria de obra',
          value_secondary: 'Desenho',
          value_tertiary: 'Instalação',
          value_description: 'Nós fornecemos o \
          <span class="font-600 text-gray-100">toque final</span>\
          <br class="hidden sm:block">\
          para transformar sua \
          <span class="font-600 text-gray-100">casa</span>\
          em sua\
          <span class="font-600 text-gray-100">lar</span>.'
        }
      }
    }
  }
}
</script>
