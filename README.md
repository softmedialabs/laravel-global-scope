# Laravel Global Scope

This package adds a handful of global scope commands to Artisan in your Laravel project. Generate scope files to allow you to constraints to all queries for a given model.
## Installation

Use the package manager [composer](https://getcomposer.org/) to install this packages

```bash
composer require softmedialabs/laravel-global-scope
```

## Usage

```php
<?php

namespace App;

use App\Scopes\YourScope;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new YourScope);
    }
}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
