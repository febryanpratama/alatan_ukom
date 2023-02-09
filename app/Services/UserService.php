<?php

namespace App\Services;

use App\Models\DetailIndikator;
use App\Models\Indikator;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserService
{
    public function indexTicket()
    {
        $ticket = Ticket::where('user_id', auth()->user()->id)->get();

        return [
            'ticket' => $ticket,
        ];
    }

    public function detailTicket($ticket_id)
    {
        // dd($ticket_id);
        $ticket = Ticket::where('id', $ticket_id)->first();

        if (!$ticket) {
            return [
                'status' => false,
                'message' => 'Ticket tidak ditemukan',
            ];
        }

        $indikator = Indikator::where('ticket_id', $ticket_id)->get();

        // dd($indikator);
        return [
            'status' => true,
            'data' => $indikator,
        ];
    }
    public function postTicket($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'name.*' => 'required',
            'dokumen_indikator.*' => 'required|mimes:pdf|max:2048',
        ]);

        if ($validator->fails()) {
            dd($validator->errors()->first());
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
            ];
        }

        $no_ticket = 'TCK' . substr(time(), 5, 10);

        // dd($data['name_indikator'][0]);
        DB::beginTransaction();

        try {
            $ticket_id = Ticket::create([
                'user_id' => auth()->user()->id,
                'ticket' => $no_ticket,
            ]);

            for ($i = 0; $i < count($data['name_indikator']); $i++) {
                // dd($data['name_indikator'][$i]);
                $dokumen1 = $data['dokumen_indikator'][$i];
                $nama_file1 = time() . rand(000, 999) . "." . $dokumen1->getClientOriginalExtension();
                $tujuan_upload = 'dokumen';
                $dokumen1->move($tujuan_upload, $nama_file1);

                Indikator::create([
                    'ticket_id' => $ticket_id->id,
                    'name' => $data['name_indikator'][$i],
                    'path_file' => $nama_file1,
                ]);
            }
            // foreach ($data as $key) {
            //     dd($key);
            //     $dokumen1 = $key['dokumen_indikator'];
            //     $nama_file1 = time() . "_" . $dokumen1->getClientOriginalName();
            //     $tujuan_upload = 'dokumen';
            //     $dokumen1->move($tujuan_upload, $nama_file1);

            //     Indikator::create([
            //         'ticket_id' => $ticket_id->id,
            //         'name' => $key->name_indikator,
            //         'path_file' => $nama_file1,
            //     ]);
            // }

            DB::commit();

            return [
                'status' => true,
                'message' => 'Berhasil membuat ticket ' . $ticket_id->id,
            ];

            // dd($ticket_id);
        } catch (\Exception $e) {
            DB::rollback();

            dd($e->getMessage());
            return [
                'status' => false,
                'message' => 'Gagal membuat ticket',
            ];
        }
        // dd($no_ticket);
    }
}
