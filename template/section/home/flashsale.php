<?php
$sections = [
  "FLASH SALE" => [
    [
      "img" => "asset/src/images/7.png",
      "title" => "Bose Sport Earbuds - Wireless Earphones",
      "price" => "$1,500"
    ],
    [
      "img" => "asset/src/images/Image (2).png",
      "title" => "Simple Mobile 4G LTE Smartphone",
      "price" => "$1,500"
    ],
    [
      "img" => "asset/src/images/ky.png",
      "title" => "K UHD LED Smart TV with Chromecast Built-in",
      "price" => "$1,500"
    ],
  ],

  "BEST SELLERS" => [
    [
      "img" => "asset/src/images/ps.png",
      "title" => "Samsung Electronics Samsung Galaxy S21 5G",
      "price" => "$1,500"
    ],
    [
      "img" => "asset/src/images/cctv.png",
      "title" => "Simple Mobile 5G LTE Galaxy 12 Mini 512GB Gaming Phone",
      "price" => "$1,500"
    ],
    [
      "img" => "asset/src/images/Tozo.png",
      "title" => "Sony DSCHX8 High Zoom Point & Shoot Camera",
      "price" => "$1,500"
    ],
  ],

  "TOP RATED" => [
    [
      "img" => "asset/src/images/Image (12).png",
      "title" => "Portable Washing Machine, 11lbs capacity Model 18NMF.",
      "price" => "$1,500"
    ],
    [
      "img" => "asset/src/images/drone.png",
      "title" => "Sony DSCHX8 High Zoom Point & Shoot Camera",
      "price" => "$1,500"
    ],
    [
      "img" => "asset/src/images/speaker.png",
      "title" => "Dell Optiplex 7000x7480 All-in-One Computer Monitor",
      "price" => "$1,500"
    ],
  ],

  "NEW ARRIVAL" => [
    [
      "img" => "asset/src/images/Image (3).png",
      "title" => "TOZO T6 True Wireless Earbuds Bluetooth Headphones",
      "price" => "$1,500"
    ],
    [
      "img" => "asset/src/images/8.png",
      "title" => "JBL FLIP 4 - Waterproof Portable Bluetooth Speaker",
      "price" => "$1,500"
    ],
    [
      "img" => "asset/src/images/Image (5).png",
      "title" => "Wyze Cam Pan v2 1080p Pan/Tilt/Zoom Wi-Fi Indoor",
      "price" => "$1,500"
    ],
  ],
];
?>


<section class="container mx-auto py-16 mt-4">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

  <?php foreach ($sections as $sectionTitle => $products): ?>
    <div>
      <h3 class="font-semibold mb-4"><?= $sectionTitle ?></h3>

      <div class="space-y-4">
        <?php foreach ($products as $item): ?>
          <div class="border rounded-lg p-3 flex gap-3">
            <img src="<?= $item['img'] ?>" class="w-14" alt="">
            <div>
              <p class="text-sm leading-snug">
                <?= $item['title'] ?>
              </p>
              <p class="text-blue-600 font-semibold">
                <?= $item['price'] ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>

</div>
</section>