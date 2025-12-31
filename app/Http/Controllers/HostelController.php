<?php

namespace App\Http\Controllers;

use App\Models\hostel;
use App\Http\Requests\StorehostelRequest;
use App\Http\Requests\UpdatehostelRequest;
use App\Http\Resources\hostelResource;
use App\Services\Hostel\CreateHostel;
use App\Services\Hostel\UpdateHostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        protected CreateHostel $createHostel,
        protected UpdateHostel $updateHostel
        )
    {

    }


    public function index()
    {
        return response()->json([
            'data' => hostelResource::collection(hostel::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehostelRequest $request)
    {
        $result = $this->createHostel->execute($request);

        return response()->json([
            'message'=> $result['FilesUploadFailed']
                ? 'Hostel created successfully, but some images failed to upload'
                : 'Hostel created successfully',
            'data' => new hostelResource($result['hostel'])
        ],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(hostel $hostel)
    {
        return response()->json([
            'data'=> new hostelResource($hostel)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehostelRequest $request, hostel $hostel)
    {
        $result = $this->updateHostel->execute($request, $hostel);

       return response()->json([
            'message' => $result['FilesUploadFailed']
                ? 'Hostel updated successfully, but some images failed to upload'
                : 'Hostel updated successfully',
            'data' => new hostelResource($result['hostel'])
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
