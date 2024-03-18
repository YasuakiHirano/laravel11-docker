Laravel11が動作するDocker環境です。

## 設定ファイルの用意

```shell
$ cp .env.example .env
```

## ビルド

```shell
$ docker-compose -f .docker_laravel11/docker-compose.yml build
```

## 起動

```shell
$ docker-compose -f .docker_laravel11/docker-compose.yml up -d
```

## 停止

```shell
$ docker-compose -f .docker_laravel11/docker-compose.yml down
```

