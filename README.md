# Portfolio Website UTS

Raihan Isad  
20240803024

---

## Overview

Website portfolio berbasis Laravel 12 dan Filament v3 untuk menampilkan profile, portfolio project, serta progress laporan project akhir secara dinamis melalui admin panel.
<img width="1919" height="904" alt="image" src="https://github.com/user-attachments/assets/c6bc7e6f-1ff7-427e-a296-2029363fd023" />


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

- Laravel 12
- Filament v3
- Livewire
- TailwindCSS
- MariaDB
- Docker
- Nginx

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
