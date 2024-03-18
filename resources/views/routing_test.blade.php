<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Routing Test</title>
  </head>
  <body>
    <h1>ルーティングテストページです</h1>

    <h2>GETリクエスト・パラメータテスト</h2>
    <form action="{{ route('routing.request.test') }}" method="GET">
      <input type="text" name="age" placeholder="年齢を入力" />
      <input type="text" name="my_name" placeholder="名前を入力" />
      <input type="submit" value="送信" />
    </form>

    <h2>POSTリクエスト・パラメータテスト</h2>
    <form action="{{ route('routing.request.test') }}" method="POST">
      @csrf
      <input type="text" name="age" placeholder="年齢を入力" />
      <input type="text" name="my_name" placeholder="名前を入力" />
      <input type="submit" value="送信" />
    </form>
  </body>
</html>