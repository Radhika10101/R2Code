<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="R2Code - Online Learning Platform">
    <title>Login/ Register</title>
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons-webfont@2.47.0/tabler-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@600&family=Jost:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<footer class="footer2" role="contentinfo">
        <div class="footer-container2">
            <div class="footer-brand2">
                <a href="/" class="brand-logo2" aria-label="R2Code home">
                    <img src="image/logo utama.png  " alt="" width="39" height="39" />
                    <span>R2Code</span>
                </a>
                <p class="brand-description2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <nav class="footer-section2" aria-label="Help and support">
                <h2 class="footer-heading2">Get Help</h2>
                <ul class="footer-links2">
                    <li><a href="/contact" class="footer-link2">Contact Us</a></li>
                    <li><a href="/articles" class="footer-link2">Latest Articles</a></li>
                    <li><a href="/faq" class="footer-link2">FAQ</a></li>
                </ul>
            </nav>

            <nav class="footer-section2" aria-label="Educational programs">
                <h2 class="footer-heading2">Programs</h2>
                <ul class="footer-links2">
                    <li><a href="/programs/art-design" class="footer-link2">Art & Design</a></li>
                    <li><a href="/programs/business" class="footer-link2">Business</a></li>
                    <li><a href="/programs/it-software" class="footer-link2">IT & Software</a></li>
                    <li><a href="/programs/languages" class="footer-link2">Languages</a></li>
                    <li><a href="/programs/programming" class="footer-link2">Programming</a></li>
                </ul>
            </nav>

            <div class="footer-section2">
                <h2 class="footer-heading2">Contact Us</h2>
                <address class="contact-info2">
                    2321 New Design Str<br>
                    Probolinggo,Jawa Timur IND<br>
                    <a href="tel:+1232500567898" class="footer-link2">+ (123) 2500-567-8988</a><br>
                    <a href="radhikakemalibnoeibrahim@gmail.com" class="footer-link2">radhikakemalibnoeibrahim@gmail.com</a>
                </address>
                <div class="social-links2">
                    <a href="https://facebook.com" class="social-link2" aria-label="Visit our Facebook page">
                        <svg class="social-icon2" aria-hidden="true" viewBox="0 0 24 24"></svg>
                    </a>
                    <a href="https://twitter.com" class="social-link2" aria-label="Visit our Twitter page">
                        <svg class="social-icon2" aria-hidden="true" viewBox="0 0 24 24"></svg>
                    </a>
                    <a href="https://instagram.com" class="social-link2" aria-label="Visit our Instagram page">
                        <svg class="social-icon2" aria-hidden="true" viewBox="0 0 24 24"></svg>
                    </a>
                    <a href="https://linkedin.com" class="social-link2" aria-label="Visit our LinkedIn page">
                        <svg class="social-icon2" aria-hidden="true" viewBox="0 0 24 24"></svg>
                    </a>
                    <a href="https://youtube.com" class="social-link2" aria-label="Visit our YouTube channel">
                        <svg class="social-icon2" aria-hidden="true" viewBox="0 0 24 24"></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom2">
            Copyright © 2024 R2Code LMS | Powered by Radhika
        </div>

        <button class="scroll-top2" aria-label="Scroll to top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 19V5M5 12l7-7 7 7"/>
            </svg>
        </button>
    </footer>

       <style>
        .footer2 {
            background-color: #f5f5f5;
            padding: 20px 0 0px;
            width: 100%;
        }

        .footer-container2 {
            max-width: 1200px;
            margin: 0 auto;
            padding: -1 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-brand2 {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .brand-logo2 {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 28px;
            font-weight: 700;
            color: #000;
            text-decoration: none;
        }

        .brand-logo2 img {
            width: 39px;
            height: 39px;
        }

        .brand-description2 {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
        }

        .footer-section2 {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .footer-heading2 {
            color: #000;
            font-size: 20px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .footer-links2 {
            display: flex;
            flex-direction: column;
            gap: 15px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-link2 {
            color: #555;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        .footer-link2:hover,
        .footer-link2:focus {
            color: #ff782d;
        }

        .footer-link2.active2 {
            color: #ff782d;
        }

        .contact-info2 {
            font-style: normal;
            color: #555;
            font-size: 16px;
            line-height: 1.6;
        }

        .social-links2 {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .social-link2 {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .social-link2:hover,
        .social-link2:focus {
            background-color: #ff782d;
        }

        .social-icon2 {
            width: 20px;
            height: 20px;
            fill: #fff;
        }

        .footer-bottom2 {
            margin-top: 10px;
            padding-top: 5px;
            border-top: 0px solid #eaeaea;
            text-align: center;
            color: #555;
            font-size: 14px;
        }

        .scroll-top2 {
            position: fixed;
            right: 30px;
            bottom: 30px;
            width: 50px;
            height: 50px;
            background-color: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s;
            border: none;
            z-index: 100;
        }

        .scroll-top2:hover,
        .scroll-top2:focus {
            background-color: #ff782d;
        }

        @media (max-width: 768px) {
            .footer-container2 {
                grid-template-columns: 1fr;
            }

            .footer2 {
                padding: 40px 0 20px;
            }

            .footer-bottom2 {
                margin-top: 40px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .footer-link2,
            .social-link2,
            .scroll-top2 {
                transition: none;
            }
        }
    </style>
</body>
</html>