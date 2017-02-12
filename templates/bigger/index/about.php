<!--<?php
echo <<<EOT
-->
<!--
EOT;
$tem_about = tmpcentarr($lang_about_id);
if($lang_about_img1)$tem_aboutimg[1]  = $lang_about_img1;
if($lang_about_img2)$tem_aboutimg[2]  = $lang_about_img2;
if($lang_about_img3)$tem_aboutimg[3]  = $lang_about_img3;
$txtwd100 = $tem_aboutimg||$lang_about_video?'':'txtwd100';
$tem_wp1 = $lang_waypointsok==1?'tem_wp1':'';
echo <<<EOT
-->
    <div class="tem_index_about">
		<h3 class="tem_index_title">
			<span>
				<a href="/about/">{$lang_about_title}</a>
				<p></p>
			</span>
		</h3>
		<div class="tem_index_about_cont {$tem_wp1}">
<!--
EOT;
if($tem_aboutimg){
$noe = count($tem_aboutimg)==1?'class="tem_index_about_img_noe"':'';
echo <<<EOT
-->
			<div class="tem_index_about_img">
				<ul {$noe}>
<!--
EOT;
foreach($tem_aboutimg as $key=>$val){
echo <<<EOT
-->
					<li><a href="/about/"><img src="{$val}" /></a></li>
<!--
EOT;
}
echo <<<EOT
-->
				</ul>
            </div>
<!--
EOT;
}
echo <<<EOT
-->
            <div class="tem_index_about_txt {$txtwd100}">
                <div class="met_editor">
                    {$lang_about_content}<div class="met_clear"></div>
                </div>
            </div>
			<div class="met_clear"></div>
		</div>
	</div>

<!--
EOT;
?>
