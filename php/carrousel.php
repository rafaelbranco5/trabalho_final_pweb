<script type="text/javascript">
  var posicao=0;
  var array_imagens = [];
  array_imagens[0] = "../images/img_01.jpg";
  array_imagens[1] = "../images/img_02.jpg";
  array_imagens[2] = "../images/img_03.jpg";
  array_imagens[3] = "../images/img_04.jpg";
  
  function autoslide(){
    document.getElementById('img').src=array_imagens[posicao];
    if(posicao<3){
      posicao++;
    }else{
      posicao=0;
    }
    setTimeout("autoslide()", 5000);
  }
</script>

<body onload="autoslide()">
  <div>
    <img src="" id="img">
  </div>
</body>