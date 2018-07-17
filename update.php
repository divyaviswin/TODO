<!DOCTYPE html>
<?php include 'db.php' ; 
$id=$_GET['id'];
$sql ="select * from tasks where task_id='$id'";
$rows=$db->query($sql);
$row=$rows->fetch_assoc();
if(isset($_POST['send']))
{
  $tasks=$_POST['task'];
  $sql= "update tasks set task_name='$tasks' where task_id='$id'";
$db->query($sql);
header('location:index.php');
}

?>
<html>
  <head>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>TODO</title>
  </head>
  <body>
    <div class="container">
      <div class="row" style="margin-top:70px;">
        <center><h1>Todo List</h1></center>
        <div class="col-md-10 col-md-offset-1">
          <table class="table">
            <!-- Modal -->
                  
                    <form method="POST">
                      <div class="form-group">
                        <label>Task Name</label>
                        <input type="text" required name="task" value ="<?php echo $row['task_name']; ?>"class="form-control">
                      </div>
                      <input type="submit"  name="send" value="Update task" class="btn btn-success">
                      <a href="index.php" class="btn btn-warning">Back</a>
                                          </form>
                  </table>
                 
        </div>
      </div>
    </body>
  </html>