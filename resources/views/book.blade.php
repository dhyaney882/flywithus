<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

</head>

<body>

    <form action="/book" method="POST">

      @csrf

        <div class="form-group">

          <label for="text">username:</label>

          <input type="text" name="username" class="form-control" id="email">

        </div>

        <div class="form-group">

          <label for="pwd">address:</label>

          <input type="number" name="address" class="form-control" id="pwd">

        </div>

        <div class="form-group">

            <label for="pwd">source:</label>

            <input type="number" name="source" class="form-control" id="pwd">

          </div>

          <div class="form-group">

            <label for="pwd">destination:</label>

            <input type="number" name="destination" class="form-control" id="pwd">

          </div>
          <div class="form-group">

            <label for="pwd">date:</label>

            <input type="number" name="date" class="form-control" id="pwd">

          </div>
          <div class="form-group">

            <label for="pwd">time:</label>

            <input type="date" name="time" class="form-control" id="pwd">

          </div>

        <button class="btn btn-default">Submit</button>

      </form>

</body>

</html>