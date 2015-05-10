<?php session_start();


class Interest extends controller {



  public function index() {

    if (empty($_POST["searchInterest"])) {
      $searchInterest = "%";
      }

    $interests = $this->interests->getAllInterests($searchInterest);

    if(isset($_SESSION['USER_TYPE'])){
      if($_SESSION['USER_TYPE'] == 'registrar'){
        require APP . 'view/_templates/header.php';
            require APP . 'view/interest/index.php';
            require APP . 'view/_templates/footer.php';
      }
      else{
        require APP . 'view/_templates/header.php';
            require APP . 'view/interest/index.php';
            require APP . 'view/_templates/footer.php';
      }
    }
    else {
      require APP . 'view/_templates/header.php';
      echo 'Must be logged in';
          require APP . 'view/home/login.php';
          require APP . 'view/_templates/footer.php';
    }
}
public function getAllInterests() {

if (empty($_POST["searchInterest"])) {
  $searchInterest = "%";
  }
  if (isset($_POST["searchInterest"])) {
  $searchInterest=$_POST['searchInterest'];
  }
$interests = $this->interests->getAllInterests($searchInterest);

    if(isset($_SESSION['USER_TYPE'])){
      if($_SESSION['USER_TYPE'] == 'registrar'){
        require APP . 'view/_templates/header.php';
        require APP . 'view/interest/index.php';
        require APP . 'view/_templates/footer.php';
      }
      else{
        require APP . 'view/_templates/header.php';
        require APP . 'view/interest/index.php';
        require APP . 'view/_templates/footer.php';
      }
    }
    else {
      require APP . 'view/_templates/header.php';
      echo 'Must be logged in';
      require APP . 'view/home/login.php';
      require APP . 'view/_templates/footer.php';
    }
  }
}
