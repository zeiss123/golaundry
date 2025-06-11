<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Halaman Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body class="bg-white text-gray-800 font-['Poppins']">
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

  <!-- Gambar + Nama Produk -->
  <section class="flex flex-col md:flex-row items-center md:items-start gap-6 p-6 md:p-12">
    <!-- Gambar -->
    <div class="md:w-1/3 w-full  ">
      <img src="../../src/img/img_laundry_1.png" alt="Produk" class="w-full h-auto rounded-[20px] ">
    </div>

    <!-- Info Produk -->
    <div class="md:w-1/2 w-full flex flex-col justify-center">
      <h1 class="text-4xl font-bold mb-2">Laundry 2</h1>
      <p class="text-2xl text-green-600 font-semibold mb-6">Rp 150.000</p>
      <br>
      <p class="text-2xl text-black font-semibold mb-6">Penjual Baik Hati</p>
    </div>
  </section>

  <!-- Deskripsi -->
  <section class="px-6 md:px-12 pb-32">
    <h2 class="text-xl font-semibold mb-2">Deskripsi Produk</h2>
    <p class="text-gray-700 leading-relaxed">
     Lorem ipsum nyuci dadakan sit amet, kamu baru ingat ada kondangan sore ini. Consectetur baju lecek elit, tapi kami punya setrika yang lebih tajam dari komentar netizen.
     Sed do eiusmod express 3 jam, cucian kamu nganggur lebih sebentar dari kamu yang nunggu balasan doi.
     Ut enim ad minim drama cucian, kami gak nanya kenapa celana jeans kamu isinya pasir — yang penting wangi dan kering.
     Mau laundry cepat? Jangan tanya siap atau nggak, langsung aja datang!
     Baju kamu kilat, mantanmu lambat. Hidup emang gitu.
      <br><br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed ex justo. Quisque vitae libero id nulla fermentum imperdiet.
    </p>
  </section>

  <section class="px-6 md:px-12 pb-40">
    <h2 class="text-xl font-semibold mb-4">Ulasan Produk</h2>
    <h2 class="text-[100px] font-semibold mb-4">4.4</h2>
    <div class="flex text-yellow-400 text-[100px]">
          ★★★★☆
    </div>

    <!-- Satu Ulasan -->
    <div class="border-b py-4">
      <div class="flex items-center justify-between mb-1">
        <p class="font-semibold">Andi</p>
        <div class="flex text-yellow-400 text-lg">
          ★★★★☆
        </div>
      </div>
      <p class="text-gray-700">Produknya bagus, sesuai deskripsi. Pengiriman cepat juga.</p>
    </div>

    <!-- Ulasan Kedua -->
    <div class="border-b py-4">
      <div class="flex items-center justify-between mb-1">
        <p class="font-semibold">Sari</p>
        <div class="flex text-yellow-400 text-lg">
          ★★★★★
        </div>
      </div>
      <p class="text-gray-700">Sangat puas! Kualitas bagus dan nyaman digunakan. Akan beli lagi.</p>
    </div>

    <!-- Ulasan Ketiga -->
    <div class="py-4">
      <div class="flex items-center justify-between mb-1">
        <p class="font-semibold">Budi</p>
        <div class="flex text-yellow-400 text-lg">
          ★★★☆☆
        </div>
      </div>
      <p class="text-gray-700">Lumayan, tapi agak lama pengirimannya. Barang oke.</p>
    </div>
  </section>


  <!-- Sticky Bar (Jumlah + Tombol Pesan) -->
  <div class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 z-50 shadow-md">
    <!-- Input Jumlah -->
    <div class="flex items-center gap-2">
      <label for="jumlah" class="text-gray-800 font-medium">Jumlah:</label>
      <input type="number" id="jumlah" min="1" value="1" class="w-20 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>
    <!-- Tombol -->
    <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-lg text-lg transition-all w-full sm:w-auto">
      Pesan Sekarang
    </button>
  </div>

</body>
</html>
