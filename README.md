# The one3one multisite repository.

Contains core, plugins, themes necessary for the three sites to work.

## Installing

1. Clone the repository, setup your webserver to point to it.
2. `wp config create ...`
3. `wp core multisite-install ...`
4. `composer install` wherever composer.lock files are present.
5. If you are provided with a SQL dump import it and run `wp search-replace ... --all-tables`
