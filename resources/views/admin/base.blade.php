<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagan Chiya Cafe Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e0f0e0 100%);
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            color: #2c3e50;
        }

        .sidebar {
            width: 280px;
            background: linear-gradient(180deg, #2f7b3e 0%, #1e3a2e 100%);
            color: #ffffff;
            padding: 30px 20px;
            box-shadow: 8px 0 30px rgba(0, 0, 0, 0.2);
            transition: width 0.3s ease;
        }

        .sidebar .header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .sidebar h2 {
            margin: 0;
            font-size: 1.9em;
            font-weight: 700;
            color: #ffffff;
        }

        .sidebar .admin-label {
            font-size: 0.95em;
            background: rgba(255, 255, 255, 0.95);
            padding: 5px 12px;
            border-radius: 12px;
            color: #2f7b3e;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 20px;
        }

        .sidebar .admin-label i {
            font-size: 0.95em;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 25px 0 0 0;
        }

        .sidebar ul li {
            padding: 18px 20px;
            margin: 6px 0;
            color: #f1f5f9;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 1.15em;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .sidebar ul li i {
            font-size: 1.25em;
            color: #4a9c5c;
        }

        .sidebar ul li:hover {
            color: #ffffff;
            transform: translateX(5px);
        }

        .sidebar ul li:hover i {
            color: #ffffff;
        }

        .sidebar ul li.active {
            color: #2f7b3e;
        }

        .sidebar ul li.active i {
            color: #2f7b3e;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 80px;
                padding: 20px 10px;
                box-shadow: 8px 0 30px rgba(0, 0, 0, 0.2);
            }

            .sidebar h2 {
                font-size: 1.3em;
            }

            .sidebar .header span,
            .sidebar .admin-label {
                display: none;
            }

            .sidebar ul li {
                justify-content: center;
                padding: 15px;
            }

            .sidebar ul li span {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="header">
            <i class="fas fa-mug-hot"></i>
            <h2><span>Bagan Chiya Cafe</span></h2>
        </div>
        <div class="admin-label"><i class="fas fa-user-shield"></i> Admin Panel</div>
        <ul>
            <li><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></li>
            <li><i class="fas fa-utensils"></i><span>Menu Management</span></li>
            <li><i class="fas fa-book-open"></i><span>Our Story</span></li>
            <li><i class="fas fa-images"></i><span>Gallery</span></li>
            <li><i class="fas fa-info-circle"></i><span>About Us</span></li>
        </ul>
    </div>
</body>

</html>
