
echo "set env variable"

# Set up path to Moodle code
export MOODLE_DOCKER_WWWROOT=`pwd`/www

export MOODLE_DOCKER_PHP_VERSION=7.4

export COMPOSE_PROJECT_NAME=dbmoodle

# Choose a db server (Currently supported: pgsql, mariadb, mysql, mssql, oracle)
export MOODLE_DOCKER_DB=mysql

bin/moodle-docker-compose down

