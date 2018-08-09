<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>API Call Builder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container text-center">
    <div class="jumbotron">
      <h1>API Call Builder</h1>
      <p>The purpose of this site is to assist in learning and build any call in the MailChimp API</p>
    </div>
  </div>

<!-- API Key submit -->
  <?php

  if (isset ($_POST["apikey"])) {
    $_SESSION["apikey"] = $_POST["apikey"];
  }

  ?>

  <div>
  <form method="post" id="list_form" action="">
    <div class="row justify-content-md-center" style="text-align:center; font-size:20px;">
      <div class="col col-md-auto">
        API Key:
      </div>
      <div class="col col-lg-2">
        <input type="text" name="apikey" value="">
      </div>
      <div class="col col-md-auto">
        <button type="subimt" form="list_form" value="submit">Post</button>
      </div>
    </div>
  </form>


  <div class="container text-center">
    <h2> Resource </h2>
    <p> Select the main resource. </p>
    <div class="container pb-3">
    <a class="btn btn-primary btn-med disable" href="http://thisiswhereicode.com?e=root" role="button">API Root</a>
    <a class="btn btn-primary btn-med disable" href="http://thisiswhereicode.com?e=apps" role="button">Apps</a>
    <div class="btn-group">
      <button type="button" class="btn btn-primary btn-med disable">Automations</button>
      <button type="button" class="btn btn-primary btn-med dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="caret"></span>
      </button>
      <div class="dropdown-menu multidropdown">
        <a class="dropdown-item" href="#">Emails</a>
        <a class="dropdown-item" href="#">Queue</a>
        <a class="dropdown-item" href="#">Removed Subscribers</a>
      </div>
    </div>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=batches" role="button">Batch Ops</a>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=batch-webhooks" role="button">Batch Webhooks</a>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=campaign-folders" role="button">Campaign Folders</a>
    <div class="btn-group">
      <button type="button" class="btn btn-primary btn-med">Campaigns</button>
      <button type="button" class="btn btn-primary btn-med dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="caret"></span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Content</a>
        <a class="dropdown-item" href="#">Send Checklist</a>
        <a class="dropdown-item" href="#">Feedback</a>
      </div>
    </div>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=conversations" role="button">Conversations</a>
  </div>
  <div class="container pb-3">
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=ecommerce/stores" role="button">Ecomm Stores</a>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=filemanager/files" role="button">File Manager Files</a>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=filemanager/folders" role="button">File Manager Folders</a>
    <a class="btn btn-primary btn-med" href="https://apiplayarea/lists.php" role="button">Lists</a>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=reports" role="button">Reports</a>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=search-campaigns" role="button">Search Campaigns</a>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=search-members" role="button">Search Members</a>
  </div>
  <div class="container pb-3">
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=template-folders" role="button">Template Folders</a>
    <a class="btn btn-primary btn-med" href="http://thisiswhereicode.com?e=templates" role="button">Templates</a>
  </div>
  </div>


  </body>
  </html>
