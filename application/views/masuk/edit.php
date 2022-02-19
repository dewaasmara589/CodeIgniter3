<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <form action="" method="post">
                    <div class="card-header">
                        Form Edit Barang
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kode" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" name="kode" id="kode" value="<?= $barang["kode"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $barang["nama"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga" value="<?= $barang["harga"]; ?>">
                        </div>
                        <?php if (validation_errors()) : ?>
                            <div class=" alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <button type="submit" name="edit" class="btn btn-success mt-2">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>