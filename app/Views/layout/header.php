<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-p6kV0Xc2kFjG7V3+O1xF3R4s1s1k7N7GhH9/xyz..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarNav" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= site_url('home') ?>">Home</a></li>
                 <li class="nav-item"><a class="nav-link" href="pendidikan">Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link" href="pengalaman">Pengalaman</a></li>
                <li class="nav-item"><a class="nav-link" href="skill">Skill</a></li>
                <li class="nav-item"><a class="nav-link" href="portofolio">Portofolio</a></li>

            </ul>
        </div>
    </div>
</nav>
