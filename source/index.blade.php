@extends('_layouts.master')

@section('body')
<div id="app">
  <portal-target name="modals"></portal-target>

  <nav class="absolute z-30 pin-t pin-l pin-r container mx-auto flex items-center py-4 px-8">
    <language-setter
    class="ml-auto text-blue-lighter hover:text-blue-lightest"
    options-bg-color="bg-white"
    options-text-color="text-blue-darkest"
    options-z-index="z-30"
    option-hover-bg-color="hover:bg-blue-lighter"
    @set-language="setLanguage"
    ></language-setter>
  </nav>

  <header id="landing-page" class="flex relative h-screen min-h-400 flex items-center bg-blue-darker bg-center bg-no-repeat bg-fixed bg-cover">
    <!-- <div class="absolute z-10 pin-t pin-l w-full h-full bg-true-black-20"></div> -->

    <div class="relative z-20 container mx-auto px-8 py-16">
      <value-proposition :language="language"></value-proposition>

      <div class="inline-flex flex-col sm:flex-row">
        <primary-call-to-action
        class="btn-lg mb-6 sm:mb-0 sm:mr-6 bg-blue-lightest text-blue-darker"
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
