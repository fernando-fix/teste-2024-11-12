<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    private $per_page = 10;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::orderBy('order')->paginate($this->per_page);
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerRequest $request)
    {
        $data = $request->all();

        $errors = [];
        $data['order'] = Banner::max('order') + 1;

        $banner = Banner::create($data);

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $filePath = $request->file('file')->store('banners');
            $banner->update(['file' => $filePath]);
        }

        // try {

        // } catch (\Exception $e) {
        //     $errors[] = $e->getMessage();
        // }

        if (count($errors) == 0) {
            return redirect()->route('admin.banners.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerRequest $request, Banner $banner)
    {
        $data = $request->all();

        $switchOrder = Banner::where('order', $data['order'])->first();
        if ($switchOrder) {
            $switchOrder->update(['order' => $banner->order]);
            $banner['order'] = $data['order'];
        }

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            if (file_exists(public_path('storage/' . $banner->file))) {
                unlink(public_path('storage/' . $banner->file));
            }

            $filePath = $request->file('file')->store('banners');
            $banner->update(['file' => $filePath]);
            $data['file'] = $filePath;
        }
        $banner->update($data);
        return redirect()->route('admin.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $countErrors = 0;

        try {
            if (file_exists(public_path('storage/' . $banner->file))) {
                unlink(public_path('storage/' . $banner->file));
            }
        } catch (\Exception $e) {
        }

        if ($countErrors == 0) {
            $banner->delete();
        } else {
            return redirect()->back();
        }

        return redirect()->route('admin.banners.index');
    }
}
