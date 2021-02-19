<!DOCTYPE html>
<?php
error_reporting(1);
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"poli");
if($_POST['submit'])
	{
	$kodepoli=$_POST['kodepoli'];
	$dokter=$_POST['dokter'];
	$tanggal=$_POST['tanggal'];
	$jaminan=$_POST['jaminan'];
	$nama_pasien=$_POST['nama_pasien'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$no_telp=$_POST['no_telp'];
	$alamat=$_POST['alamat'];
	$layanan_promt=$_POST['layanan_promt'];
	
	
	$insert="insert into penpoli(kodepoli,dokter,tanggal,jaminan,nama_pasien,tgl_lahir,no_telp,alamat,layanan_promt)values('".$kodepoli."','".$dokter."','".$tanggal."','".$jaminan."','".$nama_pasien."','".$tgl_lahir."','".$no_telp."','".$alamat."','".$layanan_promt."')";
	$sql_insert=mysqli_query($conn,$insert);
	}
?>
<html>
<head>
	<title>Pendaftaran Poli</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<script>
function daf() {
  location.replace("la.php")
}
function logi() {
  location.replace("log.php")
}
</script>
<style>
body 
{
	background-image: #ffffff;
    background-repeat:no-repeat;
    background-size:cover;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.9s;
  transition-duration: 0.9s;
  cursor: pointer;
  font-family: Futura Md BT;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 0px solid #2af598;
  border-radius: 8px;
  box-shadow: 0px 0px 5px grey;
}

.button1:hover {
  background-color: #05b508;
  color: black;
}

.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #cfcfcf;
  border-radius: 50%;
}

.container:hover input ~ .checkmark {
  background-color: #a6a6a6;
}


.container input:checked ~ .checkmark {
  background-color: #05b508;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container input:checked ~ .checkmark:after {
  display: block;
}

.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.o{
	border: 0;
	background: none;
	margin: 20px auto;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: black;
	border-radius: 24px;
	transition: 0.25s;
	border: 2px solid #05b508;
	font-size: 18px;
	font-family:"Courier New", Times, serif;

}
	
	

</style>
</head>
<body>
<button class="button button1" type="submit" onclick="logi()"><a href="log.php"></a><b>🡄</b></button>
<br><br>
<img src="rspg_logo.png" width="250"/>
	<font size="4" face="Bahnschrift"><h1>Pendaftaran Poli</h1>
	Sebelum memilih poli lihat dulu jadwal dokter RS.Petrokimia 
	Gresik agar tidak terjadi kesalahan dalam memilih poli dan dokter yang dituju.
	<br><br>
	Silahkan memilih salah poli yang tersedia di Rumah Sakit Petrokimia 
	Gresik di bawah ini !
	<br><br><br>
	<td><b>Poli</b></td>
	<br>
	<select class="o" name="kodepoli" style="width:50%;height:55px" required>
<option class="input" value="" selected>Pilih Poli Tujuan</option>
<option value='Q21'>SPESIALIST KOSMETIK MEDIK</option>
<option value='Q13'>SPESIALIS UROLOGI</option>
<option value='Q07'>SPESIALIS THT</option>
<option value='Q11'>SPESIALIS SYARAF</option>
<option value='Q06'>SPESIALIS REHABILITASI</option>
<option value='Q17'>SPESIALIS POLI BDH TULANG</option>
<option value='Q18'>SPESIALIS POLI BDH ONKOLOGI</option>
<option value='Q16'>SPESIALIS POLI BDH KEPALA LEHER</option>
<option value='Q03'>SPESIALIS PNY.DALAM</option>
<option value='Q08'>SPESIALIS PARU-PARU</option>
<option value='Q14'>SPESIALIS NEFROLOGI</option>
<option value='Q10'>SPESIALIS MATA</option>
<option value='Q15'>SPESIALIS KULIT & KELAMIN</option>
<option value='Q23'>SPESIALIS KONSERVASI GIGI</option>
<option value='Q05'>SPESIALIS KANDUNGAN</option>
<option value='Q09'>SPESIALIS JIWA</option>
<option value='Q04'>SPESIALIS JANTUNG</option>
<option value='Q12'>SPESIALIS HAEMODIALISIS</option>
<option value='Q26'>SPESIALIS GIGI ORTODONSIA</option>
<option value='Q02'>SPESIALIS BEDAH UMUM</option>
<option value='Q22'>SPESIALIS BEDAH SYARAF</option>
<option value='Q27'>SPESIALIS BEDAH PLASTIK</option>
<option value='Q24'>SPESIALIS BEDAH MULUT</option>
<option value='Q20'>SPESIALIS ANDROLOGI</option>
<option value='Q01'>SPESIALIS ANAK</option>
<option value='Q19'>SPESIALIS AKUPUNTUR</option>
<option value='P01'>POLI UMUM</option>
<option value='P06'>POLI KKW</option>
<option value='P02'>POLI GIGI</option>
<option value='P17'>POLI GERIATRI</option>
<option value='P03'>POLI FISIOTHERAPI</option>
</select>
<br><br>
	<b>Dokter</b>
	<br><br>
	<input class="o" type="text" name="Dokter" placeholder="Masukkan Nama Dokter" style="width:49%;height:20px" id="dokter" onkeydown="focusNext(event)" autofocus>
<br><br>
<b>Tanggal Periksa  <font size='1px'></font> </b>
<br><br>
<input class="o" type="date" name="tanggal" style="width:49%;height:20px" >
<br><br>

<b>Pilih Jaminan</b> !<br>
<label class="container">Umum
  <input type="radio" checked="checked" name="jaminan" onclick="umum">
  <span class="checkmark"></span>
</label>
<label class="container">BPJS
  <input type="radio" checked="checked" name="jaminan" onclick="bpjs">
  <span class="checkmark"></span>
</label>
<label class="container">PG / Ramayana
  <input type="radio" checked="checked" name="jaminan" onclick="ramayana">
  <span class="checkmark"></span>
</label>
<label class="container">Anper
  <input type="radio" checked="checked" name="jaminan" onclick="anper">
  <span class="checkmark"></span>
</label>
<label class="container">Prokespen
  <input type="radio" checked="checked" name="jaminan" onclick="prokespen">
  <span class="checkmark"></span>
</label>
<label class="container">Perusahaan Lainnya
  <input type="radio" checked="checked" name="jaminan" onclick="perusahaan_lain">
  <span class="checkmark"></span>
</label>                                                 
<br><br>
<b>Data Pasien</b>
<br><br>
<input class="o" name="nama_pasien" type="text" size="15" value="" placeholder="Nama Pasien" id="nama_pasien" onkeyup="this.value = this.value.toUpperCase()" style="width:49%;height:20px" onkeydown="focusNext(event)" autocomplete="off" autofocus required>                    
<br><br>
<b>Tanggal Lahir  <font size='1px'></font> </b>
<br><br>
<input class="o" type="date" name="tgl_lahir" style="width:49%;height:20px" onkeydown="focusNext(event)" >
<br><br>
<b>No Telp/HP</b>
<br><br>
<input  class="o" name="no_telp" type="text" size="15" value="" placeholder="Nomor Telp/HP" id="no_hp" onkeyup="this.value = this.value.toUpperCase()" style="width:49%;height:20px" onkeydown="focusNext(event)" autocomplete="off" autofocus required>                    
<br><br>
<b>Alamat Pasien</b>
<br><br>
<input  class="o" name="alamat" type="text" size="15" value="" placeholder="Alamak" id="alamat" style= "width:49%;height:20px" onkeydown="focusNext(event)" autocomplete="off" autofocus required>                    
<br><br>
<b>Sudah pernah berobat di RS Petrokimia Gresik? JAWAB JUJUR YA >:(</b><br>
<label class="container">Pernah
  <input type="radio" checked="checked" name="layanan_promt" onclick="pernah">
  <span class="checkmark"></span>
</label>
<label class="container">Belum
  <input type="radio" checked="checked" name="layanan_promt" onclick="belum">
  <span class="checkmark"></span>
</label>                 
<br><br>
<font color="red"> NOTE :
Berikut kategori penjaminan kesehatan :
<li>BPJS : Askes, BPJS Kesehatan, BPJS Ketenagakerjaan</li>
<li>PG / Ramayana : Bagi karyawan dan keluarga PT.Petrokimia yang aktif</li>
<li>Perusahaan Lainnya : -</li>
<li>Asuransi : -</li> 
<br><br>
<button class="button button1" name="submit" type="submit" onclick="daf()"><a href="la.php"></a><b>Daftar</b></button>

</body>
</html>