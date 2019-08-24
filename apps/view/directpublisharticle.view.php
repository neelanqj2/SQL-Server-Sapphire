<?php 
	session_start() ;
	if(!isset($_COOKIE["passcode"])) {
		echo '<meta http-equiv="expired cookie" content="logout.view.php?msg=expired">';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Direct Publish Article</title>
<link rel="icon" type="image/ico" href="../../logo.ico"></link> 
<link rel="shortcut icon" href="../../logo.ico"></link>
    
    <!-- CSS File Library Includes -->
    <link rel="stylesheet" type="text/css" href="../../src/library/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../../src/library/bootstrap/css/bootstrap-responsive.css"/>  
    
    <!-- JavaScript Library Includes -->
    <script language="JavaScript" type="text/javascript" src='../../src/library/jquery/jquery-1.9.1.js'></script>
    <script language="JavaScript" type="text/javascript" src='../../src/library/jquery-cookie/jquery.cookie.js'></script>
    <script language="JavaScript" type="text/javascript" src='../../src/library/bootstrap/js/bootstrap.js'></script>
    <script language="JavaScript" type="text/javascript" src='../../src/library/knockoutjs/knockout-2.2.1.js'></script>  
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../src/custom/css/page.css">
    
    <!-- JavaScript Includes -->
    <script language="JavaScript" type="text/javascript" src='../../src/custom/js/page.js'></script> 
    <script language="JavaScript" type="text/javascript" src='../../src/custom/js/apps/viewmodels/directpublisharticle.viewmodel.js' defer="defer"></script>
    <script language="JavaScript" type="text/javascript" src='../../src/custom/js/apps/page/directpublisharticle.page.js' defer="defer"></script>
    
</head>

<body>
		<?php 
		if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) { 
			include("../view/headernav.inc.php"); ?>
			<div id="main">
            	<div id="hades">				
                    <div class="row-fluid">
                      <div class="span12 text-center">    
                            <div id="bigLogo" class="row-fluid">
                            </div>
                            <div class="row-fluid">
                                <h5>Direct Publish an Article</h5><br/><br/>
                            </div>
                      </div>
                    </div>
                    <div class="row-fluid">
                        <div id="content">
                            <div class="tabbable"> <!-- Only required for left/right tabs -->
                                <ul class="nav nav-tabs">
                                    <li>
                                    <a href="editarticle.view.php" href="#tab">Edit/Delete Article</a>
                                    </li>
                                    <li class="active">
                                    <a data-toggle="tab">Add Article</a>
                                    </li>
                                </ul>
                                <div id="results" class="tab-content">
                                    <div class="tab-pane active" id="tab">
                                        <div class="row-fluid">
                                            <div class="span8 offset4 text-center">
                                                    <div class="span6">
                                                        <div class="row-fluid">
                                                            <div class="span12">
                                                                <hr/>Pick A Category<hr/>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">                      	
                                                            <div class="span12">
                                                                <select data-bind="value: category">
                                                                  <option value="announcements">Announcements</option>
                                                                  <option value="worldnhistory">World / History</option>
                                                                  <option value="society">Society</option>
                                                                  <option value="scintech">Science / Technology</option>
                                                                  <option value="body">Body</option>
                                                                  <option value="sexndating">Sex / Dating</option>
                                                                </select>
                                                            </div>
                                                        </div>   
                                                                            
                                                        <div class="row-fluid">
                                                            <div class="span12">
                                                                <hr/>Title<hr/>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">                      	
                                                            <div class="span12">
                                                                <input type="text"  data-bind="value: title" maxlength="110"/>
                                                            </div>
                                                        </div>   
                                                        
                                                        <div class="row-fluid">
                                                            <div class="span12">
                                                                <hr/>Article Body<hr/>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">                      	
                                                            <div class="span12">
                                                                <textarea rows=20  data-bind="value: article"></textarea><hr/>
                                                            </div>
                                                        </div> 
                                                        
                                                        <div class="row-fluid">                      	
                                                            <div class="span12">
                                                                <button class="btn btn-inverse" data-bind="click: submitArticle">Submit Article</button>
                                                            </div>
                                                        </div>                                               
                                                                                     
                                                    </div>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                           </div>
                    </div>
                </div>
            </div>
        </div>
   		<div id="footer"></div>
    <?php 
	}?>

</body>
</html>