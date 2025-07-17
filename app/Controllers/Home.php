<?php
namespace App\Controllers;
use App\Models\PropertyModel;

class Home extends BaseController {
    public function index() {
        $model = new PropertyModel();
        $data['properties'] = $model->findAll();
        return view('home/index', $data);
    }

    public function detail($id) {
        $model = new PropertyModel();
        $data['property'] = $model->find($id);
        return view('home/detail', $data);
    }
}
