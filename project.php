<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Project Discussion</title>

<style>

/* Reset */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

/* Background */
body{
    min-height:100vh;
    background:linear-gradient(135deg,#2563eb,#7c3aed);
    display:flex;
    flex-direction:column;
}

/* Header */
header{
    background:rgba(0,0,0,0.25);
    color:white;
    text-align:center;
    padding:25px;
    backdrop-filter:blur(5px);
}

/* Container */
.container{
    width:90%;
    max-width:900px;
    margin:40px auto;
    background:rgba(255,255,255,0.95);
    padding:30px;
    border-radius:15px;
    box-shadow:0 15px 30px rgba(0,0,0,0.2);
    flex:1;
}

/* Headings */
h2{
    color:#2563eb;
    margin-bottom:15px;
}

/* Form */
.form-group{
    margin-bottom:15px;
}

label{
    font-weight:bold;
    color:#333;
}

input, textarea, select{
    width:100%;
    padding:10px;
    margin-top:5px;
    border-radius:6px;
    border:1px solid #ccc;
    font-size:14px;
}

textarea{
    resize:none;
    height:90px;
}

/* Button */
.btn{
    background:#2563eb;
    color:white;
    padding:10px 22px;
    border:none;
    border-radius:6px;
    font-weight:bold;
    cursor:pointer;
}

.btn:hover{
    background:#1e40af;
}

/* Post Card */
.post{
    background:#f9fafb;
    border-left:5px solid #7c3aed;
    padding:15px;
    border-radius:8px;
    margin-bottom:15px;
}

.post h4{
    color:#1e3a8a;
    margin-bottom:5px;
}

.post p{
    color:#444;
    margin:8px 0;
}

.post-info{
    font-size:13px;
    color:#666;
    margin-bottom:6px;
}

/* Status Badges */
.status{
    padding:3px 8px;
    border-radius:12px;
    font-size:12px;
    font-weight:bold;
}

.ongoing{
    background:#fef3c7;
    color:#92400e;
}

.completed{
    background:#d1fae5;
    color:#065f46;
}

.planning{
    background:#e0e7ff;
    color:#3730a3;
}

/* Footer */
footer{
    background:rgba(0,0,0,0.3);
    color:white;
    text-align:center;
    padding:15px;
}

</style>
</head>

<body>

<!-- Header -->
<header>
    <h1>Project Discussion Forum</h1>
    <p>Discuss • Develop • Deliver</p>
</header>

<!-- Main -->
<div class="container">

    <!-- New Post -->
    <h2>Start New Discussion</h2>

    <form>

        <div class="form-group">
            <label>Project Title</label>
            <input type="text" placeholder="Enter project title" required>
        </div>

        <div class="form-group">
            <label>Project Type</label>
            <select required>
                <option value="">Select Type</option>
                <option>Web Development</option>
                <option>Mobile App</option>
                <option>AI / ML</option>
                <option>IoT</option>
                <option>Software</option>
                <option>Other</option>
            </select>
        </div>

        <div class="form-group">
            <label>Project Status</label>
            <select required>
                <option value="">Select Status</option>
                <option>Planning</option>
                <option>Ongoing</option>
                <option>Completed</option>
            </select>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea placeholder="Describe your project..."></textarea>
        </div>

        <button class="btn">Post Discussion</button>

    </form>

    <br>

    <!-- Discussions -->
    <h2>Recent Projects</h2>

    <!-- Post 1 -->
    <div class="post">

        <h4>College Management System</h4>

        <div class="post-info">
            Type: Web Development |
            Status: <span class="status ongoing">Ongoing</span>
        </div>

        <p>
            Need help in designing database structure.
        </p>

        <span>By Rahul • 2 days ago</span>

    </div>

    <!-- Post 2 -->
    <div class="post">

        <h4>AI Chatbot</h4>

        <div class="post-info">
            Type: AI / ML |
            Status: <span class="status completed">Completed</span>
        </div>

        <p>
            Finished basic chatbot using Python.
            Any suggestions for improvement?
        </p>

        <span>By Anjali • 4 days ago</span>

    </div>

    <!-- Post 3 -->
    <div class="post">

        <h4>Smart Attendance System</h4>

        <div class="post-info">
            Type: IoT |
            Status: <span class="status planning">Planning</span>
        </div>

        <p>
            Planning to use RFID. Looking for teammates.
        </p>

        <span>By Karthik • 1 week ago</span>

    </div>

</div>

<!-- Footer -->
<footer>
    <p>© 2026 Your Website | Project Discussion</p>
</footer>

</body>
</html>
