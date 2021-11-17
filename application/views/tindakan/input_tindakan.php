<div class="content-wrapper mt-5">
    <div class="container ">
        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Pasien Baru</button>
        <div class="card border-info ml-3 mt-3">
            <!-- <div class="card-header "></div> -->
            <div class="card-body ">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="align-middle">
                            <th>NO</th>
                            <th>NO ANTRIAN</th>
                            <th>TANGGAL PENDAFTARAN</th>
                            <th>ID PASIEN</th>
                            <th>NAMA PASIEN</th>
                            <th>JENIS LAYANAN</th>
                            <th>JENIS POLI</th>
                            <th>JENIS LAYANAN</th>
                            <th>DOKTER</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <!-- <tbody>
                        <?php $i = 1;
                        foreach ($view as $v) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['id'] ?></td>
                                <td><?= $v['nama'] ?></td>
                                <td><?= $v['tanggal_kunjugan'] ?></td>
                                <td><?= $v['id_pasien'] ?></td>
                                <td><?= $v['nama'] ?></td>
                                <td><?= $v['layanan'] ?></td>
                                <td><?= $v['nama_dokter'] ?></td>
                                <td class="text-center"><a href="" data-toggle="modal" data-target="#update<?= $v['id'] ?>"><i class="far fa-edit"></i></a></td>
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
                    <!-- <?php $i++;
                        endforeach;
                            ?> -->
                    <tbody>
                        <tr class="align-middle">
                            <td>NO</td>
                            <td>NO ANTRIAN</td>
                            <td>TANGGAL PENDAFTARAN</td>
                            <td>ID PASIEN</td>
                            <td>NAMA PASIEN</td>
                            <td>JENIS LAYANAN</td>
                            <td>JENIS POLI</td>
                            <td>JENIS LAYANAN</td>
                            <td>DOKTER</td>
                            <td><a href="<?= base_url('Input_tindakan/diagnosa') ?>"> <i class="far fa-edit"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
    Launch demo modal
</button> -->
<?php
$date = date('ydm');

$urutan = 1;
$urutan++;
$id = 'PS' . $date .  $urutan;




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
                                <label for="staticEmail" class="col-sm-3 col-form-label">ID Pendaftaran</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="id" value="<?= $id; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="nama" required>
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
                                    <input type="text" class="form-control" id="staticEmail" name="jenis_kelamin" required>
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
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Pelayanan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="jenis_layanan" required>
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