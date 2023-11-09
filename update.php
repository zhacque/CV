<?php
if (isset($_POST["Update"])) {
$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
$telepon = $_POST["telepon"];
$web = $_POST["web"];
$pendidikan = $_POST["pendidikan"];
$pengalaman = $_POST["pengalaman_kerja"];
$keterampilan = $_POST["keterampilan"];
$foto = $_POST["foto_path"];

include_once("config.php");

$result = mysqli_query($conn, "UPDATE cv_dats SET nama= '$nama', alamat='$alamat', telepon='$telepon', email='$email', web='$web', pendidikan='$pendidikan', pengalaman_kerja='$pengalaman', keterampilan='$keterampilan', foto_path='$foto' WHERE id=1");//typo dari database sqlyog cv_dats

header("Location: index.php");
}
?>

<?php
include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM cv_dats WHERE id=1");//typo dari database sqlyog cv_dats
$data = mysqli_fetch_array($result);
$nama = $data['nama'];
$alamat = $data['alamat'];
$telepon = $data['telepon'];
$email = $data['email'];
$pengalaman = $data['pengalaman_kerja'];
$keterampilan = $data['keterampilan'];
$web = $data['web'];
$pendidikan = $data['pendidikan'];
$foto = $data['foto_path'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Curriculum Vitae | Update</title>
</head>
<body class="p-3">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <h2>Update Data</h2>
    </nav>
    <form action="update.php" method="post">
        <table class="table table-hover">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon" value="<?php echo $telepon ?>"></td>
            </tr>
            <tr>
                <td>EmaiL</td>
                <td><input type="text" name="email" value="<?php echo $email ?>"></td>
            </tr>
            <tr>
                <td>Pendidkan</td>
                <td><input type="text" name="pendidikan" value="<?php echo $pendidikan ?>"></td>
            </tr>
            <tr>
                <td>Pengalaman Kerja</td>
                <td><input type="text" name="pengalaman_kerja" value="<?php echo $pengalaman ?>"></td>
            </tr>
            <tr>
                <td>Keterampilan</td>
                <td><input type="text" name="keterampilan" value="<?php echo $keterampilan ?>"></td>
            </tr>
            <tr>
                <td>Web</td>
                <td><input type="text" name="web" value="<?php echo $web ?>"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="text" name="foto_path" value="<?php echo $foto ?>"></td>
            </tr>
            <tr>
                <td><button class="btn btn-success" type="submit" name="Update">Update</button></td>
            </tr>
        </table>
    </form>
</body>
</html>