
### Installation

You can install from laravel 5.1 > .To install the package

```sh
$ composer require itadventure/datetime
```

If you need to use by alias just put this line into config/app.php

```
'DT'      => Itadventure\Datetime\DateTime::class,
```

### Helper functions

The available helper functions are given belows:

| Function | Details |
| ------ | ------ |
| DT::dateWith12hTime($date) |  01-01-2018 01:00:00 PM |
| DT::onlyDMY($date) |  01-01-2018|


### Example
```
$date = '2018-01-01 13:00';
echo DT::dateWith12hTime($date); //Output: 01-01-2018 01:00:00 PM
echo DT::onlyMY($date); //Output: January 2018
```
### Todos

 - Write MORE Functions

License
----

MIT
