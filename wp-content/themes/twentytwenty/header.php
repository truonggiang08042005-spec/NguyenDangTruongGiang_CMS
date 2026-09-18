<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <style>
        /* Reset cơ bản */
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8fafc;
            color: #334155;
        }

        /* Thanh Header chính */
        .modern-header {
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
        }

        .header-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        /* 1. Logo / Tên Trang */
        .site-branding a {
            font-size: 22px;
            font-weight: 800;
            color: #0f172a;
            text-decoration: none;
            letter-spacing: -0.5px;
            transition: color 0.2s ease;
        }
        .site-branding a:hover {
            color: #0284c7;
        }

        /* 2. Menu Điều Hướng */
        .main-nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 28px;
        }

        .main-nav a {
            color: #475569;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.2s ease;
            padding: 6px 0;
            position: relative;
        }

        .main-nav a:hover {
            color: #0284c7;
        }

        /* 3. Form Tìm Kiếm Tối Giản */
        .header-search {
            display: flex;
            align-items: center;
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 4px 6px 4px 14px;
            transition: all 0.2s ease;
        }

        .header-search:focus-within {
            background: #ffffff;
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
        }

        .header-search input[type="search"] {
            border: none !important;
            background: transparent !important;
            outline: none !important;
            font-size: 14px !important;
            color: #1e293b !important;
            width: 160px;
            padding: 4px 0 !important;
            box-shadow: none !important;
        }

        .header-search input::placeholder {
            color: #94a3b8;
        }

        .header-search button {
            background: #0284c7 !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 16px !important;
            padding: 6px 14px !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            cursor: pointer !important;
            transition: background-color 0.2s ease !important;
        }

        .header-search button:hover {
            background: #0369a1 !important;
        }

        /* Khung bọc nội dung toàn trang để căn giữa */
        .site-main-content {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

        /* Responsive di động */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 12px;
            }
            .main-nav ul {
                gap: 16px;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="modern-header">
    <div class="header-container">
        
        <!-- Logo / Tên Trang Web -->
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>

        <!-- Menu Điều Hướng -->
        <nav class="main-nav">
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a></li>

            </ul>
        </nav>

        <!-- Ô Tìm Kiếm Bo Tròn Tinh Tế -->
        <form role="search" method="get" class="header-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" placeholder="Tìm sản phẩm..." value="<?php echo get_search_query(); ?>" name="s" required />
            <button type="submit">Tìm</button>
        </form>

    </div>
</header>

<!-- Khung chứa nội dung trang bên dưới -->
<div class="site-main-content">
