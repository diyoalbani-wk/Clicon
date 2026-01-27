<!DOCTYPE html>
<html lang="en">
<?php
$title="Shop Page";
include 'components/head.php'?>

<style>
.range-ui {
  -webkit-appearance: none;
  appearance: none;
  pointer-events: none;
  position: absolute;
  width: 100%;
  height: 4px;
  background: transparent;
}

.range-ui::-webkit-slider-thumb {
  -webkit-appearance: none;
  pointer-events: auto;
  width: 14px;
  height: 14px;
  border-radius: 9999px;
  border: 2px solid #f97316; 
  background: #fff;
  cursor: pointer;
  margin-top: 20px;
}

</style>

<body>

<?php include 'components/header.php'?>

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

<!-- START CONTENT -->
<section class="container mx-auto py-4 md:py-10">

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

        <div class="hidden md:block p-6 space-y-8">

             <div class="">
                <h2 class="text-sm font-semibold mb-4">CATEGORY</h2>

                <div class="space-y-2 text-sm text-gray-600">
                   <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Electronics Devices
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Computer & Laptop
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Computer Accessories
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Smarthphone
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Headphone
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Mobile Accessories
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Gaming Console
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Camera & Fhoto
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                        Home & Apppliance
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Watch & Accessories
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            GPS & Navigation
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio"  name="category"  class="peer hidden">
                        <span class="w-4 h-4 rounded-full peer-checked:border-4 border border-gray-400 bg-white  peer-checked:border-orange-400  transition" ></span>
                        <span class="text-gray-400 font-normal peer-checked:text-black peer-checked:font-medium  transition" >
                            Warable Technology
                        </span>
                    </label>

                </div>
                <div class="border-b mt-4"></div>
            </div>

             <div class="w-72">
                    <h2 class="text-sm font-semibold mb-4">PRICE RANGE</h2>

                    <div class="relative h-6 mb-4">
                        <div class="absolute top-1/2 -translate-y-1/2 w-full h-1 bg-gray-200 rounded"></div>

                        <div class="absolute top-1/2 -translate-y-1/2 left-[25%] w-[50%] h-1 bg-orange-500 rounded"></div>

                        <input type="range" class="range-ui" value="25">

                        <input type="range" class="range-ui" value="75">
                    </div>

                     <div class="flex gap-2">
                        <input
                        type="text"
                        value="$50"
                        class="w-1/2 border rounded px-3 py-2 text-sm"
                        readonly
                        >
                        <input
                        type="text"
                        value="$150"
                        class="w-1/2 border rounded px-3 py-2 text-sm"
                        readonly
                        >
                    </div>
                </div>

            <div class="space-y-2 text-sm text-gray-600">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="price" class="peer hidden">
                        <span class="w-4 h-4 rounded-full border-2 border-gray-400 bg-white  peer-checked:border-orange-400 transition"></span>
                        <span class="text-gray-500">
                            All Price
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="price" class="peer hidden">
                        <span class="w-4 h-4 rounded-full border-2 border-gray-400 bg-white  peer-checked:border-orange-400 transition"></span>
                        <span class="text-gray-500">
                            Under $20
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="price" class="peer hidden">
                        <span class="w-4 h-4 rounded-full border-2 border-gray-400 bg-white  peer-checked:border-orange-400 transition"></span>
                        <span class="text-gray-500">
                            $25 to $100
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="price" class="peer hidden">
                        <span class="w-4 h-4 rounded-full border-2 border-gray-400 bg-white  peer-checked:border-orange-400 transition"></span>
                        <span class="text-gray-500">
                        $100 to 300
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="price" class="peer hidden">
                        <span class="w-4 h-4 rounded-full border-2 border-gray-400 bg-white  peer-checked:border-orange-400 transition"></span>
                        <span class="text-gray-500">
                        $300 to $500
                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="price" class="peer hidden">
                        <span class="w-4 h-4 rounded-full border-2 border-gray-400 bg-white  peer-checked:border-orange-400 transition"></span>
                        <span class="text-gray-500">
                            $500 to $1,000                        </span>
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="price" class="peer hidden">
                        <span class="w-4 h-4 rounded-full border-2 border-gray-400 bg-white  peer-checked:border-orange-400 transition"></span>
                        <span class="text-gray-500">
                            $1,000 to $10,000
                        </span>
                    </label>
                    <div class="border-b mt-4"></div>
                </div>

            <div>
                <h2 class="text-sm font-semibold mb-4">POPULAR BRANDS</h2>

                <div class="grid grid-cols-2 gap-3 text-sm text-gray-600">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        Apple
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        Google
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        Microsoft
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" class="accent-orange-500">
                        Samsung
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        LG
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        HP
                    </label>
                </div>

                <div class="grid grid-cols-2 gap-3 text-sm text-gray-600">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        Apple
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        Google
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        Microsoft
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" class="accent-orange-500">
                        Samsung
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        LG
                    </label>

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="accent-orange-500">
                        HP
                    </label>
                </div>
                <div class="border-b mt-4"></div>
            </div>

            <div class="flex flex-wrap gap-2 text-sm">
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Game</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">iPhone</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">TV</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Asus Laptops</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Macbook</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">SSD</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Graphics Card</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Power Bank</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Smart TV</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Speaker</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Tablet</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Microwave</span>
                <span class="hover:text-[#fdb383] hover:border-[#fdb383] hover:bg-[#fff3eb] border px-3 py-1 rounded cursor-pointer">Samsung</span>
            </div>

            <div class="border-b mt-4"></div>

            <div class="flex border-4 border-orange-100 p-4 space-y-6 flex-col items-center">
                <img src="images/apple.png" alt="">
                <img src="images/teksap.png" alt="">

                <div class="flex flex-col items-center font-bold text-xl">
                    <h1>
                        Heavy on Features.
                    </h1>
                    <h1>
                        Light on Price.
                    </h1>
                </div>

                <div class="flex gap-2 items-center">
                    Only for:
                    <div class="font-semibold p-2 bg-[#f3de6d]">
                        $299 USD
                    </div>
                </div>

                <div class="flex items-center text-sm font-semibold text-white p-3 px-7 bg-[#fa8232]">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.375 16.375C6.65114 16.375 6.875 16.5989 6.875 16.875C6.875 17.1511 6.65114 17.375 6.375 17.375C6.09886 17.375 5.875 17.1511 5.875 16.875C5.875 16.5989 6.09886 16.375 6.375 16.375Z" fill="white" stroke="white" stroke-width="1.5"/>
                    <path d="M14.5 18.125C15.1904 18.125 15.75 17.5654 15.75 16.875C15.75 16.1846 15.1904 15.625 14.5 15.625C13.8096 15.625 13.25 16.1846 13.25 16.875C13.25 17.5654 13.8096 18.125 14.5 18.125Z" fill="white"/>
                    <path d="M3.42969 5.625H17.4453L15.3828 12.8437C15.3092 13.1057 15.1516 13.3363 14.9343 13.5C14.7169 13.6638 14.4518 13.7516 14.1797 13.75H6.69531C6.42319 13.7516 6.15808 13.6638 5.94072 13.5C5.72336 13.3363 5.56578 13.1057 5.49219 12.8437L2.66406 2.95313C2.62669 2.82246 2.54775 2.70754 2.4392 2.62578C2.33065 2.54401 2.1984 2.49986 2.0625 2.5H0.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    ADD TO CHART
                </div>

                <div class="flex p-3 px-8 font-semibold text-sm items-center text-[#fa8232] border border-[#fa8232]">
                    VIEW DETAILS ->
                </div>
            </div>

        </div>

        <!-- PRODUCT LIST -->
        <div class="lg:col-span-3 gap-4">
            <div class="hidden md:block space-y-4">

                <div class="flex md:flex-row md:items-center md:justify-between gap-4">

                    <div class="flex w-full max-w-md items-center justify-between rounded-md border border-gray-300 px-4 py-2 text-sm text-gray-400">
                    <span>Search for anything...</span>
                    <span><img src="images/MagnifyingGlass.png" alt=""></span>
                    </div>

                    <div class="flex items-center gap-2 text-sm text-gray-500">
                    <span>Sort by:</span>
                    <div class="flex items-center gap-2 rounded-md border border-gray-300 px-3 py-2 text-gray-700">
                        <span>Most Popular</span>
                        <span>▾</span>
                    </div>
                    </div>

                </div>

                <div class="bg-gray-100 p-3 flex flex-col md:flex-row md:items-center md:justify-between gap-3 text-sm">

                    <div class="flex flex-wrap items-center gap-2">
                        <p class="text-gray-500">Active Filters:</p>
                        <p>Electronics Devices <span class="text-gray-400">✕</span></p>
                        <p> Star Rating<span class="text-gray-400">✕</span></p>
                    </div>

                    <div class="text-gray-500">
                        <span class="font-medium text-gray-700">65,867</span> Results found
                    </div>

                </div>

            </div>

             <div class="relative flex items-center justify-between mx-4 my-4 gap-4 ">
                
                <input type="checkbox" id="search-trigger" class="peer hidden">

                <label for="search-trigger" class="flex justify-center max-w-sm cursor-pointer items-center text-sm text-gray-400 hover:bg-gray-50 transition">
                    <span><img src="images/MagnifyingGlass.png" alt="Search"></span>
                </label>

                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <span class="text-xs">Sort by:</span>
                    <div class="flex items-center gap-2 rounded-md border border-gray-300 px-3 py-2 text-gray-700">
                        <span>Most Popular</span>
                        <span>▾</span>
                    </div>
                </div>

                <div class="hidden peer-checked:flex absolute inset-0 z-50 items-center justify-between bg-white rounded-md border border-blue-500 px-4 py-2">
                    <div class="flex items-center w-full gap-3">
                        <img src="images/MagnifyingGlass.png" alt="Search" class="h-5 w-5">
                        <input type="text" placeholder="Type to search..." 
                            class="w-full text-sm text-gray-700 outline-none bg-transparent">
                    </div>
                    
                    <label for="search-trigger" class="cursor-pointer text-gray-400 hover:text-red-500 font-bold px-2">
                        ✕
                    </label>
                </div>
            </div>

             <div class="block md:hidden bg-gray-100 p-3 flex items-center justify-between gap-2 text-sm">

                    <div class=" items-center gap-2">
                        <p class="text-gray-500">Active Filters:</p>
                        <div class="flex flex-wrap">
                            <p>Electronics Devices <span class="text-gray-400">✕</span></p>
                        <p> Star Rating<span class="text-gray-400">✕</span></p>
                        </div>
                    </div>

                    <div class="text-gray-500">
                        <span class="font-medium text-gray-700">65,867</span> Results found
                    </div>

                </div>

            <!-- bungkusan card -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-6 mx-2">
                 <div class="col-span-1 bg-white relative border rounded-md p-4 hover:shadow-lg transition">
                    <span class="absolute z-20 top-3 left-3 bg-red-500 text-white text-xs px-2 py-1 rounded">
                    HOT
                    </span>
                    <div class="relative group overflow-hidden">
                    <img src="images/Tozo.png" class="mx-auto mb-4 h-[140px] z-10 object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(738)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    TOZO T6 True Wireless Earbuds Bluetooth Headphon...
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$70</p>
                </div> 

                <div class="col-span-1 bg-white border rounded-md p-4 hover:shadow-lg transition">
                    <div class="relative group overflow-hidden">
                    <img src="images/Image (2).png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(536)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Samsung Electronics Samsung Galexy S21 5G
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$2,300</p>
                </div>

                <div class="col-span-1 bg-white relative border rounded-md p-4 hover:shadow-lg transition">
                    <span class="absolute z-20 top-3 left-3 bg-blue-500 text-white text-xs px-2 py-1 rounded">
                    BEST DEALS
                    </span>
                    <div class="relative group overflow-hidden">
                    <img src="images/best.png" class="mx-auto mb-4 h-[140px] z-10 object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(423)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Amazon Basics High-Speed HDMI Cable (18 Gbps, 4K/6...
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$360</p>
                </div>

                <div class="col-span-1 bg-white border rounded-md p-4 hover:shadow-lg transition">
                    <div class="relative group overflow-hidden">
                    <img src="images/earphoneat.png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(816)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Portable Wshing Machine, 11lbs capacity Model 18NMF.
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$80</p>
                </div>

                <div class="bg-white border rounded-md p-4 hover:shadow-lg transition">
                    <div class="relative group overflow-hidden">
                    <img src="images/Image (6).png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(647)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Wired Over-Ear Gaming Headphones with USB
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$1,500</p>
                </div>

                <div class="bg-white relative border rounded-md p-4 hover:shadow-lg transition">
                    <span class="absolute top-3 z-20 left-3 bg-yellow-400 text-white text-xs px-2 py-1 rounded">
                    25% OFF
                    </span>
                    <div class="relative group overflow-hidden">
                    <img src="images/Image (12).png" class="mx-auto mb-4 z-10 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(877)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Polaroid 57-Inch Photo/Video Tripod with Deluxe Tripod Ca...
                    </h3>
                    <div class="flex gap-2 items-center mt-2">
                        <span class="line-through text-gray-400">$1,600</span>
                        <p class="text-blue-600 font-semibold">$1,200</p>
                    </div>
                </div>

                <div class="bg-white border rounded-md p-4 hover:shadow-lg transition">
                    <div class="relative group overflow-hidden">
                    <img src="images/tvcategorys.png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
                        </span>

                        <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                            <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                            <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        
                        <span class="bg-white w-8 h-8 flex items-center justify-center rounded-full">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    </div>
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(426)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Dell Optiplex 7000x7480 All-in-One Computer Monitor
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$250</p>
                </div>

                <div class="bg-white relative border rounded-md p-4 hover:shadow-lg transition">
                    <span class="absolute z-20 top-3 left-3 bg-green-500 text-white text-xs px-2 py-1 rounded">
                    SALE
                    </span>
                    <div class="relative group overflow-hidden">
                    <img src="images/Image (3).png" class="mx-auto mb-4 z-10 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(583)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    4K UHD LED Smart TV with Chromecast Built-in
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$220</p>
                </div>

                <div class="border rounded-md p-4">
                <span class="bg-blue-500 z-20 text-white text-xs px-2 py-1 rounded">
                    BEST DEALS
                </span>

                <div class="relative group overflow-hidden">
                    <img src="images/1.png" class="mx-auto z-10 my-6 h-[160px] object-contain" />
                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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

                <div class="text-yellow-400 text-sm">
                    ★★★★★ <span class="text-gray-300">(994)</span>
                </div>

                <h3 class="text-sm mt-1">
                    Amazon Basics High-Speed HDMI Cable
                </h3>

                <p class="text-blue-600 font-semibold mt-2">$360</p>
                </div>

                <div class="border rounded-md p-4">
                <div class="relative group overflow-hidden">
                    <img src="images/earphoneat.png" class="mx-auto my-6 h-[180px] object-contain" />
                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                <div class="text-yellow-400 text-sm">★★★★★ <span class="text-gray-300">(798)</span></div>
                <h3 class="text-sm mt-1">
                    Portable Washing Machine
                </h3>
                <p class="text-blue-600 font-semibold mt-6">$80</p>
                </div>

                <div class="border rounded-md p-4">
                <span class="bg-red-500 z-20 text-white text-xs px-2 py-1 rounded">
                    HOT
                </span>
                <div class="relative group overflow-hidden">
                    <img src="images/ky.png" class="mx-auto my-6 z-10 h-[160px] object-contain" />
                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                <div class="text-yellow-400 text-sm">★★★★★ <span class="text-gray-300">(600)</span></div>
                <h3 class="text-sm mt-1">
                    TOZO T6 Wireless Earbuds
                </h3>
                <p class="text-blue-600 font-semibold mt-6">$70</p>
                </div>

                <div class="border rounded-md p-4">
                <div class="relative group overflow-hidden">
                    <img src="images/4.png" class="mx-auto my-6 h-[180px] object-contain" />
                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                <div class="text-yellow-400 text-sm">★★★★★ <span class="text-gray-300">(492)</span></div>
                <h3 class="text-sm mt-1">
                    Dell Optiplex All-in-One
                </h3>
                <p class="text-blue-600 font-semibold mt-6">$250</p>
                </div>

                <div class="border rounded-md p-4">
                    <div class="relative group overflow-hidden">
                        <img src="images/Image (8).png" class="mx-auto my-6 h-[180px] object-contain" />

                        <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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

                <div class="text-yellow-400 text-sm">
                    ★★★★★ <span class="text-gray-300">(740)</span>
                </div>

                <h3 class="text-sm mt-1">
                    Samsung Electronics Samsung Galexy S21 5G
                </h3>

                <p class="text-blue-600 font-semibold ">$2,300</p>
                </div>

                <div class="border rounded-md p-4">
                    <span class="bg-green-500 text-white text-xs z-20 px-2 py-1 rounded">
                    SALE
                </span>
                <div class="relative group overflow-hidden">
                    <img src="images/7.png" class="mx-auto z-10 my-6 h-[160px] object-contain" />
                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                <div class="text-yellow-400 text-sm">★★★★★ (556)</div>
                <h3 class="text-sm mt-1">
                    4K UHD LED Smart TV with Chromecast Built-in
                </h3>
                <p class="text-blue-600 font-semibold ">$220</p>
                </div>

                <div class="border rounded-md p-4">
                    <div class="relative group overflow-hidden">
                        <img src="images/8.png" class="mx-auto my-6 h-[160px] object-contain" />
                        <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                <div class="text-yellow-400 mt-4 text-sm">★★★★★ (536)</div>
                <h3 class="text-sm mt-1">
                    Wired Over-Ear Gaming Headphones with USB
                </h3>
                <p class="text-blue-600 font-semibold mt-2">$1,500</p>
                </div>

                <div class="border rounded-md p-4">
                    <span class="bg-yellow-500 text-xs z-20 px-2 py-1 rounded">
                    25% OFF
                </span>
                <div class="relative group overflow-hidden">
                    <img src="images/9.png" class="mx-auto z-10 my-6 h-[150px] object-contain" />
                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                <div class="text-yellow-400 text-sm">★★★★★ (492)</div>
                <h3 class="text-sm mt-1">
                    Dell Optiplex All-in-One
                </h3>
                <p class="text-blue-600 font-semibold mt-6">$250</p>
                </div>

                <div class="col-span-1 bg-white relative border rounded-md p-4 hover:shadow-lg transition">
                    <span class="absolute z-20 top-3 left-3 bg-red-500 text-white text-xs px-2 py-1 rounded">
                    HOT
                    </span>
                    <div class="relative group overflow-hidden">
                    <img src="images/t6.png" class="mx-auto mb-4 h-[140px] z-10 object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(738)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    TOZO T6 True Wireless Earbuds Bluetooth Headphon..
                    </h3>
                    <div class="flex items-center ">
                         <p class="text-gray-500 font-semibold line-through">$75</p>
                         <p class="text-blue-600 font-semibold ">$70</p>
                    </div>
                </div> 

                <div class="col-span-1 bg-white border rounded-md p-4 hover:shadow-lg transition">
                    <div class="relative group overflow-hidden">
                    <img src="images/Image (2).png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(536)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Samsung Electronics Samsung Galexy S21 5G
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$2,300</p>
                </div>

                <div class="bg-white relative border rounded-md p-4 hover:shadow-lg transition">
                    <span class="absolute z-20 top-3 left-3 bg-blue-500 text-white text-xs px-2 py-1 rounded">
                    BEST DEAL   
                    </span>
                    <div class="relative group overflow-hidden">
                    <img src="images/ac.png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(423)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Amazon Basics High-Speed HDMI Cable (18 Gbps, 4K/6..
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$360</p>
                </div>

                <div class="col-span-1 bg-white border rounded-md p-4 hover:shadow-lg transition">
                    <div class="relative group overflow-hidden">
                    <img src="images/earphoneat.png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(816)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Portable Wshing Machine, 11lbs capacity Model 18NMF.
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$80</p>
                </div>

                <div class="bg-white relative border rounded-md p-4 hover:shadow-lg transition">
                    <span class="absolute z-20 top-3 left-3 bg-blue-500 text-white text-xs px-2 py-1 rounded">
                    BEST DEAL   
                    </span>
                    <div class="relative group overflow-hidden">
                    <img src="images/ip1.png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(994)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Amazon Basics High-Speed HDMI Cable (18 Gbps, 4K/6...
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$360</p>
                </div>

                <div class="col-span-1 bg-white border rounded-md p-4 hover:shadow-lg transition">
                    <div class="relative group overflow-hidden">
                    <img src="images/lp1.png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(492)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Dell Optiplex 7000x7480 All-in-One Computer Monitor
                    </h3>
                    <p class="text-blue-600 font-semibold mt-2">$250</p>
                </div>

                <div class="col-span-1 bg-white border rounded-md p-4 hover:shadow-lg transition">
                    <div class="relative group overflow-hidden">
                    <img src="images/ip2.png"  class="mx-auto mb-4 h-[140px] object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(798)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    Portable Wshing Machine, 11lbs capacity Model 18NMF...
                    </h3>
                    <div class="flex items-center font-semibold">
                        <p class="text-blue-600 line-through text-gray-500">$124</p>
                        <p class="text-blue-600">$80</p>
                    </div>
                </div>

                <div class="col-span-1 bg-white relative border rounded-md p-4 hover:shadow-lg transition">
                    <span class="absolute z-20 top-3 left-3 bg-red-500 text-white text-xs px-2 py-1 rounded">
                    HOT
                    </span>
                    <div class="relative group overflow-hidden">
                    <img src="images/lp2.png" class="mx-auto mb-4 h-[140px] z-10 object-contain" />

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"> </div>

                    <div class="absolute inset-0 flex items-center justify-center gap-3  opacity-0 group-hover:opacity-100 transition duration-300 z-10">

                        <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full">
                        <img src="images/Heart.png" class="w-4" alt="">
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
                    <p class="text-yellow-400 text-sm mb-1">
                    ★★★★★ <span class="text-gray-300">(600)</span>
                    </p>
                    <h3 class="text-sm text-gray-700">
                    TOZO T6 True Wireless Earbuds Bluetooth Headphon..
                    </h3>
                    <p class="text-blue-600 font-semibold ">$70</p>
                </div> 

            </div>

            <div class="flex justify-center mt-6 py-10 items-center gap-2">

                <button class="w-9 h-9 flex items-center justify-center rounded-full  border border-orange-400 text-orange-400  hover:bg-orange-400 hover:text-white transition">
                    <-
                </button>

                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-300   hover:bg-orange-500 hover:text-white font-medium">
                    01
                </button>

                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-300   hover:bg-orange-500 hover:text-white font-medium">
                    02
                </button>

                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-300   hover:bg-orange-500 hover:text-white font-medium">
                    03
                </button>

                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-300   hover:bg-orange-500 hover:text-white font-medium">
                    04
                </button>

                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-300   hover:bg-orange-500 hover:text-white font-medium">
                    05
                </button>

                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-300   hover:bg-orange-500 hover:text-white font-medium">
                    06
                </button>

                <button  class="w-9 h-9 flex items-center justify-center rounded-full   border border-orange-400 text-orange-400  hover:bg-orange-400 hover:text-white transition" >
                    ->
                </button>
            </div>

        </div>

    </div>
</section>
<!-- END CONTENT -->

<?php include 'components/footer.php'?>

</body>
</html>