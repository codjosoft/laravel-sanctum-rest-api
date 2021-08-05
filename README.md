<p align="center"> <a href="http://www.codjosoft.tech/favicon_io/android-chrome-192x192.png" width="300"></a>


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>


## About 

Simple rest API with laravel Sanctum. Request is made to this endpoint to <br>

- get all the products
- create new product
- delete product
- edit product
- search for a product using a product name

## Demo

- **[demo](https://codjosft-rest-api.herokuapp.com/)**

## Endpoints
- headers
 ``` Accept: application/json ```
 ``` Content-Type: application/json ```
 ``` Token: <yourtoken> ```
NB: you will recieve a token on register/login response

- GET REQUEST

- get all products
  ```https://codjosft-rest-api.herokuapp.com/api/products```
- search product
  ```https://codjosft-rest-api.herokuapp.com/api/product/search/{name}```
- show product
  ```https://codjosft-rest-api.herokuapp.com/api/product/{id}```


POST REQUEST

- register
 ```https://codjosft-rest-api.herokuapp.com/api/register``` 

- login
 ```https://codjosft-rest-api.herokuapp.com/api/login``` 
NB: default login 

``` email : admin@codjosoft.tech ```
``` password : admin ```

- save product
 ```https://codjosft-rest-api.herokuapp.com/api/product```

```    request body {
        "name": "product name",
        "description": "product description",
        "price": "product price",
        "slug": "slug here"

    } 
  ``` 
  - delete product
  DELETE 
  ```https://codjosft-rest-api.herokuapp.com/api/product/{id}```

 - update product
  PUT
  ```https://codjosft-rest-api.herokuapp.com/api/product/{id}```

- logout
 post  ```https://codjosft-rest-api.herokuapp.com/api/logout```


## Installation

  To run this locally, you'll need to clone the repository and install the dependencies:

- cd into your directory
- run `composer install`
- run `php artisan key:generate`
- run `php artisan migrate`
- run `php artisan db:seed`
- run `php artisan serve`
- open browser and go to `http://localhost:8000`
- make sure you edit `.env.example` file
- edit `.env` and configure your database connection 

## Contributing

[Isaac Kojo Yeboah](https://github.com/kojoyeboah53i).

