    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css?d='); echo time(); ?>" />
    <style>
    #boxformlogin {
        background: rgba(37, 36, 36, 0.8);
        mix-blend-mode: normal;
        text-align: center;
        height:100%;
      }
      #formregister{
        color:white;
        padding-top:20px;
        padding-left:20%;
        padding-right:20%;
      }
      #registerbg{
        background-image: url('../assets/images/regis2.jpg');
        background-size: 100% ;
        height:100%;
        filter: contrast(90%) brightness(110%);
      }
      /* footer */
      h5{
          font-size: 13px;
      }

    </style>
    <title><?= $title ?></title>
	</head>

	<body>
    <div id="registerbg" class="row">
        <div class="col-6"></div>
        <div class="col-6 " id="boxformlogin">
        <form id="formregister" action="<?= site_url('auth/register') ?>" method="post">
            <h2>Register</h2>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-sm-6">
                        <label for="inputNamaDepan">Nama Depan</label>
                        <input type="text" class="form-control" name="nama_depan" value="<?= set_value('nama_depan') ?>" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputNamaBelakang">Nama Belakang</label>
                        <input type="text" class="form-control" name="nama_belakang" value="<?= set_value('nama_belakang') ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" required>
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" required>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="password" required>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="inputRePassword">Re-Enter Password</label>
                <input type="password" class="form-control" name="repassword" required>
            </div>
            <button type="submit" class="btn btn-primary button1">Submit</button>
            <p>Sudah memiliki akun? <a href="<?= base_url('auth') ?>">Login!</a></p>
        </form>
        </div>
    </div>


	</body>
