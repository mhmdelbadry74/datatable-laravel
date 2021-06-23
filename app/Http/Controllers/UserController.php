<?php

namespace App\Http\Controllers;

use App\DataTables\UserDatatables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserDatatables  $dataTable)
    {
        return $dataTable->render('index');
    }
}
