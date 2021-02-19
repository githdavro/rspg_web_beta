<!DOCTYPE html>
<html>
<head>
<script>
	function daf() {
	location.replace("daf.php")
}
</script>
<style>
body 
{
	background-image: linear-gradient(to top, #0250c5 0%, #d43f8d 100%);
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
  font-family: 'Bree Serif';
}

.button1 {
  background-color: white; 
  color: black; 
  border: 0px solid #2af598;
  border-radius: 8px;
  box-shadow: 0px 0px 15px grey;
}

.button1:hover {
  background-color: #2af598;
  color: black;
}
</style>
</head>
<body>
<br><br>
<button class="button button1" type="submit" onclick="daf()"><a href="daf.php"></a><b>kembali</b></button>
</body>
</html>