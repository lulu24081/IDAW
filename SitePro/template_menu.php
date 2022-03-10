<?php
    function renderMenuToHTML($currentPageId,$currentLang='fr'){
        $mymenu =array(
            'accueil' => array('Accueil','Welcome Page'),
            'cv' => array('Mon CV','My Resume'),
            'projets' => array('Mes projets','My projects'),
            'hobbies' => array('Mes Hobbies','My hobbies'),
            'contact' => array('contatct','network'),
        );

        echo '<div class="container"><nav class ="menu">
            <ul>';

        
        foreach ($mymenu as $pageId => $pageParameters) {
            if($currentPageId ==$pageId){
                if($currentLang =='fr')
                    echo'<li><a id ="currentpage" href="index.php?page=',$pageId,'&lang=',$currentLang,'">',$pageParameters[0],'</a></li>';
                else
                    echo '<li><a id ="currentpage" href="index.php?page=',$pageId,'&lang=',$currentLang,'">',$pageParameters[1],'</a></li>';
            }
            else{
                if($currentLang == 'fr')
                    echo '<li><a href="index.php?page=',$pageId,'&lang=',$currentLang,'">',$pageParameters[0],'</a></li>';
                else
                    echo '<li><a href="index.php?page=',$pageId,'&lang=',$currentLang,'">',$pageParameters[1],'</a></li>';
            }
        }

    

            
        echo "</ul></nav></div>";
    }
?>

