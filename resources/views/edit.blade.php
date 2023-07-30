<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <form action="/{{$tasks->id}}"method="post">
    @method('put')
    @csrf
    <input type="text"name="list"value="{{$tasks->list}}">
    <button type="submit">update</button>
  </form>

</body>
</html>