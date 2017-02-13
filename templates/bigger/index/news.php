<!--<?php
/*四个文章列表*/
if($lang_news_list1_open){
$tem_news[1]           = tmpcentarr($lang_news_list1_id);
$tem_news[1]['name']   = $lang_news_list1_title?$lang_news_list1_title:$tem_news[1]['name'];
$tem_news[1]['imgurl'] = $lang_news_list1_img?$lang_news_list1_img:"{$img_url}newlistbg1.jpg";
$tem_news[1]['list']   = methtml_getarray($lang_news_list1_id,$lang_news_list1_type,'','',$lang_news_num);
}
if($lang_news_list2_open){
$tem_news[2]           = tmpcentarr($lang_news_list2_id);
$tem_news[2]['name']   = $lang_news_list2_title?$lang_news_list2_title:$tem_news[2]['name'];
$tem_news[2]['imgurl'] = $lang_news_list2_img?$lang_news_list2_img:"{$img_url}newlistbg2.jpg";
$tem_news[2]['list']   = methtml_getarray($lang_news_list2_id,$lang_news_list2_type,'','',$lang_news_num);
}
if($lang_news_list3_open){
$tem_news[3]           = tmpcentarr($lang_news_list3_id);
$tem_news[3]['name']   = $lang_news_list3_title?$lang_news_list3_title:$tem_news[3]['name'];
$tem_news[3]['imgurl'] = $lang_news_list3_img?$lang_news_list3_img:"{$img_url}newlistbg3.jpg";
$tem_news[3]['list']   = methtml_getarray($lang_news_list3_id,$lang_news_list3_type,'','',$lang_news_num);
}
if($lang_news_list4_open){
$tem_news[4]           = tmpcentarr($lang_news_list4_id);
$tem_news[4]['name']   = $lang_news_list4_title?$lang_news_list4_title:$tem_news[4]['name'];
$tem_news[4]['imgurl'] = $lang_news_list4_img?$lang_news_list4_img:"{$img_url}newlistbg4.jpg";
$tem_news[4]['list']   = methtml_getarray($lang_news_list4_id,$lang_news_list4_type,'','',$lang_news_num);
}
$tem_wp3 = $lang_waypointsok==1?'tem_wp3':'';
echo <<<EOT
-->
<div class="tem_index_news {$into}">
		<h3 class="tem_index_title">
			<span>
                <a href="/news/">{$lang_news_title}</a>
				<p></p>
			</span>
		</h3>
<!--
EOT;
$i=0;
foreach($tem_news as $key=>$val){
$i++;
$none = $i>1?'met_none':'';
echo <<<EOT
-->
		<ul class="tem_index_news_list {$tem_wp3} {$none}">
<!--
EOT;
$i=0;
foreach($val['list'] as $key=>$val2){
$i++;
$val2[imgurl]="{$thumb_src}dir=../{$val2[imgurl]}&x=90&y=90";
echo <<<EOT
-->
			<li>

				<dl>
					<dd>
						<div class="tem_index_news_list_txt">
							<a href="{$val2[url]}" title="{$val2[title]}" {$metblank}>
							<h3>{$val2['title']}</h3>
							<p>{$val2['description']}</p>
							</a>
						</div>
					</dd>
				</dl>

			</li>
<!--
EOT;
}
echo <<<EOT
-->
		</ul>
<!--
EOT;
}
echo <<<EOT
-->
</div>
<!--
EOT;
?>
