<?php 

foreach ($data as $key => $value) {
    
    echo " <div class=\"row list-group-item StreamNews\">
                  <div class=\"hidden-xs col-sm-1 StreamNewsIconContainer\"><img src=\"Images/NewsIcons/".$value["NewsClass"] .".png\" alt=\"\" class=\"StreamNewsIcon\"/></div>
                 
                    <div class=\" col-sm-4 StreamNewsImg\" onclick=\"GetNewsByID(".$value["NewsID"].")\" data-toggle=\"modal\" data-target=\"#NewsModal\">
                        <span class=\"helperAlign\"></span> <img src=\"".$value["NewsImage"]."\" alt=\"\"/>
                    </div>
                    <div class=\" col-sm-7 StreamNewsTitleContainer\" onclick=\"GetNewsByID(".$value["NewsID"].")\" data-toggle=\"modal\" data-target=\"#NewsModal\">
                        <div class=\"col-sm-12\"><h3 class=\"StreamNewsTitle\">".$value["NewsTitle"] ."</h3></div> 
                        <div class=\"col-sm-12 StreamNewsDateContainer\"><h5 class=\"StreamNewsDate\">".$value["AuthorName"]." - ".$value["NewsDate"] ."</h5></div> 
                    </div>
                     </div>";
 
}
?>
