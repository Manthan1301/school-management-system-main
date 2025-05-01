# Developer Guide: School Management System

## Overview
This project is a *School Management System* designed to manage users (admin, owner, teacher, student) and their respective functionalities. It includes features like file uploads, role-based access control, and dynamic content management.

---

## Prerequisites
1. *Software Requirements*:
   - XAMPP (or any LAMP/WAMP stack)
   - PHP 7.4 or higher
   - MySQL 5.7 or higher
   - Modern web browser (e.g., Chrome, Firefox)

2. *Development Tools*:
   - Visual Studio Code (recommended IDE)
   - Git (for version control)

3. *Dependencies*:
   - Bootstrap (for frontend styling)
   - jQuery (if used in JavaScript files)

---

## Project Setup
1. *Clone the Repository*:
   bash
   git clone <repository-url>
   

2. *Move to XAMPP Directory*:
   Copy the project folder to the XAMPP htdocs directory:
   bash
   cp -r school-management-system-main_2 /Applications/XAMPP/xamppfiles/htdocs/
   

3. *Database Setup*:
   - Open phpMyAdmin (http://localhost/phpmyadmin).
   - Create a new database (e.g., school_management).
   - Import the provided SQL file (if available) into the database.

4. *Configure Database Connection*:
   - Update the database credentials in the configuration file:
     php
     // filepath: /config/db.php
     $host = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'school_management';
     

5. *Start the Server*:
   - Launch XAMPP and start Apache and MySQL services.
   - Access the project in your browser:
     
     http://localhost/school-management-system-main_2/
     

---

## Project Structure
### Key Directories
- *admin_panel/*: Admin-specific features and dashboards.
- *teacher_panel/*: Teacher-specific features and dashboards.
- *student_panel/*: Student-specific features and dashboards.
- *owner_panel/*: Owner-specific features and dashboards.
- *assets/*: Shared resources like JavaScript, CSS, and PHP utilities.
- *uploads/*: Stores uploaded files (e.g., syllabus, notes).

### Key Files
- *login.php*: Handles user authentication and role-based redirection.
- *config/db.php*: Database connection configuration.
- *assets/js/*: JavaScript files for frontend interactions.
- *assets/css/*: CSS files for styling.

---

## Development Guidelines
1. *Coding Standards*:
   - Follow PSR-12 coding standards for PHP.
   - Use meaningful variable and function names.
   - Add comments to explain complex logic.

2. *Security Practices*:
   - Sanitize and validate all user inputs.
   - Use prepared statements for database queries.
   - Restrict file uploads to specific types (e.g., .pdf, .docx).

3. *Error Handling*:
   - Enable error reporting during development:
     php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);
     
   - Log errors in production instead of displaying them.

4. *Version Control*:
   - Commit changes frequently with meaningful commit messages.
   - Use branches for new features or bug fixes.

5. *Testing*:
   - Test all features thoroughly before deployment.
   - Use tools like PHPUnit for backend testing.

---

## Common Commands
### Start XAMPP Services
bash
sudo /Applications/XAMPP/xamppfiles/xampp start


### Stop XAMPP Services
bash
sudo /Applications/XAMPP/xamppfiles/xampp stop


### Import Database
1. Open phpMyAdmin.
2. Select the database.
3. Click on "Import" and upload the SQL file.

---

## Troubleshooting
1. *Database Connection Issues*:
   - Ensure MySQL is running.
   - Verify database credentials in config/db.php.

2. *File Upload Errors*:
   - Check file permissions for the uploads/ directory.
   - Ensure the file size and type meet the validation criteria.

3. *Page Not Loading*:
   - Verify the project URL (http://localhost/school-management-system-main_2/).
   - Check Apache error logs for issues.

---

## Future Improvements
- Modularize JavaScript code for better maintainability.
- Implement CSRF protection for forms.
- Add unit tests for critical functionalities.