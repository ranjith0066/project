<?php
    session_start();
    error_reporting(0);

    $dir = "gallery/";  // set your gallery folder name

    $username = 'admin';   //set ur username
    $password = '123';   //set ur password

    if(isset($_POST['username']))
    {
        $fromuser = $_POST['username']; 
        $frompass = $_POST['password']; 
        if($fromuser==$username || $frompass==$password)
        {
            $_SESSION["access"] = 1;
        }
        else
        {
            echo "Invalid Username or Password";
        }
    }

    if(isset($_GET['del']))
    {
        unlink($dir.'/'.$_GET['del']);
    }

    if(isset($_GET['logout']))
    {
        session_destroy();
    }

    if(isset($_POST['fileupload']))
    {
        $dirfile = $dir.basename( $_FILES['file']['name']);     
        if(move_uploaded_file($_FILES['file']['tmp_name'], $dirfile)) {  
            echo "File uploaded successfully!";  
        } else{  
            echo "Sorry, file not uploaded, please try again!";  
        }  
    }

    $useraccess = $_SESSION["access"];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin - Albums</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>

<?php if($useraccess!=1){  ?>

<main class="login-form" style="margin-top: 50px;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login to Admin Panel</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="username" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                               
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

<?php } else { ?>


<main class="login-form" style="margin-top: 30px;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Upload Images</div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="1" name="fileupload">
                            <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">Select a File</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file" required autofocus>
                                </div>
                            </div>  
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Upload
                                </button>
                               
                            </div>
                    </div>
                    </form>
                </div>
            </div>

            <div class="col-md-8" style="margin-top:50px;">
                <div class="card">
                    <div class="card-header">My Gallery</div>
                    <div class="card-body">
                         <div class="row">
                           <?php
                            
                            if (is_dir($dir)){
                              if ($dh = opendir($dir)){
                                while (($file = readdir($dh)) !== false){
                                   if($file=="." OR $file==".."){} else { 

                                  ?>
                                 
                                      <div class="col-md-3">
                                      <img src="<?php echo $dir; ?>/<?php echo $file; ?>" width="100%" class="img-thumbnail">
                                      <a href="?del=<?php echo $file; ?>" onclick="return confirm('Are you sure you want to delete this item?');"> Delete </a>
                                      </div>
                                    
                                 <?php
                                  }
                                }
                                closedir($dh);
                              }
                            } ?>
                           </div>

                    </div>
                </div>
            </div>

        </div>

        </div>

</main>
 <center> <br> <a href="?logout=1" > Logout From Admin </a> </center>

<?php }?>
 

</body>
</html>