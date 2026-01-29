<?php
$products = [
  [
    'image' => 'asset/src/images/01.png',
  ],
  [
    'image' => 'asset/src/images/02.png',
  ],
  [
    'image' => 'asset/src/images/03.png',
  ],
  [
    'image' => 'asset/src/images/04.png',
  ],
  [
    'image' => 'asset/src/images/05.png',
  ]
];
?>

<section class="max-w-7xl mx-auto px-4 py-10">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

    <div class="space-y-4">

      <div class="border rounded-lg p-6 flex justify-center items-center">
        <img src="asset/src/images/lp1.png"
             class="w-full max-h-[420px] object-contain">
      </div>

      <div class="relative flex items-center gap-6">
        <?php foreach ($products as $product) :?>
          <button class="w-20 h-20 border rounded-md">
            <img src="<?= $product['image']?>" class="object-contain">
          </button>
        <?php endforeach; ?>
         <!-- <button class="w-20 h-20 border rounded-md">
          <img src="images/05.png" class="object-contain">
        </button>

        <button class="w-20 h-20 border rounded-md">
          <img src="images/03.png" class="object-contain">
        </button>

        <button class="w-20 h-20 border rounded-md">
          <img src="images/04.png" class="object-contain">
        </button>

        <button class="w-20 h-20 border rounded-md">
          <img src="images/02.png" class="object-contain">
        </button>

        <button class="w-20 h-20 border rounded-md">
          <img src="images/06.png" class="object-contain">
        </button> -->

        <button
          class="hidden md:flex absolute left-0 top-[50%] -translate-y-1/2 -translate-x-1/2
          bg-orange-500 text-white w-10 h-10 rounded-full items-center justify-center shadow z-10">
          ‹-
        </button>

        <button
          class="hidden md:flex absolute right-0 top-[50%] -translate-y-1/2 translate-x-1/2
          bg-orange-500 text-white w-10 h-10 rounded-full items-center justify-center shadow z-10">
          -›
        </button>
      </div>
    </div>

    <div class="space-y-4 text-sm">

      <div class="flex items-center gap-2">
        <span class="text-orange-400">★★★★★</span>
        <span class="text-gray-500">(4.7 Star Rating)</span>
        <span class="text-gray-400">(21,671 User feedback)</span>
      </div>

      <h1 class="text-xl font-semibold text-gray-800 leading-snug">
        2020 Apple MacBook Pro with Apple M1 Chip
        (13-inch, 8GB RAM, 256GB SSD Storage) – Space Gray
      </h1>

      <div class="grid grid-cols-2 gap-y-1 text-gray-600">
        <p class="text-gray-400">Sku:<span class="font-semibold">A26461</span></p>
        <p class="text-gray-400">Availability:<span class="font-semibold text-green-500">In Stock</span></p>
        <p class="text-gray-400">Brand:<span class="font-semibold">Apple</span></p>
        <p class="text-gray-400">Category:<span class="font-semibold">Electronics Devices</span></p>
      </div>

      <div class="flex items-center gap-3 pt-2">
        <span class="text-2xl font-bold text-blue-500">$1699</span>
        <span class="line-through text-gray-400">$1999.00</span>
        <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">
          21% OFF
        </span>
      </div>

      <hr>

      <div class="flex items-center gap-6">
        <span class="font-medium">Color</span>
        <div class="flex gap-2">
          <span class="w-5 h-5 rounded-full bg-gray-300 ring-2 ring-orange-500"></span>
          <span class="w-5 h-5 rounded-full bg-gray-400"></span>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <select class="border rounded px-3 py-2">
          <option>14-inch Liquid Retina XDR display</option>
        </select>
        <select class="border rounded px-3 py-2">
          <option>1TB SSD Storage</option>
        </select>
      </div>

      <select class="w-full border rounded px-3 py-2">
        <option>16GB unified memory</option>
      </select>

      <div class="flex flex-wrap gap-4 pt-2">
        <div class="flex items-center border rounded">
          <button class="px-3 py-2">−</button>
          <span class="px-4 py-2 border-x">01</span>
          <button class="px-3 py-2">+</button>
        </div>

        <button class="flex-1 bg-orange-500 text-white py-3 rounded font-semibold flex items-center justify-center gap-2">
          ADD TO CARD 
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="white" stroke="white" stroke-width="1.5"/>
          <path d="M17.25 19.5C17.6642 19.5 18 19.8358 18 20.25C18 20.6642 17.6642 21 17.25 21C16.8358 21 16.5 20.6642 16.5 20.25C16.5 19.8358 16.8358 19.5 17.25 19.5Z" fill="white" stroke="white" stroke-width="1.5"/>
          <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>

        <button class="border border-orange-500 text-orange-500 px-6 py-3 rounded font-semibold">
          BUY NOW
        </button>
      </div>

      <div class="flex flex-wrap gap-6 text-gray-600 pt-2">
        <div class=" flex gap-2 items-center">
          <svg width="18" height="15" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.125 17.25C10.125 17.25 0.75 12 0.75 5.62501C0.75 4.49803 1.14046 3.40585 1.85496 2.53431C2.56945 1.66277 3.56384 1.0657 4.66893 0.844677C5.77403 0.623658 6.92157 0.792346 7.91631 1.32204C8.91105 1.85174 9.69155 2.70972 10.125 3.75001C10.5585 2.70972 11.3389 1.85174 12.3337 1.32204C13.3284 0.792346 14.476 0.623658 15.5811 0.844677C16.6862 1.0657 17.6805 1.66277 18.395 2.53431C19.1095 3.40585 19.5 4.49803 19.5 5.62501C19.5 12 10.125 17.25 10.125 17.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
           Add to Wishlist
        </div>
        <div class=" flex gap-2 items-center">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.48126 9.34688H2.98126V4.84688" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.8313 6.16874C17.0659 5.40226 16.1569 4.79418 15.1563 4.3793C14.1558 3.96442 13.0832 3.75087 12 3.75087C10.9168 3.75087 9.84427 3.96442 8.84369 4.3793C7.8431 4.79418 6.93413 5.40226 6.16876 6.16874L2.98126 9.34687" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16.5187 14.6531H21.0187V19.1531" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.16876 17.8313C6.93413 18.5977 7.8431 19.2058 8.84368 19.6207C9.84427 20.0356 10.9168 20.2491 12 20.2491C13.0832 20.2491 14.1558 20.0356 15.1563 19.6207C16.1569 19.2058 17.0659 18.5977 17.8313 17.8313L21.0188 14.6531" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          Add to Compare</div>
        <span class="flex items-center gap-2">
          Share product:
          <span>
              <svg width="108" height="24" viewBox="0 0 108 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.75 15.75H20.25V3.75H8.25V8.25" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15.75 8.25H3.75V20.25H15.75V8.25Z" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <g clip-path="url(#clip0_399_4009)">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M44 4C48.4183 4 52 7.58173 52 12C52 16.4183 48.4183 20 44 20C39.5817 20 36 16.4183 36 12C36 7.58173 39.5817 4 44 4Z" fill="#FA8232"/>
              <path d="M45.0414 19.933V13.7524H46.7849L47.016 11.5771H45.0414L45.0444 10.4883C45.0444 9.92091 45.0983 9.61705 45.9137 9.61705H47.0038V7.44141H45.2599C43.1652 7.44141 42.4281 8.4966 42.4281 10.2714V11.5773H41.1223V13.7527H42.4281V19.8453C42.9368 19.9466 43.4627 20.0001 44.0011 20.0001C44.349 20.0001 44.6965 19.9777 45.0414 19.933Z" fill="white"/>
              </g>
              <path d="M69.0318 18.5024C75.0699 18.5024 78.3718 13.4971 78.3718 9.15673C78.3718 9.01458 78.3689 8.87308 78.3625 8.73217C79.005 8.26699 79.5595 7.69103 80 7.03128C79.4118 7.29294 78.7789 7.46904 78.1149 7.54844C78.7926 7.14181 79.3129 6.49851 79.5584 5.73169C78.914 6.11419 78.2091 6.38382 77.4739 6.52898C76.8749 5.89052 76.0221 5.49121 75.0778 5.49121C73.2649 5.49121 71.7949 6.96219 71.7949 8.7754C71.7949 9.03319 71.8237 9.28385 71.8801 9.52436C69.1518 9.38699 66.7325 8.07995 65.1134 6.09252C64.8218 6.59379 64.6684 7.16349 64.6689 7.74345C64.6689 8.88304 65.2485 9.88903 66.1298 10.4776C65.6085 10.4617 65.0986 10.3208 64.6431 10.0668C64.6426 10.0806 64.6426 10.094 64.6426 10.1087C64.6426 11.6994 65.7741 13.0276 67.2761 13.3285C66.994 13.4054 66.7029 13.4443 66.4105 13.4441C66.1994 13.4441 65.9936 13.4233 65.7936 13.3849C66.2115 14.69 67.4233 15.6397 68.8601 15.6663C67.7366 16.5474 66.3213 17.0723 64.783 17.0723C64.5213 17.0725 64.2599 17.0573 64 17.0267C65.4528 17.9585 67.1779 18.5022 69.032 18.5022" fill="#5F6C72"/>
              <g clip-path="url(#clip1_399_4009)">
              <path d="M99.0241 4.05351C96.3652 4.35033 93.7157 6.50147 93.6064 9.57431C93.5376 11.4505 94.0703 12.858 95.8559 13.2533C96.6308 11.8864 95.606 11.5849 95.4466 10.596C94.7921 6.54365 100.121 3.78012 102.909 6.60926C104.839 8.56825 103.568 14.5952 100.457 13.9688C97.4759 13.3704 101.916 8.57294 99.5365 7.63093C97.6025 6.86546 96.5745 9.97266 97.4915 11.5161C96.9541 14.1703 95.7966 16.6714 96.2652 20.0004C97.7852 18.8975 98.2976 16.7854 98.7179 14.5827C99.4818 15.0467 99.8895 15.5294 100.864 15.6044C104.459 15.8824 106.466 12.016 105.976 8.44952C105.54 5.28764 102.384 3.67858 99.0241 4.05351Z" fill="#5F6C72"/>
              </g>
              <defs>
              <clipPath id="clip0_399_4009">
              <rect width="16" height="16" fill="white" transform="translate(36 4)"/>
              </clipPath>
              <clipPath id="clip1_399_4009">
              <rect width="16" height="16" fill="white" transform="translate(92 4)"/>
              </clipPath>
              </defs>
              </svg>
          </span>
        </span>
      </div>

      <div class="border rounded-md p-4 mt-4">
        <p class="font-medium mb-3">100% Guarantee Safe Checkout</p>
        <img src="images/Payment Method.png" alt="">
      </div>

    </div>
  </div>
</section>