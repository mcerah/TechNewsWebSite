<!DOCTYPE html>
<html>
   <head>
   <title>ds supply a title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="CSS/HomePage.css" rel="stylesheet" type="text/css"/>
  <script src="JavaScript/HomePageView.js" type="text/javascript"></script>
  <script src="JavaScript/aNote.js" type="text/javascript"></script>
  <link href="CSS/NewsPageCSS.css" rel="stylesheet" type="text/css"/>
  <link href="CSS/NewsCommentsCSS.css" rel="stylesheet" type="text/css"/>
  <link href="CSS/ArticleCSS.css" rel="stylesheet" type="text/css"/>
  <link href="CSS/RelatedNewsCSS.css" rel="stylesheet" type="text/css"/>
  <link href="CSS/aNotePageCSS.css" rel="stylesheet" type="text/css"/>
  <link href="CSS/aNoteCSS.css" rel="stylesheet" type="text/css"/>
  <link href="CSS/AddCommentCSS.css" rel="stylesheet" type="text/css"/>
    </head>
        <body>

   <?php include 'NewsPage.php';?>
      <?php include 'aNote.php'; ?>
            
           
<nav class="navbar navbar-inverse navbar-fixed-top NavBarColors">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#TechNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" style="padding:0px;" href="index.php"> <img src="Images/Legaltech-news-thumb.jpg" alt="" class="Logo"/></a>
           
        </div>
        <div class="collapse navbar-collapse NavBarLinkDiv" id="TechNavBar">
            <ul class="nav navbar-nav  NavBarLinks" id="NavbarLinkList">
                <li><a href="#">Reviews</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Game</a></li>
            </ul>
        </div>
    </div>
</nav>
            
<div class="container-fluid">
    <div class="row" ID="TopNews">
    <?php include 'ShowcaseNews.php'; ?>
</div>
    
    
    
    <div class="row" style="display: flex;" ID="OtherNews">
        <div class="hidden-xs col-sm-1" style="background-color:white;"></div>
        <div class="col-sm-8 " style="background-color:white; ">
           
                
            <nav class="navbar navbar-inverse  " style=" min-height: 40px; background: forestgreen; border:0; margin-bottom:  0;  box-shadow: 0 7px 15px rgba(0, 0, 0, 0.7); margin-right: 8px; border-radius: 0;   border-bottom-right-radius: 4px;     border-bottom-left-radius: 4px;">
                <div class="container-fluid" style="padding-right: 0px;">
                    <div class="navbar-header" style="margin-right: 0; float: right;" id="OtherNewsCollapseElementContainer">
            
         <div class="dropdown" style="float: right;">
            <button class="btn btn-default dropdown-toggle" style="width: 120px; height: 40px; margin-left: 20px; border-radius: 0; border-bottom-right-radius: 4px;" type="button" id="menu1" data-toggle="dropdown">Daily
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Daily</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Weekly</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Monthly</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Annual</a></li>
                    </ul>
                </div>
            
            <button type="button" class="navbar-toggle" style="margin: 2px; float: left;" data-toggle="collapse" data-target="#OtherNewsBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
              
        </div>
        <div class="collapse navbar-collapse " id="OtherNewsBar">
            <ul class="nav navbar-nav  " id="OtherNewsBarList">
                    <li><a href="#">Most Popular</a></li>
                    <li><a href="#">Important News</a></li>
                    <li><a href="#">Summary </a></li>
                    <li><a href="#">Last News</a></li>
            </ul>
        </div>
    </div>
</nav>     
                

            <div class="col-sm-12 list-group StreamGroup">
               
                
<?php include 'NewsStream.php'; ?>
               
                 

            </div>
            
        </div>
        <div class="hidden-xs col-sm-3" style="background-color:white;"></div>
    </div>


    <footer class="row">
        <div class="col-sm-12"  ID="SpecFooter" style="background-color:#333; padding-top: 10px; padding-right: 30px; ">
              <h5 style="color:#F2F2F2; float:left;">University of Maribor - Web Development</h5>
            <h5 style="color:#F2F2F2; float:right;">Metin Cerah - 2017</h5>
        </div>
    </footer>
</div>


    </body>
</html>