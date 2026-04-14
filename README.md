# Medical Records

Orthodontic patient records system. PHP + MySQL. Built in 2005, interface in Spanish.

21-section clinical form: patient intake, family history, medical history, oral habits, extraoral/intraoral exam, muscular/TMJ exam, dental exam, radiographic analysis, diagnosis, prognosis, treatment plan, clinical photographs.

## Features

- Patient records CRUD
- Photo upload with thumbnail generation (GD Library)
- Multi-page structured clinical form (sections 1-21)

## Files

| File | Description |
|------|-------------|
| `index.php` | Entry point |
| `Database.php` | DB connection config |
| `functions.php` | UI helpers (forms, images, date pickers) |
| `dbprocess.php` | CRUD operations |
| `showhistorias.php` | List/search patient records |
| `8.php` – `17.php` | Individual form sections |
| `menuboton.php` | Navigation menu |
| `style/` | CSS and icons |

## Requirements

- PHP 4.x+
- MySQL
- Apache with mod_php
- GD Library

## Setup

```bash
git clone https://github.com/wilfredor/medical_records.git
```

1. Create MySQL database, configure credentials in `Database.php`
2. Point web server to project directory
3. Ensure `imagenes/` is writable
