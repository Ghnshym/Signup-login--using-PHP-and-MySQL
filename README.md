# Signup-login--using-PHP-and-MySQL
PHP MySQL Project - Setup Instructions
  This repository contains a PHP MySQL project that you can run on your local machine using XAMPP. 
  Below are the step-by-step instructions to download, configure, and run the project.

Prerequisites:
  XAMPP installed on your system.
  Basic knowledge of using XAMPP and working with PHP and MySQL.

* Steps to Run the Project

1. Download the Project
You have two options to download the project:

Option 1: Clone the Repository (Recommended)
  git clone https://github.com/Ghnshym/Signup-login--using-PHP-and-MySQL.git

Option 2: Download ZIP
  Visit the GitHub repository at https://github.com/Ghnshym/Signup-login--using-PHP-and-MySQL.git
  Click on the "Code" button and select "Download ZIP."
  Extract the downloaded ZIP file to a directory of your choice.

2. Install XAMPP and Start Apache and MySQL
Download and install XAMPP on your system.
Start XAMPP and ensure that both Apache and MySQL modules are running. You can do this by checking the XAMPP Control Panel.

3. Move the Project Files
  Open the extracted project folder and locate the project files.
  Copy the entire project folder and paste it inside the htdocs directory of your XAMPP installation.
  The htdocs directory is typically located at C:\xampp\htdocs\ on Windows or /opt/lampp/htdocs/ on Linux.

4. Create the Database and Tables
  Open your web browser and visit http://localhost/phpmyadmin.
  Log in with the default username (root) and an empty password.
  Click on "New" in the left sidebar to create a new database.
  Enter the database name as project_database (or any name of your choice).
  Click "Create" to create the database.
or
run single time database.php file.

5. Run the Project
  Open your web browser and visit http://localhost/project/ (replace project with the name of the project directory).
  You should see the home page of the PHP MySQL project.
  Congratulations! You have successfully set up and run the PHP MySQL project on your local machine using XAMPP.

Troubleshooting
If you encounter any issues during the setup process, here are some common troubleshooting tips:
  -Make sure XAMPP's Apache and MySQL modules are running.
  -Verify that the project files are placed inside the htdocs folder of your XAMPP installation.
  -Check for any PHP syntax errors in the project files.
  -Ensure that the database name and table names are correct in the database_setup.sql file.
If you still face problems, feel free to reach out for assistance by creating an issue on the GitHub repository.

Happy coding! 🚀
