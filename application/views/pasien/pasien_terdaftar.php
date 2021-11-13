<div class="content-wrapper mt-5">
    <div class="container ">

        <form action="<?= base_url('Pasien_terdaftar') ?>" method="post">
            <div class="form-group row">

            </div>
            <div class="form-group row ml-2">
                <div class="col-sm-3">
                    <input type="text" name="keyword" class="form-control" placeholder="Id Pasien">
                </div>
                <button class="btn btn-info" type="submit">Cari</button>
            </div>
        </form>

        <div class="card border-info ml-3 mt-3">
            <!-- <div class="card-header "></div> -->
            <div class="card-body ">
                <form action="<?= base_url('Pasien_terdaftar/create') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Id Pasien</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pasien['id'] ?>" name="id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pasien['nama'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pasien['jenis_kelamin'] ?>" name="jenis_kelamin">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Poli Klinik</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_polinik">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Dokter</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="exampleFormControlSelect1" name="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Pelayanan</label>
                                <div class="col-sm-8">
                                    <span class="form-check">
                                        <!-- <div class="form-check"> -->
                                        <input class="form-check-input" type="radio" name="layanan" id="exampleRadios1" value="Umum">
                                        <label class="form-check-label" for="exampleRadios1">
                                            UMUM
                                        </label>
                                        <!-- </div> -->
                                    </span>
                                    <span class="form-check">
                                        <!-- <div class="form-check"> -->
                                        <input class="form-check-input" type="radio" name="layanan" id="exampleRadios1" value="BPJS">
                                        <label class="form-check-label" for="exampleRadios1">
                                            BPJS
                                        </label>
                                        <!-- </div> -->
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-info" data-toggle="modal" data-target="#antrian">Cetak Nomor Antrian </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="antrian" tabindex="-1" aria-labelledby="antrianLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="antrianLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>