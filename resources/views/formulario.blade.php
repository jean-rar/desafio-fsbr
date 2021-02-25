<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <title>Desafio FBSN</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{ route('cadastro.formulario') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="mail1">Email address</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="age" name="age" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>