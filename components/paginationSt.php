<?php

require_once __DIR__."/../back/getStudents.php";
$pageNumber =ceil(getStudentsCount()/10);

$currentPage = 1;
if(isset($_GET['page']) && $_GET['page'] > 1){
    $currentPage =$_GET['page'];
}

$liHTML="";
for($i =0; $i<= $pageNumber+1 ;$i++){
    if($i == 0){
        $isDisabled = ($currentPage == 1) ? 'disabled' : "";
        $prevPage = ($currentPage == 1) ? 1 : $currentPage-1 ;
        $liHTML .=" <li class='page-item'><a class='page-link {$isDisabled}' href='index.php?page={$prevPage}'>previouse</a></li>";

    }
    elseif($i == $pageNumber + 1){
        $isDisabled = ($currentPage == $pageNumber) ? 'disabled' : "";
        $nextPage = ($currentPage == $pageNumber) ? $pageNumber : $currentPage+1 ;
        $liHTML .="<li class='page-item'><a class='page-link {$isDisabled}' href='index.php?page={$nextPage}'>next</a></li>";
         

    }else{
        $isActive = ($i == $currentPage) ? 'active' : "";
        $liHTML .=
        "<li class='page-item'><a class='page-link {$isActive}' href='index.php?page={$i}'>{$i}</a></li>";
    }
    
}
echo $liHTML;

"
 <li class='page-item'><a class='page-link disabled' href='index.php?page=1'>Previous</a></li>

<li class='page-item'><a class='page-link active' href='index.php?page=1'>1</a></li>
<li class='page-item'><a class='page-link' href='index.php?page=2'>2</a></li>
<li class='page-item'><a class='page-link' href='index.php?page=3'>3</a></li>

<li class='page-item'><a class='page-link' href='#'>Next</a></li>
";
