<?php 

class UsersController {
    public function auth(){
         if(isset($_POST['submit'])){
            $data['username'] = $_POST['username'];
            $result = User::login($data);
            if($result->username === $_POST['username'] && password_verify($_POST['password'],$result->password)){
                // $_SESSION['']
                $_SESSION['logged'] = true;
                $_SESSION['username'] = $result->username;
                $_SESSION['role'] = $result->role;
                $_SESSION['id'] = $result->id;
                Redirect::to('home');
            }else{
                
                Session::set('Error','Username or password is incorrect');
                Redirect::to('login');
            }
        }
        
    }

    public function register(){
        if(isset($_POST['submit'])){
            $options = [
                'cost' => 12
            ];
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
                    $data = array(
                        'fullname' => $_POST['fullname'],
                        'username' => $_POST['username'],
                        'password' => $password,
                        'role' => 'user'
                    );
                    $result = User::createUser($data);
                    // var_dump($result);
                    if($result === 'ok'){
                         Session::set('success','Your account has been created successfully');
                        Redirect::to('login?state=success');
                       
                    }else{
                        echo $result;
                    }
                }
    }

     static public function logout(){
         session_destroy();
     }
}

?>