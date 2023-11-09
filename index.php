<?php
include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM cv_dats ORDER BY id DESC");//typo dari database sqlyog cv_dats
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Curriculum Vitae</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <h2>Curriculum Vitae</h2>
        <a class="btn btn-danger" href="update.php">Update</a>
    </nav>
    <?php
        echo "<h1 class ='nma'>". $data['nama'] ."</h1>";
        echo "<img src ='". $data['foto_path'] ."' class = 'gbr' style = 'max-width:170px'>" . "<br>";
        echo "<h6>" . $data['alamat'] . "</h6>" . "<br>";
        echo "<h4>Contact</h4>";
        echo "<h5>" . $data['telepon'] . "</h5>";
        echo "<h5>" . $data['email']. "</h5>" . "<br>";
        echo "<h4>Pendidikan</h4>";
        echo "<h5>" . $data['pendidikan'] . "</h5>" . "<br>";
        echo "<h4>Pengalaman Kerja</h4>";
        echo "<h5>" . $data['pengalaman_kerja'] . "</h5>" . "<br>";
        echo "<h4>Skill</h4>";
        echo "<h5>" . $data['keterampilan'] . "</h5>" . "<br>";
        echo "<h4>More</h4>";
        echo "<h5>" . $data['web'] . "</h5>";
    ?>
</body>
</html>