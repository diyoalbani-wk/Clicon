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