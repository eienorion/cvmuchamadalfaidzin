<?= $this->include('layout/header') ?>

<?php
$iconMap = [
    'PHP' => 'fab fa-php',
    'CodeIgniter' => 'fas fa-code-branch',
    'HTML' => 'fab fa-html5',
    'CSS' => 'fab fa-css3-alt',
    'JavaScript' => 'fab fa-js-square',
    'MySQL' => 'fas fa-database',
    'Bootstrap' => 'fab fa-bootstrap',
    'Design' => 'fas fa-palette',
    'Android' => 'fab fa-android',
    'Git' => 'fab fa-git-alt',
    'Figma' => 'fab fa-figma',
    'Laravel' => 'fab fa-laravel',
];

function getLevelColorClass($level) {
    if ($level >= 90) return 'progress-bar-kategori-ahli';
    if ($level >= 70) return 'progress-bar-kategori-mahir';
    if ($level >= 50) return 'progress-bar-kategori-menengah';
    return 'progress-bar-kategori-dasar';
}
?>

<section class="skill-section container pt-5 pb-5 min-vh-100">
    <h2 class="text-center mb-5 mt-5 display-4 text-white"><i class="fas fa-tools"></i> <?= esc($title) ?></h2>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <div class="card p-4 kategori-card">
                <h5 class="text-white mb-3">Kategori Level:</h5>
                <div class="d-flex flex-wrap gap-2">
                    <span class="kategori-badge kategori-badge-ahli">Ahli (100%)</span>
                    <span class="kategori-badge kategori-badge-mahir">Mahir (75%)</span>
                    <span class="kategori-badge kategori-badge-menengah">Menengah (50%)</span>
                    <span class="kategori-badge kategori-badge-dasar">Dasar (25%)</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <?php if (!empty($skills) && is_array($skills)): ?>
                <?php foreach ($skills as $skill): 
                    $skillName = esc($skill['nama_skill']);
                    $iconClass = $iconMap[$skillName] ?? 'fas fa-code'; 
                    $colorClass = getLevelColorClass((int)$skill['level']);
                ?>
                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="mb-0 text-light skill-name-with-icon">
                                <i class="<?= $iconClass ?> me-2"></i> <?= $skillName ?>
                            </h5>
                            <span class="badge skill-badge <?= $colorClass ?>-text"><?= esc($skill['level']) ?>%</span>
                        </div>

                        <div class="progress" role="progressbar" aria-label="<?= $skillName ?> level" aria-valuenow="<?= esc($skill['level']) ?>" aria-valuemin="0" aria-valuemax="100" style="height: 12px;">
                            <div class="progress-bar progress-bar-neon <?= $colorClass ?>" style="width: <?= esc($skill['level']) ?>%"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-muted mt-5">Belum ada data kemampuan (skill) yang dicatat.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->include('layout/footer') ?>

<style>
.skill-section {
    background-color: #1A1A1A;
    color: #eee;
}

.kategori-card {
    background-color: #282828; 
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}

.kategori-badge {
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
    color: #000;
    transition: transform 0.2s ease;
}
.kategori-badge:hover {
    transform: scale(1.05);
}

/* --- Skema Warna Fluorescent --- */
.kategori-badge-ahli, .progress-bar-kategori-ahli {
    background-color: #39ff14; 
    box-shadow: 0 0 10px #39ff14;
    color: #000;
}

.kategori-badge-mahir, .progress-bar-kategori-mahir {
    background-color: #00ffff; 
    box-shadow: 0 0 10px #00ffff;
    color: #000;
}

.kategori-badge-menengah, .progress-bar-kategori-menengah {
    background-color: #ffff33; 
    box-shadow: 0 0 10px #ffff33;
    color: #000;
}

.kategori-badge-dasar, .progress-bar-kategori-dasar {
    background-color: #ff66cc; 
    box-shadow: 0 0 10px #ff66cc;
    color: #000;
}
/* --- Akhir Skema Warna Fluorescent --- */


.progress {
    background-color: #333; 
    border-radius: 6px;
    height: 12px !important;
    overflow: visible; 
}

.progress-bar-neon {
    transition: width 1s ease-in-out;
    border-radius: 6px;
    position: relative;
    overflow: visible;
}

.skill-badge {
    font-weight: 500;
    padding: 0.35em 0.65em;
    border-radius: 5px;
    background-color: transparent !important; 
    border: 1px solid currentColor;
}

.progress-bar-kategori-ahli-text { color: #39ff14; }
.progress-bar-kategori-mahir-text { color: #00ffff; }
.progress-bar-kategori-menengah-text { color: #ffff33; }
.progress-bar-kategori-dasar-text { color: #ff66cc; }


.skill-name-with-icon {
    text-shadow: 0 0 2px rgba(255, 255, 255, 0.2);
}
</style>