<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PermissionController extends Controller
{
    /**
     * Display the roles list
     */
    public function index(): View {
        return view('livewire.roles.permissions');
    }
}
