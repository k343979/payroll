<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payroll</title>
  <style>
    th {
      background-color: black;
      color: white;
      padding: 5px 30px;
    }

    td {
      border: 1px solid black;
      padding: 5px 30px;
      text-align: center;
    }

    button {
      padding: 5px 20px;
      background: black;
      color: white;
      cursor: pointer;
    }

    a {
      color: white;
      text-decoration: none;
    }

    .btn {
      margin: 10px 10px;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>社員番号</th>
      <th>部署</th>
      <th>社員名</th>
      <th>年齢</th>
      <th>メールアドレス</th>
      <th>電話番号</th>
      <th>編集</th>
      <th>削除</th>
    </tr>
    @foreach ($items as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->department}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->age}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->number}}</td>
          <td><button><a href="/edit/{{$item->id}}">編集</a></button></td>
          <td><button><a href="/delete/{{$item->id}}">削除</a></button></td>
        </tr>
    @endforeach
  </table>
  <button class="btn"><a href="/add">新規登録</a></button>
</body>

</html>