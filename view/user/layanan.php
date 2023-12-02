<?php
  require('view/template/header.php');
?>

<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" />
    <style type="text/css">
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer>
        tailwind.config = {
            theme: {
                extend: {
                    container: {
                        center: true,
                        padding: {
                            DEFAULT: "1rem",
                            sm: "1.5rem",
                            md: "2rem",
                            lg: "4rem",
                        },
                    },
                    colors: {
                        primary: "#ff4c30",
                    },
                },
            },
        };
    </script>
<?php
  require('view/template/navbar.php');
?>

<body>
    
<form  action="index.php?add_layanan" method="post">
    <div class="container">
        <div class="my-5 flex lg:text-3xl text-xl">
            <div class="block md:hidden">
                <i class="bi bi-chevron-left"></i>
            </div>
            <h1 class="mx-auto font-bold">Daftar Layanan</h1>
        </div>
        <div class="mt-20">
            <h2>Pilih Jenis Layanan</h2>
            <select class="w-full h-20 focus-visible:outline-none border border-gray-300 rounded-xl placeholder-gray-300 p-2" name="produk" >
                <option value="Dokter Umum">Dokter Umum</option>
                <option value="Dokter Gigi">Dokter Gigi</option>
                <option value="Dokter Spesialis">Dokter Spesialis</option>
                <option value="Dokter Anak">Dokter Anak</option>
            </select>
            <br>
            <br>
            <h2>Lokasi</h2>
            <input class="w-full h-20 focus-visible:outline-none border border-gray-300 rounded-xl placeholder-gray-300 p-2" name="lokasi" placeholder="Pilih Lokasi" >
            <br>
            <br>
            <h2>Pilih Tanggal</h2>
            <input type="date" class="w-full h-20 focus-visible:outline-none border border-gray-300 rounded-xl placeholder-gray-300 p-2" name="tanggal"  >
        </div>
        <div class="mt-10 text-white flex justify-center">
            <button type="submit" class="bg-primary text-xl rounded-3xl py-4 w-1/2 lg:w-3/4 font-semibold">Kirim</button>
        </div>
    </div>

</form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>