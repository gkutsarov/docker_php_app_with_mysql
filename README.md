# Docker PHP Application with MySQL

This repository contains a simple Docker-based setup for a PHP application connected to a MySQL database. It demonstrates how to use Docker and Docker Compose to create a PHP and MySQL environment, where the PHP application interacts seamlessly with the MySQL database.

## Project Structure

```php-mysql-docker-app/
├── php/                         # Directory for PHP service files
│   ├── Dockerfile               # Dockerfile to set up PHP our custom Docker image
│   └── index.php                # Basic PHP app that connects to MySQL
└── db/                          # Directory for MySQL initialization files
    └── init.sql                 # SQL script to initialize database and add sample data
├── docker-compose.yml           # Docker Compose file defining PHP and MySQL services
```

## Features

- **PHP 8.0**: Built on the official PHP Apache image with MySQL support.
- **MySQL 8.0**: Initializes with a predefined database and sample user data.
- **Docker Compose**: Simplifies multi-container Docker applications.

## File Descriptions

- **docker-compose.yml**: Defines the services for the PHP application and MySQL database, specifying configurations such as ports, volumes, and environment variables.
- **php/Dockerfile**: Sets up the PHP environment with Apache and installs the MySQLi extension. It copies the PHP application code into the container.
- **php/index.php**: A simple PHP script that connects to the MySQL database, fetches user data, and displays it in the browser.
- **db/init.sql**: An SQL script that initializes the MySQL database by creating a users table and inserting sample user data.

## Getting Started

Follow these steps to set up and run the application locally.

### Prerequisites

- **Docker**: Ensure Docker is installed on your machine. [Install Docker](https://docs.docker.com/get-docker/)
- **Docker Compose**: Comes with Docker Desktop. Verify installation with `docker-compose --version`.

## Step 1: Clone the Repository

Clone this repository to your local machine:

```bash
git clone https://github.com/gkutsarov/docker_php_app_with_mysql.git
cd docker_php_app_with_mysql
```

## Step 2: Build and Run the Application

Run the following command to build and start the Docker containers:

```bash
docker-compose up --build
```

This command will:
- Build the PHP Docker image.
- Start both PHP and MySQL services.
- Initialize the database using the init.sql script.

## Step 3: Access the Application

Once the containers are running, open a browser and navigate to:

```bash
http://localhost:8080
```

You should see data from the **users** table displayed on the screen, such as:

```bash
ID: 1 - Name: John Doe
ID: 2 - Name: Jane Smith
```

## Summary

- **Docker Compose:** Defines the PHP and MySQL containers.
- **PHP Dockerfile:** Configures the PHP environment with MySQL support.
- **PHP Application:** Interacts with MySQL and displays data from a database table.
- **Database Initialization:** The **init.sql** file creates and populates the **users** table when the MySQL container starts.

This project serves as an introduction to setting up a PHP/MySQL environment using Docker, providing a practical example for learning about containerization and microservices.



