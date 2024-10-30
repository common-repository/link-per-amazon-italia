<a href="http://www.amazon.it/s/ref=as_li_ss_tl?_encoding=UTF8&field-keywords=<?php
global $wp_query;
$postid = $wp_query->post->ID;
echo get_post_meta($postid, 'prodotto', true);
wp_reset_query();
?>&tag=<?php
echo $InputField2; ?>" rel="nofollow" ><p class="buy">> <?php

echo $InputField1; ?></p></a>
<style>
.buy{
	background-color:<?php
echo $InputField3; ?>;
	width:100%;
	padding:10px 10px;
	text-align:center;
	color:#FFF;
}
</style>

