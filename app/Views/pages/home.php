<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container text-center py-5">
    <h1 class="display-4 fw-bold">📖 Selamat Datang di Halaman Senja</h1>
    <p class="lead text-muted mt-3">
        Temukan ketenangan dalam setiap halaman. Kami hadir untuk kamu yang mencintai kata, cerita, dan aroma buku di sore hari.
    </p>
    <a href="/books" class="btn btn-warning mt-4 px-4">Lihat Koleksi Buku</a>
</div>

<?= $this->endSection(); ?>
