FROM nginx:1.21

WORKDIR "/app"

RUN apt-get update && apt-get upgrade -y

RUN apt-get install -y curl \
	git

RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - && \
	apt-get install -y nodejs

RUN npm install -g yarn

CMD chmod -R 777 .
EXPOSE 80
