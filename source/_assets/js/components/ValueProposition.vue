<template>
  <div class="">
    <div class="font-bold text-xl md:text-2xl text-blue-lighter text-shadow">
      <h3 class="mb-2">{{ messages[language].value_secondary }}.</h3>
      <h3>{{ messages[language].value_tertiary }}.</h3>
    </div>

    <h2 class="mt-4 mb-12 font-bold text-4xl md:text-5xl leading-none text-blue-lightest text-shadow">{{ messages[language].value_primary }}.</h2>

    <p class="mb-12 text-xl md:text-2xl leading-normal text-blue-lighter text-shadow"
    v-html="messages[language].value_description"
    >
      We provide the
      <span class="font-bold text-blue-lightest">finishing touch</span>
      <br class="hidden sm:block">
      to make your
      <span class="font-bold text-blue-lightest">house</span>
      feel like a
      <span class="font-bold text-blue-lightest">home</span>.
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
          value_primary: 'Finish Carpentry',
          value_secondary: 'Design',
          value_tertiary: 'Installation',
          value_description: 'We provide the\
          <span class="font-bold text-blue-lightest">finishing touch</span>\
          <br class="hidden sm:block">\
          to make your\
          <span class="font-bold text-blue-lightest">house</span>\
          feel like a\
          <span class="font-bold text-blue-lightest">home</span>.'
        },
        es: {
          value_primary: 'Carpintería de obra',
          value_secondary: 'Diseño',
          value_tertiary: 'Instalación',
          value_description: 'Proporcionamos el \
          <span class="font-bold text-blue-lightest">toque final</span>\
          <br class="hidden sm:block">\
          para convertir su\
          <span class="font-bold text-blue-lightest">casa</span>\
          en su\
          <span class="font-bold text-blue-lightest">hogar</span>.'
        },
        pt: {
          value_primary: 'Carpintaria de obra',
          value_secondary: 'Desenho',
          value_tertiary: 'Instalação',
          value_description: 'Nós fornecemos o \
          <span class="font-bold text-blue-lightest">toque final</span>\
          <br class="hidden sm:block">\
          para transformar sua \
          <span class="font-bold text-blue-lightest">casa</span>\
          em sua\
          <span class="font-bold text-blue-lightest">lar</span>.'
        }
      }
    }
  }
}
</script>
