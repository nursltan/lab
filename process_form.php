<?php

require './config.php';
$mode = $_REQUEST["mode"];
if ($mode == "add_new" ) {
  $first_name = trim($_POST['first_name']);
  $middle_name = trim($_POST['middle_name']);
  $last_name = trim($_POST['last_name']);
  $email_id = trim($_POST['email_id']);
  $contact_no1 = trim($_POST['contact_no1']);
  $contact_no2 = trim($_POST['contact_no2']);
  $address = trim($_POST['address']);
  $filename = "";
  $error = FALSE;

  if (is_uploaded_file($_FILES["profile_pic"]["tmp_name"])) {
    $filename = time() . '_' . $_FILES["profile_pic"]["name"];
    $filepath = 'profile_pics/' . $filename;
    if (!move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }

  if (!$error) {
    $sql = "INSERT INTO `tbl_contacts` (`first_name`, `middle_name`, `last_name`, `address`, `contact_no1`, `contact_no2`, `email_address`, `profile_pic`) VALUES "
            . "( :fname, :mname, :lname, :address, :contact1, :contact2, :email, :pic)";

    try {
      $stmt = $DB->prepare($sql);

      // bind the values
      $stmt->bindValue(":fname", $first_name);
      $stmt->bindValue(":mname", $middle_name);
      $stmt->bindValue(":lname", $last_name);
      $stmt->bindValue(":address", $address);
      $stmt->bindValue(":contact1", $contact_no1);
      $stmt->bindValue(":contact2", $contact_no2);
      $stmt->bindValue(":email", $email_id);
      $stmt->bindValue(":pic", $filename);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["errorType"] = "Успех";
        $_SESSION["errorMsg"] = "Контакт успешно добавлен";
      } else {
        $_SESSION["errorType"] = "Фейл";
        $_SESSION["errorMsg"] = "Ошибка при добавлении контакта";
      }
    } catch (Exception $ex) {

      $_SESSION["errorType"] = "Фейл";
      $_SESSION["errorMsg"] = $ex->getMessage();
    }
  } else {
    $_SESSION["errorType"] = "Фейл";
    $_SESSION["errorMsg"] = "Ошибка при загрузке картины.";
  }
  header("location:index.php");
} elseif ( $mode == "update_old" ) {
  
  $first_name = trim($_POST['first_name']);
  $middle_name = trim($_POST['middle_name']);
  $last_name = trim($_POST['last_name']);
  $email_id = trim($_POST['email_id']);
  $contact_no1 = trim($_POST['contact_no1']);
  $contact_no2 = trim($_POST['contact_no2']);
  $address = trim($_POST['address']);
  $cid = trim($_POST['cid']);
  $filename = "";
  $error = FALSE;

  if (is_uploaded_file($_FILES["profile_pic"]["tmp_name"])) {
    $filename = time() . '_' . $_FILES["profile_pic"]["name"];
    $filepath = 'profile_pics/' . $filename;
    if (!move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  } else {
     $filename = $_POST['old_pic'];
  }

  if (!$error) {
    $sql = "UPDATE `tbl_contacts` SET `first_name` = :fname, `middle_name` = :mname, `last_name` = :lname, `address` = :address, `contact_no1` = :contact1, `contact_no2` = :contact2, `email_address` = :email, `profile_pic` = :pic  "
            . "WHERE contact_id = :cid ";

    try {
      $stmt = $DB->prepare($sql);

      // bind the values
      $stmt->bindValue(":fname", $first_name);
      $stmt->bindValue(":mname", $middle_name);
      $stmt->bindValue(":lname", $last_name);
      $stmt->bindValue(":address", $address);
      $stmt->bindValue(":contact1", $contact_no1);
      $stmt->bindValue(":contact2", $contact_no2);
      $stmt->bindValue(":email", $email_id);
      $stmt->bindValue(":pic", $filename);
      $stmt->bindValue(":cid", $cid);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["errorType"] = "Успех";
        $_SESSION["errorMsg"] = "Контакт успешно обновлен.";
      } else {
        $_SESSION["errorType"] = "Инф";
        $_SESSION["errorMsg"] = "Не было изменений контакта.";
      }
    } catch (Exception $ex) {

      $_SESSION["errorType"] = "Фейл";
      $_SESSION["errorMsg"] = $ex->getMessage();
    }
  } else {
    $_SESSION["errorType"] = "Фейл";
    $_SESSION["errorMsg"] = "Ошибка при загрузке картинки.";
  }
  header("location:index.php?pagenum=".$_POST['pagenum']);
} elseif ( $mode == "delete" ) {
   $cid = intval($_GET['cid']);
   
   $sql = "DELETE FROM `tbl_contacts` WHERE contact_id = :cid";
   try {
     
      $stmt = $DB->prepare($sql);
      $stmt->bindValue(":cid", $cid);
        
       $stmt->execute();  
       $res = $stmt->rowCount();
       if ($res > 0) {
        $_SESSION["errorType"] = "Успех";
        $_SESSION["errorMsg"] = "Контакт успешно удален.";
      } else {
        $_SESSION["errorType"] = "Инф";
        $_SESSION["errorMsg"] = "Ошибка при удалении.";
      }
     
   } catch (Exception $ex) {
      $_SESSION["errorType"] = "Фейл";
      $_SESSION["errorMsg"] = $ex->getMessage();
   }
   
   header("location:index.php?pagenum=".$_GET['pagenum']);
}
?>