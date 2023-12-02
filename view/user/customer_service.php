<?php
  require('view/template/header.php');
  function status($a){
    if($a == "Berakhir"){
      return "<span style='font-weight:bold;color:red'>$a</span>";
    }
    return "<span style='font-weight:bold'>$a</span>";
  }
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

<!-- Content Wrapper. Contains page content -->
      <div class="container-fluid" style="margin-top:30px">
          <div class="col">
            <!-- DIRECT CHAT PRIMARY -->
            <div class="card card-primary card-outline direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Customer Sevice</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages" id="mesek">
                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contatcts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button id="tambah_chat" class="btn btn-primary">Send</button>
                    </span>
                  </div>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
          </div>
          <!-- /.col -->
      </div><!-- /.container-fluid -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var time = 0;
  $("#button1").click(function(){
    $.get("responese.php", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });

  a();
  function a(){
    $.get("responese.php", function(data, status){
        alert(data);
      const obj = JSON.parse(data);
      for (var x =0;x<obj.length;x++){
        if(obj[x].id_user == <?=$_SESSION['id']?>){
          var str='<div class="d-flex flex-row justify-content-end  mb-4"><div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;"><p class="small mb-0">'+obj[x].teks+'</p> </div> </div>';
          $("#mesek").append(str);
        }
        else{
          var str='<div class="d-flex flex-row justify-content-start mb-4"><div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);"><p class="small mb-0">'+obj[x].teks+'</p> </div> </div>';
          $("#mesek").append(str);
        }
        time = obj[x].p;
      }
      b();
    });
  }
  function b(){
    $.get("responese.php",
      {
        times: time
      },
      function(data, status){
      const obj = JSON.parse(data);
      for (var x =0;x<obj.length;x++){
        if(obj[x].id_user == <?=$_SESSION['id']?>){
          var str='<div class="d-flex flex-row justify-content-end  mb-4"><div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;"><p class="small mb-0">'+obj[x].teks+'</p> </div> </div>';
          $("#mesek").append(str);
          time = obj[x].p;
        }
        else{
          var str='<div class="d-flex flex-row justify-content-start mb-4"><div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);"><p class="small mb-0">'+obj[x].teks+'</p> </div> </div>';
          time = obj[x].p;
        }
      }
    });
    setTimeout(b, 500);
    //setTimeout(a, 5000);
  }
  $("#tambah_chat").click(function(){
    if ($("input[name=message]").val()!=""){
      $.post("responese.php",
      {
        id_user: "<?=$_SESSION['id']?>",
        teks: $("input[name=message]").val()
      },
      function(data,status){
        $("input[name=message]").val("");
      });
    }
  });
});
    </script>
</body>
</html>