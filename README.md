# Pet Adoption and Care System

## 📌 Overview
The **Pet Adoption and Care System** is a web-based application designed to simplify the pet adoption process.  
It allows users to browse available pets, view detailed profiles, and complete the adoption process through an online form.  
The project also includes secure authentication with **login and registration**, connected to a MySQL database.

This project demonstrates **full-stack web development** using **PHP, MySQL, HTML, CSS, and JavaScript**.

---

## 🚀 Features
- **Adopt Page**: Displays pets in cards with a "Meet Pet" button.  
- **Pet Details Page**: Shows detailed information with an option to "Start Adopt".  
- **Adoption Form**: Collects adopter details and stores them in the database.  
- **About Page**: Information about the team and mission.  
- **Authentication**:  
  - **Register**: Stores user details securely in MySQL.  
  - **Login**: Validates email and password before granting access.  
- **SQL Integration**: Handles user, pets, and adoption records.

---

## 🛠️ Tech Stack
- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL  
- **Tools**: XAMPP, VS Code, Git

---

## 📂 Project Structure
```
pet-adoption-care-system/
│── css/            # Stylesheets
│── html/           # PHP/HTML pages
│── imgs/           # Images and pet photos
│── js/             # JavaScript files
│── db.php          # Database connection file
│── sql/            # Database schema (pet_adoption.sql)
```

---

## ⚙️ Database Setup
1. Open **phpMyAdmin** and create a new database:
   ```sql
   CREATE DATABASE pet_adoption;
   ```
2. Import the SQL script provided in `sql/pet_adoption.sql`.
3. Update **db.php** with your MySQL credentials:
   ```php
   <?php
   $conn = mysqli_connect("localhost", "root", "", "pet_adoption");
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
   ?>
   ```

---

## ▶️ How to Run
1. Install **XAMPP** or **WAMP** and start **Apache** and **MySQL**.  
2. Place the project folder in the `htdocs/` directory (XAMPP) or `www/` (WAMP).  
3. Import the provided **pet_adoption.sql** file into MySQL.  
4. Open your browser and navigate to:
   ```
   http://localhost/pet-adoption-care-system/html/
   ```

---

## 📖 Database Schema
The database consists of three main tables:  
- **users** → Stores registered user information.  
- **pets** → Stores pet details (name, type, breed, age, description, image).  
- **adoptions** → Stores adoption requests linked to users and pets.  

Refer to `sql/pet_adoption.sql` for schema and sample data.

---

## 📌 Future Enhancements
- Add search and filters (by breed, age, type).  
- Responsive design with Bootstrap.  
- Admin dashboard for managing pets and users.  
- Email notifications for adoption requests.

---

## 👨‍💻 Author
Developed by **Venkata Mani Siddhu Padala**  
- GitHub: https://github.com/venkatamanisidddhu/pet-adoption
- LinkedIn: https://www.linkedin.com/posts/venkata-mani-siddhu-padala_webdevelopment-php-mysql-activity-7317964973740105728-Sb6k?utm_source=share&utm_medium=member_desktop&rcm=ACoAAEbvS2oBe48UySXKykMs0quVygv2VHLIO2o

---
