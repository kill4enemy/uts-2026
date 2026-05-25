# Portfolio Website UTS

Raihan Isad  
20240803024

---

## Overview

Website portfolio berbasis Laravel 12 dan Filament v3 untuk menampilkan profile, portfolio project, serta progress laporan project akhir secara dinamis melalui admin panel.

## Screenshot

### Homepage
![Homepage](docs/homepage.png)

### Admin Panel
![Admin](docs/admin-panel.png)



---

## Features

- Dynamic Portfolio Management
- Dynamic Profile Management
- Admin Panel Filament v3
- CRUD Project Report
- Contact Form
- Dockerized Development Environment
- Responsive UI Design

---

## Tech Stack

| Technology | Description |
|---|---|
| Laravel 12 | Backend Framework |
| Filament v3 | Admin Panel |
| Livewire | Dynamic Frontend |
| Blade | Templating Engine |
| MariaDB | Database |
| Docker | Development Environment |
| Nginx | Web Server |
| PHP 8.3 | Backend Language |

# Structure 

```bash
uts/
├── db/
├── docs/
├── nginx/
├── php/
├── src/
│   ├── app/
│   ├── database/
│   ├── public/
│   ├── resources/
│   └── routes/
├── docker-compose.yml
└── README.md
```
---

## How to Run Project

### 1. Clone Repository

```bash
git clone https://github.com/kill4enemy/portfolio.git
```

---

### 2. Open Project

```bash
cd uts
```

---

### 3. Start Docker Container

```bash
dcu
```

---

### 4. Initialize Project

```bash
dca project:init
```

---

### 5. Stop Container

```bash
dcd
```

---

## Notes

Project menggunakan Docker Compose dengan pemisahan service:
- Nginx
- PHP-FPM
- MariaDB

Source code Laravel berada di dalam folder `src/` untuk memisahkan application source dan infrastructure configuration.

---

## Author

Raihan Isad  
20240803024
