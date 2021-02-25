<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Desafio FBSN</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </head>
  <body>
  <table class="table table-dark">
  <thead>
    <tr>
    <td scope="col">#</th>
      <td scope="col">Nome</th>
      <td scope="col">E-mail</th>
      <td scope="col">Idade</th>
      <td scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($dados as $dado)
      <td>{{$dado['id']}}</td>
      <td>{{$dado['nome']}}</td> 
      <td>{{$dado['email']}}</td>
      <td>{{$dado['idade']}}</td>
      <td>
        <a type="button" class="btn btn-primary" href="">Editar</a>
        <a type="button" class="btn btn-danger" href="delete/$dado['id']}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<hr>
<div>
  {{ $dados->links() }}
</div>
<hr>

<!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    
  </ul>
</nav> -->


<a type="button" class="btn btn-primary" href="{{ route('form.create') }}">Incluir</a>
  </body>
</html>