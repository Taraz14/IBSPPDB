<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('auth/login');
    }

    public function auth()
    {
        $session = session();
        $model = new AuthModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('user_name', $username)->first();
        if ($data) {
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'username atau password tidak cocok');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
