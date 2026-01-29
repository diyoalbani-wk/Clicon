<?php
$badge_config = [
    'hot'      => ['text' => 'HOT',      'class' => 'bg-red-500'],
    'sale'     => ['text' => 'SALE',     'class' => 'bg-green-500'],
    'best'     => ['text' => 'BEST DEAL', 'class' => 'bg-blue-400'],
    'discount' => ['text' => '25% OFF',      'class' => 'bg-yellow-400'],
];

$products = [
    [
        'title'      => 'Amazon Basics High-Speed HDMI Cable (18 Gbps, 4K/6...',
        'price'      => '$360',
        'image'      => 'asset/src/images/1.png',
        'rating'     => 5,
        'reviews'    => 994,
        'badge_type' => 'best',
    ],
    [
        'title'      => 'Portable Wshing Machine, 11lbs capacity Model 18NMF..',
        'price'      => '$80',
        'image'      => 'asset/src/images/earphoneat.png',
        'rating'     => 5,
        'reviews'    => 798,
        'badge_type' => '',
    ],
    [
        'title'      => 'TOZO T6 True Wireless Earbuds Bluetooth Headphon...',
        'price'      => '$70',
        'image'      => 'asset/src/images/ky.png',
        'rating'     => 5,
        'reviews'    => 600,
        'badge_type' => 'hot',
    ],
    [
        'title'      => 'Dell Optiplex 7000x7480 All-in-One Computer Monitor',
        'price'      => '$250',
        'image'      => 'asset/src/images/Tozo.png',
        'rating'     => 5,
        'reviews'    => 492,
        'badge_type' => 'hot',
    ],
    [
        'title'      => 'Samsung Electronics Samsung Galexy S21 5G',
        'price'      => '$2,300',
        'image'      => 'asset/src/images/4.png',
        'rating'     => 5,
        'reviews'    => 740,
        'badge_type' => '',
    ],
    [
        'title'      => '4K UHD LED Smart TV with Chromecast Built-in',
        'price'      => '$220',
        'image'      => 'asset/src/images/7.png',
        'rating'     => 5,
        'reviews'    => 556,
        'badge_type' => 'sale',
    ],
    [
        'title'      => 'Wired Over-Ear Gaming Headphones with USB',
        'price'      => '$1,500',
        'image'      => 'asset/src/images/8.png',
        'rating'     => 5,
        'reviews'    => 536,
        'badge_type' => '',
    ],
    [
        'title'      => 'Polaroid 57-Inch Photo/Video Tripod with Deluxe Tripod Ca..',
        'price'      => '$1,200',
        'image'      => 'asset/src/images/9.png',
        'rating'     => 5,
        'reviews'    => 423,
        'badge_type' => 'discount',
    ],

];
?>

<section class="py-16">
  <div class="container mx-auto">

    <div class="flex justify-between items-center mb-8">
      <h2 class="text-2xl font-bold">Computer Accessories</h2>

      <div class="hidden md:block md:flex gap-6 text-sm font-semibold text-gray-400">
        <span class="hover:text-black hover:boder-2 hover:border-orange-500">All Product</span>
        <span class="hover:text-black hover:boder-2 hover:border-orange-500" >Keyboard & Mouse</span>
        <span class="hover:text-black hover:boder-2 hover:border-orange-500">Headphone</span>
        <span class="hover:text-black hover:boder-2 hover:border-orange-500">Webcam</span>
        <span class="hover:text-black hover:boder-2 hover:border-orange-500">Printer</span>
        <span class="text-orange-500">Browser All Product -></span>
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">

      <div class="lg:col-span-4 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
        <?php foreach ($products as $product): ?>
          <div class="border rounded-md p-4">
           <?php if (!empty($badge_config[$product['badge_type']])): 
                      $badge = $badge_config[$product['badge_type']]; ?>
            <span class="absolute z-20 <?=  $badge['class'] ?> text-white text-xs px-2 py-1 rounded">
              <?= $badge['text'] ?>
            </span>
            <?php endif; ?>

            <div class="relative group overflow-hidden">
              <img src="<?= $product['image'] ?>?>" class="mx-auto z-10 my-6 h-[160px] object-contain" />
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

            <div class="text-yellow-400 text-sm mt-6">
              <?= str_repeat('★', $product['rating']) ?> 
              <span class="text-gray-300">(<?= $product['reviews'] ?>)</span>
            </div>

            <h3 class="text-sm mt-1">
              <?=  $product['title'] ?>?>
            </h3>

            <p class="text-blue-600 font-semibold"><?= $product['price'] ?> ?></p>
          </div>
        <?php endforeach ;?>
      </div>

      <div class="hidden lg:flex flex-col gap-6">

        <div class="bg-yellow-200 rounded-md p-6 flex flex-col justify-between">
          <img src="asset/src/images/5.png" class="mx-auto mb-4" alt="">
          <h3 class="font-bold text-center">Xiaomi True Wireless Earbuds</h3>
          <p class="text-sm text-center text-gray-600 my-2">
            Escape the noise. Hear the magic.
          </p>
          <button class="bg-orange-500 text-white py-2 rounded">
            SHOP NOW →
          </button>
        </div>

        <div class="bg-[#123b5c] rounded-md p-6 text-white text-center">
          <p class="uppercase text-sm mb-2">Summer Sales</p>
          <h3 class="text-3xl font-bold mb-2">37% Discount</h3>
          <p class="text-sm mb-4">Only Smartphone Product</p>
          <button class="bg-blue-500 py-2 rounded">
            SHOP NOW →
          </button>
        </div>

      </div>

    </div>
  </div>
</section>