<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Buku</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $books['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $books['judul']; ?></h5>
                            <p class="card-text"><b>Penulis :</b><?= $books['penulis']; ?></p>
                            <p class="card-text"><small class="text-body-secondary"><b>Penerbit :</b> <?= $books['penerbit']; ?></small></p>

                            <a href="/books/edit/<?= $books['slug']; ?>" class="btn btn-warning">Ubah</a>

                            <form action="/books/<?= $books['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Hapus</button>
                            </form>
                            <br><br>
                            <a href="/books">Kembali ke Daftar Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>