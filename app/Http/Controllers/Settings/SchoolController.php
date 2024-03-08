<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(): View {
        return view('livewire.settings.school');
    }
}
