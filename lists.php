<?php
session_start();

 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lists</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
    $name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "name is required";
      } else {
        $name = test_input($_POST["name"]);
      }

      if (empty($_POST["company"])) {
        $companyErr = "company is required";
      } else {
        $company = test_input($_POST["company"]);
      }

      if (empty($_POST["addr1"])) {
        $addr1Err = "address1 is required";
      } else {
        $addr1 = test_input($_POST["addr1"]);
      }

      $addr2 = test_input($_POST["addr2"]);

      if (empty($_POST["state"])) {
        $stateErr = "state is required";
      } else {
        $state = test_input($_POST["state"]);
      }

      if (empty($_POST["city"])) {
        $cityErr = "city is required";
      } else {
        $city = test_input($_POST["city"]);
      }

      if (empty($_POST["zip"])) {
        $zipErr = "zip is required";
      } else {
        $zip = test_input($_POST["zip"]);
      }

      if (empty($_POST["country"])) {
        $countyErr = "country is required";
      } else {
        $country = test_input($_POST["country"]);
      }

      $phone = test_input($_POST["phone"]);

      if (empty($_POST["permission_reminder"])) {
        $permission_reminderErr = "permission_reminder is required";
      } else {
        $permission_reminder = test_input($_POST["permission_reminder"]);
      }

      $use_archive_bar = test_input($_POST["use_archive_bar"]);

      if (empty($_POST["from_name"])) {
        $from_nameErr = "from_name is required";
      } else {
        $from_name = test_input($_POST["from_name"]);
      }

      if (empty($_POST["from_email"])) {
        $from_emailErr = "from_email is required";
      } else {
        $from_email = test_input($_POST["from_email"]);
      }

      if (empty($_POST["subject"])) {
        $subjectErr = "subject is required";
      } else {
        $subject = test_input($_POST["subject"]);
      }

      if (empty($_POST["language"])) {
        $languageErr = "language is required";
      } else {
        $language = test_input($_POST["language"]);
      }

      $notify_on_subscribe = test_input($_POST["notify_on_subscribe"]);

      $notify_on_unsubscribe = test_input($_POST["notify_on_unsubscribe"]);

      if (empty($_POST["email_type_option"])) {
        $email_type_optionErr = "email_type_option is required";
      } else {
        $email_type_option = test_input($_POST["email_type_option"]);
      }

      $visibility = test_input($_POST["visibility"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    <div class="container">
      <div class="row">
        <div class="col jumbotron" style="text-align:center;">
          <h1>Lists</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">

        </div>
      </div>
      <div class="row pb-3" style="text-align:center; font-size:20px;">
        <div class="col" style="border: 1px solid black;">
          Parameters
        </div>
        <div class="col" style="border: 1px solid black;">
          Description
        </div>
        <div class="col" style="border: 1px solid black;">
          Input
        </div>
      </div>
      <div><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="row" style="text-align:center; font-size:15px;">
        <div class="col">
          name <span style="color:red; font-size:20px;">*</span>
        </div>
        <div class="col">
          Name of the list
        </div>
        <div class="col">
          <input type="text" name="name" value="<?php echo $name;?>"> <span style="color:red; font-size:15px;">*<br><?php echo $nameErr; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col" style="text-align:center;">
          <button type="button" class="btn btn-link btn-block" data-toggle="collapse" data-target="#contactTable" role="button" aria-controls="contactTable">Contact <span style="color:red; font-size:20px;">*</span></button>
        </div>
      </div>
      <div id="contactTable" class="collapse">
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            company <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            Company Name
          </div>
          <div class="col">
            <input type="text" name="company"> <span style="color:red; font-size:15px;">*<br><?php echo $companyErr; ?></span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            address1 <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            Address Line 1
          </div>
          <div class="col">
            <input type="text" name="addr1"> <span style="color:red; font-size:15px;">*<br><?php echo $addr1Err; ?></span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            address2
          </div>
          <div class="col">
            Address Line 2
          </div>
          <div class="col">
            <input type="text" name="addr2"><span>&ensp;&nbsp;</span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            city <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            City
          </div>
          <div class="col">
            <input type="text" name="city"> <span style="color:red; font-size:15px;">*<br><?php echo $cityErr; ?></span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            state <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            State
          </div>
          <div class="col">
            <input type="text" name="state"> <span style="color:red; font-size:15px;">*<br><?php echo $stateErr; ?></span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            zip <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            Postal Code
          </div>
          <div class="col">
            <input type="text" name="zip"> <span style="color:red; font-size:15px;">*<br><?php echo $zipErr; ?></span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            country <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            Country Code
          </div>
          <div class="col">
            <input type="text" name="country"> <span style="color:red; font-size:15px;">*<br><?php echo $countryErr; ?></span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            phone
          </div>
          <div class="col">
            Phone Number
          </div>
          <div class="col">
            <input type="text" name="phone"><span>&ensp;&nbsp;</span>
          </div>
        </div>
      </div>
      <div class="row" style="text-align:center; font-size:15px;">
        <div class="col">
          permission_reminder <span style="color:red; font-size:20px;">*</span>
        </div>
        <div class="col">
          Permission Reminder
        </div>
        <div class="col">
          <input type="textarea" name="permission_reminder"> <span style="color:red; font-size:15px;">*<br><?php echo $permission_reminderErr; ?></span>
        </div>
      </div>
      <div class="row" style="text-align:center; font-size:15px;">
        <div class="col">
          use_archive_bar
        </div>
        <div class="col">
          Use Archive Bar
        </div>
        <div class="col">
          <input type="radio" name="use_archive_bar" value="true">&nbsp;true&ensp;&nbsp;<br>
          <input type="radio" name="use_archive_bar" value="false">&nbsp;false<span>&ensp;&nbsp;</span>
        </div>
      </div>
      <div class="row">
        <div class="col" style="text-align:center;">
          <button type="button" class="btn btn-link btn-block" data-toggle="collapse" data-target="#camp_defTable" aria-controls="camp_defTable" role="button">Campaign_defaults <span style="color:red; font-size:20px;">*</span></button>
        </div>
      </div>
      <div id="camp_defTable" class="collapse">
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            from_name <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            Sender's Name
          </div>
          <div class="col">
            <input type="text" name="from_name"> <span style="color:red; font-size:15px;">*<br><?php echo $from_nameErr; ?></span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            from_email <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            Sender's Email Address
          </div>
          <div class="col">
            <input type="text" name="from_email"> <span style="color:red; font-size:15px;">*<br><?php echo $from_emailErr; ?></span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            subject <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            Subject
          </div>
          <div class="col">
            <input type="text" name="subject"> <span style="color:red; font-size:15px;">*<br><?php echo $subjectErr; ?></span>
          </div>
        </div>
        <div class="row" style="text-align:center; font-size:15px;">
          <div class="col">
            language <span style="color:red; font-size:20px;">*</span>
          </div>
          <div class="col">
            Language
          </div>
          <div class="col">
            <input type="text" name="language"> <span style="color:red; font-size:15px;">*<br><?php echo $languageErr; ?></span>
          </div>
        </div>
      </div>
      <div class="row" style="text-align:center; font-size:15px;">
        <div class="col">
          notify_on_subscribe
        </div>
        <div class="col">
          Notify on Subscribe
        </div>
        <div class="col">
          <input type="text" name="notify_on_subscribe"><span>&ensp;&nbsp;</span>
        </div>
      </div>
      <div class="row" style="text-align:center; font-size:15px;">
        <div class="col">
          notify_on_unsubscribe
        </div>
        <div class="col">
          Notify on Unsubscribe
        </div>
        <div class="col">
          <input type="text" name="notify_on_unsubscribe"><span>&ensp;&nbsp;</span>
        </div>
      </div>
      <div class="row" style="text-align:center; font-size:15px;">
        <div class="col">
          email_type_option <span style="color:red; font-size:20px;">*</span>
        </div>
        <div class="col">
          Email Type Option
        </div>
        <div class="col">
          <input type="radio" name="email_type_option" value="true">&nbsp;true&ensp;&nbsp;<br>
          <input type="radio" name="email_type_option" value="false">&nbsp;false
          <span style="color:red; font-size:15px;">*<br><?php echo $email_type_optionErr; ?></span>
        </div>
      </div>
      <div class="row" style="text-align:center; font-size:15px;">
        <div class="col">
          visibility
        </div>
        <div class="col">
          Visibility
        </div>
        <div class="col">
          <input type="radio" name="visibility" value="pub">&nbsp;public&ensp;&ensp;<br>
          <input type="radio" name="visibility" value="prv">&nbsp;private
          <span>&ensp;&nbsp;</span>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
    <div class="row py-3">
      <div class="col" style="text-align:center;">
      <button type="subimt" value="submit">Post</button>
    </div>
  </form></div>
    <div class="container mb-3" style="border: solid black 5px">
      <div class="row">
        <div class="col">
          <?php
          echo "The API request should be: <br><br>";
          echo "{ <br>";
          echo "&emsp;\"name\": \"" . $name . "\",<br>";
          echo "&emsp;\"contact\": {<br>";
          echo "&emsp; &emsp;\"company\": \"" . $company . "\",<br>";
          echo "&emsp; &emsp;\"address1\": \"" . $addr1 . "\",<br>";
          if (!empty($_POST["addr2"])) {
          echo "&emsp; &emsp;\"address2\": \"" . $addr2 . "\",<br>";
          }
          echo "&emsp; &emsp;\"city\": \"" . $city . "\",<br>";
          echo "&emsp; &emsp;\"state\": \"" . $state . "\",<br>";
          echo "&emsp; &emsp;\"zip\": \"" . $zip . "\",<br>";
          echo "&emsp; &emsp;\"country\": \"" . $country . "\"";
          if (!empty($_POST["phone"])) {
            echo ",<br>";
            echo "&emsp; &emsp;\"phone\": \"" . $phone . "\"<br>";
          } else {
            echo "<br>";
          }
          echo "&emsp;},<br>";
          echo "&emsp;\"permission_reminder\": \"" . $permission_reminder . "\",<br>";
          if (!empty($_POST["use_archive_bar"])) {
          echo "&emsp;\"use_archive_bar\": " . $use_archive_bar . ",<br>";
          }
          echo "&emsp;\"campaign_defaults\": {<br>";
          echo "&emsp; &emsp;\"from_name\": \"" . $from_name . "\",<br>";
          echo "&emsp; &emsp;\"from_email\": \"" . $from_email . "\",<br>";
          echo "&emsp; &emsp;\"subject\": \"" . $subject . "\",<br>";
          echo "&emsp; &emsp;\"language\": \"" . $language . "\"<br>";
          echo "&emsp;},<br>";
          if (!empty($_POST["notify_on_subscribe"])) {
          echo "&emsp; \"notify_on_subscribe\": \"" . $notify_on_subscribe . "\",<br>";
          }
          if (!empty($_POST["notify_on_unsubscribe"])) {
          echo "&emsp; \"notify_on_unsubscribe\": \"" . $notify_on_unsubscribe . "\",<br>";
          }
          echo "&emsp; \"email_type_option\": " . $email_type_option;
          if (!empty($_POST["visibility"])) {
            echo ", <br>";
            echo "&emsp; \"visibility\": \"" . $visibility . "\"<br>";
          } else {
            echo "<br>";
          }
          echo "}";
          ?>
        </div>
      </div>
    </div>

    <?php

    $rawdata = array(
      "name" => $_POST[name],
      "contact" => array(
        "company" => $_POST[company],
        "address1" => $_POST[addr1],
        "address2" => $_POST[addr2],
        "city" => $_POST[city],
        "state" => $_POST[state],
        "zip" => $_POST[zip],
        "country" => $_POST[country],
        "phone" => $_POST[phone]
      ),
      "permission_reminder" => $_POST[permission_reminder],
      "campaign_defaults" => array (
        "from_name" => $_POST[from_name],
        "from_email" => $_POST[from_email],
        "subject" => $_POST[subject],
        "language" => $_POST[language]
      ),
      "notify_on_subscribe" => $_POST[notify_on_subscribe],
      "notify_on_unsubscribe" => $_POST[notify_on_unsubscribe],
      "visibility" => $_POST[visibility]
    );

    if ($email_type_option === "true") {
      $rawdata['email_type_option'] = true;
    } elseif ($email_type_option === "false") {
      $rawdata['email_type_option'] = false;
    } else {
      $rawdata['email_type_option'] = "";
    }

    if ($use_archive_bar === "true") {
      $rawdata['use_archive_bar'] = true;
    } elseif ($use_archive_bar === "false") {
      $rawdata['use_archive_bar'] = false;
    } else {
      $rawdata['use_archive_bar'] = "";
    }

    /*$rawdata = array_filter($rawdata);*/
    $rawdata[contact] = array_filter($rawdata[contact]);
    $rawdata[campaign_defaults] = array_filter($rawdata[campaign_defaults]);
    $data = (json_encode($rawdata));

    echo "</br>" . $data;



    /*
    include 'functions.php';
    $URL = "https://us13.api.mailchimp.com/3.0/lists";

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      postRequest ($URL,$data);
    }
    */
    ?>

  </body>
</html>
