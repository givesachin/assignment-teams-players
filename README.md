# assignment-teams-players

https://github.com/givesachin/assignment-teams-players

Create a REST API for managing teams and players.

---

## Creating project,

composer create-project laravel/laravel laravel-teams-players
vue create vue-teams-players


---

## For teams and players, I will create tables through migration

php artisan make:migration create_teams_table
php artisan make:migration create_players_table
php artisan make:migration create_player_team_table

---

## Now, I need Elequent models,

php artisan make:model Team
php artisan make:model Player

---

## We need controller,

php artisan make:controller TeamController --api
php artisan make:controller PlayerController --api

---

## Let's create API Resource for Post response formatting,

php artisan make:resource TeamResource
php artisan make:resource PlayerResource

---

## In routes/api.php,

Route::apiResource('teams', TeamController::class);
Route::apiResource('players', PlayerController::class);

---

## Let's migrate the tables

php artisan migrate

---

## check api resources are created,

php artisan route:list

---
