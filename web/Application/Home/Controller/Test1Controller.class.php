<?php
namespace Home\Controller;

use Think\Controller;

class Test1Controller extends Controller {
    public function index() {
        $data['systemUserSysNo'] = 2;
//        $data['systemUserSysNo'] = 2;
//       $data['systemUserSysNo']=$url;
        $data = json_encode($data);
        $urls = C('SERVER_HOST') . "IPP3Customers/IPP3AliPayConfigBySUsysNo";
        $head = array("Content-Type:application/json;charset=UTF-8", "Content-length:" . strlen($data), "X-Ywkj-Authentication:" . strlen($data));
        $list = http_request($urls, $data, $head);
        $list = json_decode($list, true);
        var_dump($list['AppID']);
    }


}