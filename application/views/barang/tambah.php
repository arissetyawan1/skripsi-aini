<div id="layoutSidenav_content" class="content-menu">
    <main>
        <div class="container-fluid mt-3 px-4">
            <div class="card">
                <div class="card-header">
                    <h5>Form Tambah Data</h5>
                </div>
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                <?=validation_errors();?>
                </div>
                <?php endif; ?>
                <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="form-group mt-3">
                    <label for="tanggal">Periode</label>
                    <input type="date" name="periode" class="form-control" id="tanggal">
                </div>
                <div class="form-group mt-3">
                    <label for="permintaan">Jumlah Permintaan</label>
                    <input type="number" name="permintaan" class="form-control" id="permintaan">
                </div>
                <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </main>
</div>