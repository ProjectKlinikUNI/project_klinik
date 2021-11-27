<div class="content-wrapper mt-5">
    <div class="container-fluid ">
        <div class="message" data-message="<?= $this->session->flashdata('message') ?>"></div>

        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Pengguna Baru</button>
        <?= $this->session->flashdata('message') ?>
        <div class="card border-info ml-3 mt-3">
            <!-- <div class="card-header "></div> -->
            <div class="card-body ">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>ID PENGGUNA</th>
                            <th>NAMA PENGGUNA</th>
                            <th>LEVEL PENGGUNA</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($view as $v) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['id_users'] ?></td>
                                <td><?= $v['username'] ?></td>
                                <td><?= $v['rule_name'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('users/update') ?>" data-toggle="modal" data-target="#update<?= $v['id_users']; ?>"> <i class="far fa-edit"></i></a>|
                                    <a href="<?= base_url() . 'users/delete/' . $v['id_users']; ?>"><i class="far fa-trash-alt text-danger" onClick="return confirm('Yakin akan menghapus data?')"></i></a>

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



?>
<!-- Modal Data Pasien -->
<div class="modal fade " id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Pengguna Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Users/create') ?>" method="post">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="staticEmail" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Id Pengguna</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="staticEmail" name="id_users" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Level</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="exampleFormControlSelect1" name="ruleid">
                                <option></option>
                                <?php
                                $rules = $this->db->get('sys_rules')->result_array();
                                foreach ($rules as $r) :
                                ?>
                                    <option value="<?= $r['rule_id'] ?>"><?= $r['rule_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="staticEmail" name="password" required>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="active">
                        <label class="form-check-label" for="defaultCheck1">
                            Aktif
                        </label>
                    </div>
            </div>

            </ </div>
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
    <div class="modal fade " id="update<?= $v['id_users'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('users/update') ?>" method="post">
                        <form action="<?= base_url('Users/create') ?>" method="post">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="username" value="<?= $v['username'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Id Pengguna</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="staticEmail" name="id_users" value="<?= $v['id_users'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Level</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="exampleFormControlSelect1" name="ruleid">
                                        <option> <?= $v['rule_name'] ?></option>
                                        <?php
                                        $rules = $this->db->get('sys_rules')->result_array();
                                        foreach ($rules as $r) :
                                        ?>
                                            <option value="<?= $r['rule_id'] ?>"><?= $r['rule_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="active">
                                <label class="form-check-label" for="defaultCheck1">
                                    Aktif
                                </label>
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