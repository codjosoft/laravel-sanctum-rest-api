## Cache 

# make observer to observe product 
  
- run  ` php artsian make:Observer ProductObserver `


# make-product resource

- run  ` php artsian make:Resource ProductResource ` 



## Prevent broot-force access

- edit app\providers\RouteServiceProvider.php

``` protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute( 2)->by(optional($request->user())->id ?: $request->ip());
        });
    }
   ```
