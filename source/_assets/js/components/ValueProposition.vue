<template>
  <div class="">
    <div class="font-bold text-xl md:text-2xl text-blue-lighter text-shadow">
      <h3 class="mb-2">{{ [language].secondary_value }}.</h3>
      <h3>{{ [language].tertiary_value }}.</h3>
    </div>

    <h2 class="mt-4 mb-12 font-bold text-5xl md:text-6xl leading-none text-blue-lightest text-shadow">{{ [language].primary_value }}.</h2>

    <p class="mb-12 text-xl md:text-2xl leading-normal text-blue-lighter text-shadow">
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
      en: {
        primary_value: 'Finish Carpentry',
        secondary_value: 'Design',
        tertiary_value: 'Installation'
      },
      es: {
        primary_value: 'Finish Carpentry',
        secondary_value: 'Design',
        tertiary_value: 'Installation'
      },
      pt: {
        primary_value: 'Finish Carpentry',
        secondary_value: 'Design',
        tertiary_value: 'Installation'
      }
    }
  }
}
</script>
