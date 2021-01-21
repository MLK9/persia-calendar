PersiaCalendar
=======

This package is a library for find events and holidays in Iran's calendar;
پکیجی هست برای یافتن رویداد ها و مناسبت های تقویم ایران.

** Language: Persian 

Installation
------------
```sh
composer require mlk9/persia-calendar
```

Usage
----------------
```php
<?php

use MLK9\PCalendar;

var_dump(PCalendar::Today()); //get toady events ; return array(object) ;
//  var_dump(PCalendar::Time(date("U", mktime(0, 0, 0, 1, 1, 2021)))); //get custom time events ; return array(object) ;
//  var_dump(PCalendar::IsHoliday()); //is holiday -> toady or custom time ; return (boolean) ;
```

Upgrade or add new events
----------------
You can edit \Events\%Event.php ;
