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

$topSkills = array_slice($skills ?? [], 0, 4);
?>

<section id="home" class="hero">
    <h2 class="mb-3">Hi There!</h2>
    <h1>My name is, <?= esc($biodata['nama']) ?></h1>
    <h3 class="mt-3"><?= esc($biodata['tagline']) ?></h3>
    <h4 class="mt-4 fs-6">
    <?= nl2br(esc($biodata['deskripsi'], 'html')) ?>
</h4>

    <div class="mt-3 contact-icons">
        <a href="https://wa.me/<?= esc($biodata['telepon']) ?>" target="_blank" class="whatsapp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <a href="mailto:<?= esc($biodata['email']) ?>" class="email">
            <i class="fas fa-envelope"></i>
        </a>
    </div>
</section>

<div class="info-wrapper">
    <section class="biodata-section">
        <section class="biodata-section" style="max-width: 700px; margin: 40px auto;">
            <h3 class="section-title"><i class="fas fa-user neon-icon-dark"></i> Biodata</h3>
            <div class="biodata-card mb-3 p-3 rounded">
                <p><strong>Nama:</strong> <span class="text-white"><?= esc($biodata['nama']) ?></span></p>
                <p><strong>Email:</strong> <span class="text-white"><?= esc($biodata['email']) ?></span></p>
                <p><strong>Telepon:</strong> <span class="text-white"><?= esc($biodata['telepon']) ?></span></p>
                <p><strong>Golongan Darah:</strong> <span class="text-white"><?= esc($biodata['gol_darah']) ?></span></p>
                <p><strong>Alamat:</strong> <span class="text-white"><?= esc($biodata['alamat']) ?></span></p>
                <p><strong>Hobi:</strong> <span class="text-white"><?= esc($biodata['hobi']) ?></span></p>
            </div>
        </section>
    </section>

    <section class="pendidikan-section" style="max-width: 700px; margin: 80px auto 40px auto;">
        <h3 class="mb-4 section-title"><i class="fas fa-graduation-cap neon-icon-dark"></i> Riwayat Pendidikan</h3>

        <?php if (!empty($pendidikan) && is_array($pendidikan)): ?>
            <?php foreach ($pendidikan as $item): ?>
                <div class="pendidikan-card mb-3 p-3 rounded shadow-sm">
                    <h5 class="mb-1"><i class="fas fa-school neon-text-medium"></i> <span class="text-white"><?= esc($item['sekolah'] ?? '-') ?></span></h5>
                    
                    <?php if (!empty($item['jurusan'])): ?>
                        <p class="mb-1"><i class="fas fa-book-reader neon-text-light"></i> Jurusan: <span class="text-white"><?= esc($item['jurusan']) ?></span></p>
                    <?php endif; ?>

                    <<p class="mb-0">
    <i class="fas fa-calendar-alt neon-text-secondary"></i> Tahun: 
    <span class="text-white">
        <?= esc($item['tahun_mulai'] ?? '-') ?>
    </span>
    - 
    <span class="text-white">
        <?= (empty($item['tahun_selesai']) ? 'Sekarang' : esc($item['tahun_selesai'])) ?>
    </span>
</p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-muted">Belum ada data pendidikan.</p>
        <?php endif; ?>
    </section>
</div>

<div class="container my-5 skill-teaser">
<h3 class="mb-4 section-title text-start" 
    style="border-bottom-width: 2px; 
           border-bottom-style: solid; 
           width: fit-content;
           margin-left: 7rem;"> 
    <i class="fas fa-bolt neon-icon-dark"></i>Kategori Skill
</h3>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="row teaser-card p-4 g-3">
                <?php if (!empty($topSkills)): ?>
                    <?php foreach ($topSkills as $skill): 
                        $skillName = esc($skill['nama_skill']);
                        $iconClass = $iconMap[$skillName] ?? 'fas fa-code'; 
                        $colorClass = getLevelColorClass((int)$skill['level']); 
                    ?>
                        <div class="col-6 col-md-3">
                            <div class="card p-3 h-100 skill-card-compact <?= $colorClass ?>-border">
                                <i class="<?= $iconClass ?> text-center mb-2" style="font-size: 2rem; color: var(--main-color-<?= $colorClass ?>);"></i>
                                <div class="text-center">
                                    <h6 class="mb-1 fw-bold text-white"><?= $skillName ?></h6>
                                    <span class="badge skill-badge-compact <?= $colorClass ?>-text"><?= esc($skill['level']) ?>%</span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center text-muted w-100 mb-0">Tidak ada data skill yang tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h2 class="text-center mb-4 section-title"><i class="fas fa-briefcase neon-icon-dark"></i> Riwayat Pengalaman</h2>
            
            <?php if (!empty($pengalaman) && is_array($pengalaman)): ?>
                
                <div class="accordion accordion-flush custom-accordion" id="accordionPengalaman">
                    <?php 
                    $i = 0;
                    foreach ($pengalaman as $item): 
                        $i++;
                        $collapseId = "collapse-" . $i;
                        $headerId = "header-" . $i; 
                    ?>
                        
                        <div class="accordion-item mb-3 experience-item">
                            <h2 class="accordion-header" id="<?= $headerId ?>">
                                <button class="accordion-button collapsed accordion-custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>" aria-expanded="false" aria-controls="<?= $collapseId ?>">
                                    <span class="fw-bold"><?= esc($item['posisi']) ?></span> &mdash; <span class="text-secondary-neon"><?= esc($item['perusahaan']) ?></span>
                                </button>
                            </h2>

                            <div id="<?= $collapseId ?>" class="accordion-collapse collapse" aria-labelledby="<?= $headerId ?>" data-bs-parent="#accordionPengalaman">
                                <div class="accordion-body experience-body">
                                    <p class="mb-2 experience-date-text"><i class="fas fa-calendar-alt"></i> Tahun: <?= esc($item['tahun_mulai']) ?> - <?= esc($item['tahun_selesai']) ?></p>
                                    <p class="card-text mt-3 description-text"><?= nl2br(esc($item['deskripsi'], 'html')) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php else: ?>
                <p class="text-muted text-center">Belum ada pengalaman yang dicatat.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->include('layout/footer') ?>

<style>

</style>