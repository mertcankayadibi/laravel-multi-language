# 🌍 Laravel Multi-Language System

A simple and clean multi-language (i18n) implementation in Laravel using locale-based routing and middleware.

---

## 🚀 Features

- Locale-based URL structure (`/tr`, `/en`, `/ru`, `/ar`)
- Middleware-based locale detection
- Dynamic language switching without losing the current page
- Blade translation support (`__()` / `trans()`)

---

## 📦 Installation

### 1. Clone the project
```bash
git clone https://github.com/your-username/your-project.git
cd your-project
```

### 2. Install dependencies
```bash
composer install
```

### 3. Setup environment file
```bash
cp .env.example .env
```

### 4. Generate application key
```bash
php artisan key:generate
```

### 5. Configure `.env`
Update your database settings if needed:

```env
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Run the project
```bash
php artisan serve
```

---

## 🔄 Autoload (Helpers)

If you are using a helper file (e.g. `app/helpers.php`):

### Add this to `composer.json`
```json
"autoload": {
    "files": [
        "app/helpers.php"
    ]
}
```

### Then run:
```bash
composer dump-autoload
```

---

## 🌐 Usage

Language is controlled via URL:

```
/tr
/en
/ru
/ar
```

### Language switch example:
```blade
<a href="{{ locale_url('tr') }}">TR</a>
<a href="{{ locale_url('en') }}">EN</a>
```

---

## 📁 Language Files

Path:
```
resources/lang/{locale}/
```

Example:
```php
return [
    'hi' => 'Hello'
];
```

Usage in Blade:
```blade
{{ __('pages.hi') }}
```

---

## 🧠 Middleware

Locale is automatically detected from the URL:

```
/{locale}/...
```

---

## 📄 License

MIT
