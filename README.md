# Simple POS Foundations

A beginner-friendly CodeIgniter 4 Point of Sale starter project.

## Pages

- `/` - Home page
- `/about` - About page
- `/customers` - Customer Accounts list
- `/users` - User Accounts list

The Customer Accounts and User Accounts pages use static PHP arrays. There is no database yet.

## Run the project

1. Open a terminal inside this project folder.
2. Run `php spark serve`.
3. Open the local address shown in the terminal, usually `http://localhost:8080`.

## Beginner file guide

- `app/Config/Routes.php` contains the website URLs.
- `app/Controllers/Pages.php` contains the Home and About page methods.
- `app/Controllers/Customers.php` contains the customer sample data.
- `app/Controllers/Users.php` contains the user sample data.
- `app/Views` contains the page HTML.
- `public/css/style.css` contains the small amount of CSS used by every page.
