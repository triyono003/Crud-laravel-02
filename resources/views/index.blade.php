<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

<style>
  form input{
    padding:7px 10px; outline:none;
  }
  #add{
    padding:8px 5px;
    background-color:#3c3c3c;
    color:snow;
    border:none;
  }
  table td{
    padding:10px 5px;
  }
</style>
</head>
<body>
  <h3 style="color:#484be5; text-align:center;"> Crud Laravel </h3>
  <br>
   
   <form action=""method="post">
     @csrf
     <input type="text"name="list"placeholder="*****"required>
     <button type="submit"name="postAdd"id="add">tambah</button>
   </form>
   
  <br>

    <div class="flex"style="">
      <table border=""style="width:100%;border-collapse:collapse; border-color:#bababa;">
    @foreach($tasks as $no=>$task)
        <tr>
          <td>{{$no+1}}</td>
          <td>
       {{ $task->list }}
       </td>
       <td>
         <button>
       <a href="{{ $task->id }}/edit"style="text-decoration:none;"> edit
         </button>
        </td>
        <td>
      <form action="{{$task->id}}"method="post">
        @method('delete')
        @csrf
        <button type="submit"style="">delete</button>
      </form>
        </td>
        </tr>
    @endforeach
    </div>
      </table>
 
  
  
</body>
</html>