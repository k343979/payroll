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
      margin: 5px;
      padding: 5px 20px;
      background: black;
      color: white;
      cursor: pointer;
    }

    a {
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <form action="/delete/{id}" method="post">
    <table>
      @csrf
      <tr>
        <th>社員番号</th>
        <td>
          <input type="text" name="id" value="{{$form->id}}">
        </td>
      </tr>
      <tr>
        <th>部署</th>
        <td>
          <input type="text" name="department" value="{{$form->department}}">
        </td>
      </tr>
      <tr>
        <th>社員名</th>
        <td>
          <input type="text" name="name" value="{{$form->name}}">
        </td>
      </tr>
      <tr>
        <th>年齢</th>
        <td>
          <input type="text" name="age" value="{{$form->age}}">
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="text" name="email" value="{{$form->email}}">
        </td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>
          <input type="text" name="number" value="{{$form->number}}">
        </td>
      </tr>
    </table>
    <button>削除</button>
  </form>
  <button><a href="/">戻る</a></button>
</body>
</html>