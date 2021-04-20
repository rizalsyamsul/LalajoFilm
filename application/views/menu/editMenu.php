<main id="pagenya" role="main" class="col-8" style="left:15%;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 style="padding-top:80px;" class="h2"><?= $title; ?></h1>
    </div>

    <div class="container">
        <div class="row mt-3">
            <div class="col md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <?= $title; ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $menu['id'] ?>">
                            <div class="form-group">
                                <label for="menu">Menu</label>
                                <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
                                <small class="form-text text-danger"><?= form_error('menu') ?>.</small>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>