@extends('_layouts.master')

@section('body')

<div id="app">
  <portal-target name="modals"></portal-target>

  <nav class="absolute z-30 pin-t pin-l pin-r flex items-center py-2 px-8">
    <!-- Logo -->
    <a
      class="mr-auto p-1 text-primary-gray-200 hover:text-primary-gray-100 transition"
      href="#">
      <!-- white -->
      <svg class="h-4 fill-current" viewBox="0 0 4358 638" xmlns="http://www.w3.org/2000/svg">
        <path d="M1206.05 436.656H1080.53V627.637H981V13.4494H1206.05C1345.33 13.4494 1414.97 82.1906 1414.97 219.673C1414.97 290.207 1397.33 344.005 1362.07 381.065C1327.4 418.126 1275.39 436.656 1206.05 436.656ZM1080.53 350.58H1205.16C1276.89 350.58 1312.75 306.944 1312.75 219.673C1312.75 177.831 1304.08 147.345 1286.75 128.217C1269.41 109.089 1242.22 99.5253 1205.16 99.5253H1080.53V350.58Z"/>
        <path d="M1499.09 627.637V179.325H1595.92V233.122C1646.73 200.246 1697.54 179.026 1748.35 169.462V267.194C1696.94 277.356 1653.01 290.506 1616.55 306.646L1596.82 314.715V627.637H1499.09Z"/>
        <path d="M1843.77 227.743C1874.85 188.889 1926.26 169.462 1997.99 169.462C2069.72 169.462 2120.83 188.889 2151.31 227.743C2182.39 266.596 2197.94 324.877 2197.94 402.584C2197.94 480.292 2182.99 538.871 2153.11 578.323C2123.22 617.774 2071.51 637.5 1997.99 637.5C1924.47 637.5 1872.76 617.774 1842.87 578.323C1812.99 538.871 1798.04 480.292 1798.04 402.584C1798.04 324.877 1813.28 266.596 1843.77 227.743ZM1917.29 519.146C1931.04 543.056 1957.94 555.011 1997.99 555.011C2038.04 555.011 2064.94 543.056 2078.69 519.146C2092.43 495.236 2099.31 456.083 2099.31 401.688C2099.31 347.293 2091.84 308.738 2076.89 286.023C2062.55 263.309 2036.25 251.951 1997.99 251.951C1959.73 251.951 1933.13 263.309 1918.19 286.023C1903.84 308.738 1896.67 347.293 1896.67 401.688C1896.67 456.083 1903.54 495.236 1917.29 519.146Z"/>
        <path d="M2606.15 271.677C2535.61 262.113 2484.5 257.331 2452.82 257.331C2421.14 257.331 2399.03 261.217 2386.47 268.987C2374.52 276.16 2368.54 287.816 2368.54 303.956C2368.54 320.095 2375.12 331.452 2388.27 338.027C2402.01 344.603 2433.69 352.373 2483.31 361.34C2533.52 369.708 2569.09 383.158 2590.01 401.688C2610.93 420.218 2621.39 453.094 2621.39 500.316C2621.39 547.539 2606.15 582.208 2575.66 604.325C2545.77 626.442 2501.84 637.5 2443.86 637.5C2407.39 637.5 2361.37 632.419 2305.78 622.257L2277.98 617.774L2281.57 536.181C2353.3 545.745 2405 550.527 2436.68 550.527C2468.36 550.527 2490.78 546.642 2503.93 538.871C2517.68 531.101 2524.55 518.249 2524.55 500.316C2524.55 482.384 2517.98 470.13 2504.83 463.555C2492.27 456.382 2461.49 448.91 2412.47 441.139C2364.06 432.771 2328.49 419.919 2305.78 402.584C2283.06 385.25 2271.7 353.569 2271.7 307.542C2271.7 261.515 2287.25 227.145 2318.33 204.43C2350.01 181.716 2390.36 170.359 2439.37 170.359C2477.63 170.359 2524.55 175.141 2580.14 184.705L2607.94 190.084L2606.15 271.677Z"/>
        <path d="M2956.5 262.711H2832.77V459.968C2832.77 496.431 2835.46 520.64 2840.84 532.595C2846.22 544.55 2859.97 550.527 2882.08 550.527L2955.6 547.838L2960.09 625.844C2920.04 633.615 2889.55 637.5 2868.63 637.5C2817.82 637.5 2782.86 625.844 2763.73 602.532C2745.2 579.219 2735.93 535.285 2735.93 470.728V262.711H2678.55V179.325H2735.93V49.3144H2832.77V179.325H2956.5V262.711Z"/>
        <path d="M3368.41 317.405V521.836C3369.01 534.986 3372.29 544.849 3378.27 551.424C3384.85 557.402 3394.71 561.287 3407.86 563.08L3405.17 637.5C3353.76 637.5 3314.01 626.442 3285.92 604.325C3238.1 626.442 3189.98 637.5 3141.56 637.5C3052.5 637.5 3007.97 589.979 3007.97 494.937C3007.97 449.508 3019.92 416.632 3043.83 396.308C3068.34 375.985 3105.7 363.731 3155.91 359.546L3271.57 349.684V317.405C3271.57 293.495 3266.19 276.758 3255.43 267.194C3245.27 257.63 3230.03 252.848 3209.71 252.848C3171.45 252.848 3123.63 255.239 3066.25 260.021L3037.56 261.814L3033.97 192.774C3099.12 177.233 3158.9 169.462 3213.29 169.462C3268.29 169.462 3307.74 181.417 3331.65 205.327C3356.16 228.639 3368.41 265.999 3368.41 317.405ZM3167.57 428.587C3126.32 432.173 3105.7 454.589 3105.7 495.833C3105.7 537.078 3123.93 557.7 3160.39 557.7C3190.28 557.7 3221.96 552.918 3255.43 543.354L3271.57 537.975V418.724L3167.57 428.587Z"/>
        <path d="M3491.1 627.637V179.325H3588.83V627.637H3491.1ZM3491.1 103.112V0H3588.83V103.112H3491.1Z"/>
        <path d="M3707.38 627.637V179.325H3804.21V233.122C3855.02 200.246 3905.83 179.026 3956.64 169.462V267.194C3905.23 277.356 3861.3 290.506 3824.83 306.646L3805.11 314.715V627.637H3707.38Z"/>
        <path d="M4342.48 271.677C4271.95 262.113 4220.84 257.331 4189.16 257.331C4157.48 257.331 4135.36 261.217 4122.81 268.987C4110.85 276.16 4104.87 287.816 4104.87 303.956C4104.87 320.095 4111.45 331.452 4124.6 338.027C4138.35 344.603 4170.03 352.373 4219.64 361.34C4269.85 369.708 4305.42 383.158 4326.34 401.688C4347.26 420.218 4357.72 453.094 4357.72 500.316C4357.72 547.539 4342.48 582.208 4311.99 604.325C4282.11 626.442 4238.17 637.5 4180.19 637.5C4143.73 637.5 4097.7 632.419 4042.11 622.257L4014.32 617.774L4017.9 536.181C4089.63 545.745 4141.34 550.527 4173.02 550.527C4204.7 550.527 4227.11 546.642 4240.26 538.871C4254.01 531.101 4260.89 518.249 4260.89 500.316C4260.89 482.384 4254.31 470.13 4241.16 463.555C4228.61 456.382 4197.82 448.91 4148.81 441.139C4100.39 432.771 4064.82 419.919 4042.11 402.584C4019.4 385.25 4008.04 353.569 4008.04 307.542C4008.04 261.515 4023.58 227.145 4054.66 204.43C4086.34 181.716 4126.69 170.359 4175.71 170.359C4213.96 170.359 4260.89 175.141 4316.48 184.705L4344.27 190.084L4342.48 271.677Z"/>
        <path d="M97.95 437.5V587.5C97.95 615.114 120.336 637.5 147.95 637.5H456.529C483.05 637.5 508.486 626.964 527.239 608.211L668.661 466.789C687.414 448.036 697.95 422.6 697.95 396.079V37.5H497.95V237.5H297.95V437.5H97.95Z"/>
        <path d="M539.037 201.825H279.412H252.697C234.879 201.825 225.955 223.368 238.555 235.967L250.123 247.536C268.877 266.289 294.312 276.825 320.834 276.825H497.616C524.138 276.825 549.573 266.289 568.327 247.536L579.895 235.967C592.495 223.368 583.571 201.825 565.753 201.825H539.037Z"/>
        <path d="M334.625 400.2H75H48.2843C30.4662 400.2 21.5429 421.743 34.1422 434.342L45.7107 445.911C64.4643 464.664 89.8997 475.2 116.421 475.2H293.204C319.725 475.2 345.161 464.664 363.914 445.911L375.483 434.342C388.082 421.743 379.159 400.2 361.341 400.2H334.625Z"/>
        <path d="M712.775 0H483.825H457.109C439.291 0 430.368 21.5429 442.967 34.1422L454.536 45.7107C473.289 64.4643 498.725 75 525.246 75H671.354C697.875 75 723.311 64.4643 742.064 45.7107L753.633 34.1422C766.232 21.5429 757.309 0 739.491 0H712.775Z"/>
      </svg>
    </a>

    <language-changer
      :language="language"
      :languages="languages"
      class="rounded-sm p-1 ml-auto h-8 text-primary-gray-200 hover:text-primary-gray-100 transition"
      options-bg-color="bg-white"
      options-text-color="text-primary-600"
      options-z-index="z-30"
      option-hover-bg-color="hover:bg-primary-200"
      @set-language="setLanguage">
    </language-changer>
  </nav>

  <header id="landing-page" class="flex items-center relative h-screen min-h-400 bg-center bg-no-repeat bg-fixed bg-cover" style="background-image: url({{ $page->landing_page_image }})">
    <div class="absolute z-10 pin-t pin-l w-full h-full bg-true-black-50"></div>

    <div class="relative z-20 container mx-auto px-8 py-16">
      <value-proposition class="md:text-center" :language="language"></value-proposition>

      <div class="inline-flex flex-col sm:flex-row  md:flex md:justify-center">
        <button class="mb-6 sm:mb-0 sm:mr-6" type="button" name="button">
          <primary-call-to-action
            class="btn md:btn-lg w-full hover:btn-grow bg-white tracking-normal font-400 text-primary"
            :language="language"
            :first-letter-is-upper-case="true"
            :show-icon-before-message="true"
            :show-icon-after-message="false">
          </primary-call-to-action>
        </button>


        <button type="button" name="button">
          <secondary-call-to-action
            class="btn md:btn-lg w-full hover:btn-grow bg-transparent border border-white text-white"
            :language="language"
            :first-letter-is-upper-case="true"
            :show-icon-before-message="true"
            :show-icon-after-message="false">
          </secondary-call-to-action>
        </button>
      </div>
    </div>
  </header>
</div>

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>

@endsection
