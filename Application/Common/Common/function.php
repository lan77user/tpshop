<?php

/**
 * 为一个顶大你生辰支付宝支付按钮
 * @param type $orderId
 */
function makeAlipayBtn($orderId,$btnName = "去支付宝支付"){
    return require('./alipay/alipayapi.php');
}


//有选择性的过滤html文字，性能低，尽量少用
// function removeXSS($data){
////    require_once CORE_PATH . '../../Public/HtmlPurifier/HTMLPurifier.auto.php';
//$_clean_xss_config = HTMLPurifier_Config::createDefault();
//$_clean_xss_config->set('Core.Encoding', 'UTF-8');
////设置保留的标签
//$_clean_xss_config->set('HTML.Allowed','div,b,strong,i,em,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]');
//$_clean_xss_config->set('CSS.AllowedProperties', 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align');
//$_clean_xss_config->set('HTML.TargetBlank', TRUE);
//$_clean_xss_obj = new HTMLPurifier($_clean_xss_config);
////执行过滤，返回结果
//return $_clean_xss_obj->purify($data);
//}

