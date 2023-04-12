<?php
header('Content-type: text/html; charset=utf-8');
ini_set("error_reporting", "E_ALL & ~E_NOTICE");

echo "Hi，Webhooks！123123  1231231 By Ziven 1213123 <br/>";

echo '<br/>测试：输出项目路径和用户目录：你好啊blog!<br/>';

exec("cd ~ && cd - && cd -", $output);

echo '<pre>';
echo print_r($output);
echo '</pre>';