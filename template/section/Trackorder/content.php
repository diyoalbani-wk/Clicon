<section class="container mx-auto px-4 md:px-0 grid grid-cols-1 md:grid-cols-2">
    <div class="space-y-4 py-12 mb-12 col-span-1 px-0 md:px-0">
        <h1 class="font-bold text-2xl">
            Track Order
        </h1>
        <div class="text-gray-500 text-sm truncate">
            To track your order please enter your order ID in the input field below and press the “Track Order” <br> button. this was given to you on your receipt and in the confirmation email you should have received.
        </div>
        <div class=" mx-auto">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col">
                <label for="user-id" class="mb-1 text-sm font-semibold text-gray-700">Order ID</label>
                <input 
                    type="text" 
                    id="user-id" 
                    placeholder="ID.." 
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                >
                </div>

                <div class="flex flex-col">
                <label for="email" class="mb-1 text-sm font-semibold text-gray-700">Biling Email</label>
                <input 
                    type="email" 
                    id="email" 
                    placeholder="Email addres" 
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                >
                </div>
            </form>
        </div>
        <div class="flex gap-2 text-gray-500 text-sm">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.25 11.25H12V16.5H12.75" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.8125 9C12.4338 9 12.9375 8.49632 12.9375 7.875C12.9375 7.25368 12.4338 6.75 11.8125 6.75C11.1912 6.75 10.6875 7.25368 10.6875 7.875C10.6875 8.49632 11.1912 9 11.8125 9Z" fill="#5F6C72"/>
            </svg>
            Order ID that we sended to your in your email address.
        </div>
        
        <div class="grid grid-cols-3">
         <?php 
                    $text = 'TRACK ORDER ->';
                    $href = '/Order_detail.php'; 
                    $bg = "bg-orange-500"; 
                    $hover = "hover:bg-orange-700";
                    include BASE_PATH . '/asset/src/components/button/add.php'; 
                ?>
        </div>
        
    </div>
</section>