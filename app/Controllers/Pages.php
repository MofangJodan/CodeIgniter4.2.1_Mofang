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
        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }

}