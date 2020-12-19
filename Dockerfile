FROM webdevops/php-nginx:7.4

ENV WEB_DOCUMENT_ROOT /app/public/

WORKDIR /app

COPY . .
#
#RUN apt update && apt install npm -y
#RUN npm --prefix ./public install ./public

RUN composer1 install

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN cp .env.example .env

RUN apt update && apt install yarn -y

RUN yarn install -y

#RUN pecl install mongodb
RUN echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/mongo.ini
