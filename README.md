# 🎮 The Best Game Studios DB 👾

A **Video Game Studios Management System** built with **Laravel** and **MySQL**.  
Developed as the **final project for the Back-End Frameworks course** at Cesae Digital, under the guidance of **Sara Monteiro**.  
Authentication is powered by **Laravel Fortify**.

---

## 🚀 Features

### For Public Users
- Browse all studios and view detailed profiles  
- Explore studios and games by studio  
- Download lists of studios or games  

### For Authenticated Users
- Add, edit, and delete studios and games 
- Bulk import studios or games via CSV upload  

---

## 🛠️ Tech Stack

- **Laravel**  
- **Laravel Fortify** (authentication)  
- **Bootstrap** (styling)  
- **MySQL** (database)  
- **Seeders** (initial data population)  

---

## 📄 CSV Import

Quickly test the import feature using the included CSV files:

- `1-games-capcom.csv` — several games for the **Capcom** studio 
- `2-studios.csv` — multiple studios for bulk import   

➡️ Upload these files via the app’s CSV upload form to instantly populate your database and test this functionality.

---

## 🔑 Login

Use these demo credentials for instant access:

> **Email:** sara@email.com  
> **Password:** password123  

User registration is disabled. Only preconfigured accounts (created via seeders) can log in.

---

## 📥 Installation

1. **Clone the repository**
    ```bash
    git clone https://github.com/laisvigas/game-studios.git
    cd game-studios
    ```
2. **Install dependencies**
    ```bash
    composer install
    npm install
    ```
3. **Set up the environment**
    - Copy `.env.example` to `.env`
    - Configure your database credentials in `.env`
4. **Run migrations and seeders**
    ```bash
    php artisan migrate --seed
    ```
5. **Start the development servers**
    ```bash
    php artisan serve
    npm run dev
    ```

---