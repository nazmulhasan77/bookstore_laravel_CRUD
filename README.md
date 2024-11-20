
# Laravel Bookstore Application 📚

A comprehensive **Bookstore Management System** built with Laravel, designed to streamline the management of books and provide a user-friendly interface for book listings, additions, updates, and deletions.

---

## 🌟 **Features**
- **CRUD Operations**: Manage books with Create, Read, Update, and Delete functionalities.
- **User-Friendly Views**: Includes intuitive Blade templates for listing, creating, and editing books.
- **Validation**: Implements server-side validation for data consistency.
- **Dynamic Routing**: Resourceful routes for seamless navigation.
- **Database Integration**: Fully integrated with MySQL using migrations and Eloquent ORM.
- **Factory & Seeders**: Easily generate and populate test data.
- **Responsive Design**: Supports both desktop and mobile browsers.

---

## 🛠️ **Technologies Used**
- **Backend**: Laravel Framework (PHP)
- **Frontend**: Blade Templates, Bootstrap (optional for styling)
- **Database**: MySQL
- **Development Tools**: Composer, Artisan CLI, phpMyAdmin

---

## 🚀 **How to Set Up**

# How to Run the Bookstore Laravel Project

Follow these steps to set up and run the Bookstore locally:

## 1. Clone the Repository

```bash
git clone https://github.com/nazmulhasan77/bookstore_laravel_CRUD.git
```

## 2. Install Dependencies

Ensure you have Composer installed, then run:

```bash
composer install
```

## 3. Configure Environment

Copy the `.env.example` file to create a `.env` file:

```bash
cp .env.example .env
```

Open the `.env` file and set up your database configuration:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 4. Generate Application Key

Run the following command to generate a unique application key:

```bash
php artisan key:generate
```

## 5. Set Up the Database

Ensure the specified database exists. Then, run the migrations to set up the tables:

```bash
php artisan migrate
```

## 6. Seed the Database (Optional)

If the project includes data seeds, run:

```bash
php artisan db:seed
```

## 7. Start the Development Server

To run the project locally, start the Laravel development server:

```bash
php artisan serve
```

## 8. Access the Application

Open your browser and navigate to:

```plaintext
http://127.0.0.1:8000
```

---

### Alternative: Run PHP Built-in Server

You can use the PHP built-in server instead of `php artisan serve`. Run the following command:

```bash
php -S localhost:8000 -t public
```

- `localhost:8000` specifies the host and port.
- `-t public` sets the `public` directory as the document root (required for Laravel).

---

After following these steps, the Bookstore System should be running locally.


## 📂 **Project Structure**
```
├── app/
│   ├── Models/Book.php        # Book model
│   ├── Http/Controllers/BookController.php  # Controller
├── database/
│   ├── migrations/            # Database migrations
│   ├── seeders/BookSeeder.php # Seeder for test data
├── resources/views/books/     # Blade templates
├── routes/web.php             # Project routes
```

---

## 📄 **License**
This project is open-source and available under the [MIT License](LICENSE).
