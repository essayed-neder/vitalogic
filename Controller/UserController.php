<?php

include $_SERVER['DOCUMENT_ROOT'].'/vitalogicgroupe/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/vitalogicgroupe/Model/user.php';


class UserContoller{
    public static $my_static = 'sss';
 


    function ajouterUtilisateur($user){
        $getemail = $user->getEmail();
    
        $sql1="SELECT * FROM user WHERE  email = '$getemail' ";
        $db=config::getConnexion();
        
        try{
            $query1 = $db->prepare($sql1);
            $query1->execute();
            $emailq = $query1->fetch();
            $count = $query1->rowCount();
        
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }


        $sql="INSERT INTO user (username,email,password,role) VALUES (:username,:email,:password,:role)";
        try {

            $query = $db->prepare($sql);
if($count == 0){
            $query->execute([
                'username' =>$user->getUsername(),
                'email'=>$user->getEmail(),
                'password'=>$user->getPassword(),
                'role'=>'USER',
            ]);
            $username=$user->getUsername();
            $email=$user->getEmail();
            $password=$user->getPassword();
        
           header("refresh: 0; url = http://localhost/vitalogic/controller/gmail-email/index.php?username=$username&&email=$email");

        }else{$my_static = '<div class="alert alert-danger" role="alert">Wrong Username or Password ! :)</div> ';}

        }catch(Exception $e){
            echo 'Erreur : '.$e->getMessage();

        }
    }


    function ajouterUtilisateur2($user){
        $getemail = $user->getEmail();
    
        $sql1="SELECT * FROM user WHERE  email = '$getemail' ";
        $db=config::getConnexion();
        
        try{
            $query1 = $db->prepare($sql1);
            $query1->execute();
            $emailq = $query1->fetch();
            $count = $query1->rowCount();
        
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }


        $sql="INSERT INTO user (username,email,password,role) VALUES (:username,:email,:password,:role)";
        try {

            $query = $db->prepare($sql);
if($count == 0){
            $query->execute([
                'username' =>$user->getUsername(),
                'email'=>$user->getEmail(),
                'password'=>$user->getPassword(),
                'role'=>'USER',
            ]);
            $username=$user->getUsername();
            $email=$user->getEmail();
            $password=$user->getPassword();
        
           header("refresh: 0; url = http://localhost/vitalogicgroupe/view/dash/showM.php");

        }else{$my_static = '<div class="alert alert-danger" role="alert">Wrong Username or Password ! :)</div> ';}

        }catch(Exception $e){
            echo 'Erreur : '.$e->getMessage();

        }
    }


    function modifierUtilisateur($user,$id){

		try {
			$db = config::getConnexion();
		

			$sql="UPDATE user  SET username= :username,email= :email,password= :password WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':username', $user->getUsername());
			$req->bindValue(':id', $id);
			$req->bindValue(':email', $user->getEmail());
			$req->bindValue(':password',MD5( $user->getPassword()));
			
			$req->execute();
		//	echo $query->rowCount() . " records UPDATED successfully <br>";
      
		} catch (PDOException $e) {
			$e->getMessage();
		}

		
	}


    function supprimerUtilisateur($id){
        $sql="DELETE FROM user WHERE id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{

            $req->execute();
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }



    function afficherUtilisateur(){
        $sql='SELECT * FROM user  ';
        $db=config::getConnexion();
        
        try{
            $list=$db->query($sql);
            return ($list);

        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }



    function afficherUtilisateurTrier(){
        $sql='SELECT * FROM user ORDER BY username ASC  ';
        $db=config::getConnexion();
        
        try{
            $list=$db->query($sql);
            return ($list);

        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }

    function recupererUtilisateur($id){
        $sql='SELECT * FROM user WHERE id=:id';
        $db=config::getConnexion();
        try{
          

            $query=$db->prepare($sql);
            $query->bindValue(':id', $id);
                    $query->execute();

                    $user=$query->fetch();
                    return $user;
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }

    }

    function login($username,$password){
        $sql="SELECT * FROM user WHERE username = '$username' and password = '$password'";
        $db=config::getConnexion();
        try{
        
  
            $query=$db->prepare($sql);
            $query->execute();
            $user=$query->fetch();
           // var_dump($user['email']);
            $email=$user['email'];
            $password=$user['password'];
            $role=$user['role'];
            $id=$user['id'];
            $count= $query->rowCount();
            if($count == 1) {
              
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['role'] =$role;
                
                if($role == 'ADMIN'){
                    header("location:listeutilisateur.php");
                }
                else
                header("location:my-profile.php?username=$username&id=$id&email=$email&password=$password");
             }else {
                $error = "Your Login Name or Password is invalid";
             }
           
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }


    function logout(){
     
   
     if(session_destroy()) {
      header("Location: login.php");
    }
    }


    function setAdmin($id){
        try {
			$db = config::getConnexion();
		

			$sql="UPDATE user  SET role= :role WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':role', 'ADMIN');
			$req->bindValue(':id', $id);
			
			$req->execute();
		//	echo $query->rowCount() . " records UPDATED successfully <br>";
      
		} catch (PDOException $e) {
			$e->getMessage();
		}

    }





}








?>