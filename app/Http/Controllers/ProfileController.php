<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Profile;
 
class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $profile = new Profile();
        $profile->nama = $request->nama;
        $profile->nim = $request->nim;
        $profile->gender = $request->gender;
        $profile->email = $request->email;
        $profile->save();

        $response['code'] = 200;
        $response['message'] = 'Success, profile has been created';
        $response['data'] = $profile;

        return response()->json($response, 200);
    }
}