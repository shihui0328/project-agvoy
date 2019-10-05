```bash
# Library installation
composer install

# Creating the database storage file
bin/console doctrine:database:drop --force
bin/console doctrine:database:create

# Creating the schema of the database
bin/console doctrine:schema:create

# Loading test data
bin/console doctrine:fixtures:load
```
