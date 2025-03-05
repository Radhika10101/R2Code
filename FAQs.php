<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course Detail Page</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&family=Exo:wght@600&display=swap"
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
        background-color:rgb(255, 254, 254);
      }

      /* Course Detail Container */
      .course-detail {
    display: flex;
    width: 100%;
    flex-direction: column;
    align-items: center;
    justify-content: start;
    padding: 0px 20px 50px;
      }

      @media (max-width: 991px) {
        .course-detail {
          max-width: 100%;
        }
      }

      /* Course Content Section */
      .course-content1 {
        display: flex;
        margin-top: 50px;
        width: 1290px;
        max-width: 100%;
        padding-right: 440px;
        flex-direction: column;
        align-items: start;
        justify-content: start;
      }

      @media (max-width: 991px) {
        .course-content1 {
          padding-right: 20px;
          margin-top: 40px;
        }
      }

      /* Course Tabs */
      .course-tabs1 {
        border-radius: 20px;
        width: 100%;
        max-width: 850px;
        border: 1px solid #eaeaea;
      }

      .tab-header {
        display: flex;
        border-bottom: 1px solid #eaeaea;
      }

      .tab-item {
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

      .tab-item:hover {
        background-color: #f5f5f5;
        color: #ff782d;
      }

      .tab-item.active {
        color: #ff782d;
        background-color: #f5f5f5;
      }

      .tab-content {
        padding: 30px;
        border-radius: 0 0 20px 20px;
        font-family: 'Jost', sans-serif;
        font-size: 18px;
        line-height: 27px;
        color: #555;
        background-color: #f5f5f5;
      }

      /* FAQ Accordion */
      .faq-container {
        width: 100%;
      }

      @media (max-width: 991px) {
        .faq-container {
          max-width: 100%;
        }
      }

      .accordion-item {
        margin-bottom: 20px;
      }

      .accordion-header {
        border-radius: 8px;
        background-color: #fff;
        display: flex;
        width: 100%;
        padding: 20px 30px;
        align-items: center;
        justify-content: space-between;
        border: none;
        cursor: pointer;
        text-align: left;
      }

      @media (max-width: 991px) {
        .accordion-header {
          max-width: 100%;
          padding: 20px;
        }
      }

      .accordion-title {
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        color: #000;
        font-weight: 600;
        text-transform: capitalize;
        line-height: 1.2;
        flex: 1;
      }

      .accordion-title.highlight {
        color: #ff782d;
      }

      .accordion-icon {
        aspect-ratio: 1;
        object-fit: contain;
        object-position: center;
        width: 24px;
        flex-shrink: 0;
      }

      .accordion-content {
        border-radius: 8px;
        background-color: #fff;
        padding: 0 30px 20px;
      }

      @media (max-width: 991px) {
        .accordion-content {
          padding: 0 20px 20px;
        }
      }

      .accordion-text {
        color: #555;
        font-family: 'Jost', sans-serif;
        font-size: 18px;
        font-weight: 400;
        line-height: 27px;
        margin-top: 20px;
      }

      @media (max-width: 991px) {
        .accordion-text {
          max-width: 100%;
        }
      }

      /* Comment Section */
      .comment-section {
        margin-top: 40px;
        width: 100%;
        max-width: 850px;
      }

      @media (max-width: 991px) {
        .comment-section {
          max-width: 100%;
        }
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
    </style>
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <?php include('tes.php'); ?>
    <main class="course-detail">
      <section class="course-content1">
        <div class="course-tabs1">
          <!-- Tab Navigation -->
          <nav class="tab-header">
            <a href="RingkasanPengembangan.php" class="tab-item">ringkasan</a>
            <a href="#kurikulum" class="tab-item">kurikulum</a>
            <a href="PengajarPengembangan.php" class="tab-item">pengajar</a>
            <a href="cek.php" class="tab-item active">FAQs</a>
            <a href="#ulasan" class="tab-item">ulasan</a>
          </nav>

          <div class="tab-content">
            <div class="faq-container">
              <div class="accordion-item">
                <button class="accordion-header" aria-expanded="false">
                  <h3 class="accordion-title">
                    apakah anda membutuhkan bantuan?
                  </h3>
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/35fcb75009d949159115b02941eef51e/975ff538f075b0adbf0b10de25de21b401379eda6cdadf6b3652bd9b6c8d81dc?placeholderIfAbsent=true"
                    alt="Expand"
                    class="accordion-icon"
                  />
                </button>
              </div>
              <div class="accordion-item expanded">
                <button class="accordion-header" aria-expanded="true">
                  <h3 class="accordion-title highlight">
                    kami siap membantu anda jika mengalami kesulitan!
                  </h3>
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/35fcb75009d949159115b02941eef51e/bdec0ff8a903f384360d2f7c6af2bc44fe9a4c5665a9cfdc7d56bf400a54a638?placeholderIfAbsent=true"
                    alt="Collapse"
                    class="accordion-icon"
                  />
                </button>
                <div class="accordion-content">
                  <p class="accordion-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Cras facilisis faucibus odio arcu duis dui, adipiscing
                    facilisis. Urna, donec turpis egestas volutpat. Quisque nec
                    non amet quis. Varius tellus justo odio parturient mauris
                    curabitur lorem in.
                  </p>
                </div>
              </div>
              <div class="accordion-item">
                <button class="accordion-header" aria-expanded="false">
                  <h3 class="accordion-title">apa kendala anda?</h3>
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/35fcb75009d949159115b02941eef51e/ece71a178572a7ab8bb5af238db662a0f6b5a59c8599ecc8ae73e64d83228a1e?placeholderIfAbsent=true"
                    alt="Expand"
                    class="accordion-icon"
                  />
                </button>
              </div>
              <div class="accordion-item">
                <button class="accordion-header" aria-expanded="false">
                  <h3 class="accordion-title">lainnya</h3>
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/35fcb75009d949159115b02941eef51e/601e29e699e56529d62eb1de01e68f241c7643bd09c48a55b3458c376e8711ae?placeholderIfAbsent=true"
                    alt="Expand"
                    class="accordion-icon"
                  />
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Comment Section -->
        <div class="comment-section">
          <div class="comment-header">
            <h2 class="comment-title">Tinggalkan Komentar</h2>
            <p class="comment-subtitle">
              Alamat email Anda tidak akan dipublikasikan. Kolom yang wajib diisi ditandai dengan *
            </p>
          </div>
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
        </div>
      </section>
    </main>
    <?php include 'footer.php'; ?>
  </body>
</html>