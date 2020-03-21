
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Role</h2>
  <form action="{{route('employee.store')}}">
  
  
    <div class="form-group">
      <label for="RoleName">RoleName:</label>
      <input type="RoleName" class="form-control" id="RoleName" placeholder="Enter RoleName" name="RoleName">
    </div>
    <div class="form-group">
      <label for="Salary">Salary:</label>
      <input type="Salary" class="form-control" id="Salary" placeholder="Enter Salary" name="Salary">
    </div>
    <div class="form-group">
      <label for="id">ID:</label>
      <input type="ID" class="form-control" id="ID" placeholder="Enter ID" name="ID">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>