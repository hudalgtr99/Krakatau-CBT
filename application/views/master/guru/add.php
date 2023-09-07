<div class="content-wrapper bg-white pt-4">
    <section class="content-header">
        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between mb-2">
                <h1>Tambah Pengawas</h1>
                <a href="<?= base_url('dataguru') ?>" type="button" class="btn btn-sm btn-danger">
                    <i class="fas fa-arrow-circle-left"></i><span class="d-none d-sm-inline-block ml-1">Kembali</span>
                </a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <?= form_open('', array('id' => 'formguru')); ?>
            <div class="card my-shadow mb-4">
                <div class="card-header">
                    <h6 class="card-title">Tambah Manual</h6>
                    <div class="card-tools">
                        <button type="reset" class="btn btn-sm bg-warning text-white">
                            <i class="fa fa-sync mr-1"></i> Reset
                        </button>
                        <button type="submit" id="submit" class="btn btn-sm bg-primary text-white">
                            <i class="fas fa-save mr-1"></i> Simpan
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-6">
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-offset-4">
                                    <label for="nama_guru">Nama Pengawas :</label>
                                </div>
                                <div class="col-md-8 col-sm-offset-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input id="nama_guru" type="text" class="form-control" name="nama_guru"
                                               placeholder="Nama Pengawas" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-offset-4">
                                    <label for="nip">NIP :</label>
                                </div>
                                <div class="col-md-8 col-sm-offset-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                        </div>
                                        <input type="number" id="nip" class="form-control" name="nip" placeholder="NIP"
                                               required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-6">
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-offset-4">
                                    <label for="username">Username :</label>
                                </div>
                                <div class="col-md-8 col-sm-offset-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input id="username" type="text" class="form-control" name="username"
                                               placeholder="Username" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-offset-4">
                                    <label for="password">Password :</label>
                                </div>
                                <div class="col-md-8 col-sm-offset-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                        </div>
                                        <input id="password" class="form-control" name="password" placeholder="Password"
                                               required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= form_close(); ?>

            <br>
        </div>
    </section>
</div>

<script src="<?= base_url() ?>/assets/app/js/jquery.htmlparser.min.js"></script>
<script src="<?= base_url() ?>/assets/app/js/master/guru/import.js"></script>
