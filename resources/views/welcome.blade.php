<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haritsa Babyshop - Perlengkapan Bayi Terlengkap & Berkualitas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #0062DB;
            --accent: #F7007F;
            --white: #ffffff;
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-600: #475569;
            --gray-700: #334155;
            --gray-800: #1e293b;
            --gray-900: #0f172a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            color: var(--gray-800);
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: var(--white);
            box-shadow: 0 4px 20px rgba(0, 98, 219, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: var(--gray-900);
        }

        .logo-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 800;
            font-size: 24px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 800;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .nav-link {
            color: var(--gray-700);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .cta-btn {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: var(--white);
            padding: 12px 24px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 98, 219, 0.3);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #fef7ff 0%, #f0f9ff 50%, #fef7ff 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 60%;
            height: 200%;
            background: linear-gradient(135deg, rgba(0, 98, 219, 0.05), rgba(247, 0, 127, 0.05));
            border-radius: 50%;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 56px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 24px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-text p {
            font-size: 20px;
            color: var(--gray-600);
            margin-bottom: 32px;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: var(--white);
            padding: 16px 32px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(0, 98, 219, 0.4);
        }

        .btn-secondary {
            background: var(--white);
            color: var(--primary);
            padding: 16px 32px;
            border: 2px solid var(--primary);
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.2s ease;
        }

        .btn-secondary:hover {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-2px);
        }

        .hero-visual {
            position: relative;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .hero-image {
            width: 100%;
            height: 200px;
            border-radius: 16px;
            object-fit: cover;
            box-shadow: 0 10px 30px rgba(0, 98, 219, 0.15);
            transition: transform 0.3s ease;
        }

        .hero-image:hover {
            transform: scale(1.05);
        }

        .hero-image.large {
            grid-column: 1 / -1;
            height: 250px;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background: var(--white);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title {
            font-size: 40px;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 16px;
        }

        .section-subtitle {
            font-size: 18px;
            color: var(--gray-600);
            max-width: 600px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 32px;
        }

        .feature-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: 16px;
            padding: 32px;
            text-align: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 98, 219, 0.1);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            color: var(--white);
            font-size: 28px;
        }

        .feature-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 12px;
        }

        .feature-desc {
            color: var(--gray-600);
            line-height: 1.6;
        }

        /* Products Section */
        .products {
            padding: 80px 0;
            background: var(--gray-50);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 32px;
        }

        .product-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 98, 219, 0.08);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 98, 219, 0.15);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 24px;
        }

        .product-category {
            color: var(--accent);
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .product-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .product-desc {
            color: var(--gray-600);
            font-size: 14px;
            margin-bottom: 16px;
            line-height: 1.5;
        }

        .product-price {
            font-size: 20px;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 16px;
        }

        .product-btn {
            width: 100%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: var(--white);
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .product-btn:hover {
            transform: translateY(-2px);
        }

        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background: var(--white);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 32px;
        }

        .testimonial-card {
            background: var(--gray-50);
            border-radius: 16px;
            padding: 32px;
            text-align: center;
        }

        .testimonial-text {
            font-style: italic;
            color: var(--gray-700);
            margin-bottom: 24px;
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .author-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
        }

        .author-info h4 {
            color: var(--gray-900);
            font-weight: 700;
            margin-bottom: 4px;
        }

        .author-info p {
            color: var(--gray-600);
            font-size: 14px;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: var(--white);
            padding: 80px 0;
            text-align: center;
        }

        .cta-content h2 {
            font-size: 40px;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .cta-content p {
            font-size: 18px;
            margin-bottom: 32px;
            opacity: 0.9;
        }

        .cta-button {
            background: var(--white);
            color: var(--primary);
            padding: 16px 32px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            font-size: 18px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: inline-block;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(255, 255, 255, 0.3);
        }

        /* Footer */
        .footer {
            background: var(--gray-900);
            color: var(--white);
            padding: 60px 0 40px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .footer-logo-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
        }

        .footer-desc {
            color: var(--gray-400);
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .footer-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .footer-link {
            color: var(--gray-400);
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
            transition: color 0.2s ease;
        }

        .footer-link:hover {
            color: var(--white);
        }

        .footer-bottom {
            border-top: 1px solid var(--gray-800);
            padding-top: 24px;
            text-align: center;
            color: var(--gray-400);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-content {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-visual {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 32px;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .cta-content h2 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="#" class="logo">
                    <div class="logo-icon">
                        <img src="{{ asset('own_assets/images/logo.png') }}" alt="" width="80px">
                    </div>
                </a>
                <a href="#" class="cta-btn">Download Sekarang</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Perlengkapan Bayi Terlengkap & Berkualitas</h1>
                    <p>Dapatkan semua kebutuhan si kecil dengan kualitas terbaik, harga terjangkau, dan pengiriman cepat. Mulai dari pakaian, mainan, hingga peralatan makan - semua ada di sini!</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn-primary">Belanja Sekarang</a>
                    </div>
                </div>
                <div class="hero-visual">
                    <img src="{{asset('own_assets/images/clothes.jpg')}}" alt="Baby Clothes" class="hero-image">
                    <img src="{{asset('own_assets/images/toys.jpg')}}" alt="Baby Toys" class="hero-image">
                    <img src="{{asset('own_assets/images/lotions.jpg')}}" alt="Baby Nursery" class="hero-image large">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Siap Memberikan yang Terbaik untuk Si Kecil?</h2>
                <p>Bergabunglah dengan ribuan orang tua yang telah mempercayakan kebutuhan bayi mereka kepada kami</p>
                <a href="#" class="cta-button">Belanja Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div>
                    <div class="footer-logo">
                        <div class="footer-logo-icon">
                            <img src="{{ asset('own_assets/images/logo.png') }}" alt="" width="80px">
                        </div>
                    </div>
                    <p class="footer-desc">Toko perlengkapan bayi terlengkap dengan kualitas terbaik dan harga terjangkau. Memberikan yang terbaik untuk si kecil kesayangan Anda.</p>
                </div>
                <div>
                    <h3 class="footer-title">Legal</h3>
                    <a href="/terms-and-conditions" class="footer-link">Syarat & Ketentuan</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Haritsa Babyshop. Semua hak dilindungi undang-undang.</p>
            </div>
        </div>
    </footer>
</body>
</html>