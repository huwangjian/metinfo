<!--<?php
$tem_product         = tmpcentarr($lang_product_id);
$tem_product['name'] = $lang_product_title?$lang_product_title:$tem_product['name'];
$promd = $lang_product_id?'':'product';
$tem_product['list'] = methtml_getarray($lang_product_id,$lang_product_type,'',$promd,$lang_product_num);
$tem_wp2 = $lang_waypointsok==1?'tem_wp2':'';
echo <<<EOT
-->
<div class="tem_index_product {$into}">
		<h3 class="tem_index_title tem_index_right_title">
			<span>
				<a href="/product/">{$tem_product[name]}</a>
				<p></p>
			</span>
		</h3>
        <div class="tem_banner tem_index_product_list">
		<ul data-product_x="{$lang_product_x}" class="slides" style="height:140px">
<!--
EOT;
foreach($tem_product['list'] as $key=>$val){
$val[imgurl]="{$thumb_src}dir=../{$val[imgurl]}&x={$lang_product_x}&y={$lang_product_y}";
echo <<<EOT
-->
			<li class="{$tem_wp2}">
				<a href="/product/" title="{$val[title]}" {$metblank}>
				  <img src="{$val[imgurl]}" title="{$val[title]}" alt="{$val[title]}" width ="{$lang_product_x}" height="{$lang_product_y}" />
				  <h3>{$val[title]}</h3>
				</a>
			</li>
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
