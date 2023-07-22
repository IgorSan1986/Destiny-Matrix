# Docker aka Dev Environment

Goal should be to mirror the production server environment
to prevent as many setup errors as possible.

Config see `.env`.

## Getting started

- [Install Docker](https://www.docker.com/get-started/)
- Add IP and host name `127.0.0.1 heatmask.loc` to your hosts file
  - macOS: `/etc/hosts`
  - Microsoft: `WINDOWS/system32/drivers/hosts`

## Start containers

- `$ cd /path/to/project/docker`
- `$ docker-compose up -d`
- Open http://heatmask.loc:8080

## Import sql

- put sql file in docker folder
- create terminal for mysql container
- `$ mysql -u root -ppassword heatmask < /var/www/html/docker/FILENAME.sql`
- create terminal for wordpress container
- `$ wp search-replace 'SITE_URL' 'http://heatmask.loc:8080' --allow-root`

---
Last but not least: **Happy Coding!**
