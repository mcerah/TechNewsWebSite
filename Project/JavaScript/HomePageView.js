
var NewsIDHolder;
var ClickedVoteButton=false;

(($ => {
    $(() => {
        $.prototype.fullscreen = function ()
        {
            var $e = $(this);
            if (!$e.hasClass('modal-fullscreen'))
                return;
            bind($e);
        };

        function cssn($e, props) {
            let sum = 0;
            props.forEach(p => {
                if ($e.css(p))
                    sum += parseInt($e.css(p).match(/\d+/)[0]);
            });
            return sum;
        }
        function g($e)
        {
            return {
                width: cssn($e, ['margin-left', 'margin-right', 'padding-left', 'padding-right', 'border-left-width', 'border-right-width']),
                height: cssn($e, ['margin-top', 'margin-bottom', 'padding-top', 'padding-bottom', 'border-top-width', 'border-bottom-width'])
            };
        }
        function calc($e)
        {
            const wh = $(window).height();
            const ww = $(window).width();
            const $d = $e.find('.modal-dialog');
            $d.css('width', 'initial');
            $d.css('height', 'initial');
            $d.css('max-width', 'initial');
            $d.css('margin', '0px');
            const d = g($d);
            const $h = $e.find('.modal-header');
            const $f = $e.find('.modal-footer');
            const $b = $e.find('.modal-body');
            $b.css('overflow-y', 'hidden');
            const bh = wh - $h.outerHeight() - $f.outerHeight() - ($b.outerHeight() - $b.height()) - d.height;
            $b.height(bh);
        }
        function bind($e)
        {
            $e.on('show.bs.modal', e => {
                const $e = $(e.currentTarget).css('visibility', 'hidden');
            });
            $e.on('shown.bs.modal', e => {
                calc($(e.currentTarget));
                const $e = $(e.currentTarget).css('visibility', 'visible');
            });
        }
        $(window).resize(() => {
            calc($('.modal.modal-fullscreen.in'));
        });
        bind($('.modal-fullscreen'));
    });
}))(jQuery);



// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    $("#NewsModal").scrollTop(0);
}

function closeModalFunction() {
    $('#NewsModal').modal('toggle');

}
var smEnable = false;
window.onresize = function (event) {
    var width = $(window).width();

  var StreamNewsRows = document.getElementsByClassName('StreamNews');
  var StreamNewsDateRows = document.getElementsByClassName('StreamNewsDateContainer');
 
    if (width < 768 && !smEnable)
    {
        console.log("aaaaaaaaaaaaa");

      
        for (i = 0; i < StreamNewsRows.length; i++) {
            StreamNewsRows[i].style.height = 'auto';
        }
                for (i = 0; i < StreamNewsDateRows.length; i++) {
            StreamNewsDateRows[i].style.position = 'relative';
        }
        
        $('.NavBarLinks a:hover').css('border-bottom:', '  3px solid lightsalmon;');
        $("#NavbarLinkList").addClass("NavBarLinksSm").removeClass("NavBarLinks");
        $('#OtherNewsCollapseElementContainer').css('float', 'none');
         $('#OtherNewsCollapseElementContainer').css('margin-right', '-8px');
        smEnable = true;
    } else if (smEnable && width > 768)
    {
        console.log("bbbbbbbbbbbbbb");
            for (i = 0; i < StreamNewsRows.length; i++) {
            StreamNewsRows[i].style.height = '200px';
        }
                        for (i = 0; i < StreamNewsDateRows.length; i++) {
            StreamNewsDateRows[i].style.position = 'absolute';
        }

        $('.StreamNews').css('Height', '200px');
        $("#NavbarLinkList").addClass("NavBarLinks").removeClass("NavBarLinksSm");
        $('#OtherNewsCollapseElementContainer').css('float', 'right');
        smEnable = false;
    }

};
function removeContent(ulID) {
    $(ulID).empty();
}

function CreateLiTag(ulID, text, changeStyle) {
    var ul = document.getElementById(ulID);
    var li = document.createElement("li");
    var link = document.createElement("a");

    li.appendChild(document.createTextNode(text));
    link.appendChild(li);
    link.setAttribute('class', 'list-inline');
    if (changeStyle)
        link.setAttribute('style', 'font-size: 14px; cursor:pointer; font-weight: bold; color: orangered; padding-right: 20px;');
    else
        link.setAttribute('href', text);
    ul.appendChild(link);
}

function AddComment() {

    var Name = document.getElementById("AddCommentNameinNewsPage");
    var Comment = document.getElementById("AddCommentContentinNewsPage");
    $.ajax({
        url: "Index",
        type: "post",
        data:
                {'action': 'AddComment', 'NewsID': NewsIDHolder, 'Name': Name.value, 'Comment': Comment.value},
        success: function (response) {
            console.log(response);
            toogleCommentCantainer(true);
            Name.value = "";
            Comment.value = "";
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }


    });

}

function UpComment(commentID,element,up) {

if(!ClickedVoteButton){
    $.ajax({
        url: "Index",
        type: "post",
        data:
        {'action': 'UpComment', 'CommentID': commentID},
        success: function (response) {
           ClickedVoteButton=true;
         element.innerHTML =(up+1).toString();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });}

}

function DownComment(commentID,element,down) {

if(!ClickedVoteButton){
    $.ajax({
        url: "Index",
        type: "post",
        data:
                {'action': 'DownComment', 'CommentID': commentID},
        success: function (response) {
               ClickedVoteButton=true;
         element.innerHTML =(down+1).toString();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }


    });}

}

function CreateCommentDiv(ulID, commentid,author, date, content, up, down) {

    var CommentDiv = document.getElementById(ulID);

    CommentDiv.innerHTML += `
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a id="CommentAuthorinNewsPage"><b>${author}</b></a>
                            made a post.
                        </div>
                        <h6 id="CommentDateinNewsPage" class="text-muted time">${date}</h6>
                    </div>
                </div> 
                <div class="post-description"> 
                    <p id="CommentContentinNewsPage">${content}</p> 
                    <div class="stats">
                        <a href="#" class="btn btn-default stat-item" onclick="UpComment(${commentid},this,${up})">
                            <i id="CommentUpinNewsPage" class="	glyphicon glyphicon-thumbs-up" style="margin-right:5px;"></i>${up}
                        </a>
                        <a href="#" class="btn btn-default stat-item" onclick="DownComment(${commentid},this,${down})">
                            <i id="CommentDowninNewsPage"  class="glyphicon glyphicon-thumbs-down"  style="margin-right:5px;"></i>${down}
                        </a>
                    </div>
                </div>
            </div>`;


}

function toogleCommentCantainer(State) {

    var CommentContainer = document.getElementById("AddCommentContainer");

    if (State) {

        CommentContainer.setAttribute('style', 'display: none');
        CommentContainer = document.getElementById("AddCommentNotify");
        CommentContainer.setAttribute('style', 'display: Block');
    } else
    {
        CommentContainer.setAttribute('style', 'display: Block');
        CommentContainer = document.getElementById("AddCommentNotify");
        CommentContainer.setAttribute('style', 'display: none');
    }
}
function GetNewsByID(NewsID) {

    var NewsContentText = document.getElementById("NewsContentinNewsPage");
    NewsContentText.innerHTML = "";
    $("#NewsHeaderinNewsPage").text('');
    $("#NewsInfoinNewsPage").text('');
    toogleCommentCantainer(false);
    NewsIDHolder = NewsID;

    $.ajax({
        url: "Index",
        type: "post",
        data:
                {'action': 'GetNews', 'NewsID': NewsID},
        success: function (response) {
            var theNews = JSON.parse(response);

            $("#NewsHeaderinNewsPage").text(theNews[0][0]["NewsTitle"]);
            $("#NewsInfoinNewsPage").text(theNews[0][0]["AuthorName"] + " - " + theNews[0][0]["NewsDate"]);
            NewsContentText.innerHTML = theNews[0][0]["NewsContent"];

            if (theNews[1]) {
                var i = 0;
                removeContent("#NewsSourcesinNewsPage");
                while (theNews[1][i]) {
                    CreateLiTag("NewsSourcesinNewsPage", theNews[1][i]["SourceLink"], false);
                    i++;
                }
            }

            if (theNews[2]) {
                i = 0;
                removeContent("#NewsTagsinNewsPage");
                while (theNews[2][i]) {
                    CreateLiTag("NewsTagsinNewsPage", theNews[2][i]["TagName"], true);
                    i++;
                }
            }

            if (theNews[3]) {
                i = 0;
                removeContent("#CommentContainerinNewsPage");
                while (theNews[3][i]) {
                    CreateCommentDiv("CommentContainerinNewsPage",theNews[3][i]["CommentID"], theNews[3][i]["CommentAuthor"], theNews[3][i]["CommentDate"], theNews[3][i]["CommentContent"], theNews[3][i]["CommentUp"], theNews[3][i]["CommentDown"]);
                    i++;
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }


    });
}