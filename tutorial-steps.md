# Tutorial steps

## Routing

### Ping route

First step, we will create a new route endpoint and create a ping => pong

Check --> [http://localhost:8000/ping](http://localhost:8000/ping)

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/7528260d97cdc77766a3c53eabd990e20d2d16a7)

### Params

Try to pass params to endpoint

Check --> [http://localhost:8000/hello/world](http://localhost:8000/hello/world)
Check --> [http://localhost:8000/hello/John](http://localhost:8000/hello/John)

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/5b18e6e885b9dee6e1e273998314a81b0729df57)

#### Use Debug & Die from Laravel

Feel free to use the native Laravel function to `var_dump()` & `die()`

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/a4847b0eab8d5d158c8f1a1fe35dd591bd8bc08a)

You can define a multiple params using `where` methods from `Router` class to config the format of each parameters.

Check --> [http://localhost:8000/articles/hello-world-123456](http://localhost:8000/articles/hello-world-123456)

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/91a0a597859aef98da146bf8566f18b8320e5a96)

#### Use artisan to inspect route list

Use CLI, when you're in the laravel directory do:

```
php artisan route:list
```

It will get you the list of routes. You see that is possible to give a name to routes.

Give routes names passing an array as a second parnter with as a last item the callback function:

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/5abf409971f27ed4ba910234dffe8b8536c06d7b)

Generate link base on route name:

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/e67933bfb7594a0706e479c40843ebf82635f289)

It's possible to group routes:

Check --> [http://localhost:8000/admin/users](http://localhost:8000/admin/users)
Check --> [http://localhost:8000/admin/articles](http://localhost:8000/admin/articles)

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/ba67b1039405ad48061e4d98eff7378454d873a8)

## Middlewares

### Create first middleware

Use artisan to generate a middleware:
```
php artisan make:middleware <middlewareName>
```
We used:
```
php artisan make:middleware Ip
```
Artisan will create automotically the class in the right place using the right namespace

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/3b4ebabb3261c3d93cf75d0c5fdbddc5d551b4ef)

- Add middleware in Kernel
- Check the ip in the middelware
- Use the middleware for `/admin` routes

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/0d0cc62c94e0d9ab382e164c25248d50b973f4e4)

## Controllers

Separate your code and create a class to handle the controller for each routes. Let's create a first controller for a new route

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/45b9494b728d04870621616006148c40b4c0ff8c)

Use parameters via controllers

Check --> [http://localhost:8000/cars/Ferrari](http://localhost:8000/cars/Ferrari)
Check --> [http://localhost:8000/cars/Jeep](http://localhost:8000/cars/Jeep)

[Commit](https://github.com/KevinTss/PHP--Laravel-5.0/commit/c069c1cc5c36df13dc1f102c4f79098835d1cd02)
