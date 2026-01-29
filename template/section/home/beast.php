<?php
$products = [
  [
    'title' => ' Bose Sport Earbuds - Wireless Earphones - Bluetooth In Ear...',
    'price' => '$2.300',
    'image' => 'asset/src/images/drone.png',
    'label' => 'SOLD OUT',
  ],
  [
    'title' => 'Simple Mobile 4G LTE Prepaid - Smartphone   . . . . . ',
    'price' => '$220',
    'image' => 'asset/src/images/image (3).png',
    'label' => null,
  ],
  [
    'title' => '4K UHD LED Smart TV with Chromecast Built-in, 4K UHD LED',
    'price' => '$1,05',
    'image' => 'asset/src/images/image (5).png',
    'label' => '19% OFF',
  ],
  [
    'title' => 'Sony DSCHX8 High Zoom Point & Shoot Camera',
    'price' => '$1.200',
    'image' => 'asset/src/images/earphoneat.png',
    'label' => null,
  ],
  [
    'title' => 'Dell Optiplex 7000x7480 All-in-One Computer Monitor',
    'price' => '$299',
    'image' => 'asset/src/images/image (2).png',
    'label' => null,
  ],
  [
    'title' => 'Portable Wshing Machine, 11lbs capacity Model 18NMFIAM',
    'price' => '$70',
    'image' => 'asset/src/images/image (6).png',
    'label' => null,
  ],
  [
    'title' => '2-Barrel Carburetor Carb 2100 Engine Increase Horsepower',
    'price' => '$160',
    'image' => 'asset/src/images/image (7).png',
    'label' => 'HOT',
  ],
  [
    'title' => 'JBL FLIP 4 - Waterproof Portable Bluetooth Speaker - Black',
    'price' => '$250',
    'image' => 'asset/src/images/image (8).png',
    'label' => '32% OFF',
  ],
];

$productbagdes = [
  'HOT'      => 'bg-red-500',
  '19% OFF'  => 'bg-yellow-400',
  '32% OFF' => 'bg-yellow-400',
  'SOLD OUT' => 'bg-gray-400',
];
?>

<section class="bg-white py-14">
  <div class="container mx-auto">

    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
      <div class="flex flex-col sm:flex-row sm:items-center gap-3">
        <h2 class="text-xl font-bold text-gray-800">Best Deals</h2>
        <div class="bg-yellow-200 text-sm px-4 py-1 rounded font-semibold">
          Deals ends in <span class="font-bold">16d : 21h : 57m : 23s</span>
        </div>
      </div>
      <a href="#" class="text-sm text-blue-500 hover:underline ">
        Browse All Product →
      </a>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-5">

      <div class="col-span-2 mb-4 md:mb-0 border p-6 relative">

        <div class="absolute top-4 left-4 space-y-2">
          <span class="block bg-yellow-400 text-xs px-2 py-1 rounded font-semibold">
            32% OFF
          </span>
          <span class="block bg-red-500 text-white text-xs px-2 py-1 rounded">
            HOT
          </span>
        </div>

        <img src="asset/src/images/ps.png" class="mx-auto mb-6" />

        <p class="text-yellow-400 text-sm mb-2">
          ★★★★★ <span class="text-gray-400">(52,677)</span>
        </p>
                                      


        <h3 class="font-semibold text-gray-800 mb-2">
          Xbox Series S - 512GB SSD Console with Wireless Controller - EU Versio...
        </h3>

        <div class="flex items-center gap-3 mb-3">
          <span class="line-through text-gray-400">$665.00</span>
          <span class="text-blue-600 text-xl font-bold">$442.12</span>
        </div>

        <p class="text-sm text-gray-500 mb-6">
          Games built using the Xbox Series X|S development kit showcase unparalleled load times, visuals.
        </p>

        <div class="flex gap-3">
          <button class="border px-4 py-2 rounded bg-[#ffe7d6]">
            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.125 17.25C10.125 17.25 0.75 12 0.75 5.62501C0.75 4.49803 1.14046 3.40585 1.85496 2.53431C2.56945 1.66277 3.56384 1.0657 4.66893 0.844677C5.77403 0.623658 6.92157 0.792346 7.91631 1.32204C8.91105 1.85174 9.69155 2.70972 10.125 3.75001C10.5585 2.70972 11.3389 1.85174 12.3337 1.32204C13.3284 0.792346 14.476 0.623658 15.5811 0.844677C16.6862 1.0657 17.6805 1.66277 18.395 2.53431C19.1095 3.40585 19.5 4.49803 19.5 5.62501C19.5 12 10.125 17.25 10.125 17.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <?php
              $text = 'ADD TO CHART';
              $href = '/shop';
              include BASE_PATH . '/asset/src/components/button/add.php';
          ?>
          <button class="border px-4 py-2 rounded bg-[#ffe7d6]">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>
      </div>

      <div class="col-span-2 gap-4 md:gap-0 grid grid-cols-2 md:grid-cols-4 lg:col-span-3">
        <?php foreach ($products as $product): ?>
          <div class="border p-4 relative group">

            <?php if (!empty($product['label'])): ?>
              <span class="absolute z-20 top-3 left-3
                <?= $productbagdes[$product['label']] ?? '' ?>
                text-white text-xs px-2 py-1 rounded">
                <?= $product['label'] ?>
              </span>
            <?php endif; ?>

            <div class="relative overflow-hidden">
              <img src="<?= $product['image'] ?>" class="mx-auto mb-4 z-10" />

              <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"></div>

             <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                  <img src="asset/src/images/Heart.png" class="w-4" alt="">
                </span>

                <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                      <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                      <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </span>
                  
                <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <a href="product_detail.php">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </a>
                </span>
              </div>
            </div>

            <h4 class="text-sm font-semibold text-gray-700">
              <?= $product['title'] ?>
            </h4>

            <p class="text-blue-600 font-bold mt-2">
              <?= $product['price'] ?>
            </p>
          </div>
        <?php endforeach; ?>

   
          <!-- <div class="border p-4 relative group">
            <span class="absolute z-20 top-3 left-3 bg-gray-400 text-white text-xs px-2 py-1 rounded">
              SOLD OUT
            </span>
            <div class="relative group overflow-hidden">
              <img src="asset/src/images/drone.png" class="mx-auto mb-4 z-10" />

              <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

              <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                  <img src="asset/src/images/Heart.png" class="w-4" alt="">
                </span>

                <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                      <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                      <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </span>
                  
                <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <a href="product_detail.php">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </a>
                </span>
              </div>
            </div>
            <h4 class="text-sm font-semibold text-gray-700">
              Bose Sport Earbuds - Wireless Earphones - Bluetooth In Ear..
            </h4>
            <p class="text-blue-600 font-bold mt-2">$2.300</p>
          </div>

        <div class="border p-4">
          <div class="relative group overflow-hidden">
            <img src="asset/src/images/Image (3).png" class="mx-auto mb-4" />

            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

            <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

              <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                <img src="asset/src/images/Heart.png" class="w-4" alt="">
              </span>

              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                    <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                    <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
                
              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
            </div>
          </div>
          <h4 class="text-sm font-semibold text-gray-700">
            Simple Mobile 4G LTE Prepaid Smartphone
          </h4>
          <p class="text-blue-600 font-bold mt-7">$220</p>
        </div>

        <div class="border p-4 relative">
          <span class="absolute z-20 top-3 left-3 bg-yellow-400 text-xs px-2 py-1 rounded">
            19% OFF
          </span>
          <div class="relative group overflow-hidden">
            <img src="asset/src/images/Image (5).png" class="mx-auto mb-4 z-10" />

            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

            <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

              <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                <img src="asset/src/images/Heart.png" class="w-4" alt="">
              </span>

              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                    <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                    <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
                
              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
            </div>
          </div>
          <h4 class="text-sm font-semibold text-gray-700">
            4K UHD LED Smart TV with Chromecast Built-in
          </h4>
          <div class="flex items-center mt-2 gap-3">
            <span class="line-through text-gray-400">$865</span>
            <p class="text-blue-600 font-bold">$1,50</p>
          </div>
        </div>

        <div class="border p-4">
          <div class="relative group overflow-hidden">
            <img src="asset/src/images/earphoneat.png" class="mx-auto" />

            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

            <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

              <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                <img src="asset/src/images/Heart.png" class="w-4" alt="">
              </span>

              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                    <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                    <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
                
              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
            </div>
          </div>

            <h4 class="text-sm mt-4 font-semibold text-gray-700">
              Sony DSCHX8 High Zoom Point & Shoot Camera
            </h4>
            <p class="text-blue-600 font-bold mt-2">$1.200</p>
        </div>


         <div class="border p-4">
          <div class="relative group overflow-hidden">
             <img src="asset/src/images/Image (2).png" class="mx-auto" /> 

            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

            <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

              <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                <img src="asset/src/images/Heart.png" class="w-4" alt="">
              </span>

              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                    <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                    <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
                
              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
            </div>
          </div>
          <h4 class="text-sm font-semibold mt-6 text-gray-700">
            Dell Optiplex 7000x7480 All-in-One Computer Monitor
          </h4>
          <p class="text-blue-600 font-bold mt-4">$299</p>
        </div>

        <div class="border p-4">
          <div class="relative group overflow-hidden">
             <img src="asset/src/images/Image (6).png" class="mx-auto" /> 

             <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

            <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

              <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                <img src="asset/src/images/Heart.png" class="w-4" alt="">
              </span>

              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                    <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                    <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
                
              <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </span>
            </div>
          </div>
          <h4 class="text-sm font-semibold mt-6 text-gray-700">
            Portable Wshing Machine, 11lbs capacity Model 18NMFIAM
          </h4>
          <div class="flex items-center mt-4 gap-3">
            <span class="line-through text-gray-400">$865.00</span>
            <p class="text-blue-600 font-bold">$299</p>
          </div>
        </div>

        <div class="border p-4 relative">
          <span class="block absolute z-20 bg-red-500 text-white text-xs w-[30%] px-2 py-1 rounded">
            HOT
          </span>
          <div class="relative group overflow-hidden">
             <img src="asset/src/images/Image (7).png" class="mx-auto z-10 h-[160px]" />

              <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

              <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                  <img src="asset/src/images/Heart.png" class="w-4" alt="">
                </span>

                <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                      <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                      <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </span>
                  
                <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </span>
              </div>
          </div>
          <h4 class="text-sm font-semibold text-gray-700">
            2-Barrel Carburetor Carb 2100 Engine Increase Horsepower
          </h4>
          <p class="text-blue-600 font-bold mt-4">$160</p>
        </div>

        <div class="border p-4 relative">
          <span class="absolute z-20 top-3 left-3 bg-yellow-400 text-xs px-2 py-1 rounded">
            32% OFF
          </span>
          <div class="relative group overflow-hidden">
            <img src="asset/src/images/Image (8).png" class="mx-auto z-10" />

            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

              <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                  <img src="asset/src/images/Heart.png" class="w-4" alt="">
                </span>

                <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                      <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                      <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </span>
                  
                <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </span>
              </div>
          </div>
          <h4 class="text-sm font-semibold mt-6 text-gray-700">
            JBL FLIP 4 - Waterproof Portable Bluetooth Speaker - Black
          </h4>
          <div class="flex items-center mt-4 gap-3">
            <span class="line-through text-gray-400">$360</span>
            <p class="text-blue-600 font-bold">$250</p>
          </div>
        </div> -->

      </div>

    </div>
  </div>
</section>