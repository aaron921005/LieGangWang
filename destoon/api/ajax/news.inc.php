<?php
$item_per_page = 8;
$moduleid = isset($moduleid) ? intval($moduleid) : 21;
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);  
$table = get_table($moduleid);
$position = ($page_number * $item_per_page);  
$results = $db->query("SELECT * FROM {$table} WHERE status=3 ORDER BY addtime desc LIMIT $position, $item_per_page"); 
echo '<ul>';  
while($row = $db->fetch_array($results)){ 
    $catname = cat_name($row['catid']);
    $caturl = cat_url($row['catid']);
if($row[thumb]) {			
	echo '<div class="news-item-new yesimg" id="item_'.$row[itemid].'">
   	      <div class="text-list">
            <div class="img-list news-box-img"> <a target="_blank" title="'.$row[alt].'" href="'.$row['linkurl'].'"> <img src="'.$row[thumb].'" style="display: inline;"> </a> </div>
            <h3 class="news-tit2"><a target="_blank" title="'.$row[alt].'" href="'.$row[linkurl].'">'.$row[title].'</a></h3>
            <div class="mess">'.dsubstr($row['introduce'], 250, '...').'</div>
            <div class="time"><span class="time_ico">'.timetodate($row[addtime], 5).'</span>
            <span class="f10"></span>
            <span>类目：<a target="_blank" title="'.$catname.'" href="'.$caturl.'"><em class="font-none2">'.$catname.'</em></a></span> 
            </div>
            </div>
         </div>';
} else {
	echo '<div class="news-item-new yesimg" id="item_'.$row[itemid].'">
   	      <div class="text-list">
            <h3 class="news-tit2"><a target="_blank" title="'.$row[alt].'" href="'.$row[linkurl].'">'.$row[title].'</a></h3>
            <div class="mess">'.dsubstr($row['introduce'], 250, '...').'</div>
            <div class="time"><span class="time_ico">'.timetodate($row[addtime], 5).'</span>
            <span class="f10"></span>
            <span>类目：<a target="_blank" title="'.$catname.'" href="'.$caturl.'"><em class="font-none2">'.$catname.'</em></a></span> 
            </div>
            </div>
         </div>';
}
}  
echo '</ul>';  
?>
