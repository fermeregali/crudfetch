# CRUD PHP Application with Bootstrap and SweetAlert

Welcome to the CRUD PHP Application repository! This project demonstrates a basic CRUD (Create, Read, Update, Delete) application using PHP, MySQL, Bootstrap, and SweetAlert. 
The goal is to provide a simple example to help you get started with building web applications using these technologies.

## Table of Contents
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)


## Features
- Create, Read, Update, and Delete products.
- Responsive UI using Bootstrap.
- Interactive alerts with SweetAlert.
- Easy to set up and customize.

## Prerequisites
Before you begin, ensure you have the following tools installed on your local machine:
- [XAMPP](https://www.apachefriends.org/index.html) (includes PHP and MySQL)
- [Visual Studio Code](https://code.visualstudio.com/)
- [Git](https://git-scm.com/)

## Installation

### Step 1: Clone the repository
```bash
git clone https://github.com/fermeregali/crudfetch.git
cd crudfetch
```

### Step 2: Set up XAMPP
1. **Download and Install XAMPP:** Follow the instructions on the [XAMPP website](https://www.apachefriends.org/index.html) to download and install XAMPP.
2. **Start Apache and MySQL:** Open the XAMPP control panel and start Apache and MySQL.

### Step 3: Configure the Database
1. **Create a Database:**
   - Open your browser and navigate to `http://localhost/phpmyadmin`.
   - Create a new database named `produtos`.

2. **Import the Database:**
   - Click on the `produtos` database.
   - Go to the `Import` tab.
   - Choose the `produtos.sql` file from this repository and import it.

### Step 4: Configure the Project
1. **Move the Project:**
   - Copy the cloned repository folder `crudfetch` to the `htdocs` directory inside your XAMPP installation folder (e.g., `C:\xampp\htdocs\`).

2. **Edit the Database Configuration:**
   - Open the project in Visual Studio Code.
   - Edit the `conexao.php` file with your database credentials.

```php
// conexao.php

$servidor = "mysql:dbname=crud;host=localhost";
$user="root";
$password="";
```

### Step 5: Install Dependencies
This project uses Bootstrap and SweetAlert via CDN, so no additional dependencies need to be installed.

## Usage
1. **Run the Application:**
   - Open your browser and go to `http://localhost/crudfetch`.
   - You should see the CRUD application interface.

2. **CRUD Operations:**
   - **Create:** Fill out the product form and click `Submit` to add a new product.
   - **Read:** View the list of products in the table.
   - **Update:** Click the `Edit` button next to a product, update the information, and save.
   - **Delete:** Click the `Delete` button to remove a product.

## Project Structure
```plaintext
├── crudfetch/
│   ├── conexao.php
│   ├── editar.php
│   ├── eliminar.php
│   ├── listar.php
│   ├── index.php
│   ├── registrar.php
│   ├── script.js
│   ├── produtos.sql
│   └── README.md
```

## Contributing
Contributions are welcome! Please fork this repository and submit a pull request for any improvements or bug fixes.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

