# RALC and Cookies Dynamic Content Setup

This update adds dynamic content support for RALC (Regulamento de Apoio à Liderança e Coordenação) and Cookies pages.

## Files Created/Modified

### New Files:
- `ralc.php` - Controller for RALC page
- `cookies.php` - Controller for Cookies page  
- `views/ralc_view.php` - View for RALC page with dynamic content
- `views/cookies_view.php` - View for Cookies page with dynamic content
- `database_setup.sql` - SQL script to create tables and insert data
- `helpers/criar_tabelas_ralc_cookies.php` - PHP script to create tables and insert data

### Modified Files:
- `componentes/header.php` - Added RALC and Cookies links to navigation
- `helpers/base_dados_helper.php` - Improved error handling for database connections

## Database Setup

### Option 1: Using SQL Script
Run the `database_setup.sql` file in your MySQL database:
```sql
mysql -u root -p trabalho_11 < database_setup.sql
```

### Option 2: Using PHP Script
Run the PHP setup script:
```bash
php helpers/criar_tabelas_ralc_cookies.php
```

## Database Tables

### Table: `ralc`
- `id` (INT, PRIMARY KEY, AUTO_INCREMENT)
- `texto` (TEXT)

### Table: `cookies`  
- `id` (INT, PRIMARY KEY, AUTO_INCREMENT)
- `texto` (TEXT)

## Features

- **Fallback Support**: If the database is not available, the pages will display static Lorem ipsum content
- **Dynamic Content**: When the database is connected, content is fetched dynamically from the respective tables
- **Consistent Navigation**: Both pages are accessible from the main navigation menu
- **Error Handling**: Graceful handling of database connection errors

## Usage

1. Set up the database tables using one of the methods above
2. Navigate to `/ralc.php` or `/cookies.php` to view the pages
3. Content will be loaded from the database, or fallback to static content if needed

The pages are now ready for production use and will automatically switch between database and fallback content based on availability.