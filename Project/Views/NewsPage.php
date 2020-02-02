
  <div class="modal   modal-fullscreen" id="NewsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <button type="button" class="btn btn-default NewsPageButtons" onclick="topFunction()" id="GoTopNewsButon" title="Go to top">
          <span class="glyphicon glyphicon glyphicon-menu-up"> Top </span> 
      </button>
      <button type="button" class="btn btn-default NewsPageButtons" onclick="closeModalFunction()" id="CloseNewsButton" title="Go to top">
          <span class="glyphicon glyphicon-menu-left">	Back</span> 
      </button>
      <div class="modal-dialog" role="document" style="margin: 0;">
          <div class="modal-content" style="border-radius: 0; border:none;">


              <div class="modal-body" style="overflow: hidden;">
             
            
                      <div class="row" class="ArticleContainar">
                          <div class="hidden-xs col-sm-1" style="background-color:white;">
                         
                          </div>
                          <div class="col-sm-8 " style="background-color:#FFFFFE; ">
                            <?php include 'anArticle.php'; ?>
                          </div>
                          <div class="hidden-xs col-sm-3 " style="background-color:#FFFFFE; ">
                                   <?php include 'RelatedNews.php'; ?>
                          </div>
                      </div>
                     <div class="row">
                           <div class="hidden-xs col-sm-1" style="background-color:white;"></div>
                           <div class="col-sm-8 ">
                               <button class="btn btn-info btn-md" style="margin-top: 35px; margin-right: 15px; float: right;" data-toggle="modal" data-target="#sendNote">Send a Note</button>
                             </div>
                               <div class="hidden-xs col-sm-3" style="background-color:white;"> </div>
                       
                       </div>
                       <div class="row">
                           <div class="hidden-xs col-sm-1" style="background-color:white;"></div>
                           <div class="col-sm-8 "><h4 style="margin-top: 40px;">Sources</h4>
                              <hr style="width: 100%; "></div>
                        <div class="hidden-xs col-sm-3" style="background-color:white;"> </div>
                       </div>
                      <div class="row" class="SourcesContainer">
                          <div class="hidden-xs col-sm-1" style="background-color:white;">

                          </div>
                          <div class="col-sm-8 " style="background-color:#FFFFFE; ">
                              <?php include 'NewsSources.php'; ?>
                          </div>
                           <div class="hidden-xs col-sm-3" style="background-color:white;"> </div>
                      </div>
                      
                       <div class="row">
                           <div class="hidden-xs col-sm-1" style="background-color:white;"></div>
                           <div class="col-sm-8 "><h4 style="margin-top: 40px;">Tags</h4>
                              <hr style="width: 100%"></div>
                        <div class="hidden-xs col-sm-3" style="background-color:white;"> </div>
                       </div>
                          
                      <div class="row" class="TagsContainer">
                          <div class="hidden-xs col-sm-1" style="background-color:white;">

                          </div>
                          <div class="col-sm-8 " style="background-color:#FFFFFE; ">
                              <?php include 'NewsTags.php'; ?>
                          </div>
                         <div class="hidden-xs col-sm-3" style="background-color:white;"> </div>
                      </div>
                       <div class="row">
                           <div class="hidden-xs col-sm-1" style="background-color:white;"></div>
                           <div class="col-sm-8 "><h4 style="margin-top: 40px; float: left;">Comments</h4>
                              <hr style="width: 100%"></div>
                                   <div class="hidden-xs col-sm-3" style="background-color:white;"></div>
                       
                       </div>
                          <div class="row">
                           <div class="hidden-xs col-sm-1" style="background-color:white;"></div>
                           <div class="col-sm-8 ">
                                   <?php include 'NewsComments.php'; ?>
                           </div>
                      <div class="hidden-xs col-sm-3" style="background-color:white;"> </div>
                       
                       </div>
                  
                 
             
              </div>

          </div>

      </div>
  </div>