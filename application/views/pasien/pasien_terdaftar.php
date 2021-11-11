<div class="content-wrapper mt-5">

    <div class="card border-Info mb-3 ml-3 mr-3">
        <div class="card-header">
            <form action="<?= base_url('Pasien/cari') ?>">
                <div class="row  ml-3  mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Masukan Id Pasien">
                    </div>
                    <div class="col">
                        <button class="btn btn-info">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body text-Info">
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </form>
</div>