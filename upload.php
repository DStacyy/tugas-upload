<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="container">
    <div class="container">
    <h2>Upload Gambar</h2>

    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="gambar" class="form-label">Pilih Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control" required>
        </div>

        <button class="btn btn-primary">Upload</button>
        <a href="gallery.php" class="btn btn-secondary">Lihat Gallery</a>
    </form>
</div>

</body>
</html>