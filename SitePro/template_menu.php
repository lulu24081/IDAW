<?php
    function renderMenuToHTML($currentPageId){
        $mymenu =array(
            'index' => array('Accueil'),
            'cv' => array('Mon CV'),
            'projets' => array('Mes projets'),
            'hobbies' => array('Mes Hobbies'),
        );
        echo "<nav class=\"menu\"><ul>";
        foreach ($mymenu as $pageId => $pageParameters) {
            echo "<li><a ";

            if ($currentPageId == $pageId)
                echo "id =\"currentpage\" ";
            
            echo "href =\"$pageId.php\">.$pageParameters[0].</a></li>\n";
        }
        echo "</ul></nav";


}