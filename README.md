```bash

## DEMO
![image](https://github.com/shihui0328/agvoy/blob/master/demo/demo-agvoy.gif)

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
