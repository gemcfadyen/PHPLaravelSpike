# Laravel PHP Framework

## Tech Requirements
php 7.0
Laravel 5.3
mysql
npm, node, grunt
apache2

This is a spike performed to evaluate whether Laravel is suitable for an upcoming project, and to see how PHP and circle ci integrate together.

OAuth2 has been implemented on the /api/user route using passport.

To start the server, either configure apache2 or nginx to serve the public folder, or from the root folder do: `php artisan serve --host=0.0.0.0 --port=8000`.

When the server starts you can nagivate to `localhost:8000` in your browser.

The endpoint `localhost:8000/names' will show you a json response of some names.

`localhost:8000/home` requires javascript to be install. This is Vue admin console, where tokens can be generated (which will be stored in the mysql database).  Something like postman can then be used to test the route `localhost:8000/api/users', by providing the authentication token as a header field.

[![CircleCI](https://circleci.com/gh/gemcfadyen/PHPLaravelSpike.svg?style=svg)](https://circleci.com/gh/gemcfadyen/PHPLaravelSpike)

