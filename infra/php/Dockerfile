FROM php:8.0-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]
# 何も指定しなければSHELL ["/bin/sh", "-c"] がデフォルト
# -o オプションはオプションを設定するためのオプションです。
# -e オプションを定義しておくと、そのシェルスクリプト内で何らかのエラーが発生した時点で、それ以降の処理を中断できます。
# -u オプションを定義しておくと、未定義の変数に対して読み込み等を行おうとした際にエラーとなります。
# -x オプションを定義しておくと、実行したコマンドを全て標準エラー出力に出してくれます。

# ユーザーを作成
ARG UID=1000
ARG GID=1000
RUN useradd -m -u ${UID} docker

ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer
# コンテナ内のサーバー環境変数を設定


COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install git unzip libzip-dev libicu-dev libonig-dev vim && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_mysql zip bcmath

RUN curl -fsSL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs
RUN npm install npm@latest -g

COPY ./php.ini /usr/local/etc/php/php.ini

# 作成したユーザーに切り替える
USER ${UID}:${GID}

# WORKDIR /work
# ホームディレクトリ名を指定