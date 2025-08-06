<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagan Chiya Cafe Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @stack('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #f4f9f4 0%, #e8f5e9 100%);
            margin: 0;
            display: flex;
            min-height: 100vh;
            color: #1a3c34;
        }

        .sidebar {
            width: 280px;
            background: linear-gradient(180deg, #276a2a 0%, #1b5e20 100%);
            color: #ffffff;
            padding: 30px 20px;
            box-shadow: 8px 0 25px rgba(0, 0, 0, 0.2);
            transition: width 0.3s ease, transform 0.3s ease;
        }

        .sidebar .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            margin-bottom: 25px;
            text-align: center;
        }

        .sidebar .header i {
            font-size: 2.5em;
            color: #81c784;
            background: rgba(255, 255, 255, 0.1);
            padding: 12px;
            border-radius: 50%;
            transition: transform 0.3s ease, background 0.3s ease, color 0.3s ease;
        }

        .sidebar .header i:hover {
            transform: scale(1.15);
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }

        .sidebar .header-text {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
        }

        .sidebar .header-text .bagan {
            font-size: 1.8em;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: -0.01em;
            line-height: 1.2;
        }

        .sidebar .header-text .chiya-cafe {
            font-size: 1.2em;
            font-weight: 500;
            color: #c8e6c9;
            letter-spacing: 0.02em;
        }

        .sidebar .admin-label {
            font-size: 0.85em;
            background: #ffffff;
            padding: 8px 16px;
            border-radius: 16px;
            color: #2e7d32;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 30px;
            font-weight: 500;
            margin-left: 3rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .sidebar .admin-label i {
            font-size: 0.9em;
        }

        .sidebar .admin-label:hover {
            transform: translateY(-2px);
            background: #f4f9f4;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 35px 0 0 0;
        }

        .sidebar ul li {
            padding: 18px 20px;
            margin: 8px 0;
            color: #c8e6c9;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 1.1em;
            font-weight: 500;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .sidebar ul li i {
            font-size: 1.3em;
            color: #81c784;
            transition: color 0.3s ease;
        }

        .sidebar ul li:hover {
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            transform: translateX(5px);
        }

        .sidebar ul li:hover i {
            color: #ffffff;
        }

        .sidebar ul li.active {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .sidebar ul li.active i {
            color: #ffffff;
        }

        /* Desktop (default: width >= 1024px) */
        @media (max-width: 1024px) {
            .sidebar {
                width: 240px;
                padding: 25px 15px;
            }

            .sidebar .header i {
                font-size: 2.2em;
                padding: 10px;
            }

            .sidebar .header-text .bagan {
                font-size: 1.6em;
            }

            .sidebar .header-text .chiya-cafe {
                font-size: 1.1em;
            }

            .sidebar .admin-label {
                font-size: 0.8em;
                padding: 7px 14px;
            }

            .sidebar ul li {
                font-size: 1.05em;
                padding: 16px 18px;
            }

            .sidebar ul li i {
                font-size: 1.25em;
            }
        }

        /* Tablet (768px <= width < 1024px) */
        @media (max-width: 768px) {
            .sidebar {
                width: 80px;
                padding: 20px 10px;
            }

            .sidebar .header i {
                font-size: 2em;
                padding: 8px;
            }

            .sidebar .header-text {
                display: none;
            }

            .sidebar .admin-label {
                display: none;
            }

            .sidebar ul {
                margin-top: 20px;
            }

            .sidebar ul li {
                justify-content: center;
                padding: 15px;
                margin: 6px 0;
            }

            .sidebar ul li span {
                display: none;
            }

            .sidebar ul li i {
                font-size: 1.4em;
            }

            .sidebar ul li:hover {
                transform: none;
                background: rgba(255, 255, 255, 0.25);
            }
        }

        /* Mobile (width < 768px) */
        @media (max-width: 480px) {
            .sidebar {
                width: 60px;
                padding: 15px 5px;
            }

            .sidebar .header i {
                font-size: 1.8em;
                padding: 6px;
            }

            .sidebar ul li {
                padding: 12px;
            }

            .sidebar ul li i {
                font-size: 1.3em;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="header">
            <i class="fas fa-leaf"></i>
            <div class="header-text">
                <span class="bagan">Bagan</span>
                <span class="chiya-cafe">Chiya Cafe</span>
            </div>
        </div>
        <div class="admin-label"><i class="fas fa-user-shield"></i> Admin Panel</div>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard.index') }}" style="color: inherit; text-decoration: none;">
                    <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.menu.index') }}" style="color: inherit; text-decoration: none;">
                    <i class="fas fa-utensils"></i><span>Menu</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.story.index') }}" style="color: inherit; text-decoration: none;">
                    <i class="fas fa-book-open"></i><span>Our Story</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.gallery.index') }}" style="color: inherit; text-decoration: none;">
                    <i class="fas fa-images"></i><span>Gallery</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.about.index') }}" style="color: inherit; text-decoration: none;">
                    <i class="fas fa-info-circle"></i><span>About Us</span>
                </a>
            </li>
        </ul>
    </div>
    <main style="flex:1;padding:30px;">
        @yield('content')
    </main>
    <script>
        document.querySelectorAll('.sidebar ul li').forEach(item => {
            item.addEventListener('click', () => {
                document.querySelectorAll('.sidebar ul li').forEach(i => i.classList.remove('active'));
                item.classList.add('active');
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
