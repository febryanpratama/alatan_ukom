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

    public function indexTicket()
    {
        $response = $this->userService->indexTicket();

        return view('pages.user.ujian.ticket', [
            'data' => $response['ticket'],
            'title' => 'List Ujian'
        ]);
    }

    public function detailTicket($ticket_id)
    {
        // dd($ticket_id);
        $response = $this->userService->detailTicket(decrypt($ticket_id));

        if (!$response['status']) {
            return back()->with('error', $response['message']);
        } else {
            return view('pages.user.ujian.detail', [
                'title' => 'Detail Ujian',
                'data' => $response['data'],
                'ticket_id' => $ticket_id,
            ]);
        }
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
