# Installation Guide for Looper Database on Windows

This guide will help you install MySQL and HeidiSQL using Chocolatey, a package manager for Windows, so you can run .

## Prerequisites

Before you begin, ensure that you have Chocolatey installed on your system. If you haven't installed Chocolatey, you can do so by following the instructions at [Chocolatey Installation Guide](https://chocolatey.org/install).

## Installation Steps

### 1. Install MySQL Server

To install MySQL Server using Chocolatey, open a Command Prompt or PowerShell with administrator privileges and run the following command:

```shell
choco install mysql
```
Follow the prompts to complete the installation. You may be asked to set a root password during the installation process. Make sure to remember this password as you'll need it later.

### 2. Install HeidiSQL for database inspection (not mandatory)

To install HeidiSQL using Chocolatey, open a Command Prompt or PowerShell with administrator privileges and run the following command:

```shell
choco install heidisql
```

Follow the prompts to complete the installation of HeidiSQL.


__Please make sure to replace `shell` with the appropriate shell type if needed (e.g., `powershell` for PowerShell) and ensure that your system has Chocolatey installed.__

## Executing database creation script

after [creating your MySQL user](https://dev.mysql.com/doc/refman/8.0/en/create-user.html) executedatabase creation script [DB-BuildScript_2.0.sql](DB-BuildScript_2.0.sql) with [HeidiSQL](#2-install-heidisql-for-database-inspection-not-mandatory).

If the execution doesn't show any errors you have successfully created the database and it is ready to be connected to your PHP

## Boot it up
To start the PHP Server : ```php -S localhost:8080 -t public```

Don't forget to specify the desired port instead of 8080

With your preffered browser open the link

## Enjoy the website!