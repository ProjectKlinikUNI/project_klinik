<div class="content-wrapper mt-5">
    <div class="container ">
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
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Nama Pasien</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Umur Pasien</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">Poli Klinik</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Nama Dokter</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Layanan</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- pills tab -->
                <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
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
                                <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-1 col-form-label">Email</label>
                                    <div class="col-sm-11">
                                        <input type="text" readonly class="form-control" id="staticEmail" value="email@example.com">
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
                                </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="diagnosa" role="tabpanel" aria-labelledby="diagnosa-tab">
                    <div class="text-right">
                        <a href="" class="btn btn-info mb-4 ">Diagnosa</a>
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
                <div class="tab-pane fade" id="resep" role="tabpanel" aria-labelledby="resep-tab">
                    <div class="text-right">
                        <a href="" class="btn btn-info mb-3 ">Tambah Resep</a>
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
                <div class="tab-pane fade" id="tindakan" role="tabpanel" aria-labelledby="resep-tab">...</div>
                <div class="tab-pane fade" id="tindak_lanjut" role="tabpanel" aria-labelledby="resep-tab">...</div>
                <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="resep-tab">HAI</div>
            </div>
        </div>
    </div>
</div>
</div>