<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Edit Info Hospital
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $rs['id'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $rs['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $rs['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Slot</label>
                            <input type="text" class="form-control" id="slot" name="slot" value="<?= $rs['slot']; ?>">
                            <small class="form-text text-danger"><?= form_error('slot') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
