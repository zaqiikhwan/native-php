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
    
<form  action="index.php?add_review" method="post">
    <div class="container">
        <div class="my-5 flex lg:text-3xl text-xl">
            <div class="block md:hidden">
                <i class="bi bi-chevron-left"></i>
            </div>
            <h1 class="mx-auto font-bold">Review</h1>
        </div>
        <p class="w-1/2 mb-16 lg:w-full mx-auto text-center text-sm lg:text-lg">Review dari anda akan sangat membantu kami dalam mengetahui kepuasan pengguna</p>
        <div class="container" align="center" style="font-size:30px">
            <span id="rateMe1"><i class="py-2 px-1 rate-popover fas fa-star amber-text" data-index="0" data-html="true" data-toggle="popover" data-placement="top" title="" data-original-title="Very bad"></i><i class="py-2 px-1 rate-popover fas fa-star amber-text" data-index="1" data-html="true" data-toggle="popover" data-placement="top" title="" data-original-title="Poor"></i><i class="py-2 px-1 rate-popover fas fa-star amber-text" data-index="2" data-html="true" data-toggle="popover" data-placement="top" title="" data-original-title="OK"></i><i class="py-2 px-1 rate-popover fas fa-star amber-text" data-index="3" data-html="true" data-toggle="popover" data-placement="top" title="" data-original-title="Good"></i><i class="py-2 px-1 rate-popover fas fa-star amber-text" data-index="4" data-html="true" data-toggle="popover" data-placement="top" title="" data-original-title="Excellent"></i></span>
        </div>
        <div class="mt-20">

            <h1 class="text-lg font-semibold mb-5">Review</h1>
            <textarea autofocus maxlength="250" class="w-full h-32 focus-visible:outline-none border border-gray-300 rounded-xl placeholder-gray-300 p-2" name="isi" placeholder="Tulis review di sini.." id="text-saran"></textarea>

        </div>
        <div class="mt-10 text-white flex justify-center">
            <button type="submit" class="bg-primary text-xl rounded-3xl py-4 w-1/2 lg:w-3/4 font-semibold">Kirim</button>
        </div>
    </div>

</form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/search-v4/search.min.js"></script>
    <script src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/main.min.js"></script>
    <script>
        // Rating Initialization
$(document).ready(function() {
  $('#rateMe2').mdbRate();
});
    </script>
</body>

</html>