<!--<?php
require_once template('head');
echo <<<EOT
-->
<div class="tem_inner" style="padding:40px 0;">
<!--
EOT;
require_once template('index/about');
require_once template('index/news');
echo <<<EOT
-->
<div class="tem_index_right_container">
<!--
EOT;
require_once template('index/case');
require_once template('index/product');
echo <<<EOT
-->
</div>
<!--
EOT;
echo <<<EOT
-->
    <div class="met_clear"></div>
</div>
<!--
EOT;
require_once template('foot');
?>
