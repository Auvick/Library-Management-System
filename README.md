# Library Management System

Welcome to the **Library Management System** project! This system is designed to automate library operations, making it easy to manage books, users, and transactions. This README file will guide you through the steps to set up and run this project on your computer.


## Features

- User authentication (admin and student roles).
- Search books by title, author, or availability.
- Borrow, return, and recommend books.
- Admin dashboard for managing books and user data.
- Simple and intuitive web interface.



## Prerequisites

Before you begin, ensure you have the following installed on your computer:

1. **XAMPP** (for PHP and MySQL).
2. **Composer** (PHP dependency manager).
3. **Browser** (to access the application interface).



## Installation Guide

Follow these steps to set up the project:

### Step 1: Clone the Repository
If you have Git installed, use the following command to clone the repository:
```bash
git clone https://github.com/your-username/library-management-system.git
```
Or, download the ZIP file from GitHub and extract it to your desired location.

### Step 2: Move the Project to XAMPP's `htdocs` Directory
Copy or move the project folder to the `htdocs` directory of your XAMPP installation. For example:
```
C:\xampp\htdocs\library-management-system
```

### Step 3: Set Up the Database
1. Start XAMPP and ensure **Apache** and **MySQL** services are running.
2. Open **phpMyAdmin** in your browser by navigating to:
   ```
   http://localhost/phpmyadmin/
   ```
3. Create a new database named `lms`:
   ```sql
   CREATE DATABASE lms;
   ```
4. Import the provided database file (`lms.sql`) into the `lms` database:
   - Go to the **Import** tab in phpMyAdmin.
   - Select the `lms.sql` file from the project folder.
   - Click **Go** to execute the import.

### Step 4: Install Dependencies
Use Composer to install the required PHP dependencies:
1. Open a terminal in the project folder.
2. Run the following command:
   ```bash
   composer install
   ```

### Step 5: Configure the Project
Open the `config.php` file in the project folder and update the database credentials:
```php
<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = "";     // Default password for XAMPP (leave empty)
$database = "lms";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
```

### Step 6: Run the Application
1. Open your browser and navigate to:
   ```
   http://localhost/library-management-system/
   ```
2. Log in as an admin or create a student account to access the system.



## Usage Instructions

### For Students
- Search for books using the search bar.
- View current borrowings and recommend books to the admin.
- Request to borrow or return books.

### For Admins
- Manage the library's book inventory (add, update, or delete books).
- View and process book requests from students.
- Manage user accounts and transaction records.



## License

This project is open-source and available under the [MIT License](LICENSE).
