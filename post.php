<?php
    include('conexao.php');
    $_usuario = $_POST['nome'];
    $_resposta1 = $_POST['r1'];
    $_resposta2 = $_POST['r2'];
    $_resposta3 = $_POST['r3'];
    $_resposta4 = $_POST['r4'];
    $_resposta5 = $_POST['r5'];
    $_resposta6 = $_POST['r6'];
    $_resposta7 = $_POST['r7'];

    var_dump($_POST);

    $target_dir = "fotos/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["foto"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["foto"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $_foto = $target_dir . $_FILES['foto']['name'];

    $inserir = $con->prepare("CALL CADASTRAR_USUARIO(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $inserir->bindValue(1, $_usuario);
    $inserir->bindValue(2, $_foto);
    $inserir->bindValue(3, $_resposta1);
    $inserir->bindValue(4, $_resposta2);
    $inserir->bindValue(5, $_resposta3);
    $inserir->bindValue(6, $_resposta4);
    $inserir->bindValue(7, $_resposta5);
    $inserir->bindValue(8, $_resposta6);
    $inserir->bindValue(9, $_resposta7);
    $inserir->execute();    

    header('Location: respostas.php')

?>
