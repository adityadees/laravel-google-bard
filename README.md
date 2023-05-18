# laravel-bard
 A Laravel Package for Google Bard AI Chatbot


## INSTALATION
- composer require adityadees/laravel-bard
- php artisan vendor:publish --tag=laravel-lighthouse
- New file `laravel-bard.php` will created under `config` folder
- Fill the `bard_token` with your token


## BARD TOKEN
Visit https://bard.google.com/
Go to Developer tools or press F12 
Application → Cookies → Copy the value of __Secure-1PSID cookie.

<img width="864" alt="image" src="https://github.com/adityadees/laravel-bard/assets/37553901/2cea58d3-0c74-464d-9f75-88ab68f213e6">


## RUN
```php
$bard = (new LaravelBard())->get_answer('type_your_text_here');

# to get the reply just access this array
$bard["content"];

# you can access others array like this
$bard["conversation_id"];
$bard["response_id"];
$bard["factualityQueries"];
$bard["textQuery"];
$bard["choices"];
```


Feel free to help improve this package

Note: The package contain resources from repository https://github.com/dsdanielpark/Bard-API
