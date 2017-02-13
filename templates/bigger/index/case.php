<!--<?php
$tem_case         = tmpcentarr($lang_case_id);
$tem_case['name'] = $lang_case_title?$lang_case_title:$tem_case['name'];
$tem_case['list'] = methtml_getarray($lang_case_id,$lang_case_type,'','',$lang_case_num);
$tem_wp4 = $lang_waypointsok==1?'tem_wp4':'';
echo <<<EOT
-->
<div class="tem_index_case {$into}">
		<h3 class="tem_index_title tem_index_right_title">
			<span>
				<a href="/case/">{$tem_case[name]}</a>
				<p></p>
			</span>
		</h3>
		<div class="tem_index_case_list">
		<ul class="slides">
<!--
EOT;
$i=0;$k=1;$c=count($tem_case['list']);
foreach($tem_case['list'] as $key=>$val){
$i++;
$qq = $i==1?"<li>":'';
if($i==$k+4){$k = $i;$qq = "<li>";}
$qz = $i%4==0||$i==$c?"</li>":'';
$val[imgurl]="{$thumb_src}dir=../{$val[imgurl]}&x={$lang_case_x}&y={$lang_case_y}";
echo <<<EOT
-->
			{$qq}
				<dl class="tem_list {$tem_wp4}">
					<dt><a href="/case/" title="{$val[title]}" {$metblank}><img src="{$val[imgurl]}" title="{$val[title]}" alt="{$val[title]}" width="{$lang_case_x}" height="{$lang_case_y}" /></a></dt>
					<dd>
						<h3><a href="{$val[url]}" title="{$val[title]}" {$metblank}>{$val[title]}</a></h3>
					</dd>
				</dl>
			{$qz}
<!--
EOT;
}
echo <<<EOT
-->
		</ul>
		</div>
</div>
<!--
EOT;
?>
