
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
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/nazmulhasan77/bookstore_laravel_CRUD.git
   ```
2. **Navigate to the Project Directory**:
   ```bash
   cd bookstore_laravel
   ```
3. **Install Dependencies**:
   ```bash
   composer install
   npm install && npm run dev
   ```
4. **Set Up the Environment**:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update database credentials in `.env`.

5. **Run Migrations and Seeders**:
   ```bash
   php artisan migrate --seed
   ```

6. **Start the Server**:
   ```bash
   php artisan serve
   ```

7. Visit `http://127.0.0.1:8000/books` in your browser.

---

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
