all: build run

clean:
	docker system prune -af

build:
	docker build --progress=plain -t ghcr.io/wilsonify/c02b-installing-and-configuring-nginx-and-php:latest .

run:
	docker run --rm --name c02b-installing-and-configuring-nginx-and-php \
-v ./etc/ssl/certs/rr-origin.pem:/etc/ssl/certs/rr-origin.pem \
-v ./etc/ssl/private/rr-private-key.pem:/etc/ssl/private/rr-private-key.pem \
-p 443:443 ghcr.io/wilsonify/c02b-installing-and-configuring-nginx-and-php:latest

up:
	docker compose up -d

down:
	docker compose down