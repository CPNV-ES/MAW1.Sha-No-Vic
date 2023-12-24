# # MAW1.Sha-No-Vic

A Website realized for a blackbox project at CPNV ES - Application development 1st year 1st semester.

Website to create quizes and to answer them.


## Getting started

### Install the latest version of Git
 #### Basic download
 https://git-scm.com/downloads
 
#### Or with a package manager

| Windows      | macOs |
| ----------- | ----------- |
| choco install git    | brew install git     |

#### Install php minimum 8.0 (latest version with manager)
https://www.php.net/downloads.php

| Windows      | macOs |
| ----------- | ----------- |
| choco install php    | brew install php      |



### Clone the repository 
```` git clone https://github.com/CPNV-ES/MAW1-LpoVicYan.git ````

## Install the project 

### Import all dependencies 
````composer install ````

### Set the environment file
Copy and rename the <code>.env.example </code> file  and fill the following part
```
DB_CONNECTION= 
DB_HOST=127.0.0.1 
DB_PORT=3306  
DB_DATABASE=  
DB_USERNAME=  
DB_PASSWORD=
```
### Create the database 
Create the database with the sql file in conception/database ->DB-BuildScript_2.0.sql

## Start the project 

### Start an php server 

````
php -S localhost:8000 -t ./public
````

Go to your navigator and open the server
