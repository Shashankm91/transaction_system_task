# Laravel Transaction Management System

## Tech Stack
- Laravel 12
- MySQL
- Blade + Bootstrap
- REST API

## Features
- Server-side pagination (Load More)
- Transaction filtering (ID & Status)
- Daily transaction summary calculation
- Manual job trigger
- Dashboard reporting

## Setup Instructions

### 1. Clone Repository
```bash
git clone https://github.com/Shashankm91/transaction-system.git
cd transaction-system

#Run these cmds
php artisan key:generate #to generate app key
php artisan migrate  #to create migrations files
php artisan db:seed --class=TransactionSeeder   #to add seeder data in table
