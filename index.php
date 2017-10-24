<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Sarahah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style >
  form{
    border: 1px solid #4CAF50;
  }
  .header{
    background-color: #4CAF50;
    padding-bottom: 10px;
    padding-top: 10px;
    color:white;
  }
  .footer
  {
    background-color: #4CAF50;
    padding-bottom: 10px;
    padding-top: 10px;
  }
  .form-group
  {
    margin: 10%; 
  }
  body
  {
    margin: 2%;
  }
</style>
</head>

<body>

<div class="container">
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <div class="header text-center center-block">
  <h2>Tell anything about ASHIK IMRAN</h2>
  <p style="font-weight:500">You can write any comment hiding yourself which might have never been told directly.<br>If you wish you can give a hint about you to be guessed. :P </p>
  </div>
  <form action="action_page.php" method="post">
    <div class="form-group">
      <label for="usr">Your Hint (if no hint, write "wellwisher"):</label>
      <input type="text" class="form-control" name="usr" required> 
      <br/>
      
      <label for="comment">Comment about Ashik Imran:</label>
      <textarea class="form-control" rows="7" name="comment"></textarea>
    </div>
    <div class="footer text-center center-block">
    <button type="submit" class="btn btn-danger btn-lg">Submit</button>
    </div>
  </form>
  </div>
  <div class="col-md-2"></div>
  </div>
</div>

</body>
</html>
