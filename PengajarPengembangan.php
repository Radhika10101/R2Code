<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengajar Pengembangan</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600;700&family=Jost:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <style>
      /* Base styles */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Jost', sans-serif;
        line-height: 1.5;
        background-color:rgb(255, 255, 255);
      }

      /* Content Section */
      .pengajar-content {
        padding: 50px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .pengajar-content-wrapper {
        width: 100%;
        max-width: 1290px;
        padding-right: 440px;
      }

      /* Tabs */
      .pengajar-tabs {
        width: 100%;
        max-width: 850px;
        border: 1px solid #eaeaea;
        border-radius: 20px;
      }

      .pengajar-tab-header {
        display: flex;
        border-bottom: 1px solid #eaeaea;
      }

      .pengajar-tab-item {
        flex: 1;
        padding: 20px 30px;
        font-family: 'Exo', sans-serif;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
        color: #000;
        text-transform: capitalize;
        text-decoration: none;
        border-right: 1px solid #eaeaea;
        transition: all 0.3s ease;
      }

      .pengajar-tab-item:hover {
        background-color: #f5f5f5;
        color: #ff782d;
      }

      .pengajar-tab-item.active {
        color: #ff782d;
        background-color: #f5f5f5;
      }

      .pengajar-tab-content {
        padding: 30px;
        border-radius: 0 0 20px 20px;
        font-family: 'Jost', sans-serif;
        font-size: 18px;
        line-height: 27px;
        color: #555;
        background-color: #f5f5f5;
      }

      /* Instructor Profile */
      .pengajar-profile {
        display: flex;
        align-items: center;
        gap: 30px;
        margin-bottom: 30px;
      }

      .pengajar-image {
        width: 410px;
        height: 250px;
        border-radius: 5%;
        object-fit: cover;
        margin: -7px 0px 0px;
      }

      .pengajar-info {
        flex: 1;
      }

      .pengajar-name {
        font-family: 'Exo', sans-serif;
        font-size: 24px;
        font-weight: 600;
        color: #000;
        margin-bottom: 10px;
      }

      .pengajar-bio {
        font-size: 16px;
        color: #555;
        margin-bottom: 20px;
      }

      .pengajar-stats {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
      }

      .pengajar-stats-icon {
        width: 20px;
        height: 20px;
      }

      .pengajar-stats-text {
        font-size: 16px;
        color: #555;
      }

      /* Comment Section */
      .comments {
        margin-top: 40px;
        width: 100%;
        max-width: 850px;
      }

      .comment-header {
        margin-bottom: 30px;
      }

      .comment-title {
        font-family: 'Exo', sans-serif;
        font-size: 20px;
        font-weight: 600;
        color: #000;
        margin-bottom: 12px;
      }

      .comment-subtitle {
        font-family: 'Jost', sans-serif;
        font-size: 18px;
        color: #555;
      }

      .comment-form {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
      }

      .form-input {
        flex: 1;
        min-width: 240px;
      }

      .input-field {
        width: 100%;
        height: 48px;
        border: 1px solid #9d9d9d;
        border-radius: 8px;
        padding: 0 16px;
        font-family: 'Jost', sans-serif;
        font-size: 18px;
        color: #555;
        transition: border-color 0.3s ease;
      }

      .input-field:focus {
        border-color: #ff782d;
        outline: none;
      }

      .form-input-2 {
        width: 100%;
      }

      .textarea-field {
        width: 100%;
        height: 110px;
        border: 1px solid #9d9d9d;
        border-radius: 8px;
        padding: 16px;
        font-family: 'Jost', sans-serif;
        font-size: 18px;
        color: #555;
        resize: none;
        transition: border-color 0.3s ease;
      }

      .textarea-field:focus {
        border-color: #ff782d;
        outline: none;
      }

      .checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 20px;
        width: 100%;
      }

      .checkbox-label {
        font-family: 'Jost', sans-serif;
        font-size: 18px;
        color: #555;
      }

      .submit-button {
        color: #fff;
        border-radius: 24px;
        padding: 11px 24px;
        font-family: 'Jost', sans-serif;
        font-size: 18px;
        font-weight: 500;
        text-transform: capitalize;
        border: none;
        cursor: pointer;
        background-color: #ff782d;
        margin-top: 20px;
        transition: background-color 0.3s ease;
      }

      .submit-button:hover {
        background-color: #e66a1f;
      }

      /* Responsive Styles */
      @media (max-width: 991px) {
        .pengajar-content-wrapper {
          padding-right: 0;
        }

        .pengajar-tabs {
          max-width: 100%;
        }

        .pengajar-profile {
          flex-direction: column;
          align-items: center;
          text-align: center;
        }
      }

      @media (max-width: 640px) {
        .pengajar-tab-item {
          flex: 1 0 50%;
          padding: 20px;
        }

        .form-input {
          min-width: 100%;
        }
      }
    </style>
  </head>
  <body>
<?php include('navbar.php'); ?>
<?php include('tes.php'); ?>

    <main class="pengajar-content">
      <div class="pengajar-content-wrapper">
        <section class="pengajar-tabs">
          <nav class="pengajar-tab-header">
            <a href="RingkasanPengembangan.php" class="pengajar-tab-item">ringkasan</a>
            <a href="#kurikulum" class="pengajar-tab-item">kurikulum</a>
            <a href="PengajarPengembangan.php" class="pengajar-tab-item active">pengajar</a>
            <a href="FAQs.php" class="pengajar-tab-item">FAQs</a>
            <a href="#ulasan" class="pengajar-tab-item">ulasan</a>
          </nav>

          <div class="pengajar-tab-content">
            <div class="pengajar-tab-panel active">
              <div class="pengajar-profile">
                <img
                src="image/Pengajar.png"  
                alt="Instructor Profile"
                  class="pengajar-image"
                />
                <div class="pengajar-info">
                  <h2 class="pengajar-name">Radhika dan Rizki</h2>
                  <p class="pengajar-bio">
                    R2Code adalah alat yang komprehensif. Ini adalah salah satu yang terbaik yang dapat digunakan untuk membuat & menjual kursus daring dengan mudah.
                  </p>
                  <div class="pengajar-stats students">
                  <i class="ti ti-users"></i>
                  <span>2 Pengajar</span>
                  </div>
                </div>
              </div>
              <p class="pengajar-course-description">
                R2Code adalah Plugin R2Code yang lengkap untuk R2Code. Ini adalah salah satu yang terbaik yang dapat digunakan untuk membuat & menjual kursus daring dengan mudah.
              </p>
            </div>
          </div>
        </section>

        <!-- Comment Section -->
        <section class="comments">
          <header class="comment-header">
            <h2 class="comment-title">Tinggalkan Komentar</h2>
            <p class="comment-subtitle">
              Alamat email Anda tidak akan dipublikasikan. Kolom yang wajib diisi ditandai dengan *
            </p>
          </header>

          <form class="comment-form" action="/submit-comment" method="post">
            <div class="form-input">
              <input
                type="text"
                name="name"
                placeholder="Nama*"
                class="input-field"
                required
              />
            </div>
            <div class="form-input">
              <input
                type="email"
                name="email"
                placeholder="Email*"
                class="input-field"
                required
              />
            </div>
            <div class="form-input-2">
              <textarea
                name="comment"
                placeholder="Komen"
                class="textarea-field"
              ></textarea>
            </div>
            <div class="checkbox-wrapper">
              <input type="checkbox" id="save-info" name="save_info" />
              <label for="save-info" class="checkbox-label">
                Simpan nama saya, email di browser ini untuk komentar saya berikutnya
              </label>
            </div>
            <button type="submit" class="submit-button">
              posting komentar
            </button>
          </form>
        </section>
      </div>
    </main>

    <?php include('footer.php'); ?>
  </body>
</html>