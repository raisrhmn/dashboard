<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    private $dataTables;
    private $user;

    public function __construct(DataTables $dataTables, User $user)
    {
        $this->dataTables = $dataTables;
        $this->user = $user;
    }

    public function index()
    {
        return view('users.index');
    }

    public function data()
    {
        $query = $this->user->query();
        return $this->dataTables->of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href=' . route("users.detail", $row->id) . ' class="dropdown-item">Detail</a>
                            </div>
                        </div>';
            })
            ->rawColumns(['action'])
            ->toJson();
    }
}
