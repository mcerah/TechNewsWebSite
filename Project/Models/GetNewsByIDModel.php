<?php

class GetNewsByIDModel extends IModel {

    function __construct() {

        parent::__construct();
    }

    public function GetNewsByID($NewsID) {

        $NewsContents=array(4);
       
        $NewsContents[0] = $this->FetchAllAsJSonFormat('SELECT  NewsTitle,AuthorName,NewsDate,NewsContent,NewsClass FROM tblnews,tblauthor where tblnews.NewsAuthor=tblauthor.AuthorID and NewsID=' . $NewsID);
         
        $NewsContents[1] = $this->GetNewsSourcesByID($NewsID);
        $NewsContents[2] = $this->GetNewsTagsByID($NewsID);
        $NewsContents[3] = $this->GetNewsCommentsByID($NewsID);

        
        print json_encode($NewsContents);
    }

    public function GetNewsSourcesByID($NewsID) {

        return $this->FetchAllAsJSonFormat('SELECT SourceName,SourceLink,SourceComment FROM tblsources where NewsID=' . $NewsID);
    }
    
        public function GetNewsCommentsByID($NewsID) {

        return $this->FetchAllAsJSonFormat('SELECT CommentID,CommentAuthor,CommentDate,CommentContent,CommentUp,CommentDown FROM tblcomments where NewsID=' . $NewsID);
    }

    public function GetNewsTagsByID($NewsID) {

        return  $this->FetchAllAsJSonFormat('SELECT TagName from tblTags,tblNewsTag where tblTags.TagID=tblNewsTag.TagID and NewsID=' . $NewsID);;
    }

}
