<?php
  if(isset($_POST['submit']))
  {
    $age = $_POST['age'];
    if($age>30)
    {
        echo "ADULT";
    }
  }
?>