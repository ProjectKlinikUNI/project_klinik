<script>
    $(document).ready(function() {
        $("#catat").click(function() {
            $("penyakit").hide
            $("modal_keterangan").show
        });
    });
</script>


<div class="content-wrapper mt-5">
    <<<<<<< HEAD <div class="container-fluid ">
        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Pasien Baru</button>
        =======
        <div class="container ">
            <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">DAFTAR PASIEN</button>
            >>>>>>> bc3f19228d831a8aaaaebdf90b55ad6e6a901926
            <div class="card border-info ml-3 mt-3">
                <!-- <div class="card-header "></div> -->
                <div class="card-body ">
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Id Pasien</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $tindakan['id_pasien'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Nama Pasien</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="inputtext" value="<?= $tindakan['nama_pasien'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Umur Pasien</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="inputtext" value="<?php
                                                                                                                            $tindakan['tgl_lahir'];
                                                                                                                            $today = new datetime('today');
                                                                                                                            if ($tindakan >= $today) {
                                                                                                                                exit('0 tahun 0 Bulan 0 Hari');
                                                                                                                                $y = $today->diff($birthDate)->y;
                                                                                                                                $m = $today->diff($birthDate)->m;
                                                                                                                                $d = $today->diff($birthDate)->d;
                                                                                                                                echo  $y . " tahun " . $m . " bulan " . $d . " hari";
                                                                                                                            }


                                                                                                                            ?>">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Poli Klinik</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $tindakan['nama_poli'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">Nama Dokter</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="inputtext" value="<?= $tindakan['nama_dokter'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">Jenis Layanan</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="inputtext" value="<?= $tindakan['layanan'] ?>">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- pills tab -->
                    <ul class="nav nav-tabs mt-3 font-weight-bold" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="catatan-tab" data-toggle="tab" href="#catatan" role="tab" aria-controls="catatan" aria-selected="true">Catatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="diagnosa-tab" data-toggle="tab" href="#diagnosa" role="tab" aria-controls="diagnosa" aria-selected="false">Diagnosa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="resep-tab" data-toggle="tab" href="#resep" role="tab" aria-controls="resep" aria-selected="false">Resep</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tindakan-tab" data-toggle="tab" href="#tindakan" role="tab" aria-controls="tindakan" aria-selected="false">Tindakan</a>
                        <li class="nav-item">
                            <a class="nav-link" id="tindak_lanjut-tab" data-toggle="tab" href="#tindak_lanjut" role="tab" aria-controls="tindak_lanjut" aria-selected="false">Tindak Lanjut</a>
                        <li class="nav-item">
                            <a class="nav-link" id="riwayat-tab" data-toggle="tab" href="#riwayat" role="tab" aria-controls="riwayat" aria-selected="false">Riwayat Berobat</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="catatan" role="tabpanel" aria-labelledby="catatan-tab">
                            <form>
                                <div class="container-fluid">
                                    <div class="form-group row mt-2">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Riwayat Alergi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="staticEmail" value="<?= $catat['riwayat_alergi'] ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mt-3">
                                                    <label for="exampleInputEmail1">Tinggi Badan</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $catat['tinggi_badan'] ?>">
                                                </div>
                                            </div>
                                            <div class=" col">
                                                <div class="form-group mt-3">
                                                    <label for="exampleInputEmail1">Berat Badan</label>
                                                    <input type="email" class="form-control" value="<?= $catat['berat_badan'] ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group mt-3">
                                                    <label for="exampleInputEmail1">Tekanan Darah</label>
                                                    <input type="email" class="form-control" value="<?= $catat['tensi'] ?>">
                                                </div>
                                            </div>
                                            <div class=" col">
                                                <div class="form-group mt-3">
                                                    <label for="exampleInputEmail1">Buta Warna</label>
                                                    <input type="email" class="form-control" value="<?= $catat['buta_warna'] ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group mt-3">
                                                    <label for="exampleInputEmail1">Catat Badan</label>
                                                    <input type="email" class="form-control" value="<?= $catat['cacat_badan'] ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group mt-3">
                                                    <label for="exampleInputEmail1">Golongan Darah</label>
                                                    <input type="email" class="form-control" value="<?= $catat['golongan_darah'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <label for="exampleInputEmail1">Catatan</label>
                                        <textarea class="form-control" id="catatan" name="catatan" rows="3"><?= $catat['catatan'] ?></textarea>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="diagnosa" role="tabpanel" aria-labelledby="diagnosa-tab">
                        <div class="text-right">
                            <button href="" class="btn btn-info mt-3 mb-3" data-toggle="modal" data-target="#penyakit">Diagnosa</button>
                        </div>
                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>NO</th>
                                    <th>DIAGNOSA</th>
                                    <th>KETERANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                // $diagnosa = $this->db->get('dm_diagnosa')->result_array();
                                // var_dump($diagnosa);
                                // die;
                                foreach ($readdiagnosa as $d) :
                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $d['nama_diagnosa'] ?></td>
                                        <td>
                                            <form action="<?= base_url('Input_tindakan/update_diagnosa') ?>" method="post">
                                                <?php if ($d['keterangan'] == Null) { ?>
                                                    <input type="text" name="id_diagnosa_pasien" value="<?= $d['id_diagnosa_pasien'] ?>">
                                                    <textarea class="form-control" id="catatan" name="keterangan" rows="3"></textarea>
                                                    <button type="submit" class="btn btn-info mt-3"><i class="far fa-edit "></i> Tambahkan Keterangan</button>
                                                <? } else { ?>
                                                    <?= $d['keterangan'] ?>
                                                <?php } ?>
                                            </form>
                                        </td>

                                    </tr>
                            </tbody>

                        <?php $i++;
                                endforeach;
                        ?>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="resep" role="tabpanel" aria-labelledby="resep-tab">
                        <div class="text-right">
                            <a href="" class="btn btn-info mb-3 mt-3 " data-toggle="modal" data-target="#tambahResep">Tambah Resep</a>
                        </div>
                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>SATUAN</th>
                                    <th>KETERANGAN</th>
                                    <th>KETENTUAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($resep as $v) :
                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $v['nama_obat'] ?></td>
                                        <td><?= $v['satuan'] ?></td>
                                        <td><?= $v['kategori'] ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('pasien/update') ?>"><i class="far fa-edit text-success"></i></a>
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
                    <div class="tab-pane fade" id="tindakan" role="tabpanel" aria-labelledby="resep-tab">
                        <div class="text-right">
                            <a href="" class="btn btn-info mb-3 mt-3 " data-toggle="modal" data-target="#tambahtindakan">Tambah Tindakan</a>
                        </div>
                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>NO</th>
                                    <th>NAMA TINDAKAN</th>
                                    <th>HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($raedtindakan as $v) :
                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $v['nama_tindakan'] ?></td>
                                        <td><?= $v['harga_tindakan'] ?></td>
                                        <td class="text-center">
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
                    <div class="tab-pane fade" id="tindak_lanjut" role="tabpanel" aria-labelledby="resep-tab">...</div>
                    <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="resep-tab">HAI</div>
                </div>
            </div>
        </div>
</div>
</div>



<!-- Modal Diagnosa -->
<div class="modal fade" id="penyakit" tabindex="-1" aria-labelledby="diagnosaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="diagnosaLabel">Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('input_tindakan/create_diagnosa') ?>" method="post">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>NO</th>
                                <th>DIAGNOSA</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;

                            foreach ($diagnosa as $d) :
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $d['nama_diagnosa'] ?></td>
                                    <td class="text-center">
                                        <input type="hidden" name="id_diagnosa" value="<?= $d['id_diagnosa'] ?>">
                                        <input type="hidden" name="id_pendaftaran" value="<?= $tindakan['id_kunjungan'] ?>">
                                        <input type="hidden" name="id_dokter" value="<?= $tindakan['id_dokter'] ?>">
                                        <button class="btn btn-info" type="submit"><i class="far fa-edit  " id="catat"></i></button>
                                    </td>
                                </tr>
                        </tbody>
                    <?php $i++;
                            endforeach;
                    ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<?php foreach ($diagnosa as $d) : ?>

    <!-- modal keterangan diagnosa -->
    <div class="modal fade" id="diagnosa" <?= $d['id_diagnosa'] ?> tabindex="-1" aria-labelledby="diagnosaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="diagnosaLabel">Keterangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Input_tindakan/diagnosa') ?>">
                        <input type="hiden" name="id_pendaftaran" value="<?= $tindakan['id_kunjungan'] ?>">
                        <input type="hiden" name="id_dokter" value="<?= $tindakan['id_dokter'] ?>">
                        <input type="hiden" name="nama_diagnosa" value="<?= $d['nama_diagnosa'] ?>">

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal resep -->
<div class="modal fade" id="tambahResep" tabindex="-1" aria-labelledby="diagnosaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="diagnosaLabel">Daftar Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Input_tindakan/create_resep') ?>" method="post">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>NO</th>
                                <th>SKU</th>
                                <th>NAMA</th>
                                <th>KATEGORI</th>
                                <th>SATUAN</th>
                                <th>BENTUK</th>
                                <th>AKSI</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($obat as $v) :
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $v['id_obat'] ?></td>
                                    <td><?= $v['nama_obat'] ?></td>
                                    <td><?= $v['kategori'] ?></td>
                                    <td><?= $v['stock'] ?></td>
                                    <td><?= $v['bentuk_obat'] ?></td>
                                    <td class="text-center">
                                        <input type="hidden" name="kode_obat" value="<?= $v['id_obat'] ?>">
                                        <input type="hidden" name="id_pendaftaran" value="<?= $tindakan['id_kunjungan'] ?>">
                                        <input type="hidden" name="id_dokter" value="<?= $tindakan['id_dokter'] ?>">
                                        <button type="submit" class="btn btn-info"><i class=" far fa-edit "></i></button>
                                    </td>
                                </tr>
                        </tbody>

                    <?php $i++;
                            endforeach;
                    ?>
                    </table>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- Modal tindakan -->
<div class="modal fade" id="tambahtindakan" tabindex="-1" aria-labelledby="diagnosaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="diagnosaLabel">Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Input_tindakan/create_tindakan') ?>" method="post">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>NO</th>
                                <th>NAMA TINDAKAN</th>
                                <th>HARGA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($list_tindakan as $v) :
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $v['nama_tindakan'] ?></td>
                                    <td><?= $v['harga_tindakan'] ?></td>
                                    <td class="text-center">
                                        <input type="hidden" name="id_tindakan" value="<?= $v['id_tindakan'] ?>">
                                        <input type="hidden" name="id_pendaftaran" value="<?= $tindakan['id_kunjungan'] ?>">
                                        <input type="hidden" name="id_dokter" value="<?= $tindakan['id_dokter'] ?>">
                                        <button type="submit" class="btn btn-info"><i class="far fa-edit "></i></button>
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
                </form>
            </div>
        </div>
    </div>
</div>
</div>

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
                <form action="<?= base_url('Input_tindakan/update_pasien') ?>" method="post">
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
                                <th>DOKTER</th>
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
                                    <td><?= $v['tanggal_kunjungan'] ?></td>
                                    <td><?= $v['id_pasien'] ?></td>
                                    <td><?= $v['nama_pasien'] ?></td>
                                    <td><?= $v['layanan'] ?></td>
                                    <td><?= $v['nama_poli'] ?></td>
                                    <td><?= $v['nama_dokter'] ?></td>
                                    <input type="text" hidden name="id_kunjungan" value="<?= $v['id_kunjungan'] ?>">
                                    <input type="text" hidden name="status" value="Diproses Dokter">
                                    <td class="text-center"><button class="btn btn-info"><i class="far fa-edit"></i></button></td>
                                </tr>
                        </tbody>
                    <?php $i++;
                            endforeach;
                    ?>
                    </table>
            </div>
        </div>
        </form>
    </div>
</div>