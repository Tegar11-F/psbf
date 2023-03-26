<?php

namespace App\Controllers;
use App\Models\M_Admin;

class Home extends BaseController
{
    public function index()
    {
        $Admin_Model = new M_Admin();

        $data = $Admin_Model->count_data();
        $data['tampil'] = $Admin_Model->view_data();
        //Pagination
        // $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        // $data['result'] = $Admin_Model->paginate(10, 'group1');
        // $data['pager'] = $Admin_Model->pager;
        // $data['currentPage'] = $currentPage;

        return view('admin', $data);
    }
    }
