<?php
$name = $_GET["id"];
if(!$name){
  $name = "no_name";
}
$pwd = "/img/".$name;
if(isset($_FILES)&& isset($_FILES['photo']) && is_uploaded_file($_FILES['photo']['tmp_name'])){
    if(!file_exists($pwd)){
        mkdir($pwd);
    }
    $a = $pwd."/" . basename($_FILES['photo']['name']);
    if(!move_uploaded_file($_FILES['photo']['tmp_name'], $a)){exit();}
}
if(isset($_FILES)&& isset($_FILES['photo2']) && is_uploaded_file($_FILES['phot']['tmp_name'])){
    if(!file_exists($pwd)){
        mkdir($pwd);
    }
    $a = $pwd."/" . basename($_FILES['photo2']['name']);
    if(!move_uploaded_file($_FILES['photo2']['tmp_name'], $a)){exit();}
}
if(isset($_FILES)&& isset($_FILES['photo3']) && is_uploaded_file($_FILES['photo3']['tmp_name'])){
    if(!file_exists($pwd)){
        mkdir($pwd);
    }
    $a = $pwd."/" . basename($_FILES['photo3']['name']);
    if(!move_uploaded_file($_FILES['photo3']['tmp_name'], $a)){exit();}
}
if(isset($_FILES)&& isset($_FILES['photo4']) && is_uploaded_file($_FILES['photo4']['tmp_name'])){
    if(!file_exists($pwd)){
        mkdir($pwd);
    }
    $a = $pwd."/" . basename($_FILES['photo4']['name']);
    if(!move_uploaded_file($_FILES['photo4']['tmp_name'], $a)){exit();}
}

header("Location: index.php?id={$name}");
exit();
?>
