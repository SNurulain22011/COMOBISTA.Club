<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Persatuan Community of Bachelor in Statistics (COMOBISTA)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style2.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-theme-teal w3-content" style="max-width:1600px ; background-color: #c7b9b8" >

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo.png" style="width:20%;" class="w3-round"><br><br>
    <h4><b>COMOBISTA</b></h4>
    <p class="w3-text-grey">Uitm Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-home fa-fw w3-margin-right"></i>Home</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw w3-margin-right"></i>About COMOBISTA</a> 
    <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Committee</a>
    <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Membership</a>
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-computer fa-fw w3-margin-right"></i>Activity</a>
    <a href="contact/contact.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Contact</a>
    <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>Administrator</a> 
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="home">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to  Community of Bachelor in Statistics Club </b></h1>
    
  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
        <p align="center" ><img src="photo/logo.png" alt="Comobista logo" style="width:40%"></p> 
    </div>
</div>


  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>COMOBISTA Club</b></h4>
    <p>Persatuan Community of Bachelor in Statistics (COMOBISTA) merupakan satu persatuan akademik UiTM Cawangan Kelantan.  Ahli persatuan COMOBISTA merangkumi semua pelajar Sarjana Muda Sains (Kepujian) Statistik (CS241) dan Sarjana Muda Sains (Kepujian) Statistik dan Sarjana Muda Keusahawanan (Logistik dan Perniagaan Pengedaran) dengan Kepujian (CS291). Penubuhan Persatuan COMOBISTA merupakan inisiatif yang dijalankan bertujuan untuk menyediakan peluang dan ruang kepada mahasiswa dan mahasiswi jurusan statistik di UiTM Kelantan yang mempunyai minat, hasrat dan kecenderungan yang sama untuk bergabung, berkerjasama dan berkongsi sumber dalam melaksanakan aktiviti dan mencapai objektif persatuan yang telah ditetapkan dan dipersetujui bersama. Keanggotaan dalam persatuan ini akan membantu dalam pembentukan dan pembinaan kualiti pelajar sebagai ahli yang aktif dibawah satu pimpinan dan pertubuhan.</p>

<p> Persatuan COMOBISTA juga merupakan satu kerjasama diantara pensyarah dan mahasiswa dalam membantu ahli COMOBISTA untuk meningkatkan prestasi dalam pembelajaran dan melatih kemahiran komunikasi dengan melaksanakan pelbagai program yang berkesan. Di samping itu, persatuan COMOBISTA juga ditubuhkan bertujuan untuk membantu pihak UiTM bagi mencapai objektif UiTM iaitu mempertingkatkan penghayatan nilai melalui program pengukuhan.</p>
    <hr>
   <!--committee --> 
	<section id="committee">
	<br>
  <h4><b>COMOBISTA Comittee</b></h4>
  <div class="w3-center w3-container">
      <div class="center">
        <img src="photo/pres.png" style="width:30%" class="center">
        
        <h3>Presiden COMOBISTA 2023/2024</h3>
        <h4>Farzana Aisyah Binti Zulhamidi</h4>
        <p>"Everyday bring new choices"</p>
      </div>
    </div>
  <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/timpres1.png" style="width:50%">
        
        <h3>Timbalan Presiden 1 COMOBISTA 2023/2024</h3>
        <h4>Ainin Sofiya Mastura Bt Shamsudin</h4>
      <p>“If it’s still in your mind, it is worth taking the risk”</p>
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/timpres2.png" style="width:50%">
        
        <h3>Timbalan Presiden 2 COMOBISTA 2023/2024</h3>
        <h4>Nur An Nisaa Binti Mohamad Ashari</h4>
        <p>“Allah does not lay a responsibility on anyone beyond his capacity”</p>
      </div>
    </div>
  </div>
  <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/su1.png" style="width:50%">
        
        <h3>Setiausaha 1 COMOBISTA 2023/2024</h3>
        <h4>Siti Nurnadia Syamimi Binti Mohd Samshul</h4>
     
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/su2.png" style="width:50%">
       
        <h3>Setiausaha 2 COMOBISTA 2023/2024</h3>
         <h4>Mawaddah Binti Mohd Rosdi</h4>
        <p> “Be afraid and do it anyway”</p>
      </div>
    </div>
  </div>
  <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/bend1.png" style="width:50%">
        <h3>BENDAHARI 1 COMOBISTA SESI 23/24,</h3>
        <h4>Nurzarifah Kamilia Binti Rashid</h4>
      <p>“The only way to do great work is to love what you do”</p>
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/bend2.png" style="width:50%">
        <h3>BENDAHARI 2 COMOBISTA SESI 23/24</h3>
        <h4>Nur Ashyefa Husna Binti Nor Hazri</h4>
        <p>“Embrace the chaos and create your own path”</p>
      </div>
    </div>
  </div>
  <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/multi1.png" style="width:50%">
        <h3> EXCO MULTIMEDIA COMOBISTA SESI 23/24</h3>
        <h4>Nureen Ameera Binti Khairul Amizan</h4>
      <p>“Hidup kena chill”</p>
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/multi2.png" style="width:50%">
        <h3> EXCO MULTIMEDIA COMOBISTA SESI 23/24</h3>
        <h4>Nik Nur Adlina Binti Nik Azizi Amirah</h4>
        <p> “Great things never came from comfort zone</p>
      </div>
    </div>
  </div>
   <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/akademik1.png" style="width:50%">
        <h3> EXCO AKADEMIK COMOBISTA SESI 23/24</h3>
        <h4>Aina Munirah Binti Ahmad Munawwir</h4>
      <p>“You didn’t go through all that for nothing”</p>
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/akademik2.png" style="width:50%">
       <h3> EXCO AKADEMIK COMOBISTA SESI 23/24</h3>
        <h4>Che Nur Farrah Nalia Binti Che Din</h4>
        <p>Life will only change when you become more committed to your own dreams than you are in your comfort zone”</p>
      </div>
    </div>
  </div>
   <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/protocol1.png" style="width:50%">
        <h3>EXCO PROTOKOL COMOBISTA SESI 23/24</h3>
        <h4>Wan Nur Hazwani Binti Wan Mohd Othman</h4>
      <p>“One small positive thought in the morning can change your whole day”</p>
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/protocol2.png" style="width:50%">
       <h3>  EXCO PROTOKOL COMOBISTA SESI 23/24</h3>
        <h4>Nurul Syaqriana Binti Suhaimi
</h4>
        <p>“Focus on the steps in front of you, not the whole staircase ”</p>
      </div>
    </div>
  </div>
   <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/keusahawan.png" style="width:50%">
       <h3>EXCO KEUSAHAWANAN COMOBISTA SESI 23/24,</h3>
        <h4>
</h4>
      
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/keusahawan2.png" style="width:50%">
        <h3> EXCO MULTIMEDIA COMOBISTA SESI 23/24,</h3>
        <h4>Nureen Ameera Binti Khairul Amizan</h4>
        <p>Up to 50% offers. Always 25% student offers.</p>
      </div>
    </div>
  </div>
   <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        
      </div>
    </div>
  </div>
   <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/sukan.png" style="width:50%">
        <h3> EXCO  SUKAN  COMOBISTA SESI 23/24</h3>
        <h4>Nur Izdihar Binti Mohd Yusof</h4>
     
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/logistik.png" style="width:50%">
        <h3> EXCO LOGISTIK COMOBISTA SESI 23/24</h3>
        <h4>Nik Nurul Aini Nabila Bt Kasdaros</h4>
        
      </div>
    </div>
  </div>
   <div class="w3-row w3-container" style="margin:50px 0">
    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/logistik2.png" style="width:50%">
        <h3> EXCO LOGISTIK COMOBISTA SESI 23/24</h3>
        <h4>Nur Ain Amiesha Binti Suhaimi</h4>
      <p>“90% of life is confidence and the thing about confidence is no one knows if it’s real or not”</p>
      </div>
    </div>

    <div class="w3-half w3-container">
      <div class="w3-center">
        <img src="photo/kerohanian.png" style="width:50%">
        <h3> EXCO KEROHANIAN COMOBISTA SESI 23/24</h3>
        <h4>Muhammad Iqbal Bin Zaiminudin</h4>
        
      </div>
    </div>
  </div>
</br>


  </section>
    <!--membership -->
   <
	<section id="membership">
  <h4><b>COMOBISTA Membership</b></h4>
   <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  
  
  <p align="center"><h3>Membership form for COMOBISTA 2024</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>
    <a href="admin/membership.php" class="btn btn-dark mb-3">Membership</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
      
    </p>
  </section>


  <!--activity -->
    <hr>
   <section id="activity">
  <h4><b>COMOBISTA Activity</b></h4>

    <div class="row">
  <div class="column">
    <div class="card " >
      <img class="w3-center" src="photo/activity_abpm.png" alt="Alumni Berbicara & Pautan Mesra Pragraduan CS241/CS291<" style="width:50%; margin-left: 250px" >
      <div class="container">
        <h2>Alumni Berbicara & Pautan Mesra Pragraduan CS241/CS291</h2>
        <p>Tujuan program ini diadakan adalah untuk mendidik tentang statistik, mendalami pengetahuan, berkongsi pengalaman siswazah, dan menerangkan persekitaran kerja.</p>
        <p>TARIKH : 16 JUN 2023 (JUMAAT)</p>
        <p> MASA : 8:00 P.M. - 11:00 P.M.</p>
        <p>TEMPAT : HOLIDAY VILLA, JALAN KUALA KRAI, KOTA BHARU</p>
        <p>TEMA PEMAKAIAN: HOLLYWOOD</p>
        <p><a href="gallery.html" class="button">Go to Gallery</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="photo/abgl.png" alt="ALUMNI BURNS GALA NIGHT SESI 2023/2024" style="width:50%; margin-left: 250px">
      <div class="container">
        <h2>ALUMNI BURNS GALA NIGHT SESI 2023/2024</h2>
        <p>Tujuan program ini diadakan adalah untuk membentuk pelajar yang berketerampilan dalam semua aspek tentang statistik disamping membentuk sahsiah diri, sifat kepimpinan serta cara pengurusan organisasi yang efektif..</p>
        <p>TARIKH : 15 Disember 2023 (JUMAAT)</p>
        <p> MASA : 8:00 P.M. - 11:00 P.M.</p>
        <p>TEMPAT : Tunjung Dirgahayu Hall</p>
        <p>TEMA PEMAKAIAN: Melayu Klasik</p>
        <p><a href="gallery2.html" class="button">Go to Gallery</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="photo/bonding.png" alt="Bonding Beyond Borders" style="width:50%; margin-left: 250px">
      <div class="container">
        <h2>Bonding Beyond Borders</h2>
        <p>Tujuan program ini diadakan untuk mengeratkan jalinan ukhuwah dan dapat mengenali lebih rapat antara semua ahli persatuan comobista.</p>
        <p>TARIKH : 12-13 Mei 2023 (JUMAAT)</p>
        <p> MASA : 3:00 P.M. - 12:00 P.M.</p>
        <p>TEMPAT : Homestay Tepi Sungai Kota Bharu</p>
        <p>TEMA PEMAKAIAN: Bersukan</p>
        <p><a href="gallery3.html" class="button" >Go to Gallery</a></p>
      </div>
    </div>
  </div>
</div>

<a href="activity/add_activity.php" class="btn btn-dark mb-3">Add New Activity</a>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
