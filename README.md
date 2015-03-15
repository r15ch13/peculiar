#Peculiar

An extension to the Laravel model. It allows the use of UUIDs as primary keys.

## Installation

Add `r15ch13/peculiar` as a requirement to `composer.json`:

```javascript
{
    "require": {
        "r15ch13/peculiar": "~1.0"
    }
}
```

Update your packages with `composer update` or install with `composer install`.


## Getting Started

`Peculiar` extends the `Eloquent` base class without changing its core functionality.

To create a new Peculiar model, simply make your model class derive from the `Peculiar` base class.

```php
use Rfifteen\Peculiar\Peculiar;

class User extends Peculiar {}
```

If you're using [LaravelBook\Ardent](https://github.com/laravelbook/ardent) use it like so:

```php
use Rfifteen\Peculiar\Ardent\Peculiar;

class User extends Peculiar {}
```

If you're using [Cartalyst\Sentry](https://github.com/cartalyst/sentry) use it like so:

```php
use Rfifteen\Peculiar\Sentry\PeculiarUser;

class User extends PeculiarUser {}
```

