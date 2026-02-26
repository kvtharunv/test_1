<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>

    <style>

        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f3f4f6;
        }

        /* Header */
        header {
            background: #1d4ed8;
            color: white;
            padding: 25px;
            text-align: center;
        }

        /* Container */
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
        }

        h2 {
            color: #1d4ed8;
            margin-bottom: 15px;
            text-align: center;
        }

        /* About Section */
        .about {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            text-align: center;
        }

        .about p {
            color: #555;
            line-height: 1.6;
        }

        /* Members Section */
        .members {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .member-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }

        .member-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .member-card h3 {
            margin-bottom: 5px;
            color: #1e3a8a;
        }

        .member-card p {
            color: #555;
            font-size: 14px;
        }

        /* Discussion Section */
        .discussion {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .post {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .post:last-child {
            border-bottom: none;
        }

        .post h4 {
            color: #1d4ed8;
            margin-bottom: 5px;
        }

        .post p {
            color: #555;
        }

        /* Join Button */
        .join-box {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            background: #1d4ed8;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 6px;
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
        <h1>Student Community</h1>
        <p>Connect • Learn • Grow Together</p>
    </header>

    <!-- Main Container -->
    <div class="container">

        <!-- About -->
        <div class="about">
            <h2>About Our Community</h2>
            <p>
                This community is created for students to share ideas,
                help each other, and grow together.
                Join us to collaborate and learn.
            </p>
        </div>

        <!-- Members -->
        <h2>Community Members</h2>

        <div class="members">

            <div class="member-card">
                <img src="https://via.placeholder.com/80" alt="Member">
                <h3>Rahul</h3>
                <p>Web Developer</p>
            </div>

            <div class="member-card">
                <img src="https://via.placeholder.com/80" alt="Member">
                <h3>Anjali</h3>
                <p>Designer</p>
            </div>

            <div class="member-card">
                <img src="https://via.placeholder.com/80" alt="Member">
                <h3>Karthik</h3>
                <p>Programmer</p>
            </div>

            <div class="member-card">
                <img src="https://via.placeholder.com/80" alt="Member">
                <h3>Pooja</h3>
                <p>Content Writer</p>
            </div>

        </div>

        <!-- Discussions -->
        <h2>Latest Discussions</h2>

        <div class="discussion">

            <div class="post">
                <h4>How to learn HTML faster?</h4>
                <p>Posted by Rahul • 2 days ago</p>
            </div>

            <div class="post">
                <h4>Best project ideas for college</h4>
                <p>Posted by Anjali • 4 days ago</p>
            </div>

            <div class="post">
                <h4>Free coding resources</h4>
                <p>Posted by Karthik • 1 week ago</p>
            </div>

        </div>

        <!-- Join -->
        <div class="join-box">
            <h2>Join Our Community</h2>
            <p>Become a part of our growing network</p>
            <br>
            <a href="register.html" class="btn">Join Now</a>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>© 2026 Your Website | Community Page</p>
    </footer>

</body>
</html>
