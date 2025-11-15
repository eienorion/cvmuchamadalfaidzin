<?= $this->include('layout/header') ?>

<?php
$neon_color = '#00ffff'; 
$secondary_neon_color = '#ffff33';
?>

<div class="pendidikan-page-wrapper" style="min-height: 100vh; display: flex; flex-direction: column;">

    <div class="main-content container" style="padding-top: 100px; flex: 1;">
        
        <h1 class="section-title-page mb-4"><i class="fas fa-graduation-cap icon-white"></i> Riwayat Pendidikan</h1>

        <div class="pendidikan-timeline" style="max-width: 800px; margin: 0 auto;">
            <?php if(!empty($pendidikan)): ?>
                <?php foreach($pendidikan as $item): ?>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-card mb-4 p-4 rounded shadow-sm">
                            <h3 class="mb-1"><i class="fas fa-school icon-white-small"></i> <?= esc($item['sekolah']) ?></h3>
                            
                            <?php if(!empty($item['jurusan'])): ?>
                                <p class="jurusan-text"><i class="fas fa-book-reader icon-white-small"></i> Jurusan: <span><?= esc($item['jurusan']) ?></span></p>
                            <?php endif; ?>
                            
                            <p class="tahun-text"><i class="fas fa-calendar-alt icon-white-small"></i> Tahun: 
                                <span><?= esc($item['tahun_mulai']) ?></span> - 
                                <span><?= esc($item['tahun_selesai']) ?: 'Sekarang' ?></span>
                            </p>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-white-50">Belum ada data riwayat pendidikan yang dicatat.</p>
            <?php endif; ?>
        </div>
    </div>

    <?= $this->include('layout/footer') ?>

</div>

<style>
:root {
    --bg-color: #1A1A1A;
    --card-color: #282828;
    --text-color: #eee;
    --neon-primary: <?= $neon_color ?>;
    --neon-secondary: <?= $secondary_neon_color ?>;
}

body {
    background-color: var(--bg-color);
    color: var(--text-color);
}

.section-title-page {
    color: var(--text-color);
    font-weight: 700;
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.1);
    border-bottom: 2px solid var(--neon-primary);
    display: inline-block;
    padding-bottom: 5px;
    margin-bottom: 50px !important;
}

.icon-white {
    color: #fff !important; 
    text-shadow: none !important; 
    margin-right: 10px;
}
.icon-white-small {
    color: #fff !important; 
    font-size: 0.9em;
    margin-right: 8px;
}

.pendidikan-timeline {
    position: relative;
    padding-left: 30px;
}

.pendidikan-timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: 10px;
    width: 3px;
    background-color: #3a3a3a;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); 
    height: 100%;
    z-index: 0;
}

.timeline-item {
    position: relative;
}

.timeline-dot {
    position: absolute;
    left: 3px;
    top: 15px;
    width: 15px;
    height: 15px;
    background: var(--neon-primary); 
    border-radius: 50%;
    border: 3px solid var(--bg-color);
    box-shadow: 0 0 8px var(--neon-primary);
    z-index: 1;
}

.timeline-card {
    background: var(--card-color);
    border: 1px solid #3a3a3a;
    border-left: 4px solid var(--neon-secondary);
    color: var(--text-color);
    transition: all 0.3s;
    margin-left: 20px;
}

.timeline-card:hover {
    border-left-color: var(--neon-primary);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    transform: translateY(-2px);
}

.timeline-card h3 {
    color: #fff;
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.timeline-card p {
    color: var(--text-color);
    margin-bottom: 5px;
}

.timeline-card p span {
    color: #fff;
    font-weight: 500;
}

.jurusan-text {
    color: #aaa !important;
}

@media (max-width: 768px) {
    .pendidikan-timeline {
        padding-left: 20px;
    }
    .timeline-dot {
        left: 0px;
    }
}
</style>