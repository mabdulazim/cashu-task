# cashu-task
> ### hotel search solution that look into many providers and display results from all the available hotels.

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone git@github.com:mabdulazim/cashu-task.git

Switch to the repo folder

    cd cashu-task

Install all the dependencies using composer

    composer install
    
Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:mabdulazim/cashu-task.git
    cd cashu-task
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan serve

----------

# Testing API

Run the laravel development server

    php artisan serve

The api can now be accessed at

 GET - http://localhost:8000/api/v1/hotels

Request headers

| **Required** 	| **Key**              	| **Value**            	|
|----------	|------------------	|------------------	|
| Yes      	| Content-Type     	| application/json 	|
| Yes      	| Accept 	        | application/json  |

Request query params

| **Required** 	| **Key**              	| **Value**            	|
|----------	|------------------	|------------------	|
| Yes      	| from_date     	| "2019-11-01" 	    |
| Yes      	| to_date 	        | "2019-11-18"      |
| Yes      	| city 	            | "AUH"             |
| Yes      	| adults_number 	| 4                 |


----------

## Folders

- `app/Http/Controllers` - Contains http controllers
- `app/Http/Requests` - Contains requests validation layers
- `app/Services` - Contains business logic layers
- `app/Transformers` - Contains transformers layers
- `routes` - Contains api routes defined in api.php file
- `tests` - Contains all the application tests
- `tests/Feature` - Contains all feature tests
- `tests/Unit` - Contains all unit tests

## Unit Testing

Run the laravel unit test

    ./vendor/bin/phpunit

## Dependencies

- [spatie/laravel-fractal](https://github.com/spatie/laravel-fractal) - provides a presentation and transformation layer for complex data output
