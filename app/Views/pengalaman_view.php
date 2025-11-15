<?= $this->include('layout/header') ?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<div class="container timeline-container min-vh-100">
    <h2 class="text-center mb-5 mt-5 display-4 text-white"><i class="fas fa-history"></i> Riwayat Pengalaman</h2>

    <?php if (!empty($pengalaman) && is_array($pengalaman)): ?>
        <div class="timeline position-relative">
            <?php foreach ($pengalaman as $item): ?>
                <div class="timeline-item mb-5 position-relative">
                    
                    <span class="timeline-dot position-absolute top-0 start-0 translate-middle rounded-circle">
                        <i class="fas fa-briefcase dot-icon"></i>
                    </span>

                    <div class="card experience-card ms-4 shadow">
                        <div class="card-body p-4">
                            <div class="date-badge mb-3">
                                <i class="fas fa-calendar-alt"></i> <?= esc($item['tahun_mulai']) ?> - <?= (empty($item['tahun_selesai']) ? 'Sekarang' : esc($item['tahun_selesai'])) ?>
                            </div>

                            <h5 class="card-title fw-bold position-relative">
                                <?= esc($item['posisi']) ?>
                            </h5>
                            <h6 class="card-subtitle mb-3 text-secondary-neon-sub"><?= esc($item['perusahaan']) ?></h6>
                            
                            <p class="card-text description-text mt-3">
                                <?= nl2br(esc($item['deskripsi'])) ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-muted text-center mt-5">Belum ada pengalaman yang dicatat.</p>
    <?php endif; ?>
</div>

<?= $this->include('layout/footer') ?>

<style>
:root {
    --bg-color: #1A1A1A;
    --card-color: #282828;
    --text-color: #eee;
    --primary-neon: #00ffff;
    --secondary-neon: #ff66cc;
    --dot-color: #39ff14;
}

.timeline-container {
    font-family: 'Poppins', sans-serif;
    background-color: var(--bg-color);
    color: var(--text-color);
    padding-top: 80px;
    padding-bottom: 80px;
}


.timeline {
    border-left: 3px solid #3a3a3a; 
    box-shadow: 0 0 5px rgba(0, 255, 255, 0.1); 
    position: relative;
    padding-left: 25px !important;
}

.timeline-dot {
    width: 25px; 
    height: 25px;
    left: -12.5px;
    top: 5px; 
    background-color: var(--bg-color);
    border: 3px solid var(--dot-color); 
    box-shadow: 0 0 5px rgba(57, 255, 20, 0.6); 
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}

.timeline-dot:hover {
    transform: scale(1.1);
}

.dot-icon {
    color: var(--dot-color);
    font-size: 0.7rem; 
}


.experience-card {
    background-color: var(--card-color); 
    border-radius: 10px;
    border: 1px solid #3a3a3a;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease;
    border-left: 4px solid var(--secondary-neon); 
}

.experience-card:hover {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
    border-color: var(--primary-neon); 
    border-left: 4px solid var(--primary-neon); 
}

.card-title {
    color: #fff; 
}

.card-subtitle.text-secondary-neon-sub {
    color: var(--primary-neon) !important;
    font-weight: 500;
}

.date-badge {
    display: inline-block;
    padding: 0.3rem 0.8rem;
    background-color: #333;
    color: var(--dot-color);
    border-radius: 5px;
    font-size: 0.85rem;
    font-weight: 500;
    border: 1px solid #4a4a4a; 
    box-shadow: 0 0 3px rgba(57, 255, 20, 0.3); 
}

.description-text {
    color: #ccc;
    font-size: 0.95rem;
}


@media (max-width: 768px) {
    .timeline {
        padding-left: 20px !important;
    }
    .timeline-dot {
        left: -10px;
    }
    .experience-card {
        margin-left: 10px !important;
    }
}
</style>