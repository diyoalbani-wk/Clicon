<!DOCTYPE html>
<html lang="en">
<?php 
$title="Wishlist";
include 'components/head.php'?>
<body>

<?php include'components/header.php'?>

<section class="hidden md:flex py-4 bg-gray-100">
    <div class="flex gap-2 container mx-auto">
        <div class="flex gap-2 text-gray-500 items-center">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.875 16.2498V12.4998C11.875 12.334 11.8092 12.1751 11.6919 12.0579C11.5747 11.9406 11.4158 11.8748 11.25 11.8748H8.75C8.58424 11.8748 8.42527 11.9406 8.30806 12.0579C8.19085 12.1751 8.125 12.334 8.125 12.4998V16.2498C8.125 16.4156 8.05915 16.5745 7.94194 16.6917C7.82473 16.809 7.66576 16.8748 7.5 16.8748H3.75C3.58424 16.8748 3.42527 16.809 3.30806 16.6917C3.19085 16.5745 3.125 16.4156 3.125 16.2498V9.02324C3.1264 8.93674 3.14509 8.8514 3.17998 8.77224C3.21486 8.69308 3.26523 8.6217 3.32812 8.5623L9.57812 2.88261C9.69334 2.77721 9.84384 2.71875 10 2.71875C10.1562 2.71875 10.3067 2.77721 10.4219 2.88261L16.6719 8.5623C16.7348 8.6217 16.7851 8.69308 16.82 8.77224C16.8549 8.8514 16.8736 8.93674 16.875 9.02324V16.2498C16.875 16.4156 16.8092 16.5745 16.6919 16.6917C16.5747 16.809 16.4158 16.8748 16.25 16.8748H12.5C12.3342 16.8748 12.1753 16.809 12.0581 16.6917C11.9408 16.5745 11.875 16.4156 11.875 16.2498Z" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Home  >
        </div>

        <div class="flex text-gray-500 hover:text-blue-500 items-center">
            Wishlist
        </div>
    </div>
</section>

<!-- START CONTENT -->
<section class="container mx-auto py-20 px-4 sm:px-0">
  <div class="border">
    <h1 class="font-medium p-4">Wishlist</h1>

    <div class="overflow-x-auto px-4 sm:px-0">
      <div class="min-w-[1000px]">

        <div class="grid grid-cols-5 bg-gray-100 border">
            <div class=" col-span-2 text-gray-500 font-semibold p-4">
                PRODUCTS
            </div>

            <div class=" flex items-center  text-gray-500">
                PRICE
            </div>

            <div class=" flex items-center text-gray-500">
                STOK STATUS
            </div>

            <div class=" flex items-center text-gray-500">
                ACTIONS 
            </div>           
        </div>

        <div class="grid grid-cols-5 ">
            <div class=" flex col-span-2 gap-4 mr-4 items-center">
                <img src="images/drone.png" class="w-[15%]" alt="">
                <div class="text-sm">
                    Bose Sport Earbuds - Wireless Earphones - Bluetooth In Ear Headphones for Workouts and Running, Triple Black
                </div>
            </div>
            <div class="flex gap-2 items-center font-semibold ">
                <div class="text-gray-500 line-through">
                    $1299
                </div>
                <div>
                    $999
                </div>
            </div>
            <div class="text-green-500 font-semibold p-2">
                IN STOCK
            </div>
            <div class="flex items-center gap-4">
                <button class="w-full bg-orange-500 flex gap-2 items-center justify-center  text-white text-xs p-2 rounded font-semibold">
                    ADD TO CART
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.375 16.375C6.65114 16.375 6.875 16.5989 6.875 16.875C6.875 17.1511 6.65114 17.375 6.375 17.375C6.09886 17.375 5.875 17.1511 5.875 16.875C5.875 16.5989 6.09886 16.375 6.375 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                    <path d="M14.5 16.375C14.7761 16.375 15 16.5989 15 16.875C15 17.1511 14.7761 17.375 14.5 17.375C14.2239 17.375 14 17.1511 14 16.875C14 16.5989 14.2239 16.375 14.5 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                    <path d="M3.42969 5.625H17.4453L15.3828 12.8437C15.3092 13.1057 15.1516 13.3363 14.9343 13.5C14.7169 13.6638 14.4518 13.7516 14.1797 13.75H6.69531C6.42319 13.7516 6.15808 13.6638 5.94072 13.5C5.72336 13.3363 5.56578 13.1057 5.49219 12.8437L2.66406 2.95313C2.62669 2.82246 2.54775 2.70754 2.4392 2.62578C2.33065 2.54401 2.1984 2.49986 2.0625 2.5H0.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="mr-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#929FA5" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M15 9L9 15" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 15L9 9" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            <div class=" flex col-span-2 gap-4 mr-4 items-center">
                <img src="images/earphoneat.png" class="w-[15%]" alt="">
                <div class="text-sm">
                    Simple Mobile 5G LTE Galexy 12 Mini 512GB Gaming Phone
                </div>
            </div>
            <div class="flex gap-2 items-center font-semibold ">
                <div class="">
                    $2,300,00
                </div>
            </div>
            <div class="text-green-500 font-semibold p-2">
                IN STOCK
            </div>
            <div class="flex items-center gap-4">
                <a href="shoping_card.php" class="w-full">
                    <button class="w-full bg-orange-500 flex gap-2 items-center justify-center  text-white text-xs p-2 rounded font-semibold">
                        ADD TO CARD
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.375 16.375C6.65114 16.375 6.875 16.5989 6.875 16.875C6.875 17.1511 6.65114 17.375 6.375 17.375C6.09886 17.375 5.875 17.1511 5.875 16.875C5.875 16.5989 6.09886 16.375 6.375 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                        <path d="M14.5 16.375C14.7761 16.375 15 16.5989 15 16.875C15 17.1511 14.7761 17.375 14.5 17.375C14.2239 17.375 14 17.1511 14 16.875C14 16.5989 14.2239 16.375 14.5 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                        <path d="M3.42969 5.625H17.4453L15.3828 12.8437C15.3092 13.1057 15.1516 13.3363 14.9343 13.5C14.7169 13.6638 14.4518 13.7516 14.1797 13.75H6.69531C6.42319 13.7516 6.15808 13.6638 5.94072 13.5C5.72336 13.3363 5.56578 13.1057 5.49219 12.8437L2.66406 2.95313C2.62669 2.82246 2.54775 2.70754 2.4392 2.62578C2.33065 2.54401 2.1984 2.49986 2.0625 2.5H0.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </a>
                <button class="mr-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#929FA5" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M15 9L9 15" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 15L9 9" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            <div class=" flex col-span-2 gap-4 mr-4 items-center">
                <img src="images/ac.png" class="w-[15%]" alt="">
                <div class="text-sm">
                    Portable Wshing Machine, 11lbs capacity Model 18NMFIAM
                </div>
            </div>
            <div class="flex gap-2 items-center font-semibold ">
                <div class="">
                    $70,00
                </div>
            </div>
            <div class="text-green-500 font-semibold p-2">
                IN STOCK
            </div>
            <div class="flex items-center gap-4">
                <button class="w-full bg-orange-500 flex gap-2 items-center justify-center  text-white text-xs p-2 rounded font-semibold">
                    ADD TO CART
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.375 16.375C6.65114 16.375 6.875 16.5989 6.875 16.875C6.875 17.1511 6.65114 17.375 6.375 17.375C6.09886 17.375 5.875 17.1511 5.875 16.875C5.875 16.5989 6.09886 16.375 6.375 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                    <path d="M14.5 16.375C14.7761 16.375 15 16.5989 15 16.875C15 17.1511 14.7761 17.375 14.5 17.375C14.2239 17.375 14 17.1511 14 16.875C14 16.5989 14.2239 16.375 14.5 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                    <path d="M3.42969 5.625H17.4453L15.3828 12.8437C15.3092 13.1057 15.1516 13.3363 14.9343 13.5C14.7169 13.6638 14.4518 13.7516 14.1797 13.75H6.69531C6.42319 13.7516 6.15808 13.6638 5.94072 13.5C5.72336 13.3363 5.56578 13.1057 5.49219 12.8437L2.66406 2.95313C2.62669 2.82246 2.54775 2.70754 2.4392 2.62578C2.33065 2.54401 2.1984 2.49986 2.0625 2.5H0.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="mr-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#929FA5" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M15 9L9 15" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 15L9 9" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            <div class=" flex col-span-2 gap-4 mr-4 items-center">
                <img src="images/ps.png" class="w-[15%]" alt="">
                <div class="text-sm">
                    TOZO T6 True Wireless Earbuds Bluetooth Headphones Touch Control with Wireless Charging Case IPX8 Waterproof Stereo Earphones in-Ear
                </div>
            </div>
            <div class="flex gap-2 items-center font-semibold ">
                <div class="text-gray-500 line-through">
                    $250,00
                </div>
                <div>
                    $220,00
                </div>
            </div>
            <div class="text-red-500 font-semibold p-2">
                OUT OFF STOCK
            </div>
            <div class="flex items-center gap-4">
                <button class="w-full bg-gray-400 flex gap-2 items-center justify-center  text-white text-xs p-2 rounded font-semibold">
                    ADD TO CART
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.375 16.375C6.65114 16.375 6.875 16.5989 6.875 16.875C6.875 17.1511 6.65114 17.375 6.375 17.375C6.09886 17.375 5.875 17.1511 5.875 16.875C5.875 16.5989 6.09886 16.375 6.375 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                    <path d="M14.5 16.375C14.7761 16.375 15 16.5989 15 16.875C15 17.1511 14.7761 17.375 14.5 17.375C14.2239 17.375 14 17.1511 14 16.875C14 16.5989 14.2239 16.375 14.5 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                    <path d="M3.42969 5.625H17.4453L15.3828 12.8437C15.3092 13.1057 15.1516 13.3363 14.9343 13.5C14.7169 13.6638 14.4518 13.7516 14.1797 13.75H6.69531C6.42319 13.7516 6.15808 13.6638 5.94072 13.5C5.72336 13.3363 5.56578 13.1057 5.49219 12.8437L2.66406 2.95313C2.62669 2.82246 2.54775 2.70754 2.4392 2.62578C2.33065 2.54401 2.1984 2.49986 2.0625 2.5H0.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="mr-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#929FA5" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M15 9L9 15" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 15L9 9" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            <div class=" flex col-span-2 gap-4 mr-4 items-center">
                <img src="images/Image (7).png" class="w-[15%]" alt="">
                <div class="text-sm">
                    Wyze Cam Pan v2 1080p Pan/Tilt/Zoom Wi-Fi Indoor Smart Home Camera with Color Night Vision, 2-Way Audio
                </div>
            </div>
            <div class="flex gap-2 items-center font-semibold ">
                <div>
                    $1,499,99
                </div>
            </div>
            <div class="text-green-500 font-semibold p-2">
                IN STOCK
            </div>
            <div class="flex items-center gap-4">
                <button class="w-full bg-orange-500 flex gap-2 items-center justify-center  text-white text-xs p-2 rounded font-semibold">
                    ADD TO CART
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.375 16.375C6.65114 16.375 6.875 16.5989 6.875 16.875C6.875 17.1511 6.65114 17.375 6.375 17.375C6.09886 17.375 5.875 17.1511 5.875 16.875C5.875 16.5989 6.09886 16.375 6.375 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                    <path d="M14.5 16.375C14.7761 16.375 15 16.5989 15 16.875C15 17.1511 14.7761 17.375 14.5 17.375C14.2239 17.375 14 17.1511 14 16.875C14 16.5989 14.2239 16.375 14.5 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                    <path d="M3.42969 5.625H17.4453L15.3828 12.8437C15.3092 13.1057 15.1516 13.3363 14.9343 13.5C14.7169 13.6638 14.4518 13.7516 14.1797 13.75H6.69531C6.42319 13.7516 6.15808 13.6638 5.94072 13.5C5.72336 13.3363 5.56578 13.1057 5.49219 12.8437L2.66406 2.95313C2.62669 2.82246 2.54775 2.70754 2.4392 2.62578C2.33065 2.54401 2.1984 2.49986 2.0625 2.5H0.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="mr-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#929FA5" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M15 9L9 15" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 15L9 9" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
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