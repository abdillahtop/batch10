<?php
include ("konek.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css"> 
   

    <!-- Boostrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" ;>
    <!-- Akhir Boostrap-->
</head>
    <body>
        <div class="container"> 
            <div class="section justive">
                <div class="row">
                    <div class="col justify-content-center">
                        <h1 class="text-center judul">Hasil Pemilu</h1>
                    </div>
                </div>
                <?php
                $sql = 'select*from candidates';
                $query = mysqli_query($db_link,$sql);
                ?>
                
                <?php
                while($data	= mysqli_fetch_array($query)){
                ?>
                <div class="row">
                    <table class="table table-bordered">
                        <tbody >
                            <tr>
                                <div class="col-lg justify-content-center">
                                    <td id="apasih"> 
                                        <div class="col- ">
                                            <h2 ><?php echo $data['Name']; ?></h2>
                                            <h3 ><?php echo $data['earned_vote']; ?></h3>
                                    </td>
                                    <td class="justify-content-center">
                                        <div class=" text-center">
                                            <button href="tambah/php" type="button" name="button" class="btn btn-primary ">
                                            Tambah
                                            </button>
                                        </div>
                                    </td>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>