<div class="content-wrapper mt-5">
    <div class="container ">
        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Dokter Baru</button>
        <div class="card border-info ml-3 mt-3">
            <!-- <div class="card-header "></div> -->
            <div class="card-body ">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>ID DOKTER</th>
                            <th>NAMA DOKTER</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($view as $r) :
                        ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td class="text-center"><?= $r['id_dokter'] ?></td>
                                <td><?= $r['nama_dokter'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('dokter/update') ?>" data-toggle="modal" data-target="#update<?= $r['id_dokter'] ?>"><i class="far fa-edit"></i></a>
                                    |
                                    <a href="<?= base_url() . 'dokter/delete/' . $r['id_dokter']; ?>"><i class="far fa-trash-alt text-danger" onClick="return confirm('Yakin akan menghapus data?')"></i></a>
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
<!-- <button type=" button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                                            Launch demo modal
                                            </button> -->
<?php
$date = date('ydm');

$urutan = 1;
$urutan++;
$id = 'DR' . $date .  $urutan;




?>
<!-- Modal Data Dokter -->
<div class="modal fade " id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Dokter Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Dokter/create') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">ID Dokter</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="id_dokter" value="<?= $id; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">ID Poliklinik</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="id_poli" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="nama_dokter" required>
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
<!-- modal Update dokter -->
<?php foreach ($view as $r) : ?>
    <div class="modal fade " id="update<?= $r['id_dokter'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Dokter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Dokter/update') ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">ID Dokter</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="id_dokter" value="<?= $r['id_dokter'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">ID Poliklinik</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="id_poli" value="<?= $r['id_poli'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="nama_dokter" value="<?= $r['nama_dokter'] ?>" required>
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