<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="R2Code - Online Learning Platform">
    <title>R2Code Home</title>
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons-webfont@2.47.0/tabler-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@600&family=Jost:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include('navbar.php');
?>
    <main class="hero-banner" role="main">
  <section class="banner-container" aria-labelledby="banner-heading">
    <img
      loading="lazy"
      src="image/background.png"
      class="banner-image"
      alt="Students learning online"
      width="1920"
      height="700"
    />
    <div class="content-wrapper">
      <h1 id="banner-heading" class="banner-heading">
      Bangun Keterampilan 
        <br />
        Dengan Kursus Online
      </h1>
      <div class="content-text">
        <p class="description">
        Belajar apa pun yang kamu suka, gratis! Dari coding hingga content writing, 
        dari fotografi hingga finance—kelas online kami siap membantumu berkembang!
        </p>

      </div>
    </div>
  </section>
</main>

<!-- Kategori Teratas -->
<section class="categories-container" role="region" aria-labelledby="categories-heading">
  <div class="header-wrapper">
    <div class="header-content">
      <h2 id="categories-heading" class="section-title">Kategori Teratas</h2>
      <p class="section-subtitle">Jelajahi Kategori Populer Kami</p>
    </div>
    <button class="categories-btn" type="button" aria-label="View all categories" onclick="window.location.href='Kursus.php'">Semua Kategori</button>
  </div>
  <div class="categories-grid" role="list">
  <article class="category-card" role="listitem" tabindex="0">
      <img src="image/art.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title">Seni & Desain</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>

    <article class="category-card" role="listitem" tabindex="0">
      <img src="image/development.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title">Pengembangan</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>

    <article class="category-card" role="listitem" tabindex="0">
      <img src="image/communication.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title">Komunikasi</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>

    <article class="category-card" role="listitem" tabindex="0">
      <img src="image/videography.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title">Videografi</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>

    <article class="category-card" role="listitem" tabindex="0">
      <img src="image/photography.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title">Fotografi</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>

    <article class="category-card" role="listitem" tabindex="0">
      <img src="image/marketing.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title ">Pemasaran</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>

    <article class="category-card" role="listitem" tabindex="0">
      <img src="image/writing.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title">Penulisan Konten</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>

    <article class="category-card" role="listitem" tabindex="0">
      <img src="image/finance.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title">Keuangan</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>

    <article class="category-card" role="listitem" tabindex="0">
      <img src="image/science.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title ">Sains</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>

    <article class="category-card" role="listitem" tabindex="0">
      <img src="image/network.svg" alt="" class="category-icon" aria-hidden="true" />
      <div class="category-content">
        <h3 class="category-title">Jaringan</h3>
        <p class="category-count">38 Kursus</p>
      </div>
    </article>
  </div>
</section>

    <!-- Kursus Unggulan -->
    <section class="featured-courses" aria-label="Featured Courses">
  <div class="header-container">
    <div class="header-content">
      <h2 class="section-title1">Kursus Unggulan</h2>
      <p class="section-subtitle1">Jelajahi Kursus Populer Kami</p>
    </div>
    <button class="categories-btn" type="button" aria-label="View all categories" onclick="window.location.href='Kursus.php'">Semua Kategori</button>
  </div>

  <div class="courses-grid" role="list">
    <article class="course-card" role="listitem">
      <div class="course-image-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8d80a60bd7a7f623d19b02e59fba635a3c3e38c1b11d3c136795239926e4dcf6?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="Photography course: Create an LMS Website with R2Code" class="course-image">
        <span class="course-category" role="text">PHP</span>
      </div>
      <div class="course-content">
        <div class="course-info">
          <p class="course-author">by <span class="author-name">R2Code</span></p>
          <h3 class="course-title">Ebook Pengembangan</h3>
        </div>
        <div class="course-meta">
          <div class="meta-item">
          <span class="meta-item">
            <i class="ti ti-users"></i>
          <span>20 Siswa</span>
          </span>
          </div>
        </div>
        <div class="divider" role="separator"></div>
        <div class="course-footer">
          <div class="price-container" role="text">
            <span class="original-price">350,000</span>
            <span class="discounted-price">Gratis</span>
          </div>
          <button class="view-more-btn" aria-label="View more details about Create an LMS Website with LearnPress" onclick="window.location.href='RingkasanPengembangan.php'">Lihat Selengkapnya</button>
          </div>
      </div>
    </article>

    <article class="course-card " role="listitem">
      <div class="course-image-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d9ab0ead1b1f2e20221678902a19f46f0d39923421954793c69126ff31b1ad41?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="Photography course: Design a website with ThimPress" class="course-image">
        <span class="course-category" role="text">Desain</span>
      </div>
      <div class="course-content">
        <div class="course-info">
        <p class="course-author">by <span class="author-name">R2Code</span></p>
        <h3 class="course-title">Ebook Desain</h3>
        </div>
        <div class="course-meta">
          <div class="meta-item">
            <i class="ti ti-users"></i>
          <span>20 Siswa</span>
          </span>
          </div>
        </div>
        <div class="divider" role="separator"></div>
        <div class="course-footer">
          <div class="price-container" role="text">
            <span class="original-price">1,525,000</span>
            <span class="discounted-price">Gratis</span>
          </div>
          <button class="view-more-btn" aria-label="View more details about Create an LMS Website with LearnPress" onclick="window.location.href='DetailPengembangan.php'">Lihat Selengkapnya</button>
          </div>
      </div>
    </article>

    <article class="course-card" role="listitem">
      <div class="course-image-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/813f63e04690f0b6d07dc8d80da37de82bc8297cd23659077fe6353bb251cf9f?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="Photography course: Create an LMS Website with LearnPress" class="course-image">
        <span class="course-category" role="text">Fotografi</span>
      </div>
      <div class="course-content">
        <div class="course-info">
        <p class="course-author">by <span class="author-name">R2Code</span></p>
        <h3 class="course-title">Ebook Fotografi</h3>
        </div>
        <div class="course-meta">
          <div class="meta-item">
            <i class="ti ti-users"></i>
          <span>20 Siswa</span>
          </span>
          </div>
        </div>
        <div class="divider" role="separator"></div>
        <div class="course-footer">
          <div class="price-container" role="text">
            <span class="original-price">450,000</span>
            <span class="discounted-price">Gratis</span>
          </div>
          <button class="view-more-btn" aria-label="View more details about Create an LMS Website with LearnPress" onclick="window.location.href='DetailPengembangan.php'">Lihat Selengkapnya</button>
        </div>
      </div>
    </article>

    <article class="course-card" role="listitem">
      <div class="course-image-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/5ac2f0fc69a608d73148ca7f29702705f47af9afd582f5ce42d02d060e145cc7?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="Photography course: Create an LMS Website with LearnPress" class="course-image">
        <span class="course-category" role="text">Videografi</span>
      </div>
      <div class="course-content">
        <div class="course-info">
        <p class="course-author">by <span class="author-name">R2Code</span></p>
        <h3 class="course-title">Ebook Videografi</h3>
        </div>
        <div class="course-meta">
          <div class="meta-item">
            <i class="ti ti-users"></i>
          <span>20 Siswa</span>
          </span>
          </div>
        </div>
        <div class="divider" role="separator"></div>
        <div class="course-footer">
          <div class="price-container" role="text">
            <span class="original-price">250,000</span>
            <span class="discounted-price">Gratis</span>
          </div>
            <button class="view-more-btn" aria-label="View more details about Create an LMS Website with LearnPress" onclick="window.location.href='DetailPengembangan.php'">Lihat Selengkapnya</button>
        </div>
      </div>
    </article>

    <article class="course-card" role="listitem">
      <div class="course-image-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/446c57cde334eb382e3a6e30f3350d6e344948d2d77508bd5b3c6a2115efc35f?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="Photography course: Create an LMS Website with LearnPress" class="course-image">
        <span class="course-category" role="text">Jaringan</span>
      </div>
      <div class="course-content">
        <div class="course-info">
        <p class="course-author">by <span class="author-name">R2Code</span></p>
        <h3 class="course-title">Ebook Jaringan</h3>
        </div>
        <div class="course-meta">
          <div class="meta-item">
            <i class="ti ti-users"></i>
          <span>20 Siswa</span>
          </div>
        </div>
        <div class="divider" role="separator"></div>
        <div class="course-footer">
          <div class="price-container" role="text">
            <span class="original-price">Rp.50,000</span>
            <span class="discounted-price">Gratis</span>
          </div>
          <button class="view-more-btn" aria-label="View more details about Create an LMS Website with LearnPress" onclick="window.location.href='DetailPengembangan.php'">Lihat Selengkapnya</button>
        </div>
      </div>
    </article>

    <article class="course-card" role="listitem">
      <div class="course-image-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/983d15daae44d6fc860bcb31c3dbc77d033c68e50f4bda60a61d9857b5815181?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="Photography course: Create an LMS Website with LearnPress" class="course-image">
        <span class="course-category" role="text">Komunikasi</span>
      </div>
      <div class="course-content">
        <div class="course-info">
        <p class="course-author">by <span class="author-name">R2Code</span></p>
        <h3 class="course-title">Ebook Komunikasi</h3>
        </div>
        <div class="course-meta">
          <div class="meta-item">
            <i class="ti ti-users"></i>
          <span>20 Siswa</span>
          </div>
        </div>
        <div class="divider" role="separator"></div>
        <div class="course-footer">
          <div class="price-container" role="text">
            <span class="original-price">731,000</span>
            <span class="discounted-price">Gratis</span>
          </div>
          <button class="view-more-btn" aria-label="View more details about Create an LMS Website with LearnPress" onclick="window.location.href='DetailPengembangan.php'">Lihat Selengkapnya</button>
        </div>
      </div>
    </article>
  </div>
</section>

    <!--cokocoe banner iklan R2Code-->
    <main class="main-wrapper1" role="main">
        <section class="custom1-banner1" aria-labelledby="hero-title1">
            <img src="image/banner2.svg" alt="LearnPress LMS platform showcase" class="banner-image1" />
            <div class="banner-content1">
                <div class="header-text1">
                    <p class="subtitle1" id="hero-subtitle1">DAPATKAN LEBIH BANYAK KEKUATAN DARI</p>
                    <h1 class="title1" id="hero-title1">Belajar Bersama R2Code</h1>
                </div>
                <div class="content-wrapper1">
                    <p class="description1">Tingkatkan Kekuatan Codinganmu Bersama R2Code.</p>  
                    <button class="cta-button1" aria-label="Explore our courses">Jelajahi Kursus</button>
                </div>    
            </div>
        </section>

        <section class="stats-grid1" aria-label="Achievement Statistics">
            <div class="stats-box1" role="region" aria-label="Student Statistics">
                <span class="stat-number1">1+</span>
                <span class="stat-label1">Siswa Aktif</span>
            </div>
            <div class="stats-box1" role="region" aria-label="Course Statistics">
                <span class="stat-number1">20</span>
                <span class="stat-label1">Jumlah Kursus</span>
            </div>
            <div class="stats-box1" role="region" aria-label="Instructor Statistics">
                <span class="stat-number1">2</span>
                <span class="stat-label1">Pengajar</span>
            </div>
            <div class="stats-box1" role="region" aria-label="Satisfaction Statistics">
                <span class="stat-number1">80%</span>
                <span class="stat-label1">Tingkat Kepuasan</span>
            </div>
        </section>

        <section class="features-section1" aria-labelledby="features-title1">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c092dd7f87ad491c9a445ab274d0743e7ed5959ccdad5c4f25d5cd1353787c41?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="Students learning with LearnPress LMS" class="feature-image1" />
            <div class="feature-content1">
                <h2 class="feature-title1" id="features-title1">Tingkatkan keterampilan Anda<br />Di R2Code</h2>
                <div class="feature-description1">
                    <div class="feature-text1">
                        <p>Belajar apa pun yang kamu suka, gratis! Dari coding hingga content writing, dari fotografi hingga finance—kelas online kami siap membantumu berkembang!.</p>
                        <ul class="feature-list1" role="list">
                            <li class="stats-counter1">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c4770d8edc5e78c798f79fbfcbbfac8a4e8191b84816e084cdcb749c807fbc21?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="" role="presentation" class="feature-icon1" />
                                <span class="feature-label1">Sertifikasi</span>
                            </li>
                            <li class="stats-counter1">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/15ee90061e2769a10da2ca89ff3d62d6c1e12ec40969899c42ca838516fe911a?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="" role="presentation" class="feature-icon1" />
                                <span class="feature-label1">Instruksi Ahli</span>
                            </li>
                            <li class="stats-counter1">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a32b4f26592f6595abb2705af81dc5da6a70e238523dae2cb5e8db91f940843b?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="" role="presentation" class="feature-icon1" />
                                <span class="feature-label1">Akses Seumur Hidup</span>
                            </li>
                            <li class="stats-counter1">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/95cbec36e69f03cae7203ed28d2f70b808e7e6697e40229a0ab913787e450e59?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="" role="presentation" class="feature-icon1" />
                                <span class="feature-label1">Pembelajaran Online</span>
                            </li>
                        </ul>
                    </div>
                    <button class="cta-button1" aria-label="Explore our courses">Jelajahi Kursus</button>
                </div>
            </div>    
        </section>

        <section class="bottom-banner1" aria-labelledby="banner-title1">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6e98e9c1fe52461e06e44b357b9971c96cef9dfa1e8f4fc9da06382486da5ccf?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="LearnPress education theme showcase" class="banner-bg1" />
            <div class="banner-overlay1">
                <div class="banner-header1">
                    <p class="banner-subtitle1" id="banner-subtitle1">MENYEDIAKAN YANG LUAR BIASA</p>
                    <h2 class="banner-title1" id="banner-title1">Tema Pendidikan R2Code</h2>
                </div>
                <div class="banner-content-wrapper1">
                    <p class="banner-description1">Belajar Kapan Saja, Dimana Saja, Dengan Akses Tak Terbatas, Dan Gratis.<p>
                </div>
            </div>
        </section>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>