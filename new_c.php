<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Community</title>

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
    background:linear-gradient(135deg,#0f172a,#2563eb,#7c3aed);
    display:flex;
    flex-direction:column;
}

/* Header */
header{
    background:rgba(0,0,0,0.3);
    color:white;
    text-align:center;
    padding:25px;
}

/* Main Box */
.container{
    width:90%;
    max-width:700px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

/* Headings */
h2{
    color:#2563eb;
    margin-bottom:20px;
    text-align:center;
}

/* Form */
.form-group{
    margin-bottom:15px;
}

label{
    font-weight:bold;
    color:#333;
}

input, select, textarea{
    width:100%;
    padding:10px;
    margin-top:6px;
    border-radius:6px;
    border:1px solid #ccc;
    font-size:14px;
}

textarea{
    resize:none;
    height:80px;
}

/* Button */
.btn{
    width:100%;
    background:#2563eb;
    color:white;
    padding:12px;
    border:none;
    border-radius:8px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
}

.btn:hover{
    background:#1e40af;
}

/* Preview Section */
.preview{
    margin-top:25px;
    padding:15px;
    background:#f1f5f9;
    border-left:5px solid #7c3aed;
    border-radius:6px;
}

.preview h3{
    margin-bottom:10px;
    color:#1e3a8a;
}

.preview p{
    font-size:14px;
    color:#444;
}

/* Footer */
footer{
    margin-top:auto;
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
    <h1>Create New Community</h1>
    <p>Build • Connect • Grow</p>
</header>

<!-- Main -->
<div class="container">

    <h2>Community Details</h2>

    <form>

        <div class="form-group">
            <label>Community Name</label>
            <input type="text" placeholder="Enter community name" required>
        </div>

        <div class="form-group">
            <label>Community Type</label>
            <select required>
                <option value="">Select Type</option>
                <option>Technical</option>
                <option>Coding</option>
                <option>Design</option>
                <option>Business</option>
                <option>Gaming</option>
                <option>Other</option>
            </select>
        </div>

        <div class="form-group">
            <label>Start Date</label>
            <input type="date" required>
        </div>

        <div class="form-group">
            <label>Start Time</label>
            <input type="time" required>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select required>
                <option value="">Select Status</option>
                <option>Upcoming</option>
                <option>Active</option>
                <option>Closed</option>
            </select>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea placeholder="Describe your community..."></textarea>
        </div>

        <button class="btn">Create Community</button>

    </form>

    <!-- Preview -->
    <div class="preview">
        <h3>Example Preview</h3>
        <p><b>Name:</b> Web Developers Hub</p>
        <p><b>Type:</b> Coding</p>
        <p><b>Date:</b> 12-03-2026</p>
        <p><b>Time:</b> 10:00 AM</p>
        <p><b>Status:</b> Active</p>
    </div>

</div>

<!-- Footer -->
<footer>
    <p>© 2026 Your Website | Community System</p>
</footer>

</body>
</html>
