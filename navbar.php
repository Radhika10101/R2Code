<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EduPress - Online Learning Platform">
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons-webfont@2.47.0/tabler-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600;700&family=Jost:wght@500&display=swap">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-container" role="banner">
        <div class="header-content">
            <a href="Home.php" class="brand-logo" aria-label="R2Code Home">
            <img src="image/logo utama.png" alt="Logo" width= "60" height="60"   />
                <span>R2Code</span>
            </a>

            <nav class="main-nav" role="navigation" aria-label="Main navigation">
                <a href="Home.php" class="nav-item">Beranda</a>
                <a href="Kursus.php" class="nav-item">Kursus</a>
                <a href="Artikel.php" class="nav-item">Artikel</a>
                <a href="#" class="nav-item">Tentang Kami</a>
                
                
            </nav>

            <div class="header-actions">
    <a href="LoginRegister.php" class="auth-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
        </svg>
        <span>Login / Register</span>
    </a>
</div>


            <button class="mobile-menu-button" 
                    aria-label="Toggle mobile menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu">
                <i class="ti ti-menu-2" aria-hidden="true"></i>
            </button>
        </div>
    </header>