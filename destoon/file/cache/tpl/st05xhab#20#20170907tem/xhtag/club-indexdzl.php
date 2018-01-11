<?php defined('IN_DESTOON') or exit('Access Denied');?> <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>   
     <li class="item">
     <a class="avatar" href="<?php echo userurl($t['username']);?>" target="_blank"><img class="headclub-pic" src="<?php echo useravatar($t['username'], 'large');?>" /></a>
                    <div class="bar fd-clr">
                        <a class="water-drop"></a>
                        <span class="time"><a href="<?php echo userurl($t['username']);?>" target="_blank"><?php echo $t['passport'];?></a></span>
                        <div class="from">来自: <a href="<?php echo $t['caturl'];?>" target="_blank"><?php echo $t['catname'];?></a>
                                </div>
                    </div>
                    <div class="spec fd-clr">
 <a href="<?php echo $t['linkurl'];?>" target="_blank" class="post-title"><?php echo $t['title'];?></a><span class="hot"></span>
                    </div>
                    <span class="contentclub"> <?php echo dsubstr($t['introduce'], 80, '…');?></span>
                </li>              
     <?php } } ?>