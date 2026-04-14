# Medical Records

An orthodontic patient records management system built with PHP. Originally developed in 2005, it provides a comprehensive digital form for recording detailed orthodontic clinical histories — from patient intake through diagnosis, treatment planning, and follow-up.

## Features

- **Complete orthodontic history** — 21-section clinical form covering the full orthodontic evaluation workflow
- **Patient records CRUD** — Create, view, search, and manage patient records
- **Photo management** — Upload and display patient photos (facial front/profile, intraoral, radiographs) with thumbnail generation
- **Multi-page clinical form** — Structured across numbered sections:
  - **Section 1** — Patient demographics (name, age, DOB, address, phone)
  - **Sections 2-3** — Family history (parents' data, pregnancy/birth history, development)
  - **Section 4** — General medical history (endocrine, nutritional, genetic, surgical, allergies)
  - **Section 5** — Oral habits (pacifier, finger sucking, mouth breathing, enuresis)
  - **Sections 6-10** — Extraoral and intraoral examination (lips, tongue, palate, breathing, swallowing)
  - **Sections 11-13** — Muscular and TMJ examination
  - **Sections 14-16** — Dental examination (dentition, occlusion, arch analysis, overjet/overbite)
  - **Section 17** — Radiographic analysis
  - **Section 18** — Diagnosis
  - **Section 19** — Prognosis
  - **Section 20** — Treatment plan (stages, appliances, controls)
  - **Section 21** — Clinical photographs

## Project Structure

| File | Description |
|------|-------------|
| `index.php` | Main entry point — login/navigation |
| `Database.php` | Database connection configuration |
| `functions.php` | UI helper functions (forms, image handling, date pickers) |
| `dbprocess.php` | Database CRUD operations |
| `showhistorias.php` | List and search patient records |
| `8.php` – `17.php` | Individual form section pages |
| `menuboton.php` | Navigation menu component |
| `style/` | CSS and UI icons |

## Requirements

- **PHP** 4.x+ (originally built on PHP 4.3)
- **MySQL** database
- **Web server** (Apache with mod_php)
- **GD Library** for image thumbnail generation

## Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/wilfredor/medical_records.git
   ```
2. Create a MySQL database and configure credentials in `Database.php`
3. Point your web server to the project directory
4. Ensure the `imagenes/` directory is writable for photo uploads

## Tech Stack

- **PHP** (procedural)
- **MySQL**
- **HTML/CSS** with inline JavaScript
- **GD Library** for image processing

## Historical Note

This project was built in 2005 as a real-world orthodontic records management system used in clinical practice in Venezuela. The interface is entirely in Spanish, reflecting its original deployment environment. It is preserved here as a portfolio piece and historical reference.

## Author

Wilfredo Rodríguez

## License

This project is open source.
