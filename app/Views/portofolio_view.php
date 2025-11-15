<?= $this->include('layout/header') ?>

<section class="portfolio-section container pt-5 pb-5 min-vh-100">
    <h2 class="text-center mb-5 mt-5 display-4 text-white"><i class="fas fa-project-diagram"></i> Portofolio Proyek</h2>

    <div class="row justify-content-center">
        <?php if (!empty($portofolio) && is_array($portofolio)): ?>
            <?php foreach ($portofolio as $proyek): ?>
                
                <div class="col-lg-6 mb-4">
                    <div class="card portfolio-card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-light fw-bold mb-3"><?= esc($proyek['judul']) ?></h5>
                            
                            <p class="card-text description-text"><?= nl2br(esc($proyek['deskripsi'])) ?></p>
                            
                            <div class="project-details mt-4">
                                <p class="detail-item mb-1"><i class="fas fa-cogs neon-icon"></i> Teknologi: 
                                    <span class="tech-tag"><?= esc($proyek['teknologi']) ?: 'Tidak disebutkan' ?></span>
                                </p>
                                <p class="detail-item mb-1"><i class="fas fa-calendar-alt neon-icon"></i> Selesai: 
                                    <span class="date-text"><?= date('d F Y', strtotime(esc($proyek['waktu']))) ?></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center text-muted mt-5">Belum ada proyek portofolio yang dicatat.</p>
        <?php endif; ?>
    </div>
</section>

<?= $this->include('layout/footer') ?>

<style>
.portfolio-section {
    background-color: #1A1A1A;
    color: #eee;
}

.portfolio-card {
    background-color: #282828; 
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
    border: 1px solid #3a3a3a;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6);
    border-color: #00ffff;
}

.card-title {
    color: #00ffff !important;
    text-shadow: 0 0 5px rgba(0, 255, 255, 0.5);
}

.description-text {
    color: #ccc;
    font-size: 0.95rem;
}

.detail-item {
    font-size: 0.85rem;
    color: #aaa;
}

.tech-tag {
    font-weight: bold;
    color: #39ff14;
}

.date-text {
    color: #ffff33;
}

.neon-icon {
    margin-right: 5px;
    color: #ff66cc;
}

.card-footer {
    background-color: #333333;
    border-top: 1px solid #444;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
}
</style>