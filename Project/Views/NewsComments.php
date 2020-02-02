<?php ?>

<div class="row" style="padding-left: 15px; padding-right: 30px; margin-bottom: 50px;" >
    <div class="alert alert-info" id="AddCommentNotify" style="display:none;">
  <strong>Info!</strong> Your comment has been posted.
</div>
    <div id="AddCommentContainer">
            <div class="panel panel-info">
                <div class="panel-body">
                    <textarea placeholder="Your Name" id="AddCommentNameinNewsPage" class="pb-cmnt-textarea" style="height:45px; padding-top: 10px; overflow:hidden;"></textarea>
                    <textarea placeholder="Write your comment here!"  id="AddCommentContentinNewsPage" class="pb-cmnt-textarea"></textarea>
                    <form class="form-inline"  method="post">
                        <div class="btn-group">
                            <button class="btn" type="button"><span class="glyphicon glyphicon-picture"></span></button>
                            <button class="btn" type="button"><span class="glyphicon glyphicon-facetime-video"></span></button>
                            <button class="btn" type="button"><span class="glyphicon glyphicon-music"></span></button>
                        </div>
                        <button class="btn btn-primary pull-right" type="button" onclick="AddComment()">Share</button>
                    </form>
                </div>
            </div>
    </div>
    <div  id="CommentContainerinNewsPage"></div>
    </div>
