<div class="content-wrapper mt-5">
    <div class="container ">
        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Pelayanan Baru</button>
        <div class="card border-info ml-3 mt-3">
            <!-- <div class="card-header "></div> -->
            <div class="card-body ">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <!-- <th>ID PELAYANAN</th> -->
                            <th>JENIS LAYANAN</th>
                            <th>HARGA</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($view as $l) :
                        ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <!-- <td class="text-center"><?= $l['id_pelayanan'] ?></td> -->
                                <td><?= $l['jenis_layanan'] ?></td>
                                <td><?= $l['harga'] ?></td>
                                <td class="text-center">

                                    <a href="<?= base_url('pelayanan/update') ?>" data-toggle="modal" data-target="#update<?= $l['id_pelayanan']; ?>" class="btn btn-warning btn-sm">Edit</a>

                                    <a href="<?= base_url() . 'pelayanan/delete/' . $l['id_pelayanan']; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
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
<!-- <?php
        // $date = date('ydm');

        // $urutan = 1;
        // $urutan++;
        // $id = 'TIN' . $date .  $urutan;




        ?> -->
<!-- Modal Data Pelayanan -->
<div class="modal fade " id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pelayanan Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Pelayanan/create') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <!-- <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">ID Pelayanan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="id_pelayanan" value="<?= $id; ?>" required>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Layanan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="jenis_layanan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="harga" required>
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
<!-- modal Update Pelayanan -->
<?php foreach ($view as $l) : ?>
    <div class="modal fade " id="update<?= $l['id_pelayanan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pelayanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Pelayanan/update') ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <!-- <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">ID Pelayanan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="id_pelayanan" value="<?= $l['id_pelayanan'] ?>" required>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Layanan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="jenis_layanan" value="<?= $l['jenis_layanan'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="harga" value="<?= $l['harga'] ?>" required>
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