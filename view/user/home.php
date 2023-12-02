<?php
  require('view/template/header.php');
  require('view/template/navbar.php');
?>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Welcome to Klinik Kesehatan</h1>
        <p class="text-center">Here, you can find all the necessary healthcare services provided by our professional staff. Our main priorities are to ensure your comfort and provide accurate and efficient medical services. </p>
        
    <div class="container-fluid">
        <img class="img-fluid" src="ruang tunggu.jpg" width="100%">
    </div>
    
        <div class="row mt-5">
            <div class="col-md-3" style='border-radius:30px'>
                <div class="card">
                    <img src="1.jpg" class="card-img-top" alt="...">
                    <div class="card-body"  align="center">
                        <h5 class="card-title" align="center">Pesan Layanan</h5>
                        <br>
                        <a href="index.php?layanan"><button class="btn btn-primary"> Pilih </button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="2.jpg" class="card-img-top" alt="...">
                    <div class="card-body" align="center">
                        <h5 class="card-title"  align="center">Konsultasi</h5>
                        <br>
                        <a href="index.php?konsultasi"><button class="btn btn-primary"> Pilih </button><a href="index.php?layanan"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card"  align="center">
                    <img src="3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"  align="center">Customer Service</h5>
                        <br>
                        <a href="index.php?customer_service"><button class="btn btn-primary"> Pilih </button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card"  align="center">
                    <img src="4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"  align="center">Review</h5>
                        <br>
                        <a href="index.php?review"><button class="btn btn-primary"> Pilih </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>