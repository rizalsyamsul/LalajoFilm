<main id="pagenya" role="main" class="col-10" style="left:10%;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 style="padding-top:80px;" class="h2"><?= $title; ?></h1>
    </div>
    <div class="card mb-5" style="width: 30rem">
        <div class="col-lg-5" style="padding-left : 100px">
            <img src="<?= base_url('assets/images/' . $user['image']) ?>" >
        </div>

        <div class="card-body">
            <h5 class="card-title"><?= $user['nama_depan'] . ' ' . $user['nama_belakang'] ?></h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= '<b>username:</b> ' .  $user['username'] ?></li>
            <li class="list-group-item"><?= '<b>email:</b> ' .  $user['email'] ?></li>
            <li class="list-group-item"><?= '<b>password:</b> ' .  $user['password'] ?></li>
            <li class="list-group-item"><?= '<b>role:</b> ' .  $user['role_id'] ?></li>
        </ul>
        <div class="card-footer text-muted">
            <?= '<b>Member since:</b> ' .  date('d F Y', $user['date_created']); ?></li>
        </div>
    </div>


</main>
