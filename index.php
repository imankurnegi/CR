<?php session_start();
$dbserver = 'localhost';
$dbname = 'home';
$dbuser = 'root';
$dbpass = '';

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if($conn->connect_error)
{
    echo "Error in connect". $connect_error;
}
else {
    echo "Connected";
}

if(!empty($_POST['email']))
{
    $email = $_POST['email'];
    $exampleselect = $_POST['exampleselect'];
    $examplemulti = implode(',',$_POST['examplemulti']);
    $description = $_POST['description'];
    mysqli_query($conn, "insert into tblfrm (email, exampleselect, examplemulti, description, insert_date) VALUES ('$email','$exampleselect','$examplemulti','$description',now())");
    $_SESSION['msg']='Data Inserted Successfully';
    header('location:index.php');
    exit();
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="row">
            <?php if(!empty($_SESSION['msg'])):?>
                <p><?= $_SESSION['msg'];?> <?php $_SESSION['msg']='';?></p>
            <?php endif;?>
            <div class="col-sm-4"><img src="images-mm.png"></div>    
            <div class="col-sm-8"><form id="submitFrm" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="email" required id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="exampleselect" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" name="examplemulti[]" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
<button type="button" class="btn btn-secondary" onclick="resetFrm()">Reset</button>
</form></div> 
<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
<?php $selectRow = "select * from tblfrm order by id desc";
$queryRow=mysqli_query($conn, $selectRow);
if(mysqli_num_rows($queryRow)>0)
{
    while($fetchrows=mysqli_fetch_assoc($queryRow))
    {?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $fetchrows['email'];?></td>
      <td><?php echo $fetchrows['exampleselect'];?></td>
      <td><?php echo $fetchrows['examplemulti'];?></td>
      <td><?php echo date('y/F/d h:i:s',strtotime($fetchrows['insert_date']));?></td>
    </tr>
    
    <?php }
}
?>

</tbody>



</table>

        </div>
    </div>
</main>
<script>
function resetFrm(){
    document.getElementById('submitFrm').reset();
}
</script>
</body>
</html>
<?php mysqli_close($conn);?>