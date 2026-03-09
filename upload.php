<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <div class="container">
        <h2>Upload Gambar</h2>

        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="gambar" class="form-label">Pilih Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control" required>
            </div>

            <buttonc lass="btn-primary">Upload</button>
        </form>
    </div>

</body>
</html>