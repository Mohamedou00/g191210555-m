<?php

  if(isset($_POST['email'],$_POST['password'])&& ($_POST['email']!='') &&($_POST['password']!='')){
    echo("işlemini başarlı");
  }
  else{
    echo ("Yeniden bilgileriniz girin");
  }
?>