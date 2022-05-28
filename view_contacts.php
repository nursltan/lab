<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */
require_once './config.php';
include './header.php';
try {
   $sql = "SELECT * FROM tbl_contacts WHERE 1 AND contact_id = :cid";
   $stmt = $DB->prepare($sql);
   $stmt->bindValue(":cid", intval($_GET["cid"]));
   
   $stmt->execute();
   $results = $stmt->fetchAll();
} catch (Exception $ex) {
  echo $ex->getMessage();
}

?>

<div class="row">
  <ul class="breadcrumb">
      <li><a href="index.php">Домой</a></li>
      <li class="active">Просмотр контакта</li>
    </ul>
</div>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsivenoida -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5139634720777851"
     data-ad-slot="2364206017"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br>
  <div class="row">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Просмотр контакта</h3>
      </div>
	  
      <div class="panel-body">
        <form class="form-horizontal" name="contact_form" id="contact_form" enctype="multipart/form-data" method="post" action="process_form.php">
          <fieldset>
            <div class="form-group">
              <label class="col-lg-4 control-label" for="first_name"><span class="required">*</span>Имя:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" placeholder="First Name" value="<?php echo $results[0]["first_name"] ?>" id="first_name" class="form-control" name="first_name"><span id="first_name_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="middle_name">Отчество:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value="<?php echo $results[0]["middle_name"] ?>" placeholder="Отчество" id="middle_name" class="form-control" name="middle_name">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="last_name"><span class="required">*</span>Фамилия:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value="<?php echo $results[0]["last_name"] ?>" placeholder="Last Name" id="last_name" class="form-control" name="last_name"><span id="last_name_err" class="error"></span>
              </div>
            </div>
            
             <div class="form-group">
              <label class="col-lg-4 control-label" for="profile_pic">Аватар профиля:</label>
              <div class="col-lg-5">
                <?php $pic = ($results[0]["profile_pic"] <> "" ) ? $results[0]["profile_pic"] : "no_avatar.png" ?>
                <a href="profile_pics/<?php echo $pic ?>" target="_blank"><img src="profile_pics/<?php echo $pic ?>" alt="" width="100" height="100" class="thumbnail" ></a>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="email_id"><span class="required">*</span>Email:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value="<?php echo $results[0]["email_address"] ?>" placeholder="Email ID" id="email_id" class="form-control" name="email_id"><span id="email_id_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="contact_no1"><span class="required">*</span>Контакт №1:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value="<?php echo $results[0]["contact_no1"] ?>" placeholder="Contact Number" id="contact_no1" class="form-control" name="contact_no1"><span id="contact_no1_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="contact_no2">Контакт №2:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value="<?php echo $results[0]["contact_no2"] ?>" placeholder="Номер контакта" id="contact_no2" class="form-control" name="contact_no2"><span id="contact_no2_err" class="error"></span>
              </div>
            </div>
            
           
            
            
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="address">Адресс:</label>
              <div class="col-lg-5">
                <textarea id="address" readonly="" name="address" rows="3" class="form-control"><?php echo $results[0]["address"] ?></textarea>
              </div>
            </div>
          </fieldset>
        </form>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsivenoida -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5139634720777851"
     data-ad-slot="2364206017"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br>
      </div>
    </div>
  </div>
<?php
include './footer.php';
?>