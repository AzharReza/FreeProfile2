<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class SimpleUserController extends Controller
{
    public function index()
    {
        $users = User::where('status',1)->get();
        return view('pages.display', compact('users'));
    }

    public function create()
    {
        return view('pages.add');
    }

    public function store(Request $request)
    {

        try {
            $image = $path = null;
            if ($request->image) {

                $path = 'upload/User/';
                try {
                    $image = $this->uploadImage($request->image, $path . '/');
                } catch (\Exception $e) {
//                    return makeResponse('error', 'Error in Saving Image: ' . $e, 500);
                    return $e;
                }
            }
            User::create([
                'firstname' => $request->first_name ?? 'N/A',
                'lastname' => $request->last_name ?? 'N/A',
                'father_name' => $request->father_name ?? 'N/A',
                'cnic' => $request->cnic ?? 'N/A',
                'email' => $request->email ?? 'N/A',
                'phone' => $request->phone ?? 'N/A',
                'address' => $request->address ?? 'N/A',
                'address2' => $request->address2 ?? 'N/A',
//                'password' => $request->password??'N/A',
                'city' => $request->city ?? 'N/A',
                'state' => $request->state ?? 'N/A',
                'dob' => $request->dob ?? 'N/A',
                'dod' => $request->dod,
                'religion' => $request->religion ?? 'N/A',
                'description' => $request->description ?? 'N/A',
                'gender' => $request->gender ?? 'N/A',
                'image' => $image,
                "role" => 'user',
            ]);
//            dd($request->all(), $image);

            return redirect()->route('userListing');
        } catch (\Exception $e) {
            return $e;
//            return redirect()->back();
        }
    }

    public function show(User $user)
    {
        $data = $user;
        return view('pages.show', compact('data'));
    }

    public static function uploadImage($uploadImage, $path)
    {
        $image = $uploadImage;
        $ext = $image->getClientOriginalExtension();
        $randomString = mt_rand(100000, 999999);
        $fileName = $image->getClientOriginalName();
        $fileNameUpload = time() . "-" . $randomString . '.' . $ext;
        $drive = $path;
        $path = public_path($drive);
        if (!file_exists($path)) {
            File::makeDirectory($path, 0777, true);
        }
//        $imageSave = $this->saveImage($image, $fileNameUpload, $path,$drive);
        Image::make($image)->save($path . $fileNameUpload);

        return $drive . $fileNameUpload;

    }

}
