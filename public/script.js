document.addEventListener("DOMContentLoaded", () => {
    // --- 1. قاعدة بيانات المنتجات ---
    // const productData = [
    //     { id: 1, cat: 'boxes', isNew: true, nameAr: 'بوكس مكس رباعي حالي وموالح', nameEn: 'Mixed Quad Box', wholesale: '40.25', retail: '48.00', img: 'images/p1.jpg' },
    //     { id: 2, cat: 'boxes', isNew: true, nameAr: 'بوكس مكس رباعي بايتس وشوكولاتة', nameEn: 'Mixed Bytes Box', wholesale: '40.25', retail: '48.00', img: 'images/p2.jpg' },
    //     { id: 3, cat: 'boxes', isNew: false, nameAr: 'مكس الضيافة الفاخر', nameEn: 'Hospitality Mix', wholesale: '40.25', retail: '48.00', img: 'images/p3.jpg' },
    //     { id: 4, cat: 'boxes', isNew: false, nameAr: 'شوكولاتة كبير مكسرات', nameEn: 'Large Choco Nuts', wholesale: '40.25', retail: '48.00', img: 'images/p4.jpg' },
    //     { id: 5, cat: 'boxes', isNew: false, nameAr: 'بوكس حالي مالح', nameEn: 'Sweet & Salty Box', wholesale: '45.50', retail: '54.00', img: 'images/p5.jpg' },
    //     { id: 6, cat: 'boxes', isNew: false, nameAr: 'بكج 3 في 1', nameEn: 'Package 3 in 1', wholesale: '55.00', retail: '66.00', img: 'images/p6.jpeg' },
    //     { id: 7, cat: 'hala', isNew: false, nameAr: 'حلا فرح', nameEn: 'Hala Farah', wholesale: '28.75', retail: '34.00', img: 'images/p7.jpg' },
    //     { id: 8, cat: 'hala', isNew: false, nameAr: 'حلا نورا', nameEn: 'Hala Noura', wholesale: '28.75', retail: '34.00', img: 'images/p8.jpg' },
    //     { id: 9, cat: 'hala', isNew: false, nameAr: 'حلا كرانشي', nameEn: 'Crunchy Sweet', wholesale: '34.50', retail: '42.00', img: 'images/p9.jpg' },
    //     { id: 10, cat: 'hala', isNew: false, nameAr: 'حلا لوز', nameEn: 'Almond Sweet', wholesale: '34.50', retail: '42.00', img: 'images/p10.jpg' },
    //     { id: 11, cat: 'hala', isNew: false, nameAr: 'حلا الهبة صغير', nameEn: 'Heba Sweet Small', wholesale: '18.40', retail: '22.00', img: 'images/p11.jpg' },
    //     { id: 12, cat: 'hala', isNew: false, nameAr: 'حلا الهبة كبير', nameEn: 'Heba Sweet Large', wholesale: '40.25', retail: '48.00', img: 'images/p12.jpg' },
    //     { id: 13, cat: 'hala', isNew: false, nameAr: 'حلا منزلي كنافة', nameEn: 'Home Kunafa', wholesale: '23.00', retail: '28.00', img: 'images/p13.jpg' },
    //     { id: 14, cat: 'hala', isNew: false, nameAr: 'حلا منزلي نوتيلا', nameEn: 'Home Nutella', wholesale: '23.00', retail: '28.00', img: 'images/p14.jpeg' },
    //     { id: 15, cat: 'hala', isNew: false, nameAr: 'حلا منزلي كراميل', nameEn: 'Home Caramel', wholesale: '23.00', retail: '28.00', img: 'images/p14.jpeg' },
    //     { id: 16, cat: 'hala', isNew: false, nameAr: 'شوكولاتة وسط', nameEn: 'Medium Choco', wholesale: '28.75', retail: '34.00', img: 'images/p16.jpg' },
    //     { id: 17, cat: 'hala', isNew: false, nameAr: 'شوكولاتة صغير كراميل', nameEn: 'Small Caramel Choco', wholesale: '23.00', retail: '28.00', img: 'images/p17.jpg' },
    //     { id: 18, cat: 'hala', isNew: false, nameAr: 'شوكولاتة صغير قهوة', nameEn: 'Small Coffee Choco', wholesale: '23.00', retail: '28.00', img: 'images/p18.jpg' },
    //     { id: 19, cat: 'hala', isNew: false, nameAr: 'روكي رود', nameEn: 'Rocky Road', wholesale: '28.75', retail: '34.00', img: 'images/p19.jpeg' },
    //     { id: 20, cat: 'hala', isNew: false, nameAr: 'كرانشي كوكيز', nameEn: 'Crunchy Cookies', wholesale: '28.75', retail: '34.00', img: 'images/p20.jpg' },
    //     { id: 21, cat: 'sticks', isNew: false, nameAr: 'أعواد زعتر', nameEn: 'Zaatar Sticks', wholesale: '28.75', retail: '34.00', img: 'images/p21.jpeg' },
    //     { id: 22, cat: 'sticks', isNew: false, nameAr: 'أعواد سمسم', nameEn: 'Sesame Sticks', wholesale: '28.75', retail: '34.00', img: 'images/p22.jpeg' },
    //     { id: 23, cat: 'arabic', isNew: false, nameAr: 'كنافة رول', nameEn: 'Kunafa Roll', wholesale: '34.50', retail: '41.00', img: 'images/p23.jpg' },
    //     { id: 24, cat: 'arabic', isNew: false, nameAr: 'بقلاوة مثلثات', nameEn: 'Triangle Baklava', wholesale: '40.25', retail: '48.00', img: 'images/p24.jpg' },
    //     { id: 25, cat: 'arabic', isNew: false, nameAr: 'بقلاوة أصابع', nameEn: 'Fingers Baklava', wholesale: '34.50', retail: '40.50', img: 'images/p25.jpg' },
    //     { id: 26, cat: 'arabic', isNew: false, nameAr: 'كنافة 92', nameEn: 'Kunafa 92', wholesale: '34.50', retail: '41.00', img: 'images/p26.jpg' }
    // ];

    const grid = document.getElementById("productsGrid");

    // --- 2. وظيفة عرض المنتجات ---
    function displayProducts(filter = "all") {
        if (!grid) return;
        grid.innerHTML = "";
        const filtered =
            filter === "all"
                ? productData
                : productData.filter((p) => p.cat === filter);

        filtered.forEach((p, index) => {
            const card = document.createElement("div");
            card.className = "product-card";
            card.setAttribute("data-category", p.cat);
            card.style.animation = `fadeInCard 0.5s ease forwards ${index * 0.05}s`;

            card.innerHTML = `
                <div class="p-img">
                    <img src="${p.img}" alt="${p.nameAr}">
                    ${p.isNew ? '<span class="tag lang-ar">جديد</span><span class="tag lang-en">New</span>' : ""}
                </div>
                <div class="p-info">
                    <h3 class="lang-ar">${p.nameAr}</h3>
                    <h3 class="lang-en">${p.nameEn}</h3>
                    <div class="p-prices">
                        <div class="price-item"><span class="lang-ar">الجملة</span><span class="lang-en">Wholesale</span><span class="val">${p.wholesale}</span></div>
                        <div class="price-item retail"><span class="lang-ar">البيع</span><span class="lang-en">Retail</span><span class="val">${p.retail}</span></div>
                    </div>
                    <button class="order-btn" onclick="orderWhatsApp('${p.nameAr}')">
                        <i class="fab fa-whatsapp"></i> <span class="lang-ar">اطلب الآن</span><span class="lang-en">Order Now</span>
                    </button>
                </div>
            `;
            grid.appendChild(card);
        });
    }

    displayProducts();

    const menuBtn = document.getElementById("mobile-menu-btn");
    const navLinks = document.querySelector(".nav-links");

    if (menuBtn && navLinks) {
        menuBtn.addEventListener("click", () => {
            navLinks.classList.toggle("active");
            const icon = menuBtn.querySelector("i");
            icon.classList.toggle("fa-bars");
            icon.classList.toggle("fa-times");
        });
    }

    document.querySelectorAll(".nav-links a").forEach((link) => {
        link.addEventListener("click", () => {
            navLinks.classList.remove("active");
            menuBtn.querySelector("i").classList.add("fa-bars");
            menuBtn.querySelector("i").classList.remove("fa-times");
        });
    });

    const langBtn = document.getElementById("langSwitcher");
    const htmlTag = document.getElementById("mainHtml");
    if (langBtn) {
        langBtn.addEventListener("click", () => {
            const isAr = htmlTag.getAttribute("lang") === "ar";
            htmlTag.setAttribute("lang", isAr ? "en" : "ar");
            htmlTag.setAttribute("dir", isAr ? "ltr" : "rtl");
            langBtn.textContent = isAr ? "العربية" : "English";
            const activeFilter = document
                .querySelector(".filter-btn.active")
                .getAttribute("data-filter");
            displayProducts(activeFilter);
        });
    }

    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");
    let currentSlide = 0;

    if (slides.length > 0) {
        function nextSlide() {
            slides[currentSlide].classList.remove("active");
            if (dots.length > 0) dots[currentSlide].classList.remove("active");
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add("active");
            if (dots.length > 0) dots[currentSlide].classList.add("active");
        }
        setInterval(nextSlide, 5000);
    }

    document.querySelectorAll(".filter-btn").forEach((btn) => {
        btn.addEventListener("click", function () {
            document
                .querySelector(".filter-btn.active")
                .classList.remove("active");
            this.classList.add("active");
            displayProducts(this.getAttribute("data-filter"));
        });
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                } else {
                    entry.target.classList.remove("active");
                }
            });
        },
        { threshold: 0.1 },
    );

    document.querySelectorAll(".reveal").forEach((el) => observer.observe(el));
});

function orderWhatsApp(product) {
    const msg = encodeURIComponent(
        `السلام عليكم، أريد الاستفسار عن: ${product}`,
    );
    window.open(`https://wa.me/966533622117?text=${msg}`, "_blank");
}
