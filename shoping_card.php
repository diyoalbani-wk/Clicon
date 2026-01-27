<!DOCTYPE html>
<html lang="en">
<?php
$title="Shoping Card";
include 'components/head.php'?>
<body clas>

<?php include 'components/header.php'?>

<section class="hidden md:flex py-4 bg-gray-100">
    <div class="flex gap-2 container mx-auto">
        <div class="flex gap-2 text-gray-500 items-center">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.875 16.2498V12.4998C11.875 12.334 11.8092 12.1751 11.6919 12.0579C11.5747 11.9406 11.4158 11.8748 11.25 11.8748H8.75C8.58424 11.8748 8.42527 11.9406 8.30806 12.0579C8.19085 12.1751 8.125 12.334 8.125 12.4998V16.2498C8.125 16.4156 8.05915 16.5745 7.94194 16.6917C7.82473 16.809 7.66576 16.8748 7.5 16.8748H3.75C3.58424 16.8748 3.42527 16.809 3.30806 16.6917C3.19085 16.5745 3.125 16.4156 3.125 16.2498V9.02324C3.1264 8.93674 3.14509 8.8514 3.17998 8.77224C3.21486 8.69308 3.26523 8.6217 3.32812 8.5623L9.57812 2.88261C9.69334 2.77721 9.84384 2.71875 10 2.71875C10.1562 2.71875 10.3067 2.77721 10.4219 2.88261L16.6719 8.5623C16.7348 8.6217 16.7851 8.69308 16.82 8.77224C16.8549 8.8514 16.8736 8.93674 16.875 9.02324V16.2498C16.875 16.4156 16.8092 16.5745 16.6919 16.6917C16.5747 16.809 16.4158 16.8748 16.25 16.8748H12.5C12.3342 16.8748 12.1753 16.809 12.0581 16.6917C11.9408 16.5745 11.875 16.4156 11.875 16.2498Z" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Home  >
        </div>

        <div class="flex text-gray-500 hover:text-blue-500 items-center">
            Shoping Card
        </div>
    </div>
</section>

<!-- START CONTENT -->
<section class="max-w-7xl mx-auto px-4 py-10">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    <div class="lg:col-span-2 rounded-lg overflow-hidden">
      <div class="px-6 py-4 text-xl border font-bold">
        Shopping Cart
      </div>

      <div class="hidden md:grid grid-cols-12 px-6 py-3 text-sm border font-semibold bg-gray-100">
        <div class="col-span-5">PRODUCTS</div>
        <div class="col-span-2">PRICE</div>
        <div class="col-span-3">QUANTITY</div>
        <div class="col-span-2">SUB-TOTAL</div>
      </div>

      <div class="grid grid-cols-12 items-center px-6 py-4 border gap-4">
        <div class="col-span-12 md:col-span-5 flex items-center gap-4">
          <button class="text-gray-400 hover:text-red-500">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#929FA5" stroke-width="1.5" stroke-miterlimit="10"/>
            <path d="M15 9L9 15" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15 15L9 9" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <img src="images/Image (12).png" class="w-14 h-14 border rounded">
          <p class="text-sm">
            4K UHD LED Smart TV with Chromecast Built-in
          </p>
        </div>

        <div class="col-span-6 md:col-span-2 text-sm">
          <span class="line-through text-gray-400 mr-1">$99</span>
          <span class="font-medium">$70</span>
        </div>

        <div class="col-span-6 md:col-span-3">
          <div class="flex items-center border rounded w-fit font-semibold">
            <button class="px-3 py-1">−</button>
            <span class="px-4">01</span>
            <button class="px-3 py-1">+</button>
          </div>
        </div>

        <div class="col-span-12 md:col-span-2  font-medium">
          $70
        </div>
      </div>

      <div class="grid grid-cols-12 items-center border px-6 py-4 gap-4">
        <div class="col-span-12 md:col-span-5 flex items-center gap-4">
          <button class="text-red-500">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#EE5858" stroke-width="1.5" stroke-miterlimit="10"/>
            <path d="M15 9L9 15" stroke="#EE5858" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15 15L9 9" stroke="#EE5858" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <img src="images/1.png" class="w-14 h-14 border rounded">
          <p class="text-sm">
            Wired Over-Ear Gaming Headphones with USB
          </p>
        </div>

        <div class="col-span-6 md:col-span-2 text-sm font-medium">
          $250
        </div>

        <div class="col-span-6 md:col-span-3">
          <div class="flex items-center border rounded w-fit font-semibold">
            <button class="px-3 py-1">−</button>
            <span class="px-4">03</span>
            <button class="px-3 py-1">+</button>
          </div>
        </div>

        <div class="col-span-12 md:col-span-2 font-medium">
          $250
        </div>
      </div>

      <div class="flex flex-col sm:flex-row justify-between gap-4 px-6 py-4 border">
        <button class="border border-blue-500 text-blue-500 px-5 py-2 rounded font-semibold text-sm">
          ← RETURN TO SHOP
        </button>
        <button class="bg-blue-500 text-white px-5 py-2 rounded font-semibold text-sm">
          UPDATE CART
        </button>
      </div>
    </div>

    <div class="space-y-6">

      <div class="border rounded-lg p-6">
        <h3 class="font-semibold mb-4">Card Totals</h3>

        <div class="space-y-3 text-sm">
          <div class="flex justify-between">
            <span>Sub-total</span>
            <span class="font-semibold">$320</span>
          </div>
          <div class="flex justify-between">
            <span>Shipping</span>
            <span class="font-semibold">Free</span>
          </div>
          <div class="flex justify-between">
            <span>Discount</span>
            <span class="font-semibold">$24</span>
          </div>
          <div class="flex justify-between">
            <span>Tax</span>
            <span class="font-semibold">$61.99</span>
          </div>
          <hr>
          <div class="flex justify-between font-bold">
            <span>Total</span>
            <span>$357.99 USD</span>
          </div>
        </div>

        <a href="checkout.php">
          <button class="w-full mt-5 bg-orange-500 text-white py-3 rounded text-sm font-medium">
            PROCEED TO CHECKOUT →
          </button>
        </a>
      </div>

      <div class="border rounded-lg p-6">
        <h3 class="font-semibold mb-4">Coupon Code</h3>
        <input type="text" placeholder="Email address"
          class="w-full border rounded px-3 py-2 text-sm mb-3">
        <button class="bg-blue-500 text-white px-4 py-2 rounded text-sm">
          APPLY COUPON
        </button>
      </div>

    </div>
  </div>
</section>
<!-- END CONTENT -->

<?php include 'components/footer.php'?>

</body>
</html>