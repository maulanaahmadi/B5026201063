<!DOCTYPE html>
<html>
<head>
<style>
.siblings * {
  display: block;
  border: 4px solid blue;
  color: black;
  padding: 5px;
  margin: 15px;
}
body{
    background-color: lightgrey;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("h3").siblings("p").css({"color": "red", "border": "4px solid blue"});
  $('button.li').click(function(){
        $('li').siblings().css('border-color', '#000000');
      });
      $('button.refresh').click(function(){
        $('div, ul, h3, p, span').css('border-color', '#c2c2c2');
      });
});
</script>
</head>

<body class="siblings">

<center><b><h2>PENGUMUMAN !!<br> BERIKUT ADALAH NAMA TIM E-SPORT TERBARU</h2></b></center>
<div> Nama Manajer : Rahmat
<ul> Nama pemain dengan kemiripan gaya huruf memiliki garis keturunan yang sama
  <p>Ardi</p>
  <span>Rudi</span>
  <h3>Budi</h3>
  <h3>Zudi</h3>
  <span>Yudi</span>
  <p>Audi</p>
  <p>Aldi</p>
  <span>Hudi</span>
</ul>
</div>

<button class="refresh">Segarkan dan temukan nama manajer dan nama pemain</button>

</body>
</html>
