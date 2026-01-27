<!DOCTYPE html>
<html lang="en">
<?php
$title="Product detail ";
include 'components/head.php'?>
<body>

<?php include 'components/header.php'?>

<!-- START CONTENT -->
<section class="hidden md:flex py-4 bg-gray-100">
    <div class="flex gap-2 container mx-auto">
        <div class="flex gap-2 text-gray-500 items-center">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.875 16.2498V12.4998C11.875 12.334 11.8092 12.1751 11.6919 12.0579C11.5747 11.9406 11.4158 11.8748 11.25 11.8748H8.75C8.58424 11.8748 8.42527 11.9406 8.30806 12.0579C8.19085 12.1751 8.125 12.334 8.125 12.4998V16.2498C8.125 16.4156 8.05915 16.5745 7.94194 16.6917C7.82473 16.809 7.66576 16.8748 7.5 16.8748H3.75C3.58424 16.8748 3.42527 16.809 3.30806 16.6917C3.19085 16.5745 3.125 16.4156 3.125 16.2498V9.02324C3.1264 8.93674 3.14509 8.8514 3.17998 8.77224C3.21486 8.69308 3.26523 8.6217 3.32812 8.5623L9.57812 2.88261C9.69334 2.77721 9.84384 2.71875 10 2.71875C10.1562 2.71875 10.3067 2.77721 10.4219 2.88261L16.6719 8.5623C16.7348 8.6217 16.7851 8.69308 16.82 8.77224C16.8549 8.8514 16.8736 8.93674 16.875 9.02324V16.2498C16.875 16.4156 16.8092 16.5745 16.6919 16.6917C16.5747 16.809 16.4158 16.8748 16.25 16.8748H12.5C12.3342 16.8748 12.1753 16.809 12.0581 16.6917C11.9408 16.5745 11.875 16.4156 11.875 16.2498Z" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Home  >
        </div>

        <div class="flex text-gray-500 items-center">
            Shop  >
        </div>

        <div class="flex text-gray-500 items-center">
            Shop Grid  >
        </div>

        <div class="text-blue-400 flex items-center">
            Electronics Devices
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-10">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

    <div class="space-y-4">

      <div class="border rounded-lg p-6 flex justify-center items-center">
        <img src="images/lp1.png"
             class="w-full max-h-[420px] object-contain">
      </div>

      <div class="relative flex items-center gap-6">

        <button class="w-20 h-20 border rounded-md">
          <img src="images/01.png" class="object-contain">
        </button>

         <button class="w-20 h-20 border rounded-md">
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
        </button>

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


<section class="container mx-auto px-4">
    <div class=" border border-gray-300">
        <div class="flex justify-center border-b border-gray-300 p-6">
            <ul class="flex flex-wrap gap-6 text-sm font-medium text-gray-500">
                <li class="flex items-center hover:text-black hover:border-b-2 hover:border-orange-500">
                    DESCRIPTION
                </li>
                <li class="flex items-center hover:text-black hover:border-b-2 hover:border-orange-500">ADDITIONAL INFORMATION</li>
                <li class="flex items-center hover:text-black hover:border-b-2 hover:border-orange-500" >SPECIFICATION</li>
                <li class="flex items-center hover:text-black hover:border-b-2 hover:border-orange-500">REVIEW</li>
            </ul>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 p-8 ">
            <div class="lg:col-span-2 space-y-2">
                <h3 class="font-semibold mb-4">Description</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need. The first notebook of its kind, this MacBook Pro is a beast. M1 Pro takes the exceptional performance of the M1 architecture to a whole new level for pro users.
                </p>
                <p>
                    Even the most ambitious projects are easily handled with up to 10 CPU cores, up to 16 GPU cores, a 16‑core Neural Engine, and dedicated encode and decode media engines that support H.264, HEVC, and ProRes codecs.
                </p>
            </div>

            <div class="lg:col-span-1 space-y-4 ">
                <h3 class="font-semibold mb-4">Feature</h3>
                <ul class="space-y-5 text-sm text-gray-600">
                    <li class="flex items-center gap-2 font-semibold">
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16.5C16.1421 16.5 19.5 13.1421 19.5 9C19.5 4.85786 16.1421 1.5 12 1.5C7.85786 1.5 4.5 4.85786 4.5 9C4.5 13.1421 7.85786 16.5 12 16.5Z" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 13.5C14.4853 13.5 16.5 11.4853 16.5 9C16.5 6.51472 14.4853 4.5 12 4.5C9.51472 4.5 7.5 6.51472 7.5 9C7.5 11.4853 9.51472 13.5 12 13.5Z" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.5 15V22.5L12 20.25L7.5 22.5V15" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </span> Free 1 Year Warranty
                    </li>
                    <li class="flex items-center gap-2 font-semibold">
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 7.50002H20.4938C20.6432 7.49904 20.7894 7.54329 20.9132 7.62695C21.037 7.71061 21.1326 7.82977 21.1875 7.96877L22.5 11.25" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.5 13.5H16.5" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.625 20.25C18.8676 20.25 19.875 19.2426 19.875 18C19.875 16.7574 18.8676 15.75 17.625 15.75C16.3824 15.75 15.375 16.7574 15.375 18C15.375 19.2426 16.3824 20.25 17.625 20.25Z" stroke="#FA8232" stroke-width="1.5" stroke-miterlimit="10"/>
                        <path d="M6.375 20.25C7.61764 20.25 8.625 19.2426 8.625 18C8.625 16.7574 7.61764 15.75 6.375 15.75C5.13236 15.75 4.125 16.7574 4.125 18C4.125 19.2426 5.13236 20.25 6.375 20.25Z" stroke="#FA8232" stroke-width="1.5" stroke-miterlimit="10"/>
                        <path d="M15.375 18H8.625" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.125 18H2.25C2.05109 18 1.86032 17.921 1.71967 17.7803C1.57902 17.6397 1.5 17.4489 1.5 17.25V6.75C1.5 6.55109 1.57902 6.36032 1.71967 6.21967C1.86032 6.07902 2.05109 6 2.25 6H16.5V16.05" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.5 11.25H22.5V17.25C22.5 17.4489 22.421 17.6397 22.2803 17.7803C22.1397 17.921 21.9489 18 21.75 18H19.875" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span> Free Shipping & Fast Delivery
                    </li>
                    <li class="flex items-center gap-2 font-semibold">
                    <span class="text-orange-500">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5656 11.4191L20.25 12.5722L17.25 6.83469L19.5938 5.66281C19.7679 5.57403 19.9701 5.55771 20.1563 5.61742C20.3425 5.67713 20.4975 5.80803 20.5875 5.98156L22.8937 10.3972C22.9405 10.4856 22.9691 10.5824 22.9779 10.682C22.9867 10.7817 22.9755 10.882 22.9449 10.9772C22.9143 11.0724 22.865 11.1606 22.7999 11.2365C22.7348 11.3123 22.6551 11.3744 22.5656 11.4191V11.4191Z" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3.75008 12.4779L1.43446 11.3154C1.3453 11.2717 1.26584 11.2105 1.20079 11.1355C1.13575 11.0604 1.08646 10.9731 1.05585 10.8787C1.02524 10.7842 1.01393 10.6845 1.02261 10.5856C1.03128 10.4867 1.05975 10.3906 1.10633 10.3029L3.41258 5.88725C3.5028 5.71384 3.65716 5.58251 3.84277 5.52122C4.02839 5.45993 4.2306 5.47353 4.40633 5.55912L6.75009 6.731L3.75008 12.4779Z" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.25 12.5723L18.75 14.3348L15.3 17.7848C15.206 17.8727 15.092 17.9365 14.968 17.9708C14.8439 18.0051 14.7133 18.0088 14.5875 17.9816L9.15 16.6223C9.05067 16.5946 8.95812 16.5467 8.87812 16.4816L3.75 12.4785" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.7501 14.334L14.6251 11.334L13.4251 12.234C12.9052 12.622 12.2738 12.8317 11.6251 12.8317C10.9763 12.8317 10.345 12.622 9.82508 12.234L9.31883 11.8496C9.23323 11.7845 9.16242 11.702 9.1111 11.6075C9.05978 11.513 9.02911 11.4087 9.02113 11.3014C9.01316 11.1942 9.02805 11.0865 9.06483 10.9854C9.1016 10.8844 9.15942 10.7923 9.23446 10.7152L12.9095 7.04961C12.9785 6.98092 13.0604 6.92652 13.1505 6.88952C13.2406 6.85252 13.3371 6.83365 13.4345 6.83399H17.2501" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.80615 6.73121L11.6155 5.32496C11.7864 5.27595 11.9692 5.28924 12.1312 5.36246L15.3749 6.83433" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.5 19.9594L7.67813 19.2469C7.56313 19.2209 7.45666 19.166 7.36875 19.0875L5.25 17.25" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span> 100% Money-back guarantee
                    </li>
                    <li class="flex items-center gap-2 font-semibold">
                    <span class="text-orange-500">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.1406 12.7503H18.1406C17.7428 12.7503 17.3613 12.9083 17.08 13.1897C16.7987 13.471 16.6406 13.8525 16.6406 14.2503V18.0003C16.6406 18.3981 16.7987 18.7797 17.08 19.061C17.3613 19.3423 17.7428 19.5003 18.1406 19.5003H19.6406C20.0384 19.5003 20.42 19.3423 20.7013 19.061C20.9826 18.7797 21.1406 18.3981 21.1406 18.0003V12.7503ZM21.1406 12.7503C21.1407 11.5621 20.9054 10.3856 20.4484 9.28875C19.9915 8.1919 19.3218 7.1964 18.4781 6.35969C17.6344 5.52297 16.6334 4.86161 15.5328 4.41375C14.4322 3.96589 13.2538 3.74041 12.0656 3.75031C10.8782 3.74165 9.70083 3.96805 8.60132 4.41647C7.5018 4.86488 6.50189 5.52645 5.6592 6.36304C4.81651 7.19963 4.1477 8.19471 3.69131 9.29094C3.23492 10.3872 2.99997 11.5629 3 12.7503V18.0003C3 18.3981 3.15804 18.7797 3.43934 19.061C3.72064 19.3423 4.10218 19.5003 4.5 19.5003H6C6.39782 19.5003 6.77936 19.3423 7.06066 19.061C7.34196 18.7797 7.5 18.3981 7.5 18.0003V14.2503C7.5 13.8525 7.34196 13.471 7.06066 13.1897C6.77936 12.9083 6.39782 12.7503 6 12.7503H3" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span> 24/7 Customer support
                    </li>
                    <li class="flex items-center gap-2 font-semibold">
                    <span class="text-orange-500">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 5.25H3C2.58579 5.25 2.25 5.58579 2.25 6V18C2.25 18.4142 2.58579 18.75 3 18.75H21C21.4142 18.75 21.75 18.4142 21.75 18V6C21.75 5.58579 21.4142 5.25 21 5.25Z" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.75 15.75H18.75" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.25 15.75H12.75" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.25 9.08398H21.75" stroke="#FA8232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span> Secure payment method
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-1 border-l ">
                <div  class="ml-4">
                    <h3 class="font-semibold mb-4">Shipping Information</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li>
                        <span class="font-medium">Courier:</span>
                        2–4 days, free shipping
                        </li>
                        <li>
                        <span class="font-medium">Local Shipping:</span>
                        up to one week, $19.00
                        </li>
                        <li>
                        <span class="font-medium">UPS Ground Shipping:</span>
                        4–6 days, $29.00
                        </li>
                        <li>
                        <span class="font-medium">Unishop Global Export:</span>
                        3–4 days, $39.00
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-16 mt-4">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

    <div>
      <h3 class="font-semibold mb-4">RELATED PRODUCT</h3>
      <div class="space-y-4">

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/7.png" class="w-14" >
          <div>
            <p class="text-sm leading-snug">
              Bose Sport Earbuds - Wireless Earphones
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/Image (2).png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              Simple Mobile 4G LTE Smartphone
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/ky.png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
             K UHD LED Smart TV with Chromecast Built-in
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

      </div>
    </div>

    <div>
      <h3 class="font-semibold mb-4">PRODUCT ACCESORIES</h3>
      <div class="space-y-4">

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/ps.png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              Samsung Electronics Samsung Galexy S21 5G
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/cctv.png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              Simple Mobile 5G LTE Galexy 12 Mini 512GB Gaming Phone
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/Tozo.png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              Sony DSCHX8 High Zoom Point & Shoot Camera
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

      </div>
    </div>

    <div>
      <h3 class="font-semibold mb-4">APPLE PRODUCT</h3>
      <div class="space-y-4">

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/Image (3).png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              TOZO T6 True Wireless Earbuds Bluetooth Headpho..
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/8.png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              JBL FLIP 4 - Waterproof Portable Bluetooth Speaker..
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/Image (5).png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              Wyze Cam Pan v2 1080p Pan/Tilt/Zoom Wi-Fi Indoor
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

      </div>
    </div>

    <div>
      <h3 class="font-semibold mb-4">FEATURED PRODUCTS</h3>
      <div class="space-y-4">

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/Image (12).png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              Portable Wshing Machine, 11lbs capacity Model 18NMF.
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/drone.png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              Sony DSCHX8 High Zoom Point & Shoot Camera
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

        <div class="border rounded-lg p-3 flex gap-3">
          <img src="images/speaker.png" class="w-14">
          <div>
            <p class="text-sm leading-snug">
              Dell Optiplex 7000x7480 All-in-One Computer Monitor
            </p>
            <p class="text-blue-600 font-semibold">$1,500</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- END CONTENT -->

<?php include 'components/footer.php'?>

</body>
</html>