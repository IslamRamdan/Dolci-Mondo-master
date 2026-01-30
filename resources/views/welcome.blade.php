<!DOCTYPE html>
<html lang="ar" dir="rtl" id="mainHtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolci Mondo | عالم الحلا الفاخر</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&family=Poppins:wght@300;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

</head>

<body>

    <div class="top-bar">
        <div class="container flex-between">
            <div class="top-social">
                <a href="رابط_الإنستقرام" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="رابط_الفيسبوك" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="رابط_تيك_توك" target="_blank" title="TikTok"><i class="fab fa-tiktok"></i></a>
            </div>

            <div class="top-email">
                <a href="mailto:elyzeebs@gmail.com">
                    <i class="fas fa-envelope"></i>
                    <span>elyzeebs@gmail.com</span>
                </a>
            </div>
        </div>
    </div>
    <header class="main-header">
        <div class="container navbar">
            <div class="logo" onclick="location.href='index.html'">
                <img src="images/logo.png" alt="Dolci Mondo">
                <div class="brand-info">
                    <span class="brand-name">Dolci Mondo</span>
                    <span class="brand-subtitle lang-ar">عالم الحلا</span>
                </div>
            </div>

            <div class="menu-toggle" id="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>

            <nav id="nav-menu">
                <ul class="nav-links">
                    <li><a href="#home" class="lang-ar">الرئيسية</a><a href="#home" class="lang-en">Home</a></li>
                    <li><a href="#about" class="lang-ar">من نحن</a><a href="#about" class="lang-en">About</a></li>
                    <li><a href="#products" class="lang-ar">المنيو</a><a href="#products" class="lang-en">Menu</a></li>
                    <li><a href="#contact" class="lang-ar">تواصل معنا</a><a href="#contact" class="lang-en">Contact</a>
                    </li>

                    <li class="mobile-lang-item">
                        <button id="langSwitcher" class="lang-btn">English</button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-slider">
            <div class="slide active" style="background-image: url('images/hero.jpg')"></div>
            <div class="slide" style="background-image: url('images/hero2.webp')"></div>
            <div class="slide" style="background-image: url('images/hero3.webp')"></div>
        </div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1 class="lang-ar">عالم من <span class="gold-text">السعادة</span> في كل قطعة</h1>
            <h1 class="lang-en">A World of <span class="gold-text">Happiness</span> in Every Bite</h1>
            <p class="lang-ar">نقدم أجود أنواع الحلويات والبوكسات الفاخرة التي تليق بمناسباتكم</p>
            <p class="lang-en">We offer the finest luxury sweets and boxes for your special occasions</p>
            <div class="slider-dots">
                <span class="dot active"></span><span class="dot"></span><span class="dot"></span>
            </div>
        </div>
    </section>

    <section id="about" class="about-section section-padding container">
        <div class="about-grid">
            <div class="about-images reveal">
                <div class="image-stack">
                    <img src="images/من نحن.webp" alt="Sweets Design" class="img-main">
                    <div class="experience-badge">
                        <span class="num">100%</span>
                        <span class="txt lang-ar">جودة واتقان</span>
                        <span class="txt lang-en">Premium Quality</span>
                    </div>
                </div>
            </div>

            <!-- جهة النص -->
            <div class="about-text reveal">
                <h4 class="gold-text lang-ar">قصتنا</h4>
                <h4 class="gold-text lang-en">Our Story</h4>

                <h2 class="section-title lang-ar">عالم <span class="maroon-text">دولتشي موندو</span></h2>
                <h2 class="section-title lang-en"><span class="maroon-text">Dolci Mondo</span> World</h2>

                <p class="lang-ar">
                    دولتشي موندو (عالم الحلا) هو أكثر من مجرد متجر حلويات، إنه رحلة في عالم النكهات الفاخرة. انطلقنا من
                    قلب القصيم بشغف لنعيد صياغة مفهوم "الحلا" من خلال دمج الوصفات الأصيلة بلمسات عصرية مبتكرة، لتقديم
                    بوكسات وتشكيلات تليق بمناسباتكم الراقية.
                </p>
                <p class="lang-en">
                    Dolci Mondo is more than just a sweets shop; it is a journey into the world of luxury flavors. Based
                    in the heart of Qassim, we aim to redefine the concept of "Sweets" by blending authentic recipes
                    with innovative modern touches, offering collections that suit your high-end occasions.
                </p>

                <div class="about-values">
                    <div class="value-item">
                        <i class="fas fa-heart"></i>
                        <div>
                            <h5 class="lang-ar">صُنع بحب</h5>
                            <h5 class="lang-en">Crafted with Love</h5>
                            <p class="lang-ar">كل قطعة لدينا تُحضر بعناية فائقة لتصلكم طازجة ومثالية.</p>
                            <p class="lang-en">Every piece is prepared with great care to reach you fresh and perfect.
                            </p>
                        </div>
                    </div>
                    <div class="value-item">
                        <i class="fas fa-star"></i>
                        <div>
                            <h5 class="lang-ar">مكونات فاخرة</h5>
                            <h5 class="lang-en">Luxury Ingredients</h5>
                            <p class="lang-ar">نختار أجود أنواع الشوكولاتة والمكونات لضمان طعم لا يُنسى.</p>
                            <p class="lang-en">We select the finest chocolate and ingredients to guarantee an
                                unforgettable taste.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="products" class="menu-section container">
        <div class="category-filters">
            <button class="filter-btn active" data-filter="all">
                <span class="lang-ar">الجميع</span>
                <span class="lang-en">All</span>
            </button>

            @foreach ($categories as $category)
                <button class="filter-btn" data-filter="{{ $category->name_en }}">
                    <span class="lang-ar">{{ $category->name_ar }}</span>
                    <span class="lang-en">{{ $category->name_en }}</span>
                </button>
            @endforeach
        </div>

        <div class="products-grid" id="productsGrid">
            <!-- الـ JavaScript سيضع المنتجات هنا -->
        </div>
    </section>

    <script>
        const productData = @json($productData);

        // تابع displayProducts اللي عندك
        displayProducts();
    </script>


    <section class="testimonials section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="lang-ar">قالوا عن <span class="gold-text">دولتشي موندو</span></h2>
                <h2 class="lang-en">What They Say About <span class="gold-text">Dolci Mondo</span></h2>
            </div>
            <div class="testi-grid">
                <div class="testi-card reveal">
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <p class="lang-ar">"من أذكى أنواع الحلا اللي جربتها في القصيم، التغليف يواجه جداً والخدمة سريعة."
                    </p>
                    <p class="lang-en">"One of the best sweets I tried in Qassim, the packaging is elegant and the
                        service is fast."</p>
                    <h5>أحمد التميمي</h5>
                </div>
                <div class="testi-card reveal">
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <p class="lang-ar">"بوكس المكس الرباعي دائماً خياري الأول في جمعاتنا، الطعم متوازن وشغل نظيف."</p>
                    <p class="lang-en">"The mixed quad box is always my first choice for gatherings, the taste is
                        balanced."</p>
                    <h5>سارة المحمد</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="location-section container section-padding">
        <div class="location-card flex-grid">
            <div class="location-info reveal">
                <h3 class="lang-ar">زورونا في <span class="gold-text">مقرنا</span></h3>
                <h3 class="lang-en">Visit Our <span class="gold-text">Location</span></h3>
                <p class="lang-ar">نسعد باستقبالكم في فرعنا ببريدة - الشماسية لتذوق أحدث ابتكاراتنا.</p>
                <p class="lang-en">We are happy to welcome you to our branch in Buraydah - Ash Shamasiah.</p>
                <a href="https://maps.google.com" target="_blank" class="map-btn lang-ar">فتح في الخريطة <i
                        class="fas fa-map-marked-alt"></i></a>
                <a href="https://maps.google.com" target="_blank" class="map-btn lang-en">Open in Maps <i
                        class="fas fa-map-marked-alt"></i></a>
            </div>
            <div class="map-container reveal">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.123!2d44.025!3d26.333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDIwJzAwLjAiTiA0NMKwMDEnMzAuMCJF!5e0!3m2!1sen!2ssa!4v1700000000000"
                    width="100%" height="300" style="border:0; border-radius: 20px;" allowfullscreen=""
                    loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <footer id="contact" class="footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <img src="images/logo.png" alt="Logo">
                <p class="lang-ar">دولتشي موندو - القصيم. أفخم أنواع الحلا المبتكر.</p>
                <p class="lang-en">Dolce Mundo - Al-Qassim. The most luxurious and innovative desserts.</p>
            </div>
            <div class="footer-contact">
                <h4 class="lang-ar">تواصل معنا</h4>
                <p><i class="fas fa-phone"></i> 0533622117 (المبيعات)</p>
                <p><i class="fas fa-building"></i> 0558002568 (الإدارة)</p>
                <p><i class="fas fa-file-invoice-dollar"></i> الرقم الضريبي: 314192993300003</p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/966533622117" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    <div class="copyright">
        <div class="container">
            <p class="developer">
                تصميم و برمجة
                <a href="https://www.facebook.com/share/17UzqgSwiu/" target="_blank">GMTWeb</a>
            </p>
        </div>
    </div>
    <style>
        /* Container */
        .copyright {
            background-color: #1f2937;
            /* لون خلفية غامق */
            color: #f3f4f6;
            /* لون الخط فاتح */
            padding: 15px 0;
            text-align: center;
            font-size: 14px;
            font-family: 'Tajawal', sans-serif;
            /* خط عربي مناسب */
            border-top: 1px solid #374151;
            /* خط فاصل رفيع */
        }

        /* الرابط */
        .copyright .developer a {
            color: #3b82f6;
            /* أزرق مميز */
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s, transform 0.3s;
        }

        .copyright .developer a:hover {
            color: #60a5fa;
            /* لون أفتح عند المرور */
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .copyright {
                font-size: 13px;
                padding: 10px 0;
            }
        }
    </style>

    {{-- <script>
        const productData = @json($productData);
    </script> --}}


    <script src="script.js"></script>

</body>

</html>
