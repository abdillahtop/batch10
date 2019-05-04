<?php
    //NO 1//
    function biodata(){
        $name = 'Abdillah Dzulfikar Mustanir';
        $address = 'Perum. Karang Duren Permai V-11, Pakisaji, Malang';
        $hobbies = array( "Design", "futsal","gaming","nonton film");
        $is_married = false;
        $school->HighSchool ="SMKN 11 Malang";
        $school->University ="Politeknik Negeri Malang";
        $skills->Pemrograman = array("html","css","java","c++");
        $skills->SoftwareDesign = array ("Adobe AI","Adobe PS","Adobe XD","Corel");
        $skills->Interpersonal = array ("Percaya Diri","Tanggung jawab", "Pekerja keras");
        $biodata = array ($name,$address,$hobbies,$is_married,$school,$skills);

        //JSON Converting array to json
        $JSON = json_encode($biodata);

        echo "<pre>";
        print_r($JSON);
        echo "</pre>";
    }
    
    // No.2//
    function randomuserpass (){
        $lengt = 8;
        $username = "abcdefghijklmnopqrstuvwxyz";
        $password = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890,.-_`+";
        $len1 = strlen ($username);
        $len2 = strlen($password);
      
        $u = 0;
        do {
          $startuser = rand(0, $len1);
          $startpassword = rand(0, $len2);
          $user = substr($username, $startuser, $lengt);
          $pass = substr($password, $startpassword, $lengt++);
      
          if(strlen($user) < 8){
              echo "is_Username_valid ($user) ";
              echo "<br>Return false <br>";
            } else {
              echo "is_username_valid($user) ";
              echo "<br>Return True<br>";
            };
        $u++;
        } while (strlen($user)<8);{
          if(strlen($pass) < 8){
              echo "<br>is_password_valid ($pass) ";
              echo "<br>Return false <br>";
            } else {
              echo "is_password_valid($pass) ";
              echo "<br>Return True";
            };
        };

    }

    //No.3//
    function cetak_gambar($lenght){
        for($i=1; $i<=$lenght ; $i++){
            for ($j=1; $j<=$lenght ; $j++){
                    if ($i==(($lenght+1)/2) || $j==1 || $j==$lenght){
                        echo "* ";
                    }else {
                        echo "= ";
                    }
                } echo "<br>";
            } 
       
    }

    //No.5//
    function String ($cetak) {

        $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $len = strlen ($string);
        $u = 1;
        do {
            $random = rand(0, $len);
            $acak = substr($string, $random, 32);
            if(strlen($acak) <= 32){
                echo "$acak<br>";
                };
            $u++;
        } while ($u<=$cetak);
    }
    


        echo "<br><b>Jawaban No.1</b>";
        echo biodata ();
        echo "<br><b>Jawaban No.2</b><br>";
        echo randomuserpass (); // refresh sampai mendapatkan nilai true pada username
        echo "<b><br>Jawaban No.3<br></b>";
        echo cetak_gambar (5); //masukkan bilangan ganjil
        echo "<br><b>Jawaban No.5<br></b>";
        echo String (3); //cetak 
?>