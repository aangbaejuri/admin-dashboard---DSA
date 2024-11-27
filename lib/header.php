<!-- ADMIN DSA - By Aang -->
<?php
$website = 'http://' . $_SERVER['HTTP_HOST'] . '/';
$halaman = basename($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="aangbaejuri">
    <title>Kampusku</title>
    <link rel="shortcut icon" href="<?php echo $website; ?>assets/img/favicon.png" type="image/x-icon">
    <!-- Boostrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM:ital,wght@0,100..900;1,100..900&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <!-- Icon Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Icon Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS Bootstrap 4 dan Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" />
    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <!-- css Costum -->
    <link rel="stylesheet" href="<?php echo $website; ?>assets/css/style.css">
    <style>
        .navbar.top-fixed {
            z-index: 1030;
        }

        .footer {
            z-index: 1025;
        }

        .modal {
            z-index: 1050;
        }

        /* .logout {
            position: fixed;
            bottom: 0;
        } */
    </style>
</head>
<body class="mx-auto">
    
    <nav class="navbar top-fixed navbar-light shadow">
        <a class="navbar-brand" href="<?php echo $website; ?>">
            <i class="va-middle material-symbols-outlined">school</i>
            <b class="va-middle">Kampusku</b>
        </a>
        <button class="navbar-toggler collapsed" type="button" aria-label="Toggle navigation">
            <span class="material-symbols-outlined">menu</span>
        </button>
        <div class="navbar-collapse shadow" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($halaman == '') ? 'active' : ''; ?>" href="<?php echo $website; ?>">
                        <span class="nav-icon material-symbols-outlined">home</span>
                        <span class="nav-t">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($halaman == 'daftar-mahasiswa') ? 'active' : ''; ?>" href="<?php echo $website; ?>data/daftar-mahasiswa">
                        <span class="nav-icon material-symbols-outlined">groups</span>
                        <span class="nav-t">Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($halaman == 'daftar-pengurus') ? 'active' : ''; ?>" href="<?php echo $website; ?>data/daftar-pengurus">
                        <span class="nav-icon material-symbols-outlined">diversity_3</span>
                        <span class="nav-t">Pengurus</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($halaman == 'mata-kuliah') ? 'active' : ''; ?>" href="<?php echo $website; ?>data/mata-kuliah">
                        <span class="nav-icon material-symbols-outlined">newsstand</span>
                        <span class="nav-t">Mata Kuliah</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($halaman == 'uang-kas') ? 'active' : ''; ?>" href="<?php echo $website; ?>data/uang-kas">
                        <span class="nav-icon material-symbols-outlined">account_balance</span>
                        <span class="nav-t">Uang Kas</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="page-box">
        <div class="card">
            <div class="card-body col-lg-12">
                <input type="hidden" value="aangbaejuri">
            </div>
        </div>
    </div>
    
    <div class="content">
        <div class="container">