<div class="content-wrapper mt-5">
    <div class="container-fluid ">
        <!-- <div class="message" data-message="<?= $this->session->flashdata('message') ?>"></div> -->

        <!-- <button class="btn btn-info ml-3 mt-3" data-toggle="modal" data-target="#create">Tambah Pasien Baru</button>
        <?= $this->session->flashdata('message') ?> -->
        <div class="card border-primary">
            <div class="card border-info ml-3 mt-3">
                <div class="card-header bg-info">TAMBAH DATA PASIEN</div>
                <div class="card-body ">
                    <form action="<?= base_url('Pasien_baru/create') ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">ID Pendaftaran</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="id_pasien" value="<?= $kode; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="nama_pasien" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="tempat_lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="staticEmail" name="tgl_lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-Laki">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Laki-Laki
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">No Hp</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="no_hp" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Kontak Lain</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="kontak_lain" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="pekerjaan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="staticEmail" name="alamat" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>