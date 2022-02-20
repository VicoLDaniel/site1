
<?php
if(isset($_COOKIE['nam'])){
include$_COOKIE['nam'].'.php';}else{
  echo 'cookie eror';
}
?>
<html>
<head>
	<meta charset='utf-8'>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

      <link rel='stylesheet' type='text/css' href='point2.css'>
 
</head>
<body>
 <script>

$(document).ready(function(){
  $('#write').click(function(){
    $.post('cretable.php',
    {
      kop: $('#kop').val() 
      },  function(){
      }    );
  });
});
 </script>






<div id='tabelacc3'>

<div id='image'>
<?php  
include'id.php';
?>
</br>
<div id='info'>
<?php
$name1='123';
$name2='123';
echo 'Name:  '.$name1.$name2.'</br>';
$gen;
?>





<?php
$conn = mysqli_connect('localhost', 'root', '','db323');


$sql='SELECT id,guest_id, name1, name2,email, year_of_birth, month_of_birth, dates_of_birth, gen, pass1, ip_addres FROM acounts';


 $result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

if($row['name1']==$name1&&$row['name2']==$name2){
echo'Year of birth:'.$row['year_of_birth'].'</br>Month of birth:'.$row['month_of_birth'].'</br>Date of birth:'.$row['dates_of_birth'].'</br>gen:'.$gen=$row['gen'];
}
}

$conn->close();


?>

    </br>
<button id='write'>Write
<?php
if($gen=='masculin'){
echo'him';
}else{
echo'her';}
?>
</button>
<button id='adfriend'>Add friend
</button>
<button>Cancel</button>
</div>
</div>

<style>
  #tabelacc{
    display:none;
    visibility:none;
  }
  #tabel4{
    display:none;
    visibility:none;
    
  }
  #info{
  font-size: 25px;
  color: white;
  margin-top: -316px;
  margin-left: 310px;
  border-style: solid;
  height: 300px;
  width: 370px;
  border-width: 5px;
  border-color: #010412;
  background-color: red;}
</style>

</body>
</html>

