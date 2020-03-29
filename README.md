# Myanmar NRC
This package is for the developer who difficult to find Myanmar NRC data. It is including to filter related townships with related regions.

Other functions related with NRC are also included.

## Installation
```bash
composer require toetet\myanmarnrc
```

Publish configuration and asset files
```bash
php artisan vendor:publish --provider="Toetet\MyanmarNrc\MyanmarNrcServiceProvider"
```

This will add new configuration file, js file and blade file

You can find 
- config file in config/myanmarnrc.php
- js file in public/vendor/myanmarnrc.js
- blade file in resources/views/vendor/myanmarnrc/input.blade.php

## Documentation
#### Include NRC Filter Input
In your blade file, you can get NRC filter input easily as below.
```bash
\Toetet\MyanmarNrc\Facades\Nrc::input();
```

#### Get NRC Input Data
```bash
Nrc::data($request);					// 		1/KaMaTa(N)849832

Nrc::stateregion($request);			//		1

Nrc::citizen($request);					//		N

Nrc::township($request);			//		KaMaTa

Nrc::number($request);				//		849832
```

## License
[MIT](https://choosealicense.com/licenses/mit/)
