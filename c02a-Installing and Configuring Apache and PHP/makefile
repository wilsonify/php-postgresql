all: build run

clean:
	docker system prune -af

build:
	docker build --progress=plain -t ghcr.io/wilsonify/c02-installing-and-configuring-apache-and-php:latest .

run:
	docker run --rm --name c02-installing-and-configuring-apache-and-php \
-v ./etc/ssl/certs/rr-origin.pem:/etc/ssl/certs/rr-origin.pem \
-v ./etc/ssl/private/rr-private-key.pem:/etc/ssl/private/rr-private-key.pem \
-p 443:443 ghcr.io/wilsonify/c02-installing-and-configuring-apache-and-php:latest
