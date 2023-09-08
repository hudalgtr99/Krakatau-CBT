<div class="content-wrapper bg-white pt-4">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6">
                    <h1><?= $subjudul ?></h1>
                </div>
                <div class="col-6">
                    <a href="<?= base_url('datakelas') ?>" type="button" class="btn btn-sm btn-danger float-right">
                        <i class="fas fa-arrow-circle-left"></i><span
                                class="d-none d-sm-inline-block ml-1">Kembali</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card my-shadow">
                <div class="card-header">
                    <div class="card-title">
                        <h6><?= $subjudul . ' ' . $kelas->nama_kelas ?></h6>
                    </div>
                    <div class="card-tools">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus mr-1"></i>Reload
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td style="width: 120px">
                                Nama Ruangan
                            </td>
                            <td>
                                <?= $kelas->nama_kelas ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kode Ruangan
                            </td>
                            <td>
                                <?= $kelas->kode_kelas ?>
                            </td>
                        </tr>
                        <?php if ($setting->jenjang == '3') : ?>
                            <tr>
                                <td>
                                    Posisi
                                </td>
                                <td>
                                    <?= $kelas->nama_jurusan ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <td>
                                Level Sesi
                            </td>
                            <td>
                                <?= $kelas->level ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Pengawas
                            </td>
                            <td>
                                <?= $kelas->nama_guru ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jumlah Pelamar
                            </td>
                            <td>
                                <?= count($siswas) ?>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Pelamar <?= $kelas->nama_kelas ?></h6>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">NIP/No Pelamar</th>
                                    <th class="text-center align-middle">Nama</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($siswas as $siswa) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $no ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $siswa->nis ?>
                                        </td>
                                        <td>
                                            <?= $siswa->nama ?>
                                        </td>
                                    </tr>
                                    <?php $no++; endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
