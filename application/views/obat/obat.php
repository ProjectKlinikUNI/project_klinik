<div class="content-wrapper mt-5">
    <div class="container ">
        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Obat Baru</button>
        <div class="card border-info ml-3 mt-3">
            <!-- <div class="card-header "></div> -->
            <div class="card-body ">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>ID OBAT</th>
                            <th>NAMA OBAT</th>
                            <th>SATUAN</th>
                            <th>KATEGORI</th>
                            <th>STOCK</th>
                            <th>HARGA</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($view as $o) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $o['id_obat'] ?></td>
                                <td><?= $o['nama_obat'] ?></td>
                                <td><?= $o['satuan'] ?></td>
                                <td><?= $o['kategori'] ?></td>
                                <td><?= $o['stock'] ?></td>
                                <td><?= $o['harga'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('obat/update') ?>" data-toggle="modal" data-target="#update<?= $o['id_obat'] ?>"><i class="far fa-edit"></i></a>
                                    |
                                    <a href="<?= base_url() . 'obat/delete/' . $o['id_obat']; ?>"><i class="far fa-trash-alt text-danger" onClick="return confirm('Yakin akan menghapus data?')"></i></a>
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


<!-- Modal Data Obat -->
<div class="modal fade " id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Obat Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Obat/create') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">ID Obat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="id_obat" value="<?= $kode; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Nama Obat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="nama_obat" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Satuan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="satuan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="kategori" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Stock</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="stock" required>
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
<!-- modal Update Obat -->
<?php foreach ($view as $o) : ?>
    <div class="modal fade " id="update<?= $o['id_obat'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Obat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Obat/update') ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">ID Obat</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control" id="staticEmail" name="id_obat" value="<?= $o['id_obat'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Obat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="nama_obat" value="<?= $o['nama_obat'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Satuan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="satuan" value="<?= $o['satuan'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="kategori" value="<?= $o['kategori'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Stock</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="stock" value="<?= $o['stock'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="harga" value="<?= $o['harga'] ?>" required>
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