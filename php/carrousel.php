<link rel="stylesheet" type="text/css" href="../css/styles.css">
<script type="text/javascript">
  var posicao=0;
  var array_imagens = [];
  array_imagens[0] = "../images/img_01.jpg";
  array_imagens[1] = "../images/img_02.jpg";
  array_imagens[2] = "../images/img_03.jpg";
  array_imagens[3] = "../images/img_04.jpg";
  array_imagens[4] = "../images/img_05.jpg";
  array_imagens[5] = "../images/img_06.jpg";
  array_imagens[6] = "../images/img_07.jpg";
  
  function autoslide(){
    document.getElementById('img').src=array_imagens[posicao];
    if(posicao<6){
      posicao++;
    }else{
      posicao=0;
    }
    setTimeout("autoslide()", 5000);
  }
</script>

<body onload="autoslide()">
  <div id="carrosel">
    <img src="" id="img" style="width: 100%">
  </div>
</body>