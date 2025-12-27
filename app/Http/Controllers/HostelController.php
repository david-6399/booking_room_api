<?php

namespace App\Http\Controllers;

use App\Models\hostel;
use App\Http\Requests\StorehostelRequest;
use App\Http\Requests\UpdatehostelRequest;
use App\Http\Resources\hostelResource;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return hostelResource::collection(hostel::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehostelRequest $request)
    {

        $data = $request->validated();
        
        $hostel = hostel::create($data);

        return response()->json([
            'message'=>'Hostel created successfully', 
            'data'=> new hostelResource($hostel)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(hostel $hostel)
    {
        return new hostelResource($hostel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehostelRequest $request, hostel $hostel)
    {
        $data = $request->validated();
        $hostel->update($data);
        
        return response()->json([
            'message'=>'Hostel updated successfully', 
            'data'=> new hostelResource($hostel)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hostel $hostel)
    {
        $hostel->delete();
        return response()->json([
            'message'=>'Hostel deleted successfully'
        ]);
    }
}
