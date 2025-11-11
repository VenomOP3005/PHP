<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Programs - Warm Theme</title>
<style>
/* --- Reset --- */
* { margin: 0; padding: 0; box-sizing: border-box; }

html {
    scroll-behavior: smooth;
}

/* --- Background and Base --- */
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

.navlist { list-style: none; }
.navlist li { margin: 15px 0; }

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

/* --- Main Box --- */
.box-main {
    border: none;
    border-top: 5px solid #00f5c8;
    padding: 30px 25px;
    background-color: #1e293b;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    overflow-x: auto;
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

/* --- Program Grid --- */
.program-grid {
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    gap: 10px;
    margin-bottom: 30px;
}

.program-grid a {
    display: block;
    background-color: #0f172a;
    padding: 8px;
    text-align: center;
    border-radius: 6px;
    text-decoration: none;
    color: #cbd5e1;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid #334155;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.program-grid a:hover {
    background: linear-gradient(90deg, #00f5c8, #00c3a3);
    color: #0f172a;
    border-color: transparent;
}

/* --- Program Section --- */
.program-section {
    margin-top: 40px;
    border-top: 2px solid #334155;
    padding-top: 20px;
    background-color: transparent;
}

.program-section h2 {
    color: #38bdf8;
    font-size: 24px;
    margin-bottom: 15px;
    font-weight: 500;
}

/* --- Code Box --- */
.code-box {
    background-color: #0f172a;
    border: 1px solid #334155;
    border-left: 3px solid #00f5c8;
    border-radius: 8px;
    padding: 15px;
    font-family: 'Courier New', monospace;
    overflow-x: auto;
    color: #e0e0e0;
    margin-bottom: 20px;
}

/* --- Output Box --- */
.output-box {
    background-color: rgba(0, 245, 200, 0.05);
    border: 1px solid #334155;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 40px;
}

.output-box h3 {
    margin-bottom: 10px;
    color: #00f5c8;
    font-weight: 500;
}

.output-box p {
    font-weight: normal;
    color: #cbd5e1;
    line-height: 1.6;
}

/* --- Footer --- */
footer {
    position: fixed;
    bottom: 10px;
    left: 250px;
    width: calc(100% - 250px);
    text-align: center;
    font-weight: 500;
    font-size: 16px;
    color: #94a3b8;
    background-color: transparent;
    padding: 0;
}

/* --- Back to Top --- */
#backToTop {
    position: fixed;
    bottom: 80px;
    right: 30px;
    z-index: 1001;
    background: linear-gradient(90deg, #00f5c8, #00c3a3);
    color: #0f172a;
    border: none;
    border-radius: 50%;
    padding: 10px 14px;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    display: none;
    line-height: 1;
}
#backToTop:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 15px rgba(0, 245, 200, 0.3);
}

/* --- Responsive --- */
@media(max-width: 1400px) { 
    .program-grid { grid-template-columns: repeat(5, 1fr); } 
}

@media(max-width: 900px) {
    .program-grid { grid-template-columns: repeat(2, 1fr); }
    .main-content { margin-left: 0; padding: 20px; }
    .navbar { 
        position: relative; 
        width: 100%; 
        height: auto; 
        flex-direction: row; 
        overflow-x: auto; 
        white-space: nowrap; 
        border-right: none;
        border-bottom: 1px solid #334155;
    }
    .navlist {
        display: flex;
    }
    .navlist li {
        margin: 0 5px;
    }
    
    footer {
        position: relative;
        left: 0;
        width: 100%;
        bottom: 0;
        padding: 15px;
        background-color: #1e293b;
        color: #94a3b8;
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
            <li><a href="#">Integrating PHP and Database</a></li>
            <li><a href="form.php">Integrating Forms and Database</a></li>
            <li><a href="file.php">File System</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>
    <section class="main-content">
        <div class="box-main">
            <h1>Integrating PHP and DATABASE</h1>

 <?php
    /*ways to connect to a Mysql database
    1. Mysqli extension 
    2. PDO
    */
    //Connecting to the database
    $Servername = "localhost";
    $username = "root";
    $password = "";

    //Create a connection
    try{
    $conn = mysqli_connect($Servername, $username, $password);
        echo "Connection was successful<br>";
    } catch(mysqli_sql_exception $e)
    {
        die("sorry we failed to connect: ".$e->getMessage());
    }
    mysqli_report(MYSQLI_REPORT_OFF);
    //Create a database 
    $sql = "CREATE DATABASE vinphp";
    $result = mysqli_query($conn, $sql);
    
    //Check for the database creation success
    if($result){
        echo "The database was created successfully!";
    }
    else{
        echo "The database was not created successfully 
        because of this error --> ".mysqli_error($conn);
    }
    //selecting the database
    mysqli_select_db($conn, "vinphp");
    //creating table in database 
    $sql ="CREATE TABLE `trip2025` (`Sno` INT NOT NULL , `Name` VARCHAR(12) 
    NOT NULL , `Dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`Sno`)) ;";
    $result = mysqli_query($conn, $sql);
    
    //Check for the table creation success
    if($result){
        echo "<br>The table was created successfully!";
    }
    else{
        echo "<br>The table was not created successfully
         because of this error --> ".mysqli_error($conn);

    }
    //selecting the database
    mysqli_select_db($conn, "vinphp");
    //sql query to be executed
    $sql = "INSERT INTO `trip2025` (`Sno`, `Name`, `Dest`) 
    VALUES('1', 'vinay', 'Canada');";

    $result = mysqli_query($conn, $sql); 
    //Add a new trip to the trip2025 table
    if($result){
        echo "<br>The record has been inserted successfully!<br>";
    }
    else{
        echo "<br>The record was not inserted successfully because of 
        this error --> ".mysqli_error($conn)."<br>";
    }
    //selecting database
    mysqli_select_db($conn, "vinphp");

    //retrieve data from database
    $sql = "SELECT * FROM trip2025;";
    $result = mysqli_query($conn, $sql);
    echo "<p>The records of the table are <br> </p>";
    while($row = mysqli_fetch_array($result))
    {
        echo $row['Sno']." ".$row['Name']." ".$row['Dest'];
        echo "<br>";
    }
    
    //Closing the connection 
    mysqli_close($conn);

?>
  </div>