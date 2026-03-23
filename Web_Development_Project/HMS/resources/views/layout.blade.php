<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .top-bar {
            background-color: #f8f9fa;
            padding: 10px 80px;
            font-size: 14px;
            color: #555;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar .contact-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .top-bar .contact-info a {
            color: #28a745;
            text-decoration: none;
        }

        .top-bar .contact-info a:hover {
            color: #218838;
        }

        .navbar {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding-left: 80px;
        }

        .navbar-brand {
            color: #28a745;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #218838;
        }

        .navbar-nav .nav-link {
            color: #555;
            margin-right: 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #28a745;
        }

        .logout-btn {
            background: linear-gradient(135deg, #ff4b5c, #dc3545);
            color: #fff;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.9rem;
            transition: background 0.3s ease-in-out, transform 0.2s ease;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .logout-btn:hover {
            background: linear-gradient(135deg, #ff6b7d, #bd2130);
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .logout-btn:active {
            background: linear-gradient(135deg, #dc3545, #a71d2a);
            transform: scale(0.95);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero {
            background: url('/images/background.png') no-repeat center center/cover;
            min-height: 40vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin: 0;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-top: 10px;
            margin-bottom: 0;
        }

        footer {
            background-color: #f8f9fa;
            text-align: center;
            margin-top: 30px;
        }

        .content-section {
            max-width: 1800px; 
            margin: 0 auto;
        }
    </style>
</head>
<body>
    
    <div class="top-bar">
        <div class="contact-info">
            <span>📞 +011 123 4455 6789</span>
            <a href="mailto:myfitjourney@gmail.com">📧 myfitjourney@gmail.com</a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="/images/logo.png" alt="" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('addRegister') }}">Add New Register</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('showRegister') }}">Register List</a></li>
            </ul>
            <form action="/logout" method="POST" class="ms-3">
                <button type="submit" class="btn logout-btn">Logout</button>
            </form>
        </div>
    </div>
</nav>

    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to MyFitJourney</h1>
            <p>Join the Movement to a Healthier You</p>
        </div>
    </div>

    <div class="container mt-5 content-section">
        @yield('content')
    </div>

    <footer class="text-center py-4 bg-secondary text-white mt-5">
        <p>&copy; 2025 One-Health. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
