<?php

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
      <li class="active"><?php echo ($_GET["m"] == "update") ? "Изменить" : "Добавить"; ?> контакт</li>
    </ul>
</div>

  <div class="row">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo ($_GET["m"] == "update") ? "Изменить" : "Добавить"; ?> контакт</h3>
      </div>
      <div class="panel-body">
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

        <form class="form-horizontal" name="contact_form" id="contact_form" enctype="multipart/form-data" method="post" action="process_form.php">
          <input type="hidden" name="mode" value="<?php echo ($_GET["m"] == "update") ? "update_old" : "add_new"; ?>" >
          <input type="hidden" name="old_pic" value="<?php echo $results[0]["profile_pic"] ?>" >
          <input type="hidden" name="cid" value="<?php echo intval($results[0]["contact_id"]); ?>" >
          <input type="hidden" name="pagenum" value="<?php echo $_GET["pagenum"]; ?>" >
          <fieldset>
            <div class="form-group">
              <label class="col-lg-4 control-label" for="first_name"><span class="required">*</span>Имя:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["first_name"] ?>" placeholder="Имя" id="first_name" class="form-control" name="first_name"><span id="first_name_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="middle_name">Отчество:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["middle_name"] ?>" placeholder="Отчество" id="middle_name" class="form-control" name="middle_name">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="last_name"><span class="required">*</span>Фамилия:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["last_name"] ?>" placeholder="Фамилия" id="last_name" class="form-control" name="last_name"><span id="last_name_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="email_id"><span class="required">*</span>Email:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["email_address"] ?>" placeholder="Email" id="email_id" class="form-control" name="email_id"><span id="email_id_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="contact_no1"><span class="required">*</span>Номер №1:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["contact_no1"] ?>" placeholder="Номер контакта" id="contact_no1" class="form-control" name="contact_no1"><span id="contact_no1_err" class="error"></span>
                <span class="help-block">Максимум 10 символов.</span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="contact_no2">Номер №2:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["contact_no2"] ?>" placeholder="Номер контакта" id="contact_no2" class="form-control" name="contact_no2"><span id="contact_no2_err" class="error"></span>
                <span class="help-block">Максимум 10 символов.</span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="profile_pic">Аватарка контакта:</label>
              <div class="col-lg-5">
                <input type="file"  id="profile_pic" class="form-control file" name="profile_pic"><span id="profile_pic_err" class="error"></span>
                <span class="help-block">Только jpg, jpeg, png, gif, bmp.</span>
              </div>
            </div>
            
            <?php if ($_GET["m"] == "update") { ?>
            <div class="form-group">
              <div class="col-lg-1 col-lg-offset-4">
                <?php $pic = ($results[0]["profile_pic"] <> "" ) ? $results[0]["profile_pic"] : "no_avatar.png" ?>
                <a href="profile_pics/<?php echo $pic ?>" target="_blank"><img src="profile_pics/<?php echo $pic ?>" alt="" width="100" height="100" class="thumbnail" ></a>
              </div>
            </div>
            <?php 
            }
            ?>
            
            
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="address">Адрес:</label>
              <div class="col-lg-5">
                <textarea id="address" name="address" rows="3" class="form-control"><?php echo $results[0]["address"] ?></textarea>
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-lg-5 col-lg-offset-4">
                <button class="btn btn-primary" type="submit">Отправить</button> 
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

<script type="text/javascript">
$(document).ready(function() {
	
	// the fade out effect on hover
	$('.error').hover(function() {
		$(this).fadeOut(200);  
	});
	
	
	$("#contact_form").submit(function() {
		$('.error').fadeOut(200);  
		if(!validateForm()) {
            // go to the top of form first
            $(window).scrollTop($("#contact_form").offset().top);
			return false;
		}     
		return true;
    });

});

function validateForm() {
	 var errCnt = 0;
	 
	 var first_name = $.trim( $("#first_name").val());
     var last_name = $.trim( $("#last_name").val());
	 var email_id = $.trim( $("#email_id").val());
	 var contact_no1 = $.trim( $("#contact_no1").val());
	 var contact_no2 = $.trim( $("#contact_no2").val());
     
	 var profile_pic =  $.trim( $("#profile_pic").val());

	// validate name
	if (first_name == "" ) {
		$("#first_name_err").html("Enter your first name.");
		$('#first_name_err').fadeIn("fast"); 
		errCnt++;
	}  else if (first_name.length <= 2 ) {
		$("#first_name_err").html("Enter atleast 3 letter.");
		$('#first_name_err').fadeIn("fast"); 
		errCnt++;
	}
    
    if (last_name == "" ) {
		$("#last_name_err").html("Enter your last name.");
		$('#last_name_err').fadeIn("fast"); 
		errCnt++;
	}  else if (last_name.length <= 2 ) {
		$("#last_name_err").html("Enter atleast 3 letter.");
		$('#last_name_err').fadeIn("fast"); 
		errCnt++;
	}
    
    if (!isValidEmail(email_id)) {
		$("#email_id_err").html("Enter valid email.");
		$('#email_id_err').fadeIn("fast"); 
		errCnt++;
	}
    
    if (contact_no1 == "" ) {
		$("#contact_no1_err").html("Enter first contact number.");
		$('#contact_no1_err').fadeIn("fast"); 
		errCnt++;
	}  else if (contact_no1.length <= 9 || contact_no1.length > 10 ) {
		$("#contact_no1_err").html("Enter 10 digits only.");
		$('#contact_no1_err').fadeIn("fast"); 
		errCnt++;
	} else if ( !$.isNumeric(contact_no1) ) {
		$("#contact_no1_err").html("Must be digits only.");
		$('#contact_no1_err').fadeIn("fast"); 
		errCnt++;
	}
    
    if (contact_no2.length > 0) {
      if (contact_no2.length <= 9 || contact_no2.length > 10 ) {
		$("#contact_no2_err").html("Enter 10 digits only.");
		$('#contact_no2_err').fadeIn("fast"); 
		errCnt++;
	} else if ( !$.isNumeric(contact_no2) ) {
		$("#contact_no2_err").html("Must be digits only.");
		$('#contact_no2_err').fadeIn("fast"); 
		errCnt++;
	}
    }
    
    
    if (profile_pic.length > 0) {
        var exts = ['jpg','jpeg','png','gif', 'bmp'];
		var get_ext = profile_pic.split('.');
		get_ext = get_ext.reverse();
        
       
        if ($.inArray ( get_ext[0].toLowerCase(), exts ) <= -1 ){
          $("#profile_pic_err").html("Must me jpg, jpeg, png, gif, bmp image only..");
          $('#profile_pic_err').fadeIn("fast"); 
        }
       
    }
    
	if(errCnt > 0) return false; else return true;
}

function isValidEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>
<?php
include './footer.php';
?>