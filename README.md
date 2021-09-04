# Manage soccer team and its players.
CRUD based application with richful RESTFUL API endpoints for each functionalities build over <a href="https://laravel.com" target="_blank">Laravel</a> & Bootstrap Auth.

## Introduction
Its an application for managing soccer teams and their respective players. The application is having RESTFUL API endpoints powered CRUD application using <a href="https://laravel.com" target="_blank">Laravel</a> and Bootstrap Auth. Proper authentication for admin API routes for Create,Update,Delete on teams/players endpoints. Guest users are using Read endpoints. The application is build in a way that web routes are internally consuming api routes to do the needfuls.

## System requirements
These are the server requirements needed to setup the application on different machines:

- PHP >= 7.3
- Mysql >= 5.7

## Installation
Follow below steps to be able to run the application

1. git clone https://github.com/AnuragKhandelwal15/soccer-teams.git
2. cd soccer-teams && cp .env.example .env and update with needfuls. Also add this KEY at the bottom SOCCER_TOKEN having some unique key value
3. composer install && composer update
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed
7. serve the application

## To Run the application on localhost
#### Application will serve on the available PORT like `http://localhost:8000`

```
php artisan serve
```
Default admin-login credentials is:
```
email - admin@admin.com 
password - admin
```

## Screenshots:

##### Team Listing
![screenshot](https://github.com/AnuragKhandelwal15/soccer-teams/blob/master/screenshots/team_listing.png)

##### Team Players
![screenshot](https://github.com/AnuragKhandelwal15/soccer-teams/blob/master/screenshots/team_players.png)

##### Player Details
![screenshot](https://github.com/AnuragKhandelwal15/soccer-teams/blob/master/screenshots/player_details.png)

##### Login Screen
![screenshot](https://github.com/AnuragKhandelwal15/soccer-teams/blob/master/screenshots/login_screen.png)

##### Admin Team CRUD
![screenshot](https://github.com/AnuragKhandelwal15/soccer-teams/blob/master/screenshots/admin_teams_listings.png)

##### Admin Player CRUD
![screenshot](https://github.com/AnuragKhandelwal15/soccer-teams/blob/master/screenshots/admin_players_listing.png)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
