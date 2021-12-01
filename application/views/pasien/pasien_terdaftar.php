<div class="content-wrapper mt-5">
    <div class="container-fluid ">
        <!-- <div class="message" data-message="<?= $this->session->flashdata('message') ?>"></div> -->

        <!-- <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Pasien Baru</button>
        <?= $this->session->flashdata('message') ?> -->
        <div class="card border-primary">
            <div class="card border-info ml-3 mt-3">
                <div class="card-header bg-info "> DATA PASIEN TERDAFTAR</div>
                <div class="card-body ">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>NO</th>
                                <th>ID PASIEN</th>
                                <th>NAMA</th>
                                <th>JENIS KELAMIN</th>
                                <th>ALAMAT</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($pasien as $v) :
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $v['id_pasien'] ?></td>
                                    <td><?= $v['nama_pasien'] ?></td>
                                    <td><?= $v['jenis_kelamin'] ?></td>
                                    <td><?= $v['alamat'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('pasien/update') ?>" data-toggle="modal" data-target="#update<?= $v['id_pasien'] ?>"><i class="far fa-edit"></i></a>
                                        |
                                        <a href="<?= base_url('pasien/detail') ?>" data-toggle="modal" data-target="#detail<?= $v['id_pasien'] ?>"><i class="far fa-sticky-note"></i></a>
                                        <!-- |
                                        <a href="<?= base_url() . 'pasien/delete/' . $v['id_pasien']; ?>"><i class="far fa-trash-alt text-danger" onClick="return confirm('Yakin akan menghapus data?')"></i></a> -->
                                    </td>
                                </tr>
                        </tbody>
                        <!-- <tfoot>
                        <tr>
                            <th>NAMA</th>
                            <th>JENIS KELAMIN</th>
                            <th>ALAMAT</th>
                            <th>AKSI</th>
                        </tr>
                    </tfoot> -->
                    <?php $i++;
                            endforeach;
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
    Launch demo modal
</button> -->
<?php



?>
<!-- Modal Data Pasien -->
<div class="modal fade " id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Pasien Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Pasien/create') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">ID Pasien</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="id_pasien" value="<?= $kode; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="nama_pasien" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="tempat_lahir" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="staticEmail" name="tgl_lahir" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-Laki">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Laki-Laki
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">No Hp</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="no_hp" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Kontak Lain</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="kontak_lain" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="pekerjaan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="alamat" required>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-info">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- modal Update Pasien -->
<?php foreach ($view as $v) : ?>
    <div class="modal fade " id="update<?= $v['id_pasien'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pasien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Pasien/update') ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">ID Pendaftaran</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control" id="staticEmail" name="id_pasien" value="<?= $v['id_pasien'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="nama_pasien" value="<?= $v['nama_pasien'] ?>" required>
                                    </div>
                                </div>
<<<<<<< HEAD
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">No Hp</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="no_hp" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Kontak Lain</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="kontak_lain" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="pekerjaan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="alamat" required>
                                    </div>
                                </div>
=======
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="tempat_lahir" value="<?= $v['tempat_lahir'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="staticEmail" name="tgl_lahir" value="<?= $v['tgl_lahir'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <!-- <input type="text" class="form-control" id="staticEmail" name="jenis_kelamin" value="<?= $v['jenis_kelamin'] ?>" required> -->
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-Laki">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Laki-Laki
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">No Hp</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="no_hp" value="<?= $v['no_hp'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Kontak Lain</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="kontak_lain" value="<?= $v['kontak_lain'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="pekerjaan" value="<?= $v['pekerjaan'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="alamat" value="<?= $v['alamat'] ?>" required>
                                    </div>
                                </div>
>>>>>>> parent of f5ccb50 (belum beres coba update)
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </div>
<?php endforeach; ?>

<!-- detail -->
<?php foreach ($view as $v) : ?>
    <div class="modal fade " id="detail<?= $v['id_pasien'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Pasien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">ID Pendaftaran</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="id_pasien" value="<?= $v['id_pasien'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="nama_pasien" value="<?= $v['nama_pasien'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="tempat_lahir" value="<?= $v['tempat_lahir'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="tgl_lahir" value="<?= $v['tgl_lahir'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="jenis_kelamin" value="<?= $v['jenis_kelamin'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">No Hp</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="no_hp" value="<?= $v['no_hp'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Kontak Lain</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="kontak_lain" value="<?= $v['kontak_lain'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="pekerjaan" value="<?= $v['pekerjaan'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="alamat" value="<?= $v['alamat'] ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
<<<<<<< HEAD
    <!-- modal Update Pasien -->
    <?php foreach ($list as $v) : ?>
        <div class="modal fade " id="update<?= $v['id_pasien'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('Pasien/update') ?>" method="post">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">ID Pendaftaran</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control" id="staticEmail" name="id_pasien" value="<?= $v['id_pasien'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="nama_pasien" value="<?= $v['nama_pasien'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="tempat_lahir" value="<?= $v['tempat_lahir'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="staticEmail" name="tgl_lahir" value="<?= $v['tgl_lahir'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <!-- <input type="text" class="form-control" id="staticEmail" name="jenis_kelamin" value="<?= $v['jenis_kelamin'] ?>" required> -->
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-Laki">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            Laki-Laki
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">No Hp</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="no_hp" value="<?= $v['no_hp'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Kontak Lain</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="kontak_lain" value="<?= $v['kontak_lain'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="pekerjaan" value="<?= $v['pekerjaan'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="alamat" value="<?= $v['alamat'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- detail -->
    <?php foreach ($list as $v) : ?>
        <div class="modal fade " id="detail<?= $v['id_pasien'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">ID Pendaftaran</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="id_pasien" value="<?= $v['id_pasien'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="nama_pasien" value="<?= $v['nama_pasien'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="tempat_lahir" value="<?= $v['tempat_lahir'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="tgl_lahir" value="<?= $v['tgl_lahir'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="jenis_kelamin" value="<?= $v['jenis_kelamin'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">No Hp</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="staticEmail" name="no_hp" value="<?= $v['no_hp'] ?>" required>
                                        </div>
                                        <div class="col">
                                            <div class="form-group mt-3">
                                                <label for="staticEmail">Catat Badan</label>
                                                <input type="text" class="form-control" id="staticEmail" name="cacat_badan" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group mt-3">
                                                <label for="staticEmail">Buta Warna</label>
                                                <input type="text" class="form-control" id="staticEmail" name="buta_warna" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group mt-3">
                                                <label for="staticEmail">Golongan Darah</label>
                                                <input type="text" class="form-control" id="staticEmail" name="golongan_darah" required>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="staticEmail">Catatan</label>
                                    <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
</div>
=======
>>>>>>> parent of f5ccb50 (belum beres coba update)
<?php endforeach; ?>