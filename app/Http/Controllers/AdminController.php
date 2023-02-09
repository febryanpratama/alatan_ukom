<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function indexUjian()
    {
        $title = 'List Ujian Peserta';

        $ticket = Ticket::with('user')->get();

        return view('pages.admin.ujian.index', [
            'data' => $ticket,
            'title' => $title,
        ]);
    }

    public function getListUjian(Request $request)
    {
        if ($request->ajax()) {
            return datatables()->of(User::query())
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="list-ujian/`' . encrypt($row->id) . '`/detail" class="edit btn btn-outline-info btn-sm">Detail</a>';
                    // $btn2 = '<button onClick="destroy(`' . encrypt($row->id) . '`)" class="edit btn btn-outline-danger btn-sm">Hapus</button>';

                    $btnFix = $btn;
                    return $btnFix;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function detailUjian(Request $request, $ticket_id)
    {
        // dd(decrypt($ticket_id));
        $response = $this->adminService->getDetailUjian(decrypt($ticket_id));

        // dd($response);
        return view('pages.admin.ujian.detail', [
            'title' => 'Detail Ujian',
            'data' => $response['data'],
            'ticket_id' => $ticket_id,
        ]);
    }

    public function postUjian(Request $request)
    {
        // dd($request->all());

        $response = $this->adminService->postUjian($request->all());

        return back()->with($response['status'], $response['message']);
    }




    // USER/PESERTA
    public function indexPeserta()
    {
        $title = 'List Peserta';
        return view('pages.admin.peserta.index', [
            'title' => $title,
        ]);
    }

    public function getPeserta(Request $request)
    {
        if ($request->ajax()) {
            return datatables()->of(User::query())
                ->addIndexColumn()
                ->editColumn('pagu_anggaran', function ($data) {
                    return "Rp." . number_format($data->pagu_anggaran, 0);
                })
                ->addColumn('action', function ($row) {

                    $btn = '<button onClick="edit(`' . encrypt($row->id) . '`)" class="edit btn btn-outline-info btn-sm">Edit</button>';
                    $btn2 = '<button onClick="destroy(`' . encrypt($row->id) . '`)" class="edit btn btn-outline-danger btn-sm">Hapus</button>';

                    $btnFix = $btn . ' ' . $btn2;
                    return $btnFix;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        // if ($request->ajax()) {
        //     $data = User::select('*');
        //     return Datatables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function ($row) {

        //             $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
    }

    public function postPeserta(Request $request)
    {
        // dd($request->all());
        $response = $this->adminService->storePeserta($request->all());

        if ($response['status']) {
            # code...
            return back()->with('success', $response['message']);
        } else {
            return back()->with('errors', $response['message']);
        }
    }

    public function detailPeserta(Request $request)
    {
        $response = $this->adminService->detailPeserta($request->all());

        return response()->json($response);
    }

    public function editPeserta(Request $request)
    {
        $response = $this->adminService->editPeserta($request->all());

        if ($response['status']) {
            # code...
            return back()->with('success', $response['message']);
        } else {
            return back()->with('errors', $response['message']);
        }
    }
}
