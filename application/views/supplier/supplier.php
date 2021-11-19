<div class="content-wrapper mt-5">
    <div class="container ">
        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Supplier Baru</button>
        <div class="card border-info ml-3 mt-3">
            <!-- <div class="card-header "></div> -->
            <div class="card-body ">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>ID SUPPLIER</th>
                            <th>NAMA SUPPLIER</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($view as $s) :
                        ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td class="text-center"><?= $s['id_supplier'] ?></td>
                                <td><?= $s['nama_supplier'] ?></td>
                                <td class="text-center">
                                    
                                    <a href="<?= base_url('supplier/update') ?>" data-toggle="modal" data-target="#update<?= $s['id_supplier']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                   
                                    <!-- <a href="<?= base_url() . 'supplier/update/' . $s['id_supplier']; ?>" class="btn btn-warning btn-sm">Edit</a> -->

                                    <a href="<?= base_url() . 'supplier/delete/' . $s['id_supplier']; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
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
$id = 'SUP' . $date .  $urutan;




?>
<!-- Modal Data Supplier -->
<div class="modal fade " id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Supplier/create') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">ID Supplier</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="id_supplier" value="<?= $id; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Nama Supplier</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="nama_supplier" required>
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
<?php foreach ($view as $s) : ?>
    <div class="modal fade " id="update<?= $s['id_supplier'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Supplier/update') ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">ID Supplier</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="id_Supplier" value="<?= $s['id_supplier'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Supplier</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="nama_supplier" value="<?= $s['nama_supplier'] ?>" required>
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