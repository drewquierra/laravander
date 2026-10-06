<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravander | Artisanal Perfumes</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f0e6f6 0%, #d8c2e7 50%, #9e7bb5 100%);
            color: #2e153b;
            padding: 20px 40px;
        }

        /* Glassmorphic Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 40px;
            padding: 14px 28px;
            margin-bottom: 50px;
            box-shadow: 0 8px 24px rgba(92, 45, 114, 0.08);
        }

        .logo {
            font-size: 22px;
            font-weight: 800;
            letter-spacing: 2px;
            color: #431d52;
            text-transform: uppercase;
        }

        .nav-links a {
            text-decoration: none;
            color: #4a215d;
            font-weight: 600;
            font-size: 14px;
            margin-left: 14px;
            padding: 8px 18px;
            border-radius: 20px;
            transition: all 0.25s ease;
        }

        .nav-links a.btn-glass {
            background: rgba(255, 255, 255, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        .nav-links a.btn-primary {
            background: linear-gradient(135deg, #7a468c, #522763);
            color: #ffffff;
            box-shadow: 0 4px 14px rgba(82, 39, 99, 0.25);
        }

        .nav-links a:hover {
            transform: translateY(-1px);
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto 60px auto;
            flex-wrap: wrap;
        }

        .hero-text {
            flex: 1;
            min-width: 320px;
        }

        .badge {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.6);
            color: #64317a;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 16px;
        }

        .hero-text h1 {
            font-size: 48px;
            line-height: 1.15;
            color: #3b1d4a;
            margin-bottom: 16px;
        }

        .hero-text p {
            color: #5d3a6d;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 28px;
            max-width: 500px;
        }

        .hero-cta {
            display: inline-block;
            text-decoration: none;
            padding: 14px 34px;
            border-radius: 30px;
            background: linear-gradient(135deg, #7a468c, #522763);
            color: #ffffff;
            font-weight: 600;
            letter-spacing: 1px;
            box-shadow: 0 10px 24px rgba(82, 39, 99, 0.35);
            transition: transform 0.2s ease;
        }

        .hero-cta:hover {
            transform: translateY(-2px);
        }

        /* Glass Showcase Cards */
        .collection {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 26px;
            color: #3b1d4a;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }

        .card {
            background: rgba(255, 255, 255, 0.45);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.7);
            border-radius: 24px;
            padding: 24px;
            text-align: center;
            box-shadow: 0 16px 32px rgba(92, 45, 114, 0.12);
            transition: transform 0.25s ease;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        .bottle-icon {
            font-size: 40px;
            margin-bottom: 12px;
        }

        .card h3 {
            font-size: 18px;
            color: #3b1d4a;
            margin-bottom: 6px;
        }

        .card .scent-notes {
            font-size: 13px;
            color: #6a447e;
            margin-bottom: 14px;
        }

        .card .price {
            font-size: 17px;
            font-weight: 700;
            color: #4b1f60;
        }
    </style>
</head>
<body>

    <!-- Header / Navigation -->
    <nav>
        <div class="logo">LARAVANDER</div>
        <div class="nav-links">
            <a href="/login" class="btn-glass">Sign In</a>
            <a href="/register" class="btn-primary">Sign Up</a>
        </div>
    </nav>

    <!-- Main Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <span class="badge">EAU DE PARFUM</span>
            <h1>Bottling the Essence of Elegance.</h1>
            <p>Infused with crushed lavender, velvet iris, and woody undertones. Laravander blends botanical luxury with timeless craft.</p>
            <a href="#collection" class="hero-cta">EXPLORE COLLECTION</a>
        </div>
    </section>

    <!-- Featured Fragrances Grid -->
    <section class="collection">
        <h2 class="section-title">SIGNATURE ESSENCES</h2>
        <div class="grid">
            <div class="card">
                <div class="bottle-icon">🪻</div>
                <h3>Dusk Mist</h3>
                <p class="scent-notes">Wild French Lavender & White Musk</p>
                <div class="price">₱2,450</div>
            </div>
            <div class="card">
                <div class="bottle-icon">✨</div>
                <h3>Purple Amber</h3>
                <p class="scent-notes">Smoked Vanilla, Patchouli & Iris</p>
                <div class="price">₱2,800</div>
            </div>
            <div class="card">
                <div class="bottle-icon">🌿</div>
                <h3>L'Aurore</h3>
                <p class="scent-notes">Bergamot, Lavender Blossom & Cedar</p>
                <div class="price">₱2,600</div>
            </div>
        </div>
    </section>

</body>
</html>