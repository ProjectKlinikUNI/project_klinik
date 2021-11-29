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
                                <td>@mdo</td>
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