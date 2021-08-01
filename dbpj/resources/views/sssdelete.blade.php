<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
</head>
<style>
 .box{
  background-color: #2d197c;
  height: 100vh;
  width: 100vw;
  position: relative;
 }

 .card-area{
  background-color: #fff;
  width: 50vw;
  padding: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 10px;
 }

 .input-add{
  width: 80%;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  appearance: none;
  font-size: 14px;
  outline: none;
 }

 .button-add{
  text-align: left;
  border: 2px solid #dc70fa;
  font-size: 12px;
  color: #dc70fa;
  background-color: #fff;
  font-weight: bold;
  padding: 8px 16px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.4s;
  outline: none;
 }

 .input-update{
  width: 90%;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  appearance: none;
  font-size: 14px;
  outline: none;
 }

 .button-update{
  text-align: left;
  border: 2px solid #fa9770;
  font-size: 12px;
  color: #fa9770;
  background-color: #fff;
  font-weight: bold;
  padding: 8px 16px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.4s;
  outline: none;
}

 .button-delete{
  text-align: left;
  border: 2px solid #71fadc;
  font-size: 12px;
  color: #71fadc;
  background-color: #fff;
  font-weight: bold;
  padding: 8px 16px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.4s;
  outline: none;

 }

</style>

<body>
  <div class = "box">  
    <div class = "card-area">
      <h2 class ="title">Todo List</h2>
      <div class ="todo-area" >
        <form action="/todo/create" method="post" class="flex between mb-30">
          @csrf
          <input type="text" class="input-add" name="content">
          <input class="button-add" type="submit" value="追加">
        </form>
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
            <tr>
            <form action="/todo/delete" method="post" class="">
              <td>
                {{$item->created_at}}
              </td>
                <input type="hidden" name="id" value="{{$item->id}}">
              <td>
                <input type="text" class="input-update" name="content" value=" {{$item->content}}" >
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
              <td>
                  <button class="button-delete">削除</button>
              </td>
            </form>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
</body>

</html>
