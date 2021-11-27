<div class="content-wrapper mt-5">
    <div class="container-fluid ">
        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah</button>
        <div class="card border-info ml-3 mt-3">
            <!-- <div class="card-header "></div> -->
            <div class="card-body ">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>Id Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Poli Klinik</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($view as $v) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['id_dokter'] ?></td>
                                <td></td>
                                <td><?= $v['id_poli'] ?></td>
                                <td><?= $v['hari'] ?></td>
                                <td><?= $v['jam_mulai']   ?> - <?= $v['jam_mulai']   ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('Jadwal_dokter/update') ?>" data-toggle="modal" data-target="#update<?= $v['id_jadwal'] ?>"><i class="far fa-edit"></i></a>
                                    |
                                    <a href="<?= base_url('Jadwal_dokter/update') ?>" data-toggle="modal" data-target="#update<?= $v['id_jadwal'] ?>"><i class="far fa-trash-alt text-danger"></i></a>
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
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Jadwal Dokter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Jadwal_dokter/create') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">ID Dokter</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="idDokter" name="nama_dokter">
                                        <option></option>
                                        <?php foreach ($dokter as $d) : ?>
                                            <option><?= $d['id_dokter'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Nama Dokter</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="nama" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Poli Klinik</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="id_poli" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Hari</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="hari" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Jam </label>
                                <div class="col-sm-4">
                                    <input type="time" class="form-control" id="staticEmail" name="jam_mulai" required placeholder="Jam mulai">
                                </div>
                                <div class="col-sm-4">
                                    <input type="time" class="form-control" id="staticEmail" name="jam_berakhir" required placeholder="Jam selesai">
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
    <div class="modal fade " id="update<?= $v['id_dokter'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Jadwal Dokter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Pasien/update') ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">ID Dokter</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="id_dokter" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Dokter</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Poli Klinik</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="id_poliklinik" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Hari</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="staticEmail" name="hari" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Jam </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="staticEmail" name="jam_mulai" required placeholder="Jam mulai">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="staticEmail" name="jam_selesai" required placeholder="Jam selesai">
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