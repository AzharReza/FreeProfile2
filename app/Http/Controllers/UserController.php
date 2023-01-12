<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.

     */
    public function index()
    {
        $users = User::paginate(10);
        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        $this->authorize("create", User::class);
//        $companies = Company::all();
//        return view("users.create", compact("companies"));
        return view("users.create");
    }


    public function store(Request $request)
    {
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
        $this->authorize("create", User::class);
        User::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            'father_name' => $request->father_name ?? null,
            'cnic' => $request->cnic ?? null,
            'email' => $request->email ?? null,
            'phone' => $request->phone ?? null,
            'address' => $request->address ?? null,
            'address2' => $request->address2 ?? null,
            'city' => $request->city ?? null,
            'state' => $request->state ?? null,
            'dob' => $request->dob ?? null,
            'dod' => $request->dod,
            'religion' => $request->religion ?? null,
            'description' => $request->description ?? null,
            'gender' => $request->gender ?? null,
            'image' => $image,
            'status' => 1,
//            "company" => $request->company,
//            "role" => $request->role,
            "role" => 'user',
            "password" => Hash::make($request->password),
        ]);

        return redirect("/users");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
//        $companies = Company::all();
//        return view("users.edit", compact(["user", "companies"]));
        return view("users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        $filtered = array_filter($request->all());

        if (in_array("password", $filtered)) {
            $filtered["password"] = Hash::make($filtered["password"]);
        }
        $user = User::findOrFail($id);
        $user->update($filtered);

        return redirect("/users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $this->authorize("delete", User::class);
        $user = User::findOrFail($id);
        $user->delete();

        return redirect("/users");
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

    public function approved(User $user)
    {
//        $user = User::findOrFail($id);
        $user->update(['status' => 1]);
        return redirect()->back();
    }
}
