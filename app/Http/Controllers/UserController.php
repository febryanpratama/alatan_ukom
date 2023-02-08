<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function indexDokumenUjian()
    {
        // $dokumen = DokumenUjian::all();
        return view('pages.user.ujian.index');
    }

    public function postDokumenUjian(Request $request)
    {
        // dd($request->all());

        $response = $this->userService->postTicket($request->all());

        // dd($response);

        if ($response['status']) {
            # code...
            return back()->with('success', $response['message']);
        } else {
            return back()->with('error', $response['message']);
        }
    }
}
