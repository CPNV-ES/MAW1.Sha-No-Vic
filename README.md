# Exercise Looper

A Website realized for a blackbox project at CPNV ES - Application development 1st year 1st semester.

Website to create quizes and to answer them.

## Install Guide
### Prerequisites

- MySQL server
- PHP 8.0 or higher
- Composer

### Setup

1. To clone
   ``git Clone https://github.com/CPNV-ES/MAW1.Sha-No-Vic.git``
2. Use latest version
   ``git switch develop``
3. Build the Database
   ``DB-BuildScript_2.0.sql``
4. install Composer
   ```Composer install```
5. rename ``.env.example`` to ``.env`` and fill in the Database name, user and Password in
### Startup
1. Start a PHP development server
   `` php -S localhost:8000 -t ./public``

### Use

In a browser enter ``localhost:8000``