@extends('_layouts.master')

@section('body')
<div id="app">
  <header id="landing-page" class="flex relative h-screen min-h-400 flex items-center bg-blue-darker bg-center bg-no-repeat bg-fixed bg-cover">
    <!-- <div class="absolute z-10 pin-t pin-l w-full h-full bg-true-black-20"></div> -->

    <div class="relative z-20 container mx-auto px-8 py-16">
      <value-proposition :current-language="currentLanguage"></value-proposition>

      <div class="inline-flex flex-col sm:flex-row">
        <primary-call-to-action
        bg-color="bg-blue-lightest"
        text-color="text-blue-darker"
        :current-language="currentLanguage"
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
          :current-language="currentLanguage"
          >
          </secondary-call-to-action>
        </a>
      </div>
    </div>
  </header>
</div>

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>


@endsection
