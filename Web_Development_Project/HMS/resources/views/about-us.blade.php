<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MyFitJourney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

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

        .hero-about {
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

        .about-us-section {
            background-color: #ffffff;
            padding: 50px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: -50px;
            border-radius: 10px;
        }

        .about-us-title {
            font-size: 3.5rem;
            color: #28a745;
            font-weight: 900;
            margin-bottom: 20px;
            text-align: center;
        }

        .about-us-content {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
            text-align: center;
            margin-top: 20px;
        }

        .about-us-content strong {
            color: #ff4500;
        }

        .about-us-content p {
            margin-bottom: 30px;
        }

        .coach-section {
            background-color: #FAF3E0;
            margin-top: 40px;
            padding: 40px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .coach-section h3 {
            font-size: 3rem;
            color: blue;
            font-weight: 900;
            margin-bottom: 30px;
            text-align: center;
        }

        .coach-category {
            margin-bottom: 40px;
        }

        .coach-category h4 {
            font-size: 1.8rem;
            color: #B22222;
            font-weight: 900;
            margin-bottom: 20px;
            text-align: center;
        }

        .coach-profile {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .coach-profile:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .coach-profile img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #28a745;
        }

        .coach-details {
            font-size: 1rem;
            line-height: 1.5;
        }

        .coach-name {
            font-weight: bold;
            color: black;
            font-size: 1.2rem;
        }

        .coach-role {
            color: #555;
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .coach-details p {
            margin: 0;
        }

        footer {
            background-color: #f8f9fa;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <div class="contact-info">
            <span>📞 +011 123 4455 6789</span>
            <a href="mailto:mail@gmail.com">📧 myfitjourney@gmail.com</a>
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

    <div class="hero-about">
        <div class="hero-content">
            <h1>Welcome to MyFitJourney</h1>
            <p>Join the Movement to a Healthier You</p>
        </div>
    </div>

    <section class="about-us-section">
    <div class="container">
        <h2 class="about-us-title">Who We Are</h2>
        <p class="about-us-content"> Welcome to <strong>MyFitJourney</strong>. We offer quality courses in Wing Chun, swimming, dance, gym, and yoga, all designed to help you stay healthy and active. </p> 
        <p class="about-us-content"> Join us today and start your journey to better health and wellness. </p>
        <div class="coach-section" style="border: 2px solid black; padding: 20px;">
            <h3 class="about-us-title">Our Professional Coaches</h3>
            <div class="coach-category">
                <h4>Wing Chun Coaches</h4>
                <div class="coach-profile">
                    <img src="/images/wingchun_coach.png" alt="Coach 1">
                    <div class="coach-details">
                        <p class="coach-name">Master Wong</p>
                        <p class="coach-role">Specialized in Wing Chun</p>
                        <p>Email: masterwong@wingchun.com | Phone: 012-3616701</p>
                        <p>Course Details: Join our Wing Chun classes to learn effective self-defense techniques and improve your focus and agility. Suitable for beginners and experienced martial artists alike.</p>
                    </div>
                </div>
                
                <div class="coach-profile">
                    <img src="/images/wingchun2_coach.png" alt="Coach 2">
                    <div class="coach-details">
                        <p class="coach-name">Daniel Yee</p>
                        <p class="coach-role">Specialized in Wing Chun</p>
                        <p>Email:danielyee@wingchun.com | Phone: 012-3456480</p>
                        <p>Course Details: Learn the fundamentals of Wing Chun with Daniel Yee. Enhance your self-defense skills and mental focus in our online classes, designed for both beginners and seasoned practitioners.</p>
                    </div>
                </div>
            </div>

            <div class="coach-category">
                <h4>Swimming Coaches</h4>
                <div class="coach-profile">
                    <img src="/images/swimming_coach.png" alt="Coach 3">
                    <div class="coach-details">
                        <p class="coach-name">Jordan Chen</p>
                        <p class="coach-role">Specialized in Swimming</p>
                        <p>Email: jordanchen@swimacademy.com | Phone: 012-9873523</p>
                        <p>Course Details: Join our affordable swimming classes with Jordan Chen. Learn the fundamentals of swimming, improve your technique, and gain confidence in the water. Suitable for swimmers of all levels.</p>
                    </div>
                </div>
                
                <div class="coach-profile">
                    <img src="/images/swimming2_coach.png" alt="Coach 4">
                    <div class="coach-details">
                        <p class="coach-name">Sarah Tan</p>
                        <p class="coach-role">Specialized in Swimming</p>
                        <p>Email: sarahTan@swimacademy.com | Phone: 012-9976341</p>
                        <p>Course Details: Enhance your skills with Sarah Tan's affordable swimming sessions. Perfect for beginners and experienced swimmers, offering personalized guidance at a low cost.</p>
                    </div>
                </div>
            </div>

            <div class="coach-category">
                <h4>Dance Coaches</h4>
                <div class="coach-profile">
                    <img src="/images/dancing_coach.jpg" alt="Coach 5">
                    <div class="coach-details">
                        <p class="coach-name">Daniel Lee</p>
                        <p class="coach-role">Specialized in Dance</p>
                        <p>Email: daniellee@dancemoves.com | Phone: 012-5874903</p>
                        <p>Course Details: Join Daniel Lee's affordable dance classes and explore various styles such as hip-hop, contemporary, and jazz. Learn with an experienced choreographer at a low cost.</p>
                    </div>
                </div>
                
                <div class="coach-profile">
                    <img src="/images/dance2_coach.png" alt="Coach 6">
                    <div class="coach-details">
                        <p class="coach-name">Emily Wong</p>
                        <p class="coach-role">Specialized in Dance</p>
                        <p>Email: emilywong@dancemoves.com | Phone: 012-6174912</p>
                        <p>Course Details: Learn diverse dance styles with Emily Wong in affordable classes. From hip-hop to ballet, improve your skills at a low price with personalized sessions.</p>
                    </div>
                </div>
            </div>

            <div class="coach-category">
                <h4>Gym Coaches</h4>
                <div class="coach-profile">
                    <img src="/images/gym_coach.png" alt="Coach 7">
                    <div class="coach-details">
                        <p class="coach-name">Jason Lim</p>
                        <p class="coach-role">Specialized in Gym & Fitness</p>
                        <p>Email: jessicalim@fitnesspro.com | Phone: 012-7739014</p>
                        <p>Course Details: Stay fit and active with Jason Lim's affordable gym training classes. Get expert guidance in strength training, cardio workouts, and personalized fitness tips at a low cost.</p>
                    </div>
                </div>

                <div class="coach-profile">
                    <img src="/images/gym2_coach.png" alt="Coach 8">
                    <div class="coach-details">
                        <p class="coach-name">Alex Tan</p>
                        <p class="coach-role">Specialized in Gym & Fitness</p>
                        <p>Email: alextan@fitnesspro.com | Phone: 012-3789016</p>
                        <p>Course Details: Achieve your fitness goals with Alex Tan's affordable gym training sessions. Whether you're building muscle, losing weight, or improving endurance, Alex offers expert guidance at an affordable price.</p>
                    </div>
                </div>
            </div>

            <div class="coach-category">
                <h4>Yoga Coaches</h4>
                <div class="coach-profile">
                    <img src="/images/yoga_coach.png" alt="Coach 9">
                    <div class="coach-details">
                        <p class="coach-name">Aarav Patel</p>
                        <p class="coach-role">Specialized in Yoga</p>
                        <p>Email: aaravpatel@yogamind.com | Phone: 012-7090121</p>
                        <p>Course Details: Rejuvenate your mind and body with Aarav Patel's affordable yoga sessions. Improve your flexibility, breathing techniques, and mindfulness at a low cost in classes.</p>
                    </div>
                </div>

                <div class="coach-profile">
                    <img src="/images/yoga_coach2.png" alt="Coach 10">
                    <div class="coach-details">
                        <p class="coach-name">Priya Desai</p>
                        <p class="coach-role">Specialized in Yoga</p>
                        <p>Email: priyadesai@yogamind.com | Phone: 012-9893126</p>
                        <p>Course Details: Join Priya Desai's affordable yoga sessions. Improve flexibility, mental clarity, and mindfulness through low-cost classes designed for all levels of yoga enthusiasts.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<footer>
    <footer class="text-center py-4 bg-secondary text-white mt-5">
        <p>&copy; 2025 MyFit Journey. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
