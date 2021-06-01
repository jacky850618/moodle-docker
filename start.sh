
echo "set env variable"

# Set up path to Moodle code
export MOODLE_DOCKER_WWWROOT=`pwd`/www

export MOODLE_DOCKER_PHP_VERSION=7.4

export COMPOSE_PROJECT_NAME=dbmoodle

# Choose a db server (Currently supported: pgsql, mariadb, mysql, mssql, oracle)
export MOODLE_DOCKER_DB=mysql

# Ensure customized config.php for the Docker containers is in place
cp config.docker-template.php $MOODLE_DOCKER_WWWROOT/config.php

# Start up containers
bin/moodle-docker-compose up -d

# Wait for DB to come up (important for oracle/mssql)
#bin/moodle-docker-wait-for-db

# Work with the containers (see below)
# [..]

# Shut down and destroy containers
# bin/moodle-docker-compose down

