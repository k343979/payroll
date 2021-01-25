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
      margin: 5px;
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
  <form action="/add" method="post">
    <table>
      @csrf
      <tr>
        <th>社員番号</th>
        <td>
          <input type="text" name="id" required>
        </td>
      </tr>
      <tr>
        <th>部署</th>
        <td>
          <input type="text" name="department" required>
        </td>
      </tr>
      <tr>
        <th>社員名</th>
        <td>
          <input type="text" name="name" required>
        </td>
      </tr>
      <tr>
        <th>年齢</th>
        <td>
          <input type="text" name="age" required>
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="text" name="email" required>
        </td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>
          <input type="text" name="number" required placeholder="00000000000">
        </td>
      </tr>
    </table>
    <button>登録</button>
  </form>  
  <button><a href="/">戻る</a></button>
</body>
</html>