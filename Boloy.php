<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: 'Helvetica Neue', sans-serif;
            color: #fff;
        }

        /* Fullscreen background */
        .hero {
            position: relative;
            background: url('https://img.utdstc.com/screen/476/1cc/4761cc12d46d5f4a5204b0be0f9d28613835960a8587e15c2978402ca757ba81:600') no-repeat center center/cover;
            background-size: cover; /* Ensure the image covers the entire background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .hero h1 {
            font-size: 60px;
            font-weight: 700;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }

        .cta-button {
            background-color: #ff5733;
            color: #fff;
            padding: 15px 40px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .cta-button:hover {
            background-color: #e74c3c;
            transform: scale(1.05);
        }

        /* Info section */
        section {
            background-color: #f4f4f4;
            padding: 80px 20px;
            text-align: center;
        }

        section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        section p {
            font-size: 18px;
            color: #555;
            width: 70%;
            margin: 0 auto;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Hero Section (Full-screen background) -->
    <div class="hero">
        <div>
            <h1>Welcome to my Happy Studio Landing page.</h1>
            <p>Happiness isn't something you wait for—it's something you create, one small moment at a time.</p>
            <a href="#" class="cta-button">press to Start:></a>
        </div>
    </div>

    <!-- Info Section -->
    <section>
        <h2>Why Choose Us?</h2>
        <p>We believe that true success is measured by the happiness and satisfaction of our clients. Our approach is simple—deliver results that bring joy and long-lasting impact to both your business and your customers.</p>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>© 2025 Your Friend | All Rights Reserved</p>
    </footer>

</body>

</html>
