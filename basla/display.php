<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    <div class="contanier">
      <div class="mer">
        <button class="btn3"><a href="user.php" class="text-light">
           <h6> Add user</h6></a>
        
        </button>
      </div>
    <div class="table-wrapper">
        <table>
  <thead>
    <tr class="sticky">
      <th class="sticky">id</th>
      <th scope="col">Name</th> 
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <tfoot>
      <!--Table Footer-->
      <tr>
        <th colspan="5">Table</th>
        
      </tr>
    </tfoot>

  <?php
$sql="Select * from crud";

$result=mysqli_query($con,$sql);



if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row["id"];
    $name=$row["name"];
    $email=$row["email"];
    $password=$row["password"];
    echo '<tr>
    <td scope="row">'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$password.'</td>
    <td>
  <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
  <button class="btn btn-danger remove"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
</td>
  </tr>';
  }
}
?>
  </tbody>
</table>
    
    </div>
    
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
 $(".remove").click(function(e) {
  swal({
  title: "Emin misiniz??",
  text: "Kullanıcı Silinecek!",
  icon: "warning",
  confirmButtonText: "Evet, silinsin!",
  cancelButtonText: "Hayır, vazgeç!",
  buttons:true,
  dangerMode: true,
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  closeOnConfirm: false,
  closeOnCancel: false
})
.then((willDelete) => {
  if (willDelete) {

    swal("Kullanıcı Başarıyla Silindi.", {
      icon: "success",
    });
  } else {
    swal("Kullanıcı Silme İşlemi İptal Edildi.");
  }
})
    });


</script>
</html>