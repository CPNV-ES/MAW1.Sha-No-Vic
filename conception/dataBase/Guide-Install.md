# Installation Guide for Looper Database

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

### Congratulations!

You have successfully installed MySQL Server and HeidiSQL using Chocolatey. You can now use HeidiSQL to connect to your MySQL database and manage it effectively.

If you have any further questions or need additional assistance, please feel free to ask.


__Please make sure to replace `shell` with the appropriate shell type if needed (e.g., `powershell` for PowerShell) and ensure that your system has Chocolatey installed.__

## Executing database creation script

after [creating your MySQL user](https://dev.mysql.com/doc/refman/8.0/en/create-user.html) executedatabase creation script [DB-BuildScript_1.0.sql](DB-BuildScript_1.0.sql) with [HeidiSQL](#2-install-heidisql-for-database-inspection-not-mandatory).

If the execution doesn't show any errors you have successfully created the database and it is ready to be connected to your PHP

## Connection to PHP
**#TODO**