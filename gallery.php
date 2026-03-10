<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Gambar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="p-4">
    <div class="container">
        <h2>Gallery Gambar</h2>
        <?php
        if (isset($_GET['upload'])) {
            ?>
            <div class="alert alert-success">
                Gambar berhasil diupload!
            </div>
            <?php
        }
        ?>
        <a href="upload.php" class="btn btn-primary mb-3">
            Upload Gambar
        </a>
    </div>
    <div class="row">
        <?php
        $folder = "uploads/";
        $files = scandir("uploads/");
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {

                ?>
                <div class="col-md-3 mb-4">
                    <img src="<?php echo $folder . $file; ?>" class="img-fluid rounded shadow">
                </div>

                <?php
            }
        }
        ?>

    </div>
</body>

</html>