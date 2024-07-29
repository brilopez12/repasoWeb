<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="{{route('books.store')}}" method="post">
    @csrf
    <label for="1">
      Ingrese el nombre del libro:
    </label>
    <input type="text" name="title_book" id="1">

    <label for="2">
      Ingrese el autor del libro:
    </label>
    <input type="text" name="author_book" id="2">

    <label for="3">
      Ingrese la categoria del libro:
    </label>
    <input type="text" name="category_book" id="3">

    <button type="submit">Enviar</button>

  </form>
  <button type="button" onclick="mostrar()">Mostrar titulo</button>
  <script src="{{asset('js\script.js')}}"></script>
</body>

</html>