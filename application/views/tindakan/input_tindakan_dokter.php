<div class="content-wrapper mt-5">
    <div class="container-fluid ">
        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Pasien Baru</button>
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
                                <label for="inputPassword" class="col-sm-4 col-form-label">Nama Pasien</label>
                                <div class="col-sm-8">
                                    <input type="password" readonly class="form-control-plaintext" id="inputPassword" value="<?= $tindakan['nama_pasien'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Umur Pasien</label>
                                <div class="col-sm-8">
                                    <input type="password" readonly class="form-control-plaintext" id="inputPassword" value="<?= $tindakan['umur_pasien'] ?>">
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
                            <label for="inputPassword" class="col-sm-4 col-form-label">Nama Dokter</label>
                            <div class="col-sm-8">
                                <input type="password" readonly class="form-control-plaintext" id="inputPassword" value="<?= $tindakan['nama_dokter'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Layanan</label>
                            <div class="col-sm-8">
                                <input type="password" readonly class="form-control-plaintext" id="inputPassword" value="<?= $tindakan['layanan'] ?>">
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
                                        <input type="text" class="form-control" id="staticEmail">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Tinggi Badan</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Berat Badan</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Tekanan Darah</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Buta Warna</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Catat Badan</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Golongan Darah</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="exampleInputEmail1">Catatan</label>
                                    <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
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
                                <th>KODE</th>
                                <th>ICD</th>
                                <th>DIAGNOSA</th>
                                <th>KETERANGAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($view as $v) :
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $v['id'] ?></td>
                                    <td><?= $v['nama'] ?></td>
                                    <td><?= $v['jenis_kelamin'] ?></td>
                                    <td><?= $v['alamat'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('pasien/update') ?>" data-toggle="modal" data-target="#update<?= $v['id'] ?>"><i class="far fa-edit text-success"></i></a> | <a href="" data-toggle="modal" data-target="#detail<?= $v['id'] ?>"><i class="fas fa-notes-medical text-info"></i></a>
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
                                <th>SKU</th>
                                <th>NAMA</th>
                                <th>KETERANGAN</th>
                                <th>KUANTITAS</th>
                                <th>SATUAN</th>
                                <th>ATURAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($view as $v) :
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $v['id'] ?></td>
                                    <td><?= $v['nama'] ?></td>
                                    <td><?= $v['jenis_kelamin'] ?></td>
                                    <td><?= $v['alamat'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('pasien/update') ?>" data-toggle="modal" data-target="#update<?= $v['id'] ?>"><i class="far fa-edit text-success"></i></a> | <a href="" data-toggle="modal" data-target="#detail<?= $v['id'] ?>"><i class="fas fa-notes-medical text-info"></i></a>
                                    </td>
                                </tr>
                        </tbody>

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
                            foreach ($view as $v) :
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $v['id'] ?></td>
                                    <td><?= $v['nama'] ?></td>
                                    <td><?= $v['jenis_kelamin'] ?></td>
                                    <td><?= $v['alamat'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('pasien/update') ?>" data-toggle="modal" data-target="#update<?= $v['id'] ?>"><i class="far fa-edit text-success"></i></a> | <a href="" data-toggle="modal" data-target="#detail<?= $v['id'] ?>"><i class="fas fa-notes-medical text-info"></i></a>
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
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>KODE</th>
                            <th>ICD</th>
                            <th>DIAGNOSA</th>
                            <th>KETERANGAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($view as $v) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['id'] ?></td>
                                <td><?= $v['nama'] ?></td>
                                <td><?= $v['jenis_kelamin'] ?></td>
                                <td><?= $v['alamat'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('pasien/update') ?>" data-toggle="modal" data-target="#update<?= $v['id'] ?>"><i class="far fa-edit text-success"></i></a> | <a href="" data-toggle="modal" data-target="#detail<?= $v['id'] ?>"><i class="fas fa-notes-medical text-info"></i></a>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal resep -->
<div class="modal fade" id="tambahresep" tabindex="-1" aria-labelledby="diagnosaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="diagnosaLabel">Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>SKU</th>
                            <th>NAMA</th>
                            <th>SATUAN</th>
                            <th>KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($view as $v) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['id'] ?></td>
                                <td><?= $v['nama'] ?></td>
                                <td><?= $v['jenis_kelamin'] ?></td>
                                <td><?= $v['alamat'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('pasien/update') ?>" data-toggle="modal" data-target="#update<?= $v['id'] ?>"><i class="far fa-edit text-success"></i></a> | <a href="" data-toggle="modal" data-target="#detail<?= $v['id'] ?>"><i class="fas fa-notes-medical text-info"></i></a>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
                        foreach ($view as $v) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['id'] ?></td>
                                <td><?= $v['nama'] ?></td>
                                <td><?= $v['jenis_kelamin'] ?></td>
                                <td><?= $v['alamat'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('pasien/update') ?>" data-toggle="modal" data-target="#update<?= $v['id'] ?>"><i class="far fa-edit text-success"></i></a> | <a href="" data-toggle="modal" data-target="#detail<?= $v['id'] ?>"><i class="fas fa-notes-medical text-info"></i></a>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>