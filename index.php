<?php
function Redirect_to($new_location){
  header("Location:".$new_location);
  exit;
}
?>

<?php
if(isset($_POST["submit"])){

  $post = $_FILES["postImage"]["name"];
  $text = $_POST["text"];
  $target = "uploads/".basename($_FILES["postImage"]["name"]);
  move_uploaded_file($_FILES["postImage"]["tmp_name"],$target);

   Redirect_to("index2.php?postImage=$post & text=$text");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<body style="background:pink;">

    <div style="padding:100px">
    <h4>Select image to add text</h4> 
    <form class="" action="index.php" method="post" enctype="multipart/form-data">       
    <div class="form-group">
                <div class="custom-file">
                <input class="custom-file-input" type="file" name="postImage" value="">
                <label for="postImage" class="custom-file-label">Select image</label>  
              </div>
              </div>

              <div class="form-group">
                <label for="title" class="text-danger"> <span class="fieldInfo">Add text: </span> </label>
                <input class="form-control" type="text" name="text" id="title" placeholder="Enter title here" value="">
              </div>

              <div class=" mb-1">
                      <button  name="submit" type="submit" class="btn btn-success btn-block"></i> Add </button>
                    </div>
</div>
    </div>
</body>
</html>