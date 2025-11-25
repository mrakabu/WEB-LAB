├── Program8A/   (PHP Visitor Counter)
├── Program8B/   (PHP + MySQL Sorting)
├── Program9/    (jQuery)
└── Program10/   (AJAX)
===========================================================================
✅ Most HTML Programs

These programs can be run directly using:

VS Code Live Server
OR
Just open in Chrome

Right-click → Open with Live Server
===========================================================================
🟦 Program 8(a): PHP Visitor Counter
Requirements

XAMPP installed

Apache server running

Start Apache in XAMPP
Open in browser:

http://localhost/WEB-LAB/prgm8(A).php
============================================================================
🟦 Program 8(b): PHP + MySQL Sorting

This program connects PHP with MySQL to sort student grades.

Requirements

XAMPP (Apache + MySQL)

phpMyAdmin

MySQL DB

1️⃣ Start XAMPP servers

Start:

Apache

MySQL
Create database:

school

3️⃣ Create Table

Run this SQL:

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    grade INT
);

4️⃣ Insert Sample Data
INSERT INTO students (name, grade) VALUES
('raj', 85),
('Akash', 92),
('Manoj', 78),
('Kiran', 88),
('Sam', 80);

5️⃣ Check PHP Database Credentials
$servername = "localhost";
$username = "root";
$password = "";   // Default XAMPP password is empty
$dbname = "school";


Open:

http://localhost/WEB-LAB/prgm8(B).php

================================================================================
🟦 Program 9: jQuery Program
Requirements

Only browser + Live Server.

Steps

Open the folder in VS Code

Right-click index.html

Click Open with Live Server

jQuery features:

Text append

Animation

DOM updates

All run perfectly with no extra setup.

==========================================================================================
🟦 Program 10: AJAX Program

AJAX fetches:

.txt file

.json file
using JavaScript & jQuery.

You must run it through a server.

🟧  Using VS Code Live Server (Recommended)

Open folder in VS Code

Right-click index.html

Click Open with Live Server

AJAX will work for:

text loading

JSON loading

parse JSON

jQuery AJAX
