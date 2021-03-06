<?php require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>

body{
    
    position: relative;
    min-height: 100vh;
    width: 100%;
    
    background: #4ECDC4;  
background: -webkit-linear-gradient(to right, #556270, #4ECDC4);  
background: linear-gradient(to right, #556270, #4ECDC4); 

}
.renk{
  background-color: rgba(0, 0, 0, 0.5);
  width: 100%;
  font-size: 18px;
  border-radius: 10px;
  border: 1px soid rgba(255, 255, 255, 0.3);
  box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
  color: #fff;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 240px;
  background: #2a3f54;
  padding: 6px 14px;
}
.sidebar .logo_content .logo{
  color: #fff;
  display: flex;
  height: 50px;
  width: 100%;
  align-items: center;
}
.logo_content .logo i{
  font-size: 28px;
  margin-right: 5px;
}
.logo_content .logo .logo_name{
  font-size: 20px;
  font-weight: 400;
}
.sidebar #btn{
  position: absolute;
  color: #fff;
  left: 90%;
  top: 6px;
  font-size: 20px;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  transform: translateX(-50%);
}
.sidebar ul{
  margin-top: 20px;
}

.sidebar ul li{
  position: relative;
  height: 50px;
  width: 100%;
  margin: 0 5px;
  list-style: none ;
  line-height: 50px;
}

.sidebar ul li a{
  color: #fff;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  border-radius: 12px;
}


.sidebar ul li a q{
  height: 50px;
  min-width: 50px;
  border-radius: 12px;
  line-height: 50px;
  text-align: center;
}

.sidebar .profile_content{
  position: absolute;
  color: #fff;
  bottom: 0;
  left: 0;
}

.sidebar .profile_content .profile{
  position: relative;
  padding: 10px 6px;
  height: 60px;
}

.profile_content .profile .profile_details{
  display: flex;
  align-items: center;
}
.firstname{
  line-height: 40px;
  border-radius: 6px;
  padding:0 22px;
  font-size: 16px;
}
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}


</style>
<script src="js/popper.min.js" ></script> 
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/cozunurlukAyarlari.css" />
<script src="js/jquery-3.3.1.min.js" ></script> 
<script src="js/bootstrap.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="stil.css">

</head>
<body >



<div class="container">
<div class="row"> 
<div class="col-3">

<div class="sidebar">
  <div class="logo_content shadow">
    <div class="logo ">
      <i class="bx bxl-c-plus-plus"></i>
      <div class="logo_name">Envanter Sistemi</div>
    </div>
    
  </div>
  <ul class="nav_list ">
    <li >
    <a href="https://envantersistemi.herokuapp.com/">
      <i class='q bx bx-user  '></i>
      <span class="links_name ms-1 ">????k????</span>
      </a>
    </li>
    <li>
      <a href="https://envantersistemi.herokuapp.com/index1.php">
      <i class='q bx bx-library' ></i>
      <span class="links_name ms-1">Envanter Takibi</span>
      </a>
    </li>
    <li>
      <a href="https://envantersistemi.herokuapp.com/index2.php">
      <i class='q bx bx-book-alt' ></i>
      <span class="links_name ms-1">??r??n Takibi</span>
      </a>
    </li>
  </ul>

</div>



</div>



<div class="col-9  mt-3">


		<form class="renk p-3" action="islem1.php"  method="POST">

			<div class="row justify-content-center me-5 pe-4">
				
				<div class="col-12 my-2 text-center">
						<div class="row ">
									<label class="col-sm-6  col-form-label fw-bold " style="font-family: cursive;">Envanter Ad?? :</label>
									<input class="col-sm-6  firstname" type="text" required="" name="urun_Adi" placeholder="Envanter Ad??n?? Giriniz...">
						</div>			
				</div>
				<div class="col-12 my-2 text-center">
						<div class="row">
									<label class="col-sm-6 col-form-label fw-bold " style="font-family: cursive;">Envanter Kodu :</label>
									<input class="col-sm-6 firstname" type="text" required="" name="urun_Kodu" placeholder="Envanter Kodunu Giriniz...">
						</div>
				</div>
				<!-- <div class="col-12 my-2 text-center">
						<div class="row">
									<label class="col-sm-6 col-form-label fw-bold " style="font-family: cursive;">Envanter Resmi :</label>
									<input class="col-sm-6 " type="file" name="urun_Resim" multiple id="file">
									<div class="preview">
									<script src="index.js"></script>
						</div>
						</div>
				</div> -->
				<div class="col-12 my-2 text-center">
						<div class="row">
									<label class="col-sm-6 col-form-label fw-bold " style="font-family: cursive;">Kay??t Zaman?? :</label>
									<input class="col-sm-6 firstname"  type="datetime-local" name="urun_Zaman" >
						</div>
				</div>
				<div class="col-12 text-center mt-4">
        			<button class="py-2 px-5 rounded-2 fw-bold shadow-lg  btn btn-light" type="submit" name="insertislemi">Ekle</button>
			</div>

	        </div>
		</form>

	


    <div class="container mt-3">
      <div class="row text-center justify-content-center">
        <table  class="content-table"  >
          
          <tr class="fw-bold text-white bg-dark">
            <th  style="font-family: cursive;">S.NO</th>
            <th style="font-family: cursive;">Envanter Ad??</th>
            <th style="font-family: cursive;">Envanter Kodu</th>
            <th style="font-family: cursive;">Kay??t Zaman??</th>
            <th style="font-family: cursive;" >????lemler</th>
            <th style="font-family: cursive;" >????lemler</th>
          </tr>
      </div>
    </div>		
      
      
          <?php
      
          $urunsor=$db->prepare("SELECT * from urun");
          $urunsor->execute();
      
          $say=0;
      
          while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { $say++?>
      
          <tr>
            <td class="fw-bold"><?php echo $say; ?></td>
            <td class="fw-bold"><?php echo $uruncek['urun_Adi'] ?></td>
            <td class="fw-bold"><?php echo $uruncek['urun_Kodu'] ?></td>
            <td class="fw-bold"><?php echo $uruncek['urun_Zaman'] ?></td>
            <td align="center"><a href="duzenle1.php?urun_id=<?php echo $uruncek['urun_id'] ?>"><button class="fw-bold  rounded-2 shadow-lg  btn btn-light">D??zenle</button></td></a>
            <td align="center"><a href="islem1.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urunsil=ok"><button class="fw-bold  rounded-2 shadow-lg  btn btn-light">Sil</button></td></a>
          </tr>
      
          <?php } ?>
      
        </table>
</div>          
</div>    
</div>  
      </body>
      </html>