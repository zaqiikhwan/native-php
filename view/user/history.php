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

<body class="max-h-screen">
    <div class="container">
    <br><br>
        <h1 align="center" style="font-size:30px;font-weight:900">LAYANAN</h1><br><br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Produk</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($data as $d){?>
                <tr>
                    <td><?= $d['produk']?></td>
                </tr>
                    
                  <?php

                   }
                  ?>
            </tbody>
        </table>
    </div>
    <div class="container">
    <br><br>
        <h1 align="center" style="font-size:30px;font-weight:900">KONSULTASI</h1><br><br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Konsultasi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($data1 as $d){?>
                <tr>
                    <td><?= $d['isi']?></td>
                </tr>
                    
                  <?php

                   }
                  ?>
            </tbody>
        </table>
    </div>
    <div class="container">
    <br><br>
        <h1 align="center" style="font-size:30px;font-weight:900">Kritik dan Saran</h1><br><br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Kritik</th>
                <th>Saran</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($data2 as $d){?>
                <tr>
                    <td><?= $d['kritik']?></td>
                    <td><?= $d['saran']?></td>
                </tr>
                    
                  <?php

                   }
                  ?>
            </tbody>
        </table>
    </div>
    <div class="container">
    <br><br>
        <h1 align="center" style="font-size:30px;font-weight:900">Review</h1><br><br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Review</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($data3 as $d){?>
                <tr>
                    <td><?= $d['isi']?></td>
                </tr>
                    
                  <?php

                   }
                  ?>
            </tbody>
        </table>
    </div>
</body>
</html>