cd /root/lovelace &&
git pull &&
docker-compose exec lovelace composer install &&
rm -rf var/cache