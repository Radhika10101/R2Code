<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RingkasanPengembangan</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600;700&family=Jost:wght@400;500&display=swap"
      rel="stylesheet"
    />  
  </head>
  <body>
    <?php
    include('navbar.php');
    ?>  
    <?php include('tes.php'); ?>
      <main class="content">
        <div class="content-wrapper">
          <section class="tabs">
            <nav class="tab-header">
              <a href="RingkasanPengembangan.php" class="tab-item active">ringkasan</a>
              <a href="#kurikulum" class="tab-item">kurikulum</a>
              <a href="PengajarPengembangan.php" class="tab-item">pengajar</a>
              <a href="FAQs.php" class="tab-item">FAQs</a>
              <a href="#ulasan" class="tab-item">ulasan</a>
            </nav>

            <div class="tab-content">
              <p>
                LearnPress is a comprehensive WordPress LMS Plugin for
                WordPress. This is one of the best WordPress LMS Plugins which
                can be used to easily create & sell courses online. You can
                create a course curriculum with lessons & quizzes included which
                is managed with an easy-to-use interface for users. Having this
                WordPress LMS Plugin, now you have a chance to quickly and
                easily create education, online school, online-course websites
                with no coding knowledge required.
              </p>
              <br />
              <p>
                LearnPress is free and always will be, but it is still a premium
                high-quality WordPress Plugin that definitely helps you with
                making money from your WordPress Based LMS. Just try and see how
                amazing it is. LearnPress WordPress Online Course plugin is
                lightweight and super powerful with lots of Add-Ons to empower
                its core system.How to use WPML Add-on for LearnPress?
              </p>
              <br />
              <p>No comments yet! You be the first to comment.</p>
            </div>
          </section>

          <section class="comments">
            <header class="comment-header">
              <h2 class="comment-title">Tinggalkan Komentar</h2>
              <p class="comment-subtitle">
                Alamat email Anda tidak akan dipublikasikan. Kolom yang wajib
                diisi ditandai dengan *
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
                  Simpan nama saya, email di browser ini untuk komentar saya
                  berikutnya
                </label>
              </div>
              <button type="submit" class="submit-button">
                posting komentar
              </button>
            </form>
          </section>
        </div>
      </main>

      <?php
      include('footer.php');
      ?>
    </div>


    <style>
.meta-item1 {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #9d9d9d;
    font-family: Jost, sans-serif;
    font-size: 16px;
}

.course-card {
    position: absolute;
    right: 0;
    bottom: -211px;
    width: 410px;
    border-radius: 20px;
    border: 1px solid #eaeaea;
    overflow: hidden;
    background-color: #fff;
}

.course-image {
    width: 100%;
    aspect-ratio: 1.64;
    object-fit: cover;
    border-radius: 20px 20px 0 0;
}


@media (max-width: 991px) {
    .hero-content {
        padding-right: 0;
    }

    .course-card {
        position: static;
        width: 100%;
        max-width: 410px;
        margin-top: 40px;
    }
}

@media (max-width: 640px) {
    .course-meta {
        flex-direction: column;
        align-items: flex-start;
    }

    .meta-info {
        gap: 16px;
        flex-direction: column;
    }
}
      
        .coursedetails {
    background-color: #fff;
    display: flex;
    flex-direction: column;
    width: 100%;
    min-height: 100vh;
  } 
  .menu {
    display: flex;
    align-items: center;
    font-family: Exo, sans-serif;
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize;
  }
  
  .menu-item {
    padding: 0 20px;
    height: 72px;
    color: #000;
    text-decoration: none;
    display: flex;
    align-items: center;
    transition: color 0.3s ease;
  }
  
  .menu-item:hover {
    color: #ff782d;
  }
  
  .menu-item.active {
    color: #ff782d;
  }
  
  .right-section {
    display: flex;
    align-items: center;
    gap: 20px;
  }
  
  .masukdaftar {
    font-family: Jost, sans-serif;
    font-size: 18px;
    font-weight: 500;
    color: #000;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  
  .masukdaftar:hover {
    color: #ff782d;
  }
  
  .search {
    border: 2px solid #ff782d;
    border-radius: 24px;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }
  
  .search:hover {
    background-color: #ff782d;
  }
  
  .search:hover i {
    color: #fff;
  }
  
  .search i {
    color: #ff782d;
    font-size: 20px;
    transition: color 0.3s ease;
  }

  .content {
    padding: 50px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .content-wrapper {
    width: 100%;
    max-width: 1290px;
    padding-right: 440px;
  }
  
  .tabs {
    width: 100%;
    max-width: 850px;
    border: 1px solid #eaeaea;
    border-radius: 20px;
  }
  
  .tab-header {
    display: flex;
    border-bottom: 1px solid #eaeaea;
  }
  
  .tab-item {
    flex: 1;
    padding: 20px 30px;
    font-family: Exo, sans-serif;
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
    font-family: Jost, sans-serif;
    font-size: 18px;
    line-height: 27px;
    color: #555;
    background-color: #f5f5f5;
  }
  
  .comments {
    margin-top: 40px;
    width: 100%;
    max-width: 850px;
  }
  
  .comment-header {
    margin-bottom: 30px;
  }
  
  .comment-title {
    font-family: Exo, sans-serif;
    font-size: 20px;
    font-weight: 600;
    color: #000;
    margin-bottom: 12px;
  }
  
  .comment-subtitle {
    font-family: Jost, sans-serif;
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
    font-family: Jost, sans-serif;
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
    font-family: Jost, sans-serif;
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
    font-family: Jost, sans-serif;
    font-size: 18px;
    color: #555;
  }
  
  .submit-button {
    color: #fff;
    border-radius: 24px;
    padding: 11px 24px;
    font-family: Jost, sans-serif;
    font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    border: none;
    cursor: pointer;
    background-color: #ff782d;
    margin-top: 20px;
    transition: background-color 0.3s ease;
  }
  
  

  
  .footer-logo {
    display: flex;
    align-items: center;
    gap: 4px;
    font-family: Exo, sans-serif;
    font-size: 28px;
    font-weight: 700;
    color: #000;
    margin-bottom: 32px;
    text-decoration: none;
  }
  
  .footer-text {
    font-family: Jost, sans-serif;
    font-size: 18px;
    line-height: 27px;
    color: #555;
  }
  


  
  .social-icons {
    display: flex;
    gap: 12px;
    margin-top: 16px;
  }
  
  .social-link {
    color: #555;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  
  .social-link:hover {
    color: #ff782d;
  }
  
  .social-icon {
    font-size: 20px;
  }
  
  .copyright {
    font-family: Jost, sans-serif;
    font-size: 18px;
    color: #555;
    text-align: center;
  }
  
  @media (max-width: 991px) {
    .header-content {
      gap: 20px;
    }
  
    .menu {
      display: none;
    }
  
  
    .content-wrapper {
      padding-right: 0;
    }
  
    .tabs {
      max-width: 100%;
    }
  }
  
  @media (max-width: 640px) {
    .header-content {
      justify-content: space-between;
    }
  
    .right-section {
      gap: 10px;
    }
  
  
    .tab-header {
      flex-wrap: wrap;
    }
  
    .tab-item {
      flex: 1 0 50%;
    }
  
    .form-input {
      min-width: 100%;
    }
  }
  
    </style>
  </body>
</html>
