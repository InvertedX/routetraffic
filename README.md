## Laravel Route Traffic
Laravel Route Listing plugin. simple way to view all the routes.
when it comes to laravel we have artisan to help to list all the routes.but our application is large and has 100s of routes this option is really a bad idea. so using this package as dev dependancy we can view all the routes on our browser by visiting  `yourapp.dev/traffic`. 
![alt text](https://cloud.githubusercontent.com/assets/6897265/23247996/213dec78-f9c3-11e6-9561-51f27532072d.png "Route traffic screenshot") 
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


