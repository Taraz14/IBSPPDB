<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();
        $data = [
            'title' => 'Dashboard',
            'breadcumb' => 'Dashboard',
            'seg' => $request->uri->getSegment(2)
        ];

        echo view('Admin/dashboard.php', $data);
    }

    //--------------------------------------------------------------------

}
