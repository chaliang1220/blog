<?php
header('Content-type: text/html; charset=utf-8');
ini_set("error_reporting", "E_ALL & ~E_NOTICE");

echo "Hi，Webhoo1231231ks！123123  1231231 By Ziven Hallo <br/>";

echo '<br/>测试：输出项目路径和用户目录1231231：你好啊blog! 真神！！！<br/>';

exec("cd ~ && cd - && cd -", $output);

echo '<pre>';
echo print_r($output);
echo '</pre>';