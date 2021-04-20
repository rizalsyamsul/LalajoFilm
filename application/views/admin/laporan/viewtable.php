<main id="pagenya" role="main" class="col-10" style="left:10%;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 style="padding-top:80px;" class="h2"><?= $title; ?></h1>
    </div>




    <div class="row">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

        <div class="col-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Depan</th>
                        <th scope="col">Nama Belakang</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($rs as $data) :  ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $data['nama_depan']; ?></td>
                            <td><?= $data['nama_belakang']; ?></td>
                            <td><?= $data['tanggal']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
              <a href="<?= base_url(); ?>Laporan/index/" class="badge badge-success float-center">Back</a>
        </div>
    </div>
</main>
