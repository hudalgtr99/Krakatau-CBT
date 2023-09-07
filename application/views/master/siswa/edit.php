<?php
$fotoSiswa = $siswa->foto;
if (!file_exists(FCPATH . $siswa->foto)) {
    $fotoSiswa = str_replace('profiles', 'foto_siswa', $siswa->foto);
}
?>
<div class="content-wrapper bg-white pt-4">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6">
                    <h1>Pelamar</h1>
                </div>
                <div class="col-6">
                    <button onclick="window.history.back();" type="button" class="btn btn-sm btn-danger float-right">
                        <i class="fas fa-arrow-circle-left"></i><span
                                class="d-none d-sm-inline-block ml-1">Kembali</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <?= $this->session->flashdata('updatesiswa') ?>
            <div class="row justify-content-center"> <!-- Menggunakan justify-content-center untuk membuat rata tengah -->
                <div class="col-md-4">
                    <div class="card card-info my-shadow">
                        <div class="card-header with-border">
                            <h3 class="card-title">Detail Data Pelamar</h3>
                        </div>
                        <div class="card-body">
                            <div class="box-info text-center user-profile-2">
                                <div class="user-profile-inner">
                                    <?php if (!file_exists(FCPATH . $fotoSiswa) || $fotoSiswa == "") : ?>
                                        <?php if ($siswa->jenis_kelamin == 'L') : ?>
                                            <img src="<?= base_url() ?>/assets/img/siswa-l.png"
                                                class="img-circle profile-avatar mt-2" alt="User avatar">
                                        <?php else : ?>
                                            <img src="<?= base_url() ?>/assets/img/siswa-p.png"
                                                class="img-circle profile-avatar mt-2" alt="User avatar">
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <img src="<?= base_url($fotoSiswa) ?>"
                                            class="img-circle profile-avatar mt-2" alt="User avatar">
                                    <?php endif; ?>
                                    <h4 class="mt-5 mb-5"><?= $siswa->nama ?></h4>
                                    <div class="user-button">
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" data-toggle="modal"
                                                        data-target="#editFotoModal"
                                                        class="btn btn-sm btn-primary btn-block"><i
                                                            class="fas fa-image"></i> Ganti Foto
                                                </button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger btn-sm btn-block"
                                                        onclick="deleteImage(true)"><i
                                                            class="fa fa-trash"></i> Hapus Foto
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-warning btn-block"
                                                        data-toggle="modal" data-target="#editLoginModal"><i
                                                            class="fa fa-pencil"></i> Edit Username / Password
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<div class="modal fade" id="editFotoModal" tabindex="-1" role="dialog" aria-labelledby="editFotoLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Edit Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('', array('id' => 'set-foto-profile')) ?>
                <div class="form-group pb-2">
                    <label for="foto-profile">Foto Profil</label>
                    <input type="file" id="foto-profile" name="foto" class="dropify"
                           data-max-file-size-preview="2M"
                           data-allowed-file-extensions="jpg jpeg png"
                           data-default-file="<?= base_url() . $fotoSiswa ?>"/>
                </div>
                <?= form_close() ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<?= form_open('', array('id' => 'updatelogin'), array('id_siswa' => $siswa->id_siswa)) ?>
<div class="modal fade" id="editLoginModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Username / Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend w-40">
                        <span class="input-group-text">Username</span>
                    </div>
                    <input type="text" class="form-control" name="username" value="<?= $siswa->username ?>"
                           placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend w-40">
                        <span class="input-group-text">Password Lama</span>
                    </div>
                    <input class="form-control" name="old" value="<?= $siswa->password ?>" placeholder="Username"
                           readonly>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend w-40">
                        <span class="input-group-text">Password Baru</span>
                    </div>
                    <input type="text" name="new" class="form-control" placeholder="Password Baru">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend w-40">
                        <span class="input-group-text">Konfirmasi Password</span>
                    </div>
                    <input type="text" name="new_confirm" class="form-control" placeholder="Konfirmasi Password Baru"
                           required>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-warning float-right">Ganti Password</button>
            </div>
        </div>
    </div>
</div>
<?= form_close() ?>

<script>
    var fotoProfile = '';
    var idSiswa = '<?=$siswa->id_siswa?>';
    var src = '<?=$fotoSiswa?>';
    $(document).ready(function () {
        ajaxcsrf();

        $('.tahun').datetimepicker({
            icons:
                {
                    next: 'fa fa-angle-right',
                    previous: 'fa fa-angle-left'
                },
            timepicker: false,
            scrollInput: false,
            scrollMonth: false,
            format: 'Y-m-d',
            disabledWeekDays: [0],
            widgetPositioning: {
                horizontal: 'left',
                vertical: 'bottom'
            }
        });

        var drEvent = $('.dropify').dropify({
            messages: {
                'default': 'Seret foto kesini atau klik',
                'replace': 'Seret atau klik<br>untuk mengganti foto',
                'remove': 'Hapus',
                'error': 'Ooops, ada kesalahan!!.'
            },
            error: {
                'fileSize': 'The file size is too big ({{ value }} max).',
                'minWidth': 'The image width is too small ({{ value }}}px min).',
                'maxWidth': 'The image width is too big ({{ value }}}px max).',
                'minHeight': 'The image height is too small ({{ value }}}px min).',
                'maxHeight': 'The image height is too big ({{ value }}px max).',
                'imageFormat': 'The image format is not allowed ({{ value }} only).'
            }
        });


        drEvent.on('dropify.beforeClear', function (event, element) {
            //return confirm("Hapus logo \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function (event, element) {
            src = $(event.currentTarget).data('default-file');
            deleteImage(false);
            fotoProfile = '';
        });

        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
            $.toast({
                heading: "Error",
                text: "file rusak",
                icon: 'warning',
                showHideTransition: 'fade',
                allowToastClose: true,
                hideAfter: 5000,
                position: 'top-right'
            });
        });

        $('#editFotoModal').on('hidden.bs.modal', function (e) {
            window.location.reload();
        });

        $('form#siswa').on('submit', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            var btn = $('#submit');
            btn.attr('disabled', 'disabled').text('Wait...');

            swal.fire({
                text: "Silahkan tunggu....",
                button: false,
                closeOnClickOutside: false,
                closeOnEsc: false,
                allowEscapeKey: false,
                allowOutsideClick: false,
                onOpen: () => {
                    swal.showLoading();
                }
            });
            $.ajax({
                url: $(this).attr('action'),
                data: $(this).serialize(),
                type: 'POST',
                success: function (data) {
                    console.log(data);
                    btn.removeAttr('disabled').text('Simpan');
                    if (data.insert) {
                        swal.fire({
                            "title": "Sukses",
                            "text": data.text,
                            "icon": "success",
                            "type": "success"
                        }).then((result) => {
                            if (result.value) {
                                window.location.reload(true)// = base_url+'datasiswa';
                            }
                        });
                    } else {
                        swal.fire({
                            "title": "Error",
                            "text": data.text,
                            "icon": "error",
                        });
                    }
                }, error: function (xhr, status, error) {
                    console.log("error", xhr.responseText);
                    swal.fire({
                        title: "ERROR",
                        text: "Data Tidak Tersimpan",
                        icon: "error"
                    });
                }
            });
        });

        $('#updatelogin').on('submit', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            var dataPost = $(this).serialize();
            console.log("data:", dataPost);

            $('#editLoginModal').modal('hide').data('bs.modal', null);
            $('#editLoginModal').on('hidden', function () {
                $(this).data('modal', null);
            });

            swal.fire({
                text: "Silahkan tunggu....",
                button: false,
                closeOnClickOutside: false,
                closeOnEsc: false,
                allowEscapeKey: false,
                allowOutsideClick: false,
                onOpen: () => {
                    swal.showLoading();
                }
            });
            $.ajax({
                url: base_url + "datasiswa/editlogin",
                type: "POST",
                dataType: "JSON",
                data: dataPost,
                success: function (data) {
                    console.log(data);
                    if (data.status) {
                        swal.fire({
                            title: "Sukses",
                            html: data.text,
                            icon: "success",
                            showCancelButton: false,
                        }).then(result => {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                    } else {
                        var html = '<ul>';
                        if (data.errors.username != null && data.errors.username !== "") {
                            html += '<li>' + data.errors.username + '</li>';
                        }
                        if (data.errors.old != null && data.errors.old !== "") {
                            html += '<li>' + data.errors.old + '</li>';
                        }
                        if (data.errors.new != null && data.errors.new !== "") {
                            html += '<li>' + data.errors.new + '</li>';
                        }
                        if (data.errors.new_confirm != null && data.errors.new_confirm !== "") {
                            html += '<li>' + data.errors.new_confirm + '</li>';
                        }
                        html += '</ul>';
                        swal.fire({
                            title: "ERROR",
                            html: html,
                            icon: "error",
                            showCancelButton: false,
                        });
                    }
                }, error: function (xhr, status, error) {
                    console.log("error", xhr.responseText);
                    const err = JSON.parse(xhr.responseText)
                    swal.fire({
                        title: "Error",
                        text: err.Message,
                        icon: "error"
                    });
                }
            });
        });

        function uploadAttach(action, data) {
            console.log(data);
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: action,
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function (data) {
                    fotoProfile = data.src;
                },
                error: function (e) {
                    console.log("error", e.responseText);
                    $.toast({
                        heading: "ERROR!!",
                        text: "file tidak terbaca",
                        icon: 'error',
                        showHideTransition: 'fade',
                        allowToastClose: true,
                        hideAfter: 5000,
                        position: 'top-right'
                    });
                }
            });
        }

        $("#foto-profile").change(function () {
            var input = $(this)[0];
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#prev-logo-kanan').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);

                var form = new FormData($('#set-foto-profile')[0]);
                uploadAttach(base_url + 'datasiswa/uploadfile/' + idSiswa, form);
            }
        });

    });

    function deleteImage(fromBtn) {
        console.log(src);
        $.ajax({
            data: {src: src},
            type: "POST",
            url: base_url + "datasiswa/deletefile/" + idSiswa,
            cache: false,
            success: function (response) {
                console.log(response);
                if (fromBtn) {
                    window.location.reload();
                }
            }
        });
    }
</script>
