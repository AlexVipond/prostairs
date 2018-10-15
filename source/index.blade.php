@extends('_layouts.master')

@section('body')

<div id="app">
  <portal-target name="modals"></portal-target>

  <nav class="absolute z-30 pin-t pin-l pin-r flex items-center py-2 px-8">
    <!-- Logo -->
    <a
      class="mr-auto p-1 text-primary-gray-100"
      href="#">
      <!-- blue -->
      <!-- <svg class="h-4" viewBox="0 0 4321 638" fill="none" xmlns="http://www.w3.org/2000/svg">
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
      </svg> -->

      <!-- white -->
      <svg class="h-4 fill-current" viewBox="0 0 4321 638" xmlns="http://www.w3.org/2000/svg">
        <path d="M60 437.5V637.5H460L660 437.5V37.5H460V237.5H260V437.5H60Z"/>
        <rect y="400" width="320" height="75" rx="37.5"/>
        <rect x="200" y="200" width="320" height="75" rx="37.5"/>
        <path d="M430 37.5C430 16.7893 446.789 0 467.5 0H652.5C673.211 0 690 16.7893 690 37.5V37.5C690 58.2107 673.211 75 652.5 75H467.5C446.789 75 430 58.2107 430 37.5V37.5Z"/>
        <path d="M1169.05 436.656H1043.53V627.637H944V13.4494H1169.05C1308.33 13.4494 1377.97 82.1906 1377.97 219.673C1377.97 290.207 1360.33 344.005 1325.07 381.065C1290.4 418.126 1238.39 436.656 1169.05 436.656ZM1043.53 350.58H1168.16C1239.89 350.58 1275.75 306.944 1275.75 219.673C1275.75 177.831 1267.08 147.345 1249.75 128.217C1232.41 109.089 1205.22 99.5253 1168.16 99.5253H1043.53V350.58Z"/>
        <path d="M1462.09 627.637V179.325H1558.92V233.122C1609.73 200.246 1660.54 179.026 1711.35 169.462V267.194C1659.94 277.356 1616.01 290.506 1579.55 306.646L1559.82 314.715V627.637H1462.09Z"/>
        <path d="M1806.77 227.743C1837.85 188.889 1889.26 169.462 1960.99 169.462C2032.72 169.462 2083.83 188.889 2114.31 227.743C2145.39 266.596 2160.94 324.877 2160.94 402.584C2160.94 480.292 2145.99 538.871 2116.11 578.323C2086.22 617.774 2034.51 637.5 1960.99 637.5C1887.47 637.5 1835.76 617.774 1805.87 578.323C1775.99 538.871 1761.04 480.292 1761.04 402.584C1761.04 324.877 1776.28 266.596 1806.77 227.743ZM1880.29 519.146C1894.04 543.056 1920.94 555.011 1960.99 555.011C2001.04 555.011 2027.94 543.056 2041.69 519.146C2055.43 495.236 2062.31 456.083 2062.31 401.688C2062.31 347.293 2054.84 308.738 2039.89 286.023C2025.55 263.309 1999.25 251.951 1960.99 251.951C1922.73 251.951 1896.13 263.309 1881.19 286.023C1866.84 308.738 1859.67 347.293 1859.67 401.688C1859.67 456.083 1866.54 495.236 1880.29 519.146Z"/>
        <path d="M2569.15 271.677C2498.61 262.113 2447.5 257.331 2415.82 257.331C2384.14 257.331 2362.03 261.217 2349.47 268.987C2337.52 276.16 2331.54 287.816 2331.54 303.956C2331.54 320.095 2338.12 331.452 2351.27 338.027C2365.01 344.603 2396.69 352.373 2446.31 361.34C2496.52 369.708 2532.09 383.158 2553.01 401.688C2573.93 420.218 2584.39 453.094 2584.39 500.316C2584.39 547.539 2569.15 582.208 2538.66 604.325C2508.77 626.442 2464.84 637.5 2406.86 637.5C2370.39 637.5 2324.37 632.419 2268.78 622.257L2240.98 617.774L2244.57 536.181C2316.3 545.745 2368 550.527 2399.68 550.527C2431.36 550.527 2453.78 546.642 2466.93 538.871C2480.68 531.101 2487.55 518.249 2487.55 500.316C2487.55 482.384 2480.98 470.13 2467.83 463.555C2455.27 456.382 2424.49 448.91 2375.47 441.139C2327.06 432.771 2291.49 419.919 2268.78 402.584C2246.06 385.25 2234.7 353.569 2234.7 307.542C2234.7 261.515 2250.25 227.145 2281.33 204.43C2313.01 181.716 2353.36 170.359 2402.37 170.359C2440.63 170.359 2487.55 175.141 2543.14 184.705L2570.94 190.084L2569.15 271.677Z"/>
        <path d="M2919.5 262.711H2795.77V459.968C2795.77 496.431 2798.46 520.64 2803.84 532.595C2809.22 544.55 2822.97 550.527 2845.08 550.527L2918.6 547.838L2923.09 625.844C2883.04 633.615 2852.55 637.5 2831.63 637.5C2780.82 637.5 2745.86 625.844 2726.73 602.532C2708.2 579.219 2698.93 535.285 2698.93 470.728V262.711H2641.55V179.325H2698.93V49.3144H2795.77V179.325H2919.5V262.711Z"/>
        <path d="M3331.41 317.405V521.835C3332.01 534.986 3335.29 544.849 3341.27 551.424C3347.85 557.402 3357.71 561.287 3370.86 563.08L3368.17 637.5C3316.76 637.5 3277.01 626.442 3248.92 604.325C3201.1 626.442 3152.98 637.5 3104.56 637.5C3015.5 637.5 2970.97 589.979 2970.97 494.937C2970.97 449.508 2982.92 416.632 3006.83 396.308C3031.34 375.985 3068.7 363.731 3118.91 359.546L3234.57 349.684V317.405C3234.57 293.495 3229.19 276.758 3218.43 267.194C3208.27 257.63 3193.03 252.848 3172.71 252.848C3134.45 252.848 3086.63 255.239 3029.25 260.021L3000.56 261.814L2996.97 192.774C3062.12 177.233 3121.9 169.462 3176.29 169.462C3231.29 169.462 3270.74 181.417 3294.65 205.327C3319.16 228.639 3331.41 265.999 3331.41 317.405ZM3130.57 428.587C3089.32 432.173 3068.7 454.589 3068.7 495.833C3068.7 537.078 3086.93 557.7 3123.39 557.7C3153.28 557.7 3184.96 552.918 3218.43 543.354L3234.57 537.975V418.724L3130.57 428.587Z"/>
        <path d="M3454.1 627.637V179.325H3551.83V627.637H3454.1ZM3454.1 103.112V0H3551.83V103.112H3454.1Z"/>
        <path d="M3670.38 627.637V179.325H3767.21V233.122C3818.02 200.246 3868.83 179.026 3919.64 169.462V267.194C3868.23 277.356 3824.3 290.506 3787.83 306.646L3768.11 314.715V627.637H3670.38Z"/>
        <path d="M4305.48 271.677C4234.95 262.113 4183.84 257.331 4152.16 257.331C4120.48 257.331 4098.36 261.217 4085.81 268.987C4073.85 276.16 4067.87 287.816 4067.87 303.956C4067.87 320.095 4074.45 331.452 4087.6 338.027C4101.35 344.603 4133.03 352.373 4182.64 361.34C4232.85 369.708 4268.42 383.158 4289.34 401.688C4310.26 420.218 4320.72 453.094 4320.72 500.316C4320.72 547.539 4305.48 582.208 4274.99 604.325C4245.11 626.442 4201.17 637.5 4143.19 637.5C4106.73 637.5 4060.7 632.419 4005.11 622.257L3977.32 617.774L3980.9 536.181C4052.63 545.745 4104.34 550.527 4136.02 550.527C4167.7 550.527 4190.11 546.642 4203.26 538.871C4217.01 531.101 4223.89 518.249 4223.89 500.316C4223.89 482.384 4217.31 470.13 4204.16 463.555C4191.61 456.382 4160.82 448.91 4111.81 441.139C4063.39 432.771 4027.82 419.919 4005.11 402.584C3982.4 385.25 3971.04 353.569 3971.04 307.542C3971.04 261.515 3986.58 227.145 4017.66 204.43C4049.34 181.716 4089.69 170.359 4138.71 170.359C4176.96 170.359 4223.89 175.141 4279.48 184.705L4307.27 190.084L4305.48 271.677Z"/>
      </svg>
    </a>

    <language-changer
      :language="language"
      :languages="languages"
      class="rounded-sm p-1 ml-auto h-8 text-primary-gray-100"
      options-bg-color="bg-white"
      options-text-color="text-primary-600"
      options-z-index="z-30"
      option-hover-bg-color="hover:bg-primary-200"
      @set-language="setLanguage">
    </language-changer>
  </nav>

  <header id="landing-page" class="flex items-center relative h-screen min-h-400 bg-center bg-no-repeat bg-fixed bg-cover" style="background-image: url(https://res.cloudinary.com/duib7ae0a/image/upload/q_auto,f_auto,w_1500/prostairs/light-wood.jpg)">
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
