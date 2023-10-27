<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Person Management CRUD Web Application

This repository houses a Laravel-based CRUD (Create, Read, Update, Delete) web application designed for efficiently managing a list of persons. It provides a user-friendly interface for adding, viewing, updating, and deleting person records.

## Prerequisites

Before you get started, ensure you have the following installed on your system, if you don't please follow the "Installation Commands for Linux" guide:

- **Linux:** Tested on Debian 12.
- **PHP:** Make sure you have PHP installed, with a version of 8.2.
- **Composer:** Composer is required for managing PHP dependencies.
- **Git:** Make sure you have Git installed to clone the repository.
#### Installation Commands for Linux (Debian):
1. Open your terminal ensure that you are at main root and run:
```bash
sudo apt update
```
2. Install Git.
```bash
sudo apt install git
```
3. Clone the repository to your machine.
```bash
git clone -b master https://github.com/tdimis/Person_Manager.git
```
4. After the clone has been completed go to Person_Manager folder.
```bash
cd Person_Manager
```
5. Install PHP with all necessary extensions:
```bash
sudo apt install php8.2 php8.2-xml php8.2-curl php8.2-sqlite3
```
6. Install the Composer.
```bash
sudo apt install composer
```
That's it, you have now complete all necessary installations of prerequisites (Linux installation excluded).

## Getting Started

1. Ensure that you are in Person_Manager folder and install PHP dependencies using Composer.
```bash
composer install
```
2. Make a copy of the .env.example file and rename it to .env.
```bash
cp .env.example .env
```
3. Find the absolute path by running the following command and make a copy of the path:
```bash
pwd
```
3. Open the .env file to nano editor to configure your database connection.
```bash
nano .env
```
4. Set the following values.
```bash
DB_CONNECTION=sqlite
DB_HOST=
DB_PORT=
DB_DATABASE=/paste_the_path_here/database/person_manager.sqlite
DB_USERNAME=
DB_PASSWORD=
```
5. Once you update the above values you should use ctrl+O and press enter to save the changes.
   After that use ctrl+x to exit from editor.

6. Generate a unique application key with the following command.
```bash
php artisan key:generate
```
7. Create the SQLite database and run migrations.
```bash
php artisan migrate
```
8. Select yes from the options.

9. Start the Development Server
```bash
php artisan serve
```
You can now access and use the Person Management CRUD Web Application in your browser.<br><br>Visit http://localhost:8000 to view the application.

## Using the Application
### Below you will find how to use the application as well as what is contained in it
#### View all persons:
At first time you will see a basic empty table with persons columns. Here is the main list of all persons. <br>Every time that you will add, update or delete a person you'll be redirected to this main list automatically.<br>
Also each time that you will add a new person, at the right side of table you will see two buttons, the edit and delete buttons.<br><br>
#### Add a person:
Press the Add Person button at the top right corner out of the table to add your first persons.<br>
You will be redirected to a new form to add you first person. <br>Ensure that you follow the requirements of the form's inputs or validations will alert you. <br>When you have filled up the form click the save button.<br><br>
#### Update a person:
Click on edit button. You'll be redirected to a new form to update your specific person's details. <br>Ensure that you follow the requirements of the form's inputs or validations will alert you and your proccess will not saved. <br>When you are ready click the save button to see the changes in your main list or click cancel button to go back.<br><br>
#### Delete a person:
Click on delete button for the record that you don't want to your list. <br>The page will be refreshed and your record now has been removed.<br><br>
#### Search for a person:
You can search for a person by using the search bar on the left side out of the table.<br>
In the search bar you can only search by First Name, Last Name or Gender of the person you want to search for.<br><br>

## Thanks for reading!

   
