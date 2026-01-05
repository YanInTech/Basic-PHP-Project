# Project No. 1 — Suazo_Project1

**Author:** Kianah Mae B. Suazo  
**Course:** BS Information Systems — 3rd Year

---

## 🔎 Project Overview

This is a small PHP-based website created as a school project. The site demonstrates basic PHP/HTML/CSS features and simple programming concepts (variables, arrays, loops, functions, etc.). It includes a simple Curriculum Vitae page and a set of example pages that illustrate fundamental PHP programming topics.

## ✅ Features

- Curriculum Vitae page with contact and profile information
- Example pages covering:
  - Use of Variables
  - Manipulating Numbers
  - Using Math Functions
  - Using Constants
  - Selecting Statements
  - Loop Statements
  - User-defined Functions
  - Single-dimensional Arrays
  - Two-dimensional Arrays
- Reusable footer included from `includes/footer.html`
- Styling via `global.css` and page-specific CSS files

## 🛠️ Technologies

- PHP 7.4 (project targets PHP 7.4 in `Dockerfile`)
- HTML / CSS
- Font Awesome (CDN)
- Docker (optional — Dockerfile provided)

## 🚀 Getting Started

### Prerequisites

- PHP (v7.4+ recommended) or Docker installed on your machine

### Run with PHP built-in server (local)

1. Open a terminal in the project root (where `index.php` is located).
2. Run:

```bash
php -S 0.0.0.0:8000
```
3. Open your browser and go to `http://localhost:8000`

> If using Windows and the command fails, make sure PHP is installed and available in your PATH.

### Run using Docker

1. Build the image:

```bash
docker build -t suazo-project1 .
```

2. Run the container and publish port 8000:

```bash
docker run -p 8000:8000 suazo-project1
```

3. Open `http://localhost:8000` in your browser.

## 📁 Project Structure

```
Suazo_Project1/
│  Dockerfile
│  index.php
│  README.md
│  global.css
│  img/
│  includes/
│     footer.html
│  css/
│     homepage.css
│     page1.css
│     page2.css
│     ...
│  pages/
│     page1.php
│     page2.php
│     ...
```

## ✍️ Notes

- The site is intended for demonstration and learning purposes.
- Page content and styling can be edited directly in the `pages/` and `css/` folders.

## 🙋 Contact

For questions or updates, use the contact info on the Curriculum Vitae page (e.g., `kmbs2004@gmail.com`).
