# Myanmar NRC
This package is for the developer who difficult to find Myanmar NRC data. It is including to filter related townships with related regions.

Other functions related with NRC are also included.

## Installation
```bash
composer require toetet/myanmarnrc
```

Publish configuration and asset files
```bash
php artisan vendor:publish --provider="Toetet\MyanmarNrc\MyanmarNrcServiceProvider"
```

This will add new configuration file, js file and blade file

You can find 
- config file at config/myanmarnrc.php
- js file at public/vendor/myanmarnrc.js
- blade file at resources/views/vendor/myanmarnrc/input.blade.php

In thease publish files, you are free to change them to anything to better match your application.

Bootstrap and Jquery are require.
```bash
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
```

## Documentation
#### Include NRC Filter Input
In your blade file, you can get NRC filter input easily as below.
```bash
\Toetet\MyanmarNrc\Facades\Nrc::input();
```

#### Get NRC Input Data
```bash
Nrc::data($request);				// 		1/KaMaTa(N)849832

Nrc::stateRegion($request);			//		1

Nrc::citizen($request);				//		N

Nrc::township($request);			//		KaMaTa

Nrc::number($request);				//		849832
```

## License
[MIT](https://choosealicense.com/licenses/mit/)
