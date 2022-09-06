<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        <h3>Upload File : </h3>
        <input type="file" name="file" id="file">
        <p></p>
        <input type="submit" name="submit" value="Kirim"> 
    </form>
    <?php
    // echo untuk menampilkan hasil output pada layar, sama seperti syntax print
    if (isset($_POST['submit'])){
        $Upload = basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $Upload);
        echo "<img src='$Upload' width='100'>"; //untuk width bisa diubah ukurannya
    }
    ?>

</body>
</html>