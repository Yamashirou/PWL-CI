<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($name = 'Pengunjung')
    {
        $data['name'] = $name;
        $data['title'] = "Front Page";
        return view('front', $data);
    }
}
