[![Laravel](https://github.com/soap/livewire-jetstream-filament-boilerplate/actions/workflows/laravel.yml/badge.svg)](https://github.com/soap/livewire-jetstream-filament-boilerplate/actions/workflows/laravel.yml)

## About the Application
This application is a Laravel application boilerplate for Laravel Jetstream with Livewire choice and Filament as Admin Panel. This will reduce your time doing the same job at the start time of project.

## Features and Pakcages
- Laravel Jetstream Features
- User management customized to work with Jetstream.
- Filament 3 with Filament-shield to manage Roles and Permissions. The undelying package is Spatie/Laravel-Permission.
- Super administrator role can be configured in shield configuration file. This role was enabled using Gate, no need to assign permissions.

## Changes
- User model has first_name and last_name instead of name.
- You can use customized shield command to create super admin. It will ask for First name, Last name, E-mail and password. User will be created and assigned Super Admin role.

## How to Use
- Clone this package using https or ssh and name your application folder as needed. Here it is my_app
  ```
  git clone https://github.com/soap/livewire-jetstream-filament-boilerplate my_app
  ```
  
- Change to the application folder.
  ```  
  cd my_app
  ```
- Remove .git folder using
  ```
  rm -rf .git
  ```
  
- Copy .env.example to .env
  ```
  cp .env.example .env
  ```
- Install Composer packages.
  ```
  composer install
  ```
- Install Node packages.
  ```
  npm install
  ```
- Generate application key.
  ```
  php artisan key:generate
  ```
- Create storage link
  ```
  php artisan storage:link
  ```
- Configure database information in .env.
- Run the database migration. In local development mode, if your db_user can create database, Laravel will do that for you. No need to create database yourself.
  ```
  php artisan migrate
  ```
- Test if it is working as needed.

## Contributing

Contributing is welcome in form of pull requests or ideas.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Prasit Gebsaap via [prasit.gebsaap@gmail.com](mailto:prasitt.gebsaap@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
