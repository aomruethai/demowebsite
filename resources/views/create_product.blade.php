<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hello User!!!</h2>
  <form action="/products" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control"  placeholder="Enter your name" name="myname">
    </div>

    <div class="form-group">
      <label for="Name">Detail</label>
      <input type="textarea" class="form-control"  placeholder="Enter Detail" name="mydetail">
    </div>

    <div class="form-group">
      <label for="Name">Price</label>
      <input type="number" class="form-control"  placeholder="Enter Price" name="myprice">
    </div>

    <br>
        <button type="submit" class="btn btn-warning">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </br>
  </form>
</div>

</body>
</html>