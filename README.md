# Docker PHP Application with MySQL

This repository contains a simple Docker-based setup for a PHP application connected to a MySQL database. It demonstrates how to use Docker and Docker Compose to create a PHP and MySQL environment, where the PHP application interacts seamlessly with the MySQL database.

## Project Structure

php-mysql-docker-app/
├── php/                         # Directory for PHP service files
│   ├── Dockerfile               # Dockerfile to set up PHP our custom Docker image
│   └── index.php                # Basic PHP app that connects to MySQL
└── db/                          # Directory for MySQL initialization files
    └── init.sql                 # SQL script to initialize database and add sample data
├── docker-compose.yml           # Docker Compose file defining PHP and MySQL services


## Features

- **PHP 8.0**: Built on the official PHP Apache image with MySQL support.
- **MySQL 8.0**: Initializes with a predefined database and sample user data.
- **Docker Compose**: Simplifies multi-container Docker applications.

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