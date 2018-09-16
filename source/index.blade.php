@extends('_layouts.master')

@section('body')
<div id="app">
  <nav class="absolute z-30 pin-t pin-r pin-l flex items center py-4 px-4">
    <div class="cursor-pointer relative flex items-center text-blue-lighter hover:text-blue-lightest transition" @click="toggleDropdown">
      <svg class="inline-block h-4 w-4 mr-2 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="2" y1="12" x2="22" y2="12"></line>
        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
      </svg>

      <div class="relative py-2">
        <span>@{{ languageName }}</span>

        <dropdown-menu :open="dropdownOpen" @close="dropdownOpen = false" class="absolute pin-b pin-l move-down-100 z-30 bg-white text-blue-darkest rounded-sm overflow-hidden shadow-lg">
          <div
          class="py-2 px-3 border-b-1 border-grey-lighter hover:bg-blue-lighter transition"
          v-for="language in inactiveLanguages"
          :key="language.code"
          @click="setLanguage(language.code)"
          >
            @{{ language.name }}
          </div>
        </dropdown-menu>
      </div>
    </div>
  </nav>

  <header id="landing-page" class="flex relative h-screen min-h-400 flex items-center bg-blue-darker bg-center bg-no-repeat bg-fixed bg-cover">
    <!-- <div class="absolute z-10 pin-t pin-l w-full h-full bg-true-black-20"></div> -->

    <div class="relative z-20 container mx-auto px-8 py-16">
      <value-proposition :language="language"></value-proposition>

      <div class="inline-flex flex-col sm:flex-row">
        <primary-call-to-action
        bg-color="bg-blue-lightest"
        text-color="text-blue-darker"
        :language="language"
        >
        </primary-call-to-action>

        <a class="no-underline"
        href="https://www.instagram.com/prostairs.finishcarpentry/"
        target="_blank"
        rel="noopener"
        >
          <secondary-call-to-action
          bg-color="bg-transparent"
          text-color="text-blue-lightest"
          border-width="border-2"
          border-color="border-blue-lightest"
          :language="language"
          >
          </secondary-call-to-action>
        </a>
      </div>
    </div>
  </header>
</div>

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>


@endsection
