<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <form action="" method="post">
                    <div class="card-header">
                        Form Tambah Barang
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kode" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" name="kode" id="kode">
                            <!-- pesan error -->
                            <div class="form-text text-danger"><?= form_error('kode') ?></div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            <div class="form-text text-danger"><?= form_error('nama') ?></div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga">
                            <div class="form-text text-danger"><?= form_error('harga') ?></div>
                        </div>

                        <!-- untuk menampilkan semua form validation -->
                        <!-- <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?> -->
                        <button type="submit" name="tambah" class="btn btn-primary mt-2">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>