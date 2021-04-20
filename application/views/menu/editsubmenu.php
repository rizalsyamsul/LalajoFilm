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
                            <input type="hidden" name="id" value="<?= $submenu['id'] ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" id="title"  value="<?= $submenu['title']  ?>">
                            </div>
                            <div class="form-group">
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option value="<?= $submenu['menu_id']; ?>">Select Menu</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="url" id="url"  value="<?= $submenu['url']  ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="icon" id="icon"  value="<?= $submenu['icon']  ?>">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Active?
                                    </label>
                                </div>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
