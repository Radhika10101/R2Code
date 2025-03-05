<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course Listing</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo:wght@600&family=Jost:wght@400;500&display=swap"rel="stylesheet"
    />
  </head>
  <body>

  <?php
    include('navbar.php');
    ?>
    <main class="listing">
      <section class="listing-main">
        <header class="topheading">
          <h1 class="page-title">Semua Kursus</h1>
          <div class="search-container">
            <div class="search">
              <input type="text" placeholder="Cari" class="search-input" />
              <i class="ti ti-search search-icon"></i>
            </div>
            <div class="view-icons">
              <button class="view-btn" aria-label="Grid view">
                <i class="ti ti-layout-grid"></i>
              </button>
              <button class="view-btn" aria-label="List view">
                <i class="ti ti-layout-list"></i>
              </button>
            </div>
          </div>
        </header>

        <section class="courses">
          <article class="course-card">
            <div class="course-image">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/8d80a60bd7a7f623d19b02e59fba635a3c3e38c1b11d3c136795239926e4dcf6?placeholderIfAbsent=true&apiKey=dd958a442e1f42f28861078670b448b3" alt="Php course: Create an LMS Website with R2Code" class="course-image">
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

          <article class="course-card">
            <div class="course-image">
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

          <article class="course-card">
            <div class="course-image">
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

          <article class="course-card">
            <div class="course-image">
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

          <article class="course-card">
            <div class="course-image">
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

          <article class="course-card">
            <div class="course-image">
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
        </section>

        <nav class="pagination" aria-label="Course pages">
          <button class="page-item" aria-label="Previous page">
            <i class="ti ti-chevron-left"></i>
          </button>
          <button class="page-item active" aria-current="page">1</button>
          <button class="page-item">2</button>
          <button class="page-item">3</button>
          <button class="page-item" aria-label="Next page">
            <i class="ti ti-chevron-right"></i>
          </button>
        </nav>
      </section>

      <aside class="sidebar">
        <section class="sidebar-section">
          <h2 class="sidebar-title">Kursus Kategori</h2>
          <nav class="category-list">
            <a href="#" class="category-item">
              <i class="ti ti-folder"></i>
              <span>ALL</span>
              <span class="category-count">21</span>
            </a>
            <a href="#" class="category-item">
              <i class="ti ti-palette"></i>
              <span>Seni & Desain</span>
              <span class="category-count">3</span>
            </a>
            <a href="#" class="category-item">
              <i class="ti ti-broadcast"></i>
              <span>Komunikasi</span>
              <span class="category-count">3</span>
            </a>
            <a href="#" class="category-item">
            <i class="ti ti-code"></i>
            <span>Pengembangan</span>
              <span class="category-count">3</span>
            </a>
            <a href="#" class="category-item ">
              <i class="ti ti-video"></i>
              <span>Videografi</span>
              <span class="category-count">3</span>
            </a>
            <a href="#" class="category-item">
              <i class="ti ti-camera"></i>
              <span>Fotografi</span>
              <span class="category-count">3</span>
            </a>
            <a href="#" class="category-item">
            <i class="ti ti-chart-bar"></i>
            <span>Pemasaran</span>
              <span class="category-count">3</span>
            </a>
            <a href="#" class="category-item">
            <i class="ti ti-notebook"></i>
            <span>Penulisan Konten</span>
              <span class="category-count">3</span>
            </a>
            <a href="#" class="category-item">
            <i class="ti ti-currency-dollar"></i>
            <span>Keuangan</span>
              <span class="category-count">3</span>
            </a>
            <a href="#" class="category-item">
            <i class="ti ti-hierarchy"></i>
            <span>Sains</span>
              <span class="category-count">3</span>
            </a>
            <a href="#" class="category-item">
            <i class="ti ti-network"></i>
            <span>Jaringan</span>
              <span class="category-count">3</span>
            </a>
          </nav>
        </section>

        <section class="sidebar-section">
          <h2 class="sidebar-title">Pengajar</h2>
          <nav class="category-list">
            <a href="#" class="category-item">
              <i class="ti ti-user"></i>
              <span>Radhika Kemal Ibnoe Ibrahim</span>
              <span class="category-count">15</span>
            </a>
            <a href="#" class="category-item">
              <i class="ti ti-user"></i>
              <span>Rizki Ramadhan</span>
              <span class="category-count">15</span>
            </a>
          </nav>
        </section>

        <section class="sidebar-section">
          <h2 class="sidebar-title">Ulasan</h2>
          <div class="rating-list">
            <label class="rating-item">
              <input type="checkbox" class="rating-checkbox" />
              <i class="ti ti-checkbox"></i>
              <div class="rating-stars">
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
              </div>
              <span class="rating-count">(1,025)</span>
            </label>
            <label class="rating-item">
              <input type="checkbox" class="rating-checkbox" />
              <i class="ti ti-checkbox"></i>
              <div class="rating-stars">
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star"></i>
              </div>
              <span class="rating-count">(1,025)</span>
            </label>
            <label class="rating-item">
              <input type="checkbox" class="rating-checkbox" />
              <i class="ti ti-checkbox"></i>
              <div class="rating-stars">
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star"></i>
                <i class="ti ti-star"></i>
              </div>
              <span class="rating-count">(1,025)</span>
            </label>
            <label class="rating-item">
              <input type="checkbox" class="rating-checkbox" />
              <i class="ti ti-checkbox"></i>
              <div class="rating-stars">
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star"></i>
                <i class="ti ti-star"></i>
                <i class="ti ti-star"></i>
              </div>
              <span class="rating-count">(1,025)</span>
            </label>
            <label class="rating-item">
              <input type="checkbox" class="rating-checkbox" />
              <i class="ti ti-checkbox"></i>
              <div class="rating-stars">
                <i class="ti ti-star-filled"></i>
                <i class="ti ti-star"></i>
                <i class="ti ti-star"></i>
                <i class="ti ti-star"></i>
                <i class="ti ti-star"></i>
              </div>
              <span class="rating-count">(1,025)</span>
            </label>
          </div>
        </section>
      </aside>
    </main>
    <?php
    include("footer.php");
    ?>
  </body>
</html>



<!-- Css Kursus -->  
<style>
  .listing {
    display: flex;
    align-items: start;
    gap: 30px;
    justify-content: start;
    flex-wrap: wrap;
    padding: 20px;
    max-width: 1356px;
    margin: 0 auto;
}

.listing-main {
    display: flex;
    min-width: 240px;
    flex-direction: column;
    justify-content: start;
    width: 990px;
}

.topheading {
    display: flex;
    width: 100%;
    max-width: 990px;
    align-items: center;
    gap: 40px 100px;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

.page-title {
    color: #000;
    font-family: Exo, sans-serif;
    font-size: 36px;
    font-weight: 600;
    line-height: 1.2;
    text-transform: capitalize;
    margin: 0 70px ;
}

.search-container {
    display: flex;
    align-items: center;
    gap: 20px;
}

.search {
    border-bottom: 1px solid #000;
    display: flex;
    align-items: center;
    gap: 20px;
    padding-bottom: 4px;
    width: 270px;
}

.search-input {
    border: none;
    outline: none;
    width: 100%;
    font-family: Jost, sans-serif;
    font-size: 18px;
    color: #9d9d9d;
}

.search-icon {
    color: #9d9d9d;
}

.view-icons {
    display: flex;
    gap: 20px;
}

.view-btn {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
    font-size: 20px;
    color: #9d9d9d;
}

.courses {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    margin: -10px;
    padding: 0 70px;
    max-width: 990px;
}

.course-card {
    border-radius: 20px;
    border: 1px solid #eaeaea;
    overflow: hidden;
}

.course-image {
    position: relative;
}

.course-image img {
    width: 100%;
    height: 240px;
    object-fit: cover;
}

.course-tag {
    position: absolute;
    top: 20px;
    left: 20px;
    color: #fff;
    padding: 8px 12px;
    border-radius: 8px;
    font-family: Jost, sans-serif;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    background-color: #000;
}

.course-content {
    padding: 20px;
}

.course-author {
    color: #555;
    font-family: Jost, sans-serif;
    font-size: 16px;
    font-weight: 400;
    margin: 0 0 12px;
}

.course-title {
    color: #000;
    font-family: Exo, sans-serif;
    font-size: 20px;
    font-weight: 600;
    line-height: 1.2;
    text-transform: capitalize;
    margin: 0 0 16px;
}

.course-meta {
    display: flex;
    align-items: center;
    gap: 8px;
    font-family: Jost, sans-serif;
    font-size: 16px;
    color: #555;
}

.course-divider {
    height: 1px;
    margin: 16px 0;
    background-color: #eaeaea;
    border: none;
}

.course-link {
    color: #000;
    font-family: Jost, sans-serif;
    font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    text-decoration: none;
}

.pagination {
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 40px 335px;
}

.page-item {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 24px;
    border: 1px solid #eaeaea;
    font-family: Jost, sans-serif;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    background: none;
    padding: 0;
}

.page-item.active {
    background-color: #000;
    color: #fff;
    border-color: #000;
}

.sidebar {
    width: 270px;
}

.sidebar-section {
    margin-bottom: 10px;
}

.sidebar-title {
    color: #000;
    font-family: Exo, sans-serif;
    font-size: 20px;
    font-weight: 600;
    line-height: 1.2;
    text-transform: capitalize;
    margin: 0 0 20px;
}

.sidebar .category-item:hover,
.sidebar .category-item:focus {
    color: #ff782d;
}

.sidebar .category-item.active {
    color: #ff782d;
}


.category-list {
    display: flex;
    flex-direction: column;
}

.category-item {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 5px 0;
    font-family: Jost, sans-serif;
    font-size: 18px;
    color: #555;
    text-decoration: none;
}

.category-item.active {
    color: #000;
}

.category-count {
    margin-left: auto;
}

.rating-list {
    display: flex;
    flex-direction: column;
}

.rating-item {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 5px 0;
    cursor: pointer;
}

.rating-checkbox {
    display: none;
}

.rating-stars {
    display: flex;
    gap: 4px;
    flex: 1;
}

.rating-stars i {
    color: #ffc107;
    font-size: 16px;
}

.rating-count {
    font-family: Jost, sans-serif;
    font-size: 18px;
    color: #555;
}

@media (max-width: 991px) {
    .listing {
        padding: 15px;
    }

    .courses {
        grid-template-columns: 1fr;
    }

    .sidebar {
        width: 100%;
        margin-top: 30px;
    }
}

@media (max-width: 640px) {
    .topheading {
        gap: 20px;
    }

    .page-title {
        font-size: 28px;
    }

    .search {
        width: 100%;
    }

    .course-card {
        width: 100%;
    }

    .page-item {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }
}

</style>