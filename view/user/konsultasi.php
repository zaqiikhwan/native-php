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
    
<form  action="index.php?add_konsultasi" method="post">
<div class="container">
        <div class="my-5 flex lg:text-3xl text-xl">
            <div class="block md:hidden">
                <i class="bi bi-chevron-left"></i>
            </div>
            <h1 class="mx-auto font-bold">Konsultasi</h1>
        </div>
        <p class="w-1/2 mb-16 lg:w-full mx-auto text-center text-sm lg:text-lg">
            Anda dapat berkonsultasi kepada Dokter dengan mengisi form
            konsultasi dibawah
        </p>
        <div class="mb-5">
            <h1 class="text-lg font-semibold mb-5">Konsultasi</h1>
            <textarea autofocus maxlength="250" class=" w-full h-32 focus-visible:outline-none border border-gray-300 rounded-xl placeholder-gray-300 p-2" placeholder="Tulis hal yang ingin ada konsultasikan di sini..." id="text-konsultasi" name="isi"></textarea>
            <div class="count float-right text-xs text-gray-400" id="count-konsultasi">
                <span id="curr-konsultasi">0</span>
                <span id="max-konsultasi">/ 250</span>
            </div>
        </div>
        <div class="mt-10 text-white flex justify-center">
            <button class="bg-primary text-xl rounded-3xl py-4 w-full lg:w-1/2 font-semibold">
                Kirim
            </button>
        </div>
    </div>
</form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>