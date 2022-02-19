<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css tambahan -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparant">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Toko</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="<?= base_url(); ?>">Home</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>masuk">Barang</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>peoples">Peoples</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>