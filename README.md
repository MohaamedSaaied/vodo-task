<pre>
# Installation Guide for vodo task
This guide will walk you through the steps required to set up and run the System on your local machine for development and testing purposes.

# Getting started
## Installation
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

## Prerequisites
Before you begin, ensure you have the following installed on your system:
- **laravel**
- **composer**
- **Xampp** 
- **Git**

Clone the repository

    git clone https://github.com/MohaamedSaaied/vodo-task.git

Switch to the repo folder

    cd vodo-task

Install all the dependencies using composer

    composer install

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

    
You can sign up from the right corner
e-mail verification link will be provided locally in the logs 
you can access the logs in the storage/logs/laravel.log

After successfully signing up you will be redirected to the dashboard where you will find my notes button that will navigate you to the CRUD system
where you will find add notes button (that will allow you to create new notes)
and
edit notes button (that will allow you to edit and delete existing notes)


</pre>

 

 
 #   v o d o - t a s k 
 
 
