<div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&customColorList=6,11,20&height=220&section=header&text=Products%20App&fontSize=60&fontColor=ffffff&animation=fadeIn&fontAlignY=38&desc=Laravel%2012%20%2B%20Livewire%20CRUD&descAlignY=58&descSize=20" width="100%" alt="header"/>

<a href="https://git.io/typing-svg"><img src="https://readme-typing-svg.demolab.com?font=Fira+Code&weight=600&size=22&pause=1000&color=6366F1&center=true&vCenter=true&width=600&lines=Modern+Products+Management;Live+Search+%26+Pagination;Modal+Create+%2F+Edit+Forms;Built+with+Laravel+%2B+Livewire" alt="Typing SVG" /></a>

<br/>

![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-4-FB70A9?style=for-the-badge&logo=livewire&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind-CSS-38B2AC?style=for-the-badge&logo=tailwindcss&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

</div>

---

## ✨ Features

| | Feature | Description |
|---|---|---|
| ➕ | **Create** | Add products from a clean modal form |
| ✏️ | **Edit** | Update any product in a pop-up, prefilled |
| 🗑️ | **Delete** | Safe delete with confirmation |
| 🔍 | **Live Search** | Instant results, no page reload |
| 📄 | **Pagination** | Fast and simple navigation |
| ✅ | **Validation** | Inline error messages |
| 📱 | **Responsive** | Looks great on every screen |

---

## 🧰 Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP 8.3, Laravel 12 |
| Frontend | Livewire, Tailwind CSS |
| Database | MySQL |
| Local Dev | Laragon |

---

## 🚀 Installation

### Requirements

- PHP >= 8.2
- Composer
- MySQL
- Git

### Steps

**1. Clone the repository**

```bash
git clone https://github.com/0x15b3f/products-app.git
cd products-app
```

**2. Install dependencies**

```bash
composer install
```

**3. Set up the environment**

```bash
cp .env.example .env
php artisan key:generate
```

**4. Configure the database in `.env`**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=products_app
DB_USERNAME=root
DB_PASSWORD=
```

**5. Run migrations**

```bash
php artisan migrate
```

**6. Start the server**

```bash
php artisan serve
```

Open 👉 `http://localhost:8000/products`

---

## 📁 Project Structure

```text
products-app
├── app
│   ├── Livewire
│   │   └── Products.php          # CRUD logic
│   └── Models
│       └── Product.php           # Product model
├── resources
│   └── views
│       ├── components/layouts
│       │   └── app.blade.php     # Main layout
│       └── livewire
│           └── products.blade.php # Products page
└── routes
    └── web.php
```

---

## 📬 Contact

<div align="center">

[![Email](https://img.shields.io/badge/Email-0x15b3f@gmail.com-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:0x15b3f@gmail.com)
[![WhatsApp](https://img.shields.io/badge/WhatsApp-+201016283173-25D366?style=for-the-badge&logo=whatsapp&logoColor=white)](https://wa.me/201016283173)
[![GitHub](https://img.shields.io/badge/GitHub-0x15b3f-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/0x15b3f)

</div>

---

## 📄 License

Released under the [MIT License](https://opensource.org/licenses/MIT).

<div align="center">

⭐ **If you like this project, give it a star!** ⭐

<img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&customColorList=6,11,20&height=120&section=footer" width="100%" alt="footer"/>

</div>