<?php

class Index extends IModel {

    function __construct() {

        parent::__construct();
    }

    public function ListNews() {

        $ValueArray = $this->FetchAllAsJSonFormat('SELECT NewsID, NewsTitle,AuthorName,NewsDate,NewsClass,NewsImage FROM tblnews,tblauthor where NewsActive=true and tblnews.NewsAuthor=tblauthor.AuthorID  order by NewsID');

        return $ValueArray;
    }


}
