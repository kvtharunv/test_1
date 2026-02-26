<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Center</title>

    <style>

        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f3f4f6;
        }

        /* Header */
        header {
            background-color: #1d4ed8;
            color: white;
            padding: 25px;
            text-align: center;
        }

        /* Main Section */
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            color: #1d4ed8;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* FAQ Section */
        .faq-box {
            background: #eef2ff;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 5px solid #1d4ed8;
            border-radius: 6px;
        }

        .faq-box h3 {
            margin-bottom: 8px;
            color: #1e3a8a;
        }

        /* Contact Box */
        .contact-box {
            background: #f9fafb;
            padding: 20px;
            border-radius: 8px;
            margin-top: 25px;
        }

        /* Button */
        .btn {
            display: inline-block;
            background: #1d4ed8;
            color: white;
            padding: 10px 22px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            font-weight: bold;
        }

        .btn:hover {
            background: #1e40af;
        }

        /* Footer */
        footer {
            background: #111827;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }

    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Help Center</h1>
        <p>We are here to support you</p>
    </header>

    <!-- Main Content -->
    <div class="container">

        <h2>Welcome</h2>
        <p>
            If you are facing any issues while using our website,
            you can find solutions here.
        </p>

        <h2>FAQs</h2>

        <div class="faq-box">
            <h3>How do I register?</h3>
            <p>Click on the Register button and fill in your details.</p>
        </div>

        <div class="faq-box">
            <h3>Forgot Password?</h3>
            <p>Use the "Forgot Password" option to reset your account.</p>
        </div>

        <div class="faq-box">
            <h3>How to contact support?</h3>
            <p>Send us an email or use our contact page.</p>
        </div>

        <div class="contact-box">
            <h2>Contact Support</h2>

            <p>Email: support@yourwebsite.com</p>
            <p>Phone: +91 98765 43210</p>

            <a href="contact.html" class="btn">Contact Page</a>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>© 2026 Your Website | All Rights Reserved</p>
    </footer>

</body>
</html>
