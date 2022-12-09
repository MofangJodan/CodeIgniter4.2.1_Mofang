<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
            $this->load->model('customers_model');
            $data['customer'] = $this->customers_model->get_customer(3);
            $this->load->view('welcome_message',$data);
        }

    public function view($page = 'home')
    {
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
    // 左邊BANNER網址
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $url0="https://api.mofang.com.tw/news_banner.php";
        $json0 = file_get_contents($url0);
        $json0 = json_decode($json0);
        $data['json0']= $json0;
    // 左邊BANNER網址
    // 右邊BANNER網址
        $url0_r="https://api.mofang.com.tw/push_banner.php";
        $json0_r = file_get_contents($url0_r);
        $json0_r= json_decode($json0_r);
        $data['json0_r']= $json0_r;
    // 右邊BANNER網址
    //最近更新
        $url0_r00="https://api.mofang.com.tw/Recently_updated_platform.php?hotsch=";
        $ZZ='最近更新';
        $ZZA1=rawurlencode($ZZ);
        $ZZA=$url0_r00.$ZZA1.'&platform=ios&store';
        $json0_r00 = file_get_contents($ZZA);
        $json0_r00= json_decode($json0_r00);
        $data['json0_r00']= $json0_r00;
    //最近更新
    // 新聞內文

    // 新聞內文

    //iOS遊戲卡片
    $url0_iOS="https://api.mofang.com.tw/platform.php?hotsch=";
    $ZZ_iOS='最近更新';
    $ZZA2=rawurlencode($ZZ_iOS);
    $ZZA2=$url0_iOS.$ZZA2.'&platform=ios&store';
    $json0_iOS = file_get_contents($ZZA2);
    $json0_iOS= json_decode($json0_iOS);
    $data['json0_iOS']= $json0_iOS;

    //iOS遊戲卡片

    //Android遊戲卡片
    $url0_Android="https://api.mofang.com.tw/platform.php?hotsch=";
    $ZZ_Android='最近更新';
    $ZZA3=rawurlencode($ZZ_Android);
    $ZZA3=$url0_Android.$ZZA3.'&platform=android&store';
    $json0_Android = file_get_contents($ZZA3);
    $json0_Android= json_decode($json0_Android);
    $data['json0_Android']= $json0_Android;

    //Android遊戲卡片

//iOS遊戲卡片
$url0_iOS_release = "https://api.mofang.com.tw/platform.php?hotsch=";
$ZZ_iOS_release = '發售日期';
$ZZA2_release = rawurlencode($ZZ_iOS_release);
$ZZA2_release = $url0_iOS_release.$ZZA2_release.'&platform=ios&store';
$json0_iOS_release = file_get_contents($ZZA2_release);
$json0_iOS_release = json_decode($json0_iOS_release);
$data['json0_iOS_release'] = $json0_iOS_release;

//iOS遊戲卡片

//Android遊戲卡片
$url0_Android_release = "https://api.mofang.com.tw/platform.php?hotsch=";
$ZZ_Android_release ='發售日期';
$ZZA3_release = rawurlencode($ZZ_Android_release);
$ZZA3_release = $url0_Android_release.$ZZA3_release.'&platform=android&store';
$json0_Android_release = file_get_contents($ZZA3_release);
$json0_Android_release = json_decode($json0_Android_release);
$data['json0_Android_release'] = $json0_Android_release;

//Android遊戲卡片

        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }

}