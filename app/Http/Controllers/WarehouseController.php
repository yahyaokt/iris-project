<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Storage;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouseId = Auth::guard('warehouse')->id(); 

        $storageData = Storage::where('id_warehouse', $warehouseId)->get();

        return view('warehouse.home', compact('storageData'));
    }
}
