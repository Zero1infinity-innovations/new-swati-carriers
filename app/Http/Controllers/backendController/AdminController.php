<?php

namespace App\Http\Controllers\backendController;

use App\Http\Controllers\Controller;
use App\Models\backend\Services;
use App\Models\backend\ServicesImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;

class AdminController extends Controller
{
    public function AdminLogin()
    {
        return view('backend.pages.adminLog');
    }
    public function dashboard()
    {
        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => 'Dashboard',
            'url' => route('admin.dashboard')
        ];
        $data['title'] = "Dashboard";

        return view('backend.dashboard', $data);
    }

    public function services()
    {

        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => 'Dashboard',
            'url' => route('admin.dashboard')
        ];
        $data['breadcrumbs'][] = [
            'text' => 'Services',
            'url' => route('admin.services')
        ];
        $data['title'] = "Services";

        $services = DB::table('services')
            ->join('services_images', 'services.id', '=', 'services_images.service_id')
            ->select('services.*', 'services_images.image_path')
            ->paginate(10);

        return view('backend.pages.services', $data, compact('services'));
    }

    public function saveServices(Request $request)
    {
        $request->validate([
            'service_title' => 'required|string|max:255',
            'service_description' => 'required|string',
            'service_status' => 'required|boolean',
            'service_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new service record
        $service = Services::create([
            'service_name' => $request->service_title,
            'service_description' => $request->service_description,
            'service_status' => $request->service_status,
            'ipAddress' => request()->ip(),
        ]);

        // Check if the folder exists; if not, create it
        $destinationPath = public_path('adminAssets/images/services');
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0777, true, true);
        }

        // Handle the file upload and save the image in the service_images table
        if ($request->hasFile('service_image')) {
            $imageName = time() . '.' . $request->service_image->extension();

            // Use relative path here; the move method automatically appends the destination path to the public directory
            $request->service_image->move('adminAssets/images/services', $imageName);

            // Store image reference in service_images table
            ServicesImage::create([
                'service_id' => $service->id,
                'image_path' => $imageName,
            ]);
        }

        return redirect()->back()->with('success', 'Service Addedd successfully.');
    }


    public function showServiceDetails($service_id)
    {

        $service = DB::table('services')
            ->join('services_images', 'services.id', '=', 'services_images.service_id')
            ->where('services.id', $service_id)
            ->select('services.*', 'services_images.image_path')
            ->first();
        if ($service) {
            $response = [
                'success' => true,
                'service' => [
                    'id' => $service->id,
                    'name' => $service->service_name,
                    'description' => $service->service_description,
                    'status' => $service->service_status,
                    'image' => asset('adminAssets/images/services/' . $service->image_path),
                ]
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Service not found.'
            ];
        }

        // Return the data as JSON for AJAX
        return response()->json($response);
    }

    // update service status
    public function changeServivceStatus(Request $request)
    {
        $service = Services::find($request->service_id);

        if ($service) {
            // Toggle the status
            $service->service_status = $service->service_status === 1 ? 0 : 1;
            $service->save();

            // Return success response
            return response()->json([
                'success' => true,
                'status' => $service->service_status
            ]);
        }

        return response()->json(['success' => false], 404);
    }
}
