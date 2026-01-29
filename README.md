# product-order-website

A small **core PHP** product ordering website (no framework).  
This was one of my early projects and focuses on learning the fundamentals: routing via PHP pages, basic auth flows, CRUD-style admin screens, and a simple cart/order flow.

---

## What’s inside

### User-facing pages
- Product listing & product categories
- Product details / service description pages
- Search
- Cart (add/update/remove)
- Booking / purchase flow
- Contact + About pages
- Register / Logout

### Admin side
- Admin panel pages under `admin/`
- Manage products / categories (based on the included PHP pages)
- Cart/order management pages (ex: `manage_cart.php`)

---

## Tech stack
- **PHP (core / procedural)**
- HTML / CSS
- JavaScript
- Folder-based page routing (each feature is a `.php` page)

---

## Project structure (from repo)
- `admin/` – admin area
- `config/` – configuration (DB connection / constants)
- `partials-front/` – shared UI partials (header/footer/etc.)
- `css/` – stylesheets
- `js/` – scripts
- `img/` – images/assets
- `*.php` – page controllers/views (ex: `index.php`, `cart.php`, `products.php`, etc.)

---

## Local setup

### 1) Requirements
- PHP 7.x/8.x
- MySQL/MariaDB (if `config/` uses DB)
- Apache/Nginx **or** PHP built-in server

### 2) Run locally (quick)
From the project root:

```bash
php -S localhost:8000
