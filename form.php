<?php
// 🌿 Step 1: Handle Form Submission
$success_message = "";
$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $desc = trim($_POST['desc']);

    if (!empty($name) && !empty($email) && !empty($desc)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contactus";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            $error_message = "Connection failed: " . mysqli_connect_error();
        } else {
            // Using prepared statements to prevent SQL injection
            $sql = "INSERT INTO `contact` (`Name`, `email`, `Concern`, `Date`) VALUES (?, ?, ?, current_timestamp())";
            $stmt = mysqli_prepare($conn, $sql);
            
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sss", $name, $email, $desc);
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    // Prevent form resubmission
                    header("Location: ". $_SERVER['PHP_SELF'] . "?success=1");
                    exit();
                } else {
                    $error_message = "❌ Error: " . mysqli_error($conn);
                }
                mysqli_stmt_close($stmt);
            } else {
                 $error_message = "❌ Error preparing statement: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    } else {
        $error_message = "⚠️ Please fill in all fields before submitting.";
    }
}

//  Step 2: Show success message if redirected
if (isset($_GET['success'])) {
    $success_message = "✅ Your entry has been submitted successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>forms in php</title>
<style>
/* --- Reset --- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* --- Background & Base --- */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #0f172a; /* Deep navy */
    color: #e0e0e0;
    overflow-x: hidden;
}

/* --- Layout --- */
.container {
    display: flex;
    min-height: 100vh;
}

/* --- Sidebar --- */
.navbar {
    width: 250px;
    background-color: #1e293b; /* Dark blue-gray */
    padding: 25px 20px;
    display: flex;
    flex-direction: column;
    overflow-y: auto;
    position: fixed;
    height: 100vh;
    border-right: 1px solid #334155;
}

.navlist {
    list-style: none;
}

.navlist li {
    margin: 15px 0;
}

.navlist a {
    text-decoration: none;
    color: #cbd5e1;
    font-weight: 500;
    font-size: 18px;
    padding: 12px 15px;
    display: block;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.navlist a:hover {
    background-color: rgba(0, 245, 200, 0.1);
    color: #00f5c8;
}

/* --- Main Content --- */
.main-content {
    flex-grow: 1;
    padding: 40px;
    margin-left: 250px;
}

/* --- Content Box --- */
.box-main {
    border: none;
    border-top: 5px solid #00f5c8;
    padding: 30px 25px;
    background-color: #1e293b;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
}

/* --- Headings --- */
h1 {
    color: #00f5c8;
    font-size: 32px;
    margin-bottom: 25px;
    text-align: center;
    font-weight: 600;
}

h2 {
    color: #38bdf8;
    font-size: 24px;
    margin-bottom: 15px;
    font-weight: 500;
}

/* --- Form --- */
form {
    margin-top: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
    color: #e0e0e0;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #334155;
    border-radius: 8px;
    font-size: 16px;
    background-color: #0f172a;
    color: #e0e0e0;
    outline: none;
    transition: all 0.3s ease;
}

input:focus, textarea:focus {
    border-color: #00f5c8;
    box-shadow: 0 0 6px rgba(0, 245, 200, 0.4);
}

/* --- Button --- */
button {
    background: linear-gradient(90deg, #00f5c8, #00c3a3);
    color: #0f172a;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 600;
}

button:hover {
    background: linear-gradient(90deg, #00c3a3, #00f5c8);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 245, 200, 0.25);
}

/* --- Data Entries --- */
div[style*="background:#fcfaf5"] {
    background: #0f172a !important;
    border: 1px solid #334155 !important;
    color: #cbd5e1 !important;
}

/* --- Responsive --- */
@media (max-width: 768px) {
    .navbar {
        width: 200px;
        padding: 20px 15px;
    }

    .main-content {
        margin-left: 200px;
        padding: 25px;
    }

    .box-main {
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .navbar {
        position: relative;
        width: 100%;
        height: auto;
    }

    .main-content {
        margin-left: 0;
    }
}
</style>
</head>
<body>

<div class="container">
    <nav class="navbar">
        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="prog.html">Programs</a></li>
            <li><a href="mysql.php">Integrating PHP and Database</a></li>
            <li><a href="#">Integrating Forms and Database</a></li>
            <li><a href="file.php">File System</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>

    <section class="main-content">
        <div class="box-main">
            <h1>Integrating FORMS and DATABASE</h1>
            <h2>Contact us for your Concern</h2>

<?php
//  Display messages here
if (!empty($success_message)) {
    echo "<div style='color:green; font-weight:bold; margin-bottom:15px;'>
            $success_message
          </div>";
}
if (!empty($error_message)) {
    echo "<div style='color:red; font-weight:bold; margin-bottom:15px;'>
            $error_message
          </div>";
}
?>

            <form action="form.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <small>We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="desc" cols="30" rows="5"></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>

        <div style="margin-top:40px;">
<?php
//  Step 3: Display All Entries
$servername = "localhost";
$username = "root";
$password = "";
$database = "contactus";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

$sql = "SELECT * FROM `contact` ORDER BY `Date` DESC"; // Added ORDER BY
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

echo "<h3 style='color:#e0e0e0;'>$num records found in the Database</h3><br>"; // Changed color for dark mode

if ($num > 0) {
    while($row = mysqli_fetch_assoc($result)){
        // Used your CSS override for consistency
        echo "<div style='background:#fcfaf5; border:1px solid #d7d0c0; 
                     margin-bottom:10px; padding:10px; border-radius:8px;'>";
        echo "<strong>Name:</strong> " . htmlspecialchars($row['Name']) . "<br>";
        echo "<strong>Email:</strong> " . htmlspecialchars($row['email']) . "<br>";
        echo "<strong>Concern:</strong> " . htmlspecialchars($row['Concern']) . "<br>";
        echo "<strong>Date:</strong> " . $row['Date'] . "<br>";
        echo "</div>";
    }
}
?>
        </div>
    </section>
</div>

</body>
</html>