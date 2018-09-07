@extends('_layouts.master')

@section('body')
<header id="landing-page" class="flex relative h-screen min-h-400 flex items-center bg-blue-darker bg-center bg-no-repeat bg-fixed bg-cover">
  <div class="absolute z-10 pin-t pin-l w-full h-full bg-true-black-20"></div>

  <div class="relative z-20 container mx-auto px-8 py-16">
    <div class="">
      <div class="font-bold text-xl md:text-2xl text-blue-lighter text-shadow">
        <h3 class="mb-2">Design.</h3>
        <h3>Installation.</h3>
      </div>

      <h2 class="mt-4 mb-12 font-bold text-5xl md:text-6xl leading-none text-blue-lightest text-shadow">Finish Carpentry.</h2>

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

    <div class="inline-flex flex-col sm:flex-row">
      <a href="tel:1-978-327-8575" class="btn btn-lg mb-6 sm:mb-0 sm:mr-6 bg-white text-blue-darker">
        <svg class="inline-block h-4 w-4 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
        </svg>

        <span class="mx-2">Call Prostairs</span>
      </a>

      <a class="btn btn-lg border-2 border-white text-blue-lightest"
      href="https://www.instagram.com/prostairs.finishcarpentry/"
      target="_blank"
      rel="noopener"
      >
        <svg class="inline-block h-4 w-4 ml-auto stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
          <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
        </svg>

        <span class="mx-2">See our work</span>

        <div class="h-4 w-4 mr-auto sm:hidden"></div>
      </a>
    </div>
  </div>
</header>


@endsection
