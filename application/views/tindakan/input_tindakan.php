<div class="content-wrapper mt-5">

    <div class="container-fluid ">
        <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Daftar Pasien Baru</button>

        <div class="container ">

            <div class="card border-info ml-3 mt-3">
                <!-- <div class="card-header "></div> -->
                <div class="card-body ">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="align-middle">
                                <th>NO</th>
                                <th>NO ANTRIAN</th>
                                <th>TANGGAL PENDAFTARAN</th>
                                <th>ID PASIEN</th>
                                <th>NAMA PASIEN</th>
                                <th>JENIS POLI</th>
                                <th>JENIS LAYANAN</th>
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
                                    <td><?= $v['nama_poli'] ?></td>
                                    <td><?= $v['layanan'] ?></td>
                                    <td><?= $v['nama_dokter'] ?></td>
                                    <td class="text-center"><a href="<?= base_url('Input_tindakan/update/') . $v['id_kunjungan'] ?>"><i class="far fa-edit"></i></a></td>
                                </tr>
                        </tbody>

                    <?php $i++;
                            endforeach;
                    ?>

                    </table>
                </div>
            </div>
        </div>
    </div>