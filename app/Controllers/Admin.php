<?php
namespace App\Controllers;
use App\Models\PropertyModel;

class Admin extends BaseController {
    public function login() {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            if ($username === 'admin' && $password === 'admin123') {
                session()->set('isLoggedIn', true);
                return redirect()->to('/admin/dashboard');
            }
        }
        return view('admin/login');
    }

    public function dashboard() {
        return view('admin/dashboard');
    }
}
