# Serpapi Web Search API
[![tests](https://github.com/slvler/serpapi-web-search/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/serpapi-search-api)
[![Latest Stable Version](https://poser.pugx.org/slvler/serpapi-search-api/v)](https://packagist.org/packages/slvler/serpapi-search-api)
[![Latest Unstable Version](https://poser.pugx.org/slvler/serpapi-search-api/v/unstable)](https://packagist.org/packages/slvler/serpapi-search-api)
[![License](https://poser.pugx.org/slvler/serpapi-search-api/license)](https://packagist.org/packages/slvler/serpapi-search-api) 
[![Total Downloads](https://poser.pugx.org/slvler/serpapi-search-api/downloads)](https://packagist.org/packages/slvler/serpapi-search-api)

### Introduction
API endpoint allows you to scrape the results from Google search engine via our SerpApi service. Head to the playground for a live and interactive demo. You can query https://serpapi.com/search using a GET request.

### Requirements
- PHP 8.0+
- Laravel 10.x

### Installation
To install this package tou can use composer:
```bash
composer require slvler/serpapi-web-search
```

### Usage
- First, you should extract the config/serpapi.php file to the config folder.
```bash
php artisan vendor:publish --tag=serpapi
```
- First of all we'll add the API key and API Url of the service we're using to our .env file of our project. If you don't have an account yet on serpapi.com, you should create one. Once you have an account you can copy your API key from the dashboard page and put it into you .env file.
```php
SERPAPI_BASE_URL=https://serpapi.com
SERPAPI_API_VERSION=
SERPAPI_API_KEY=
```

#### Web text search
- You can use it to search on serpapi api:
```php
use Slvler\Serpapi\Facades\Serpapi;

Serpapi::search(['q' => "bitcoin"])->result();
```
### Credits

- [slvler](https://github.com/slvler)
