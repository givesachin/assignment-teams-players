# assignment-teams-players

https://github.com/givesachin/assignment-teams-players

Create a REST API for managing teams and players.

---

## Creating project,

composer create-project laravel/laravel teams-players

---

## For posts, I will create posts table through migration

php artisan make:migration create_posts_table --create=posts
php artisan make:migration create_blogs_table --create=blogs

---

## Now, I need Elequent model Post,

php artisan make:model Post
php artisan make:model Blog

---

## We need controller,

php artisan make:controller PostController --api
php artisan make:controller BlogController --api

---

## Let's create API Resource for Post response formatting,

php artisan make:resource PostResource
php artisan make:resource BlogResource

---

## In routes/api.php,

Route::apiResource('posts', PostController::class);
Route::apiResource('blogs', BlogController::class);

---

## Let's migrate the tables

php artisan migrate

---

## check post api resources are created,

php artisan route:list

---

## CI/CD temporary domain

https://manageblogposts.vardaneducationandtrust.in/

---

## Postman Public Collection

https://www.postman.com/orange-flare-819917/sachin-bhoi-testing/collection/t2ddu4k/manage-blog-posts
