## Laravel Route Traffic
Laravel Route Listing plugin. developer friendly package to display and list all the routes in the app
![alt text](https://github.com/InvertedX/routetraffic-laravel-route-lising/raw/master/screen/screen1.png "Route traffic screenshot") 
## Install steps
#### Setp 1 - adding package as composer dependency
add packge as composer dependency
```composer require invertedx/route-traffic```

#### setp 2 - configuring service provider 

add service to providers array in config/app.php
```php
invertedx\routetraffic\RouteTrafficServiceProvider::class,
```  
### step 2 - publishing assets
routetraffic require css and js assets to be in public path
```
php artisan vendor:publish
```
### final
visit `yourapp.dev/traffic` to view all your routes


