<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container py-5">
    <div class="row">
        <!-- Kolom Kiri: Info Kontak -->
        <div class="col-md-6 mb-4">
            <h2 class="mb-3">📬 Hubungi Kami</h2>
            <p class="text-muted">Ada pertanyaan, masukan, atau ingin bekerja sama? Kami siap mendengar dari Anda!</p>

            <div class="mb-3">
                <h5>📧 Email</h5>
                <p class="text-primary fw-semibold"><?= $kontak['email']; ?></p>
            </div>

            <div class="mb-3">
                <h5>📱 WhatsApp</h5>
                <p class="text-success fw-semibold"><?= $kontak['whatsapp']; ?></p>
            </div>

            <div class="mb-3">
                <h5>📸 Instagram</h5>
                <p class="text-danger fw-semibold"><?= $kontak['instagram']; ?></p>
            </div>

            <p class="mt-4 fst-italic">Kami terbuka terhadap kolaborasi, ide kreatif, atau sekadar berbagi rekomendasi buku favoritmu. 💡📚</p>
        </div>

        <!-- Kolom Kanan: Form -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-4">📝 Kirim Pesan</h4>
                    <form action="#" method="post">
                        <div class="form-group mb-3">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh: Siti Aminah">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pesan">Pesan Anda</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Tulis pesan, saran, atau pertanyaan Anda di sini..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">📨 Kirim Pesan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
