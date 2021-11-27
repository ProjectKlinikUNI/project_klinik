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
                                <th>ID KUNJUNGAN</th>
                                <th>ID PASIEN</th>
                                <th>ID DOKTER</th>
                                <th>ID POLI</th>
                                <th>LAYANAN</th>
                                <th>TANGGAL KUNJUNGAN</th>
                                <th>JAM KUNJUNGAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($view as $v) :
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $v['id_kunjungan'] ?></td>
                                    <td><?= $v['id_pasien'] ?></td>
                                    <td><?= $v['id_dokter'] ?></td>
                                    <td><?= $v['id_poli'] ?></td>
                                    <td><?= $v['layanan'] ?></td>
                                    <td><?= $v['tanggal_kunjungan'] ?></td>
                                    <td><?= $v['jam_kunjungan'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('pasien_terdaftar/create') ?>" data-toggle="modal" data-target="#create"><i class="far fa-edit"></i></a>

                                        <!-- |
                                        <a href="<?= base_url('pasien_terdaftar/detail') ?>" data-toggle="modal" data-target="#detail<?= $v['id_kunjungan'] ?>"><i class="far fa-sticky-note"></i></a> -->
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

<?php foreach ($view as $c) : ?>
    <div id="<?= $c['id_kunjungan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    </div>
<?php endforeach; ?>

<!-- Modal Data Catatan -->
<div class="modal fade " id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">CATATAN PASIEN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Pasien_terdaftar/create') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row mt-2">

                                <input type="text" class="form-control" id="staticEmail" name="id_kunjungan" value="<?= $v['id_kunjungan'] ?>" required>
                                <input type="text" class="form-control" id="staticEmail" name="id_pasien" value="<?= $v['id_pasien'] ?>" required>
                                <input type="text" class="form-control" id="staticEmail" name="id_dokter" value="<?= $v['id_dokter'] ?>" required>

                                <label for="staticEmail" class="col-sm-2 col-form-label">Riwayat Alergi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="staticEmail" name="riwayat_alergi" required>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mt-3">
                                            <label for="staticEmail">Tinggi Badan</label>
                                            <input type="text" class="form-control" id="staticEmail" name="tinggi_badan" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mt-3">
                                            <label for="staticEmail">Berat Badan</label>
                                            <input type="text" class="form-control" id="staticEmail" name="berat_badan" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mt-3">
                                            <label for="staticEmail">Tekanan Darah</label>
                                            <input type="text" class="form-control" id="staticEmail" name="tensi" required>
                                        </div>
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