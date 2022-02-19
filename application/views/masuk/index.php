<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="container mt-3">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?>/masuk/tambah" class="btn btn-primary">Tambah Data Barang</a>
        </div>
    </div>

    <div class="row mt-3 mb-3">
        <div class="col-md-5">
            <form method="post" action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Barang" name="cari">
                    <button class="btn btn-info" type="submit">Button</button>
                </div>
            </form>
        </div>
    </div>

    <h4><strong>Daftar Barang</strong></h4>

    <div class="row mt-3">
        <div class="col-md-5">
            <?php if (empty($barang_masuk)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data tidak ditemukan
                </div>
            <?php endif ?>

            <?php foreach ($barang_masuk as $bm) : ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?php echo $bm['nama'] ?>
                        <a href="<?= base_url(); ?>masuk/hapus/<?= $bm['kode'] ?>" class="badge bg-danger float-end tombol-hapus">Hapus</a>
                        <a href="<?= base_url(); ?>masuk/edit/<?= $bm['kode'] ?>" class="badge bg-success float-end">Edit</a>
                        <a href="<?= base_url(); ?>masuk/detail/<?= $bm['kode'] ?>" class="badge bg-primary float-end">Detail</a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
            <div class="col md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Barang Masuk <strong>Berhasil</strong><?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div> -->


    <?php endif; ?>

</div>