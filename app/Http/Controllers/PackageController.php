<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return $packages;
    }
    public function create()
    {
        return 1;
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transaction_id' => ['required', 'min:36', 'max:36'],
            'customer_name' => ['required'],
            'customer_code' => ['required'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $package = Package::create($request->all());
        return response()->json([$package->transaction_id]);
    }
    public function show(Package $package)
    {
        $package = Package::find($package);
        return $package;
    }
    public function edit(Package $package)
    {
        return 1;
    }
    public function update(Request $request, Package $package)
    {
        $validator = Validator::make($request->all(), [
            'customer_code' => ['required', 'min:7', 'max:7'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $package->fill($request->all());
        $package->save();
        return
            Package::find($package);
    }
    public function destroy(Package $package)
    {
        $package->delete();
    }
}
