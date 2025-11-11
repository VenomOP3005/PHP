<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Programs - Warm Theme</title>
<style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* New Dark Theme */
        body {
            /* Using a modern system font stack */
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #1a1a2e; /* Dark navy background */
            color: #e0e0e0; /* Light text for readability */
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Navigation */
        .navbar {
            width: 250px;
            background-color: #1f1f3a; /* Slightly lighter dark for sidebar */
            padding: 25px 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            overflow-y: auto;
            position: fixed;
            height: 100vh;
            border-right: 1px solid #3a3a5a; /* Subtle separator */
        }

        .navlist {
            list-style: none;
        }

        .navlist li {
            margin: 15px 0;
        }

        .navlist a {
            text-decoration: none;
            color: #e0e0e0; /* Light text */
            font-weight: 500; /* Slightly thinner than bold */
            font-size: 18px;
            padding: 12px 15px;
            display: block;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navlist a:hover {
            background-color: rgba(0, 245, 200, 0.1); /* Transparent accent */
            color: #00f5c8; /* Vibrant cyan accent */
            transform: translateX(5px);
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 250px; /* Account for the fixed sidebar */
            min-height: 100vh;
        }

        .frame {
            border: none; /* Removed old border */
            border-top: 4px solid #00f5c8; /* New accent border on top */
            padding: 50px 60px;
            background-color: #2c2c44; /* Dark card background */
            border-radius: 10px; /* Slightly softer radius */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3); /* Deeper shadow */
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            max-width: 600px;
        }

        .frame:hover {
            transform: scale(1.02);
            /* Glow effect on hover */
            box-shadow: 0 15px 35px rgba(0, 245, 200, 0.1);
        }

        h1 {
            color: #ffffff; /* Pure white for main heading */
            margin-bottom: 10px;
            font-size: 42px;
            letter-spacing: 1px;
            font-weight: 600;
        }

        h2 {
            color: #00f5c8; /* Vibrant cyan accent */
            margin-top: 15px;
            margin-bottom: 5px;
            font-size: 26px;
            font-weight: 500;
        }

        p {
            color: #e0e0e0;
            font-size: 18px;
            margin: 5px 0;
            line-height: 1.5;
        }

        /* Footer - Corrected Positioning */
        footer {
            position: fixed;
            bottom: 10px;
            left: 250px; /* Aligned with main-content */
            width: calc(100% - 250px); /* Takes remaining width */
            text-align: center;
            font-weight: 500;
            font-size: 16px;
            color: #aaa; /* Muted color for footer */
        }
        input[type="text"] {
    width: 80%;
    padding: 12px 15px;
    margin: 15px 0;
    border-radius: 8px;
    border: 1px solid #3a3a5a;
    background-color: #1f1f3a;
    color: #e0e0e0;
    font-size: 16px;
    outline: none;
    transition: all 0.3s ease;
}
input[type="text"]:focus {
    border-color: #00f5c8;
    box-shadow: 0 0 10px rgba(0, 245, 200, 0.5);
}

/* Base button style (shared aesthetic) */
button {
    padding: 12px 25px;
    margin-top: 15px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    color: #1a1a2e;
    text-transform: uppercase;
}

/* Save button - glowing cyan */
.btn-save {
    background: linear-gradient(90deg, #00f5c8, #00c3a3);
    box-shadow: 0 0 12px rgba(0, 245, 200, 0.3);
}
.btn-save:hover {
    background: linear-gradient(90deg, #00c3a3, #00f5c8);
    transform: translateY(-2px) scale(1.03);
    box-shadow: 0 0 18px rgba(0, 245, 200, 0.6);
}

/* Clear Cookie button - amber accent */
.btn-clear {
    background: linear-gradient(90deg, #f6c90e, #eab308);
    color: #1a1a2e;
    box-shadow: 0 0 10px rgba(255, 220, 120, 0.25);
}
.btn-clear:hover {
    background: linear-gradient(90deg, #eab308, #facc15);
    transform: translateY(-2px) scale(1.03);
    box-shadow: 0 0 18px rgba(255, 220, 120, 0.5);
}

/* Logout button - red glow */
.btn-logout {
    background: linear-gradient(90deg, #ff4b5c, #ff6b81);
    color: #fff;
    box-shadow: 0 0 10px rgba(255, 100, 100, 0.25);
}
.btn-logout:hover {
    background: linear-gradient(90deg, #ff6b81, #ff4b5c);
    transform: translateY(-2px) scale(1.03);
    box-shadow: 0 0 20px rgba(255, 100, 100, 0.6);
}

/* Responsive: make buttons stack nicely */
form button {
    width: 80%; 
    margin: 10px 0;
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
            <li><a href="form.php">Integrating Forms and Database</a></li>
            <li><a href="#">File System</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>

    <section class="main-content">
        <div class="box-main">
            <h1>File System</h1>
            
<h2>1. readfile(filename);</h2>
<?php
    $a = readfile("myfile.txt");
    echo $a;

?>
<h2>2. fopen(filename,mode);</h2>
<?php
    $fptr = fopen("myfile.txt","r");
    echo $fptr;
?>
<h2>3. filesize(filename);</h2>
<?php

    $fsize= filesize("myfile.txt");
    echo $fsize;

?>

<h2>4. fread(filepointer,length of the file);</h2>
<?php
    $fptr = fopen("myfile.txt","r");
    if(!$fptr){
        die("Unable to open this file. Please enter a valid filename..");
    }
    $content = fread($fptr,filesize("myfile.txt"));
    echo $content;
    echo "<h2>5. fclose(filepointer);</h2>";
    fclose($fptr);

?>
<?php
    $fptr = fopen("myfile.txt","r");
    echo "<h2>5. fgets(filepointer);</h2>";
    echo "<p>To read the file line by line</p>";
    echo "<h3>Content of file</h3>";
    while($a = fgets($fptr)){
        echo $a;
    }
    fclose($fptr);
?>
<?php
    $fptr = fopen("myfile.txt","r");
    echo "<h2>6. fgetc(filepointer);</h2>";
    echo "<p>To read the file Character by Character</p>";
    echo "<h3>Content of file</h3>";
    while($a = fgetc($fptr)){
        echo $a;
        if($a == ".")
        {
            break;
        }
    }
    fclose($fptr);

?>
<h2>7. fwrite(filepointer,string of data);</h2>
<?php
    $fptr = fopen("myfile2.txt","w");
    fwrite($fptr,"This is the best website on this planet.Please dont argue with
    me on this one.\n");
    fwrite($fptr,"\nThis is the another content.");
    fclose($fptr);
?>
<?php
    $fptr = fopen("myfile2.txt","r");
    if(!$fptr){
        die("Unable to open this file. Please enter a valid filename..");
    }
    $content = fread($fptr,filesize("myfile2.txt"));
    echo $content;
    fclose($fptr);
?>
<h2>8. Append to the file </h2>
<?php
    $fptr = fopen("myfile2.txt","a");
    fwrite($fptr,"This is being append to the file.\n");
    fclose($fptr);
?>
<?php
    $fptr = fopen("myfile2.txt","r");
    if(!$fptr){
        die("Unable to open this file. Please enter a valid filename..");
    }
    $content = fread($fptr,filesize("myfile2.txt"));
    echo $content;
    fclose($fptr);
?>

</section>
</div>

</body>
</html>
