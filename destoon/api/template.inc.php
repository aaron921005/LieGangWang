<?php
defined('IN_DESTOON') or exit('Access Denied');
?>
<style>
.red{color: red}
.red a{font-weight: 700}
.st05{color: #1269d3}
</style>
<!-- by xioahei　2015.2.22 DT模板网专属设置 S-->

<tr>
<td class="tl">简短网站名</td>
<td><input name="setting[jdname]" type="text" value="<?php echo $jdname;?>" size="30"/>&nbsp;&nbsp;<?php tips('简短网站名只用于展示请不要太长,如只填写如：&#27169;&#26495;&#32593;');?></a></td>
</tr>
<tr>
<td class="tl">简短网址</td>
<td><input name="setting[jdhttp]" type="text" value="<?php echo $jdhttp;?>" size="30"/>&nbsp;&nbsp;<?php tips('简短网址只用于展示，请不要带www,如只填写：&#100;&#116;&#109;&#117;&#98;&#97;&#110;&#46;&#99;&#111;&#109;');?></a></td>
</tr>
<tr>
<td class="tl">手机网址</td>
<td><input name="setting[waphttp]" type="text" value="<?php echo $waphttp;?>" size="30"/>&nbsp;&nbsp;<?php tips('手机网址只用于展示，不是WAP设置，请不要带http,如只填写：m.&#100;&#116;&#109;&#117;&#98;&#97;&#110;&#46;&#99;&#111;&#109;');?></a></td>
</tr>
<tr>
<td class="tl">新浪微博</td>
<td><input name="setting[weibo]" type="text" value="<?php echo $weibo;?>" size="30"/>&nbsp;&nbsp;(用于网址底部)</td>
</tr>
<tr>
<td class="tl">微信公共号</td>
<td><input name="setting[weixin]" type="text" value="<?php echo $weixin;?>" size="30"/>&nbsp;&nbsp;(用于网址底部)</td>
</tr>
<tr>
<td class="tl">电子邮箱</td>
<td><input name="setting[emaill]" type="text" value="<?php echo $emaill;?>" size="30"/>&nbsp;&nbsp;(用于某些页面上的咨询)</td>
</tr>
<tr>
<td class="tl">400电话</td>
<td><input name="setting[telephone400]" type="text" value="<?php echo $telephone400;?>" size="30"/></td>
</tr>
<tr>
<td class="tl">客服电话2</td>
<td><input name="setting[telephone2]" type="text" value="<?php echo $telephone2;?>" size="30"/></td>
</tr>
<tr>
<td class="tl">投诉电话</td>
<td><input name="setting[telephone_tou]" type="text" value="<?php echo $telephone_tou;?>" size="30"/></td>
</tr>
<tr>
<td class="tl">售前QQ1</td>
<td>名称&nbsp;<input name="setting[qq1name]" type="text" value="<?php echo $qq1name;?>" size="20"/>&nbsp;号码&nbsp;<input name="setting[qq1]" type="text" value="<?php echo $qq1;?>" size="20"/>&nbsp;&nbsp;(用于某些页面上的咨询)</td>
</tr>
<tr>
<td class="tl">售前QQ2</td>
<td>名称&nbsp;<input name="setting[qq2name]" type="text" value="<?php echo $qq2name;?>" size="20"/>&nbsp;号码&nbsp;<input name="setting[qq2]" type="text" value="<?php echo $qq2;?>" size="20"/>&nbsp;&nbsp;(选填)</td>
</tr>
<tr>
<td class="tl">售后QQ3</td>
<td>名称&nbsp;<input name="setting[qq3name]" type="text" value="<?php echo $qq3name;?>" size="20"/>&nbsp;号码&nbsp;<input name="setting[qq3]" type="text" value="<?php echo $qq3;?>" size="20"/>&nbsp;&nbsp;(选填)</td>
</tr>
<tr>
<td class="tl">官方群</td>
<td>名称&nbsp;<input name="setting[qqqunname]" type="text" value="<?php echo $qqqunname;?>" size="20"/>&nbsp;号码&nbsp;<input name="setting[qqqun]" type="text" value="<?php echo $qqqun;?>" size="20"/>&nbsp;&nbsp;(选填)</td>
</tr>
<tr>
<td class="tl">公司名称</td>
<td><input name="setting[gongsi]" type="text" value="<?php echo $gongsi;?>" size="30"/>&nbsp;&nbsp;(用于联系我们页面)</td>
</tr>
<tr>
<td class="tl">公司地址</td>
<td><input name="setting[dizhi]" type="text" value="<?php echo $dizhi;?>" size="60"/>&nbsp;&nbsp;(用于联系我们页面)</td>
</tr>
<tr>
<td class="tl">邮政编码</td>
<td><input name="setting[youbian]" type="text" value="<?php echo $youbian;?>" size="30"/>&nbsp;&nbsp;(用于联系我们页面)</td>
</tr>
<tr>
<td class="tl">微信二维码</td>
<td><input name="setting[erwei]" type="text" value="<?php echo $erwei;?>" id="erwei" size="58"/> <span onclick="Dthumb(1,120,120, Dd('erwei').value, 0, 'erwei');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('erwei').value){Dd('showerwei').src=Dd('erwei').value;}" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('erwei').value='';Dd('showerwei').src='<?php echo DT_SKIN;?>images/footer_weixin.png';" class="jt">[删除]</span><br/>
<a href="<?php echo DT_PATH;?>" target="_blank"><img src="<?php echo $erwei ? $erwei : DT_SKIN.'images/footer_weixin.png';?>" style="margin:2px;" id="showerwei"/></a>&nbsp;&nbsp;(微信公共号生成的二维码120x120)</td>
</tr>
<tr>
<td class="tl">WAP二维码</td>
<td><input name="setting[waperwei]" type="text" value="<?php echo $waperwei;?>" id="waperwei" size="58"/> <span onclick="Dthumb(1,120,120, Dd('waperwei').value, 0, 'waperwei');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('waperwei').value){Dd('showwaperwei').src=Dd('waperwei').value;}" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('waperwei').value='';Dd('showwaperwei').src='<?php echo DT_SKIN;?>footer_wap.png';" class="jt">[删除]</span><br/>
<a href="<?php echo DT_PATH;?>" target="_blank"><img src="<?php echo $waperwei ? $waperwei : DT_SKIN.'images/footer_wap.png';?>" style="margin:2px;" id="showwaperwei"/></a>&nbsp;&nbsp;(手机网址生成的二维码120x120)</td>
</tr>
<tr>
<td class="tl">会员中心<br>客服QQ头像</td>
<td><input name="setting[qqtou]" type="text" value="<?php echo $qqtou;?>" id="qqtou" size="58"/> <span onclick="Dthumb(1,100,100, Dd('qqtou').value, 0, 'qqtou');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('qqtou').value){Dd('showqqtou').src=Dd('qqtou').value;}" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('qqtou').value='';Dd('showqqtou').src='<?php echo DT_SKIN;?>image/qqtou.jpg';" class="jt">[删除]</span><br/>
<a href="<?php echo DT_PATH;?>" target="_blank"><img src="<?php echo $qqtou ? $qqtou : DT_SKIN.'image/qqtou.jpg';?>" style="margin:2px;" id="showqqtou"/></a>&nbsp;&nbsp;(用于会员中心客服100x100)</td>
</tr>
<!-- <tr style="display: none;">
<td class="tl red">扩展SEO设置</td>
<td class="red">以下是VIP页面的SEO设置</td>
</tr>
<tr>
<td class="tl">vip首页title</td>
<td><input name="setting[vititle]" type="text" value="<?php echo $vititle;?>" size="80"/></td>
</tr>
<tr>
<td class="tl">vip首页keywords</td>
<td><input name="setting[vikeywords]" type="text" value="<?php echo $vikeywords;?>" size="80"/></td>
</tr>
<tr>
<td class="tl">vip首页description</td>
<td><input name="setting[videscription]" type="text" value="<?php echo $videscription;?>" size="80"/></td>
</tr>
<tr>
<td class="tl">建站服务title</td>
<td><input name="setting[vftitle]" type="text" value="<?php echo $vftitle;?>" size="80"/></td>
</tr>
<tr>
<td class="tl">建站服务keywords</td>
<td><input name="setting[vfkeywords]" type="text" value="<?php echo $vfkeywords;?>" size="80"/></td>
</tr>
<tr>
<td class="tl">建站服务description</td>
<td><input name="setting[vfdescription]" type="text" value="<?php echo $vfdescription;?>" size="80"/></td>
</tr>
<tr>
<td class="tl">会员服务title</td>
<td><input name="setting[vdtitle]" type="text" value="<?php echo $vdtitle;?>" size="80"/></td>
</tr>
<tr>
<td class="tl">会员服务keywords</td>
<td><input name="setting[vdkeywords]" type="text" value="<?php echo $vdkeywords;?>" size="80"/></td>
</tr>
<tr>
<td class="tl">会员服务description</td>
<td><input name="setting[vddescription]" type="text" value="<?php echo $vddescription;?>" size="80"/></td>
</tr> -->
<!-- by xioahei　2015.2.22 DT模板网专属设置 E-->