<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <h1>Form Tambah Buku</h1> 

    <form action="proses_tambah_buku.php" method="POST" anctype="multipart/form/data">
        <label for="id_buku">ID Buku:</label>
        <input type="text" id="id_buku" name="id_buku" required><br><br>

        <label for="nama_buku">Nama Buku:</label>
        <input type="text" id="nama_buku" name="nama_buku" required><br><br>

        <label for="deskripsi">ID Buku:</label>
        <textarea id="deskripsi" name="id_buku" rows="4" cols="50" required><br><br>

        <label for="FOTO">Foto Buku:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

        <input type="submit" value="Tambah Buku">


    </form>   
</body>
</html>