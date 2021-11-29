<div class="content-wrapper mt-5">
    <div class="container-fluid ">
        <div class="row pt-3">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white text-center mb-4">
                    <div class="card-body">Belum Diproses</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Sedang Diproses</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">sudah diprosess</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Pendafaran</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Dokter</th>
                            <th scope="col">Poli Klinik</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $i = 1;

                            foreach ($view as $v) :
                            ?>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $v['id_kunjungan'] ?></td>
                                <td><?= $v['nama_pasien'] ?></td>
                                </td>
                                <td><?= $v['nama_dokter'] ?></td>
                                <td><?= $v['nama_poli'] ?></td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#exampleModal" <?= $v['id_kunjungan'] ?>><i class="fas fa-notes-medical"></i></a>
                                </td>
                        </tr>

                    <?php $i++;
                            endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button> -->
<?php
foreach ($view as $v) :
?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" <?= $v['id_kunjungan'] ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Resep</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title" style="background:rgb(33, 150, 243)">Detail Pasien</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">No Pendaftaran</label>
                                            <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputPassword" class="col-sm-4 col-form-label">Nama Pendaftaran</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control-plaintext" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control-plaintext" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputPassword" class="col-sm-4 col-form-label">Umur</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control-plaintext" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Detail Obat</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>