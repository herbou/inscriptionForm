<?php 
    require('./connect.php');

    $civilite = $_POST['CIVILITE'];
    $name = $_POST['NAME'];
    $Lname = $_POST['LNAME'];
    $login = $_POST['LOGIN'];
    $pass = sha1($_POST['PASSWORD']);
    $genre = $_POST['GENRE'];
    $email = $_POST['EMAIL'];
    $langue = $_POST['LANGUE'];
    $niveau = $_POST['NIVEAU'];
    $cp = $_POST['CP'];
    $ville = $_POST['VILLE'];
    $adresse = $_POST['ADRESSE'];
    $paye = $_POST['PAYE'];
    $comment = $_POST['COMMENTAIRE'];
    $loisirs = implode(',', $_POST['LOISIRS']);
    $naissance=date("Y-m-d",strtotime($_POST['NAISSANCE']));

    $cv = $_FILES['CVFILE']['name'];
    $tmpcv = $_FILES['CVFILE']['tmp_name'];

    $fileExt = pathinfo($cv, PATHINFO_EXTENSION) ;
    $cv=$_POST['NAME']."_".date("YmdHis",time()).rand(0,100000000).'.'.$fileExt;

    
    GLOBAL $con;

    $st=$con->prepare("INSERT INTO inscriptions (civilite, nom, prenom, login, password, genre, date_naissance, email, languages, niveau, adresse, loisirs, cp, ville, paye, commentaire, cv) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    if($st->execute(Array( $civilite, $name, $Lname, $login, $pass,$genre, $naissance, $email, $langue, $niveau, $adresse,$loisirs, $cp, $ville, $paye, $comment, $cv ))){ 
        move_uploaded_file($tmpcv, './server/uploads/cv/'.$cv);


        echo '<h2 style="color:#4af">Merci pour votre inscription.<h2>'; 
        exit();
    }

?> 