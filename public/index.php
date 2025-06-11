<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Katalog</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Slider -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-['Poppins']">

  <!-- Navbar -->
  <nav class="bg-[#28b444]  px-4 py-[35px] flex items-center justify-between">
    <!-- Logo -->
    <div class="text-xl font-bold text-white">GoLaundry</div>

    <!-- Search Bar -->
    <div class="flex-1 mx-4">
      <input
        type="text"
        placeholder="Cari produk..."
        class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
      />
    </div>

    <!-- Keranjang Icon -->
    <div>
      <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24">
        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13L17 13M7 13H5.4m0 0L4 5H2"></path>
      </svg>
    </div>
  </nav>

  <!-- Swiper Container -->
  <div class="swiper mySwiper mt-4 mx-[10px] ">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide bg-[#28b444] rounded-[15px]">
        <img src="../src/img/img_promo1.png"
            class="w-full h-48 md:h-[300px] object-contain" alt="Banner 1">
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide bg-gray-300 rounded-[15px] flex flex-col items-center justify-center h-48 md:h-[300px] w-full">
          <p class="text-center font-bold text-[100px]">Promosi GoLaundry</p>
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide bg-green-400 rounded-[15px] flex flex-col items-center justify-center h-48 md:h-[300px] w-full">
          <p class="text-center font-bold text-[80px]">Diskon Pengiriman</p>
      </div>
    </div>

    <!-- Navigasi -->
    <div class="swiper-pagination"></div>
  </div>
<!-- Atur Lokasi -->
    <nav class="bg-white  px-4  flex items-center justify-between">
      <div class="mx-[20px] my-[20px] p-[10px] flex items-center">
      <p class="text-m mx-[10px]">Paling dekat dengan lokasi : </p>
      <p class="text-m mr-[10px]">Jalan Purwodadi </p>
      <button class="bg-green-700 p-[10px] text-white rounded-[10px] flex items-center"><img src="../src/img/ic_location.svg" class="w-[20px] mx-[10px] ">Atur lokasi</button>
  </div>
    </nav>


  <!-- Produk Cards -->
  <div class="px-4 py-6">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
      <!-- Card Produk (Ulangi 10x) -->
      <!-- Gunakan placeholder atau bisa isi sendiri -->
      <a href="./produk/barang1.php">
        <div class="bg-white rounded-lg hover:border border-black" >
          <img src="../src/img/img_laundry_1.png" alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 1</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 100.000</p>
        </div>
      </a>

      <a href="./produk/barang2.php">
        <div class="bg-white rounded-lg hover:border border-black">
          <img src="../src/img/img_laundry_2.png" alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 2</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 120.000</p>
        </div>
      </a>

      <a href="./produk/barang3.php">
        <div class="bg-white rounded-lg hover:border border-black">
          <img src="../src/img/img_laundry_3.png" alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 3</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 90.000</p>
        </div>
      </a>

      <a href="./produk/barang4.php">
        <div class="bg-white rounded-lg hover:border border-black">
          <img src="../src/img/img_laundry_4.png" alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 4</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 150.000</p>
        </div>
      </a>

      <a href="./produk/barang5.php">
        <div class="bg-white rounded-lg hover:border border-black">
          <img src="../src/img/img_laundry_5.png" alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 5</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 75.000</p>
        </div>
      </a>

      <a href="./produk/barang4.php">
        <div class="bg-white rounded-lg hover:border border-black">
          <img src="../src/img/img_laundry_4.png" alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 6</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 110.000</p>
        </div>
      </a>
      
      <a href="./produk/barang3.php">
        <div class="bg-white rounded-lg hover:border border-black">
          <img src="../src/img/img_laundry_3.png" alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 7</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 99.000</p>
        </div>
      </a>
      
      <a href="./produk/barang2.php">
        <div class="bg-white rounded-lg hover:border border-black">
          <img src="../src/img/img_laundry_2.png" alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 8</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 85.000</p>
        </div>
      </a>
      
      <a href="./produk/barang1.php">
        <div class="bg-white rounded-lg hover:border border-black">
          <img src="../src/img/img_laundry_1.png " alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 9</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 130.000</p>
        </div>
      </a>
      
      <a href="./produk/barang5.php">
        <div class="bg-white rounded-lg hover:border border-black">
          <img src="../src/img/img_laundry_5.png" alt="Produk" class="w-full h-40 object-cover rounded-md" />
          <h3 class="mt-2 text-sm font-semibold text-gray-700 pl-[10px]">Laundry 10</h3>
          <p class="text-green-700 font-semibold text-[20px] pl-[10px]">Rp 115.000</p>
        </div>
      </a>
      
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.mySwiper', {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>

</body>
</html>
