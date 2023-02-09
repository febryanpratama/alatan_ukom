<?php

namespace App\Services;

use App\Models\DetailKomentar;
use App\Models\Indikator;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminService
{
    public function storePeserta($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'name' => 'required',
            'dataemail' => 'required|email|unique:users,email',
            'password' => 'required|min:8|same:repassword',
            // 'role' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
            ];
        }

        if (key_exists('foto', $data)) {
            $file = $data['foto'];
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images';
            $file->move($tujuan_upload, $nama_file);
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['dataemail'],
            'password' => Hash::make($data['password']),
            'foto' => $nama_file ?? 'default.jpeg',
        ]);

        if ($data['role'] == 'PPK') {
            # code...
            $user->assignRole('PPK');
        } else {
            $user->assignRole('Pokja');
        }

        return [
            'status' => true,
            'message' => 'Berhasil menambahkan Peserta',
        ];
    }

    public function detailPeserta($data)
    {
        // dd($data);

        try {

            $data['id'] = decrypt($data['id']);

            $validator = Validator::make($data, [
                'id' => 'required|numeric|exists:users,id',
            ]);

            if ($validator->fails()) {
                return [
                    'status' => false,
                    'message' => $validator->errors()->first(),
                ];
            }

            $user = User::find($data['id']);

            return [
                'status' => true,
                'message' => 'Berhasil menampilkan detail Peserta',
                'data' => $user,
            ];
        } catch (\Exception $e) {

            return [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    public function editPeserta($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'user_id' => 'required|numeric|exists:users,id',
            'name' => 'required',
            'dataemail' => 'required|email|unique:users,email,' . $data['user_id'],
            'password' => 'nullable|min:8|same:repassword',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
            ];
        }

        if (key_exists('foto', $data)) {
            $file = $data['foto'];
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images';
            $file->move($tujuan_upload, $nama_file);
        }
        # code...
        if ($data['password'] == null) {
            # code...
            $data = User::firstWhere('id', $data['user_id'])->update([
                'name' => $data['name'],
                'email' => $data['dataemail'],
                'password' => Hash::make($data['password']),
                'foto' => $nama_file ?? 'default.png',
            ]);

            return [
                'status' => true,
                'message' => 'Berhasil mengubah Peserta',
            ];
        } else {
            $data = User::firstWhere('id', $data['user_id'])->update([
                'name' => $data['name'],
                'email' => $data['dataemail'],
                'foto' => $nama_file ?? 'default.png',
            ]);

            return [
                'status' => true,
                'message' => 'Berhasil mengubah Peserta',
            ];
        }



        // dd($data);
        # code...
    }

    public function getDetailUjian($ticket_id)
    {
        // dd($ticket_id);
        $data = Indikator::where('ticket_id', $ticket_id)->get();
        // dd($data);
        // $data = Ticket::with('user', 'detail')->where('id', $ticket_id)->first();

        // dd($data);
        return [
            'message' => 'Berhasil menampilkan detail ujian',
            'status' => true,
            'data' => $data,
        ];
        // dd($data);
    }

    public function postUjian($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            // 'ticket_id' => 'required|numeric|exists:tickets,id',
            'indikator_id.*' => 'required|numeric|exists:indikators,id',
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
            ];
        }

        // dd($data);

        for ($i = 0; $i < count($data['indikator_id']); $i++) {
            $response = Indikator::firstWhere('id', $data['indikator_id'][$i])->update([
                'status' => $data['status_indikator'][$i],
            ]);

            // dd($data['komentar_indikator']);
            if ($data['komentar_indikator'][$i] != null) {
                DetailKomentar::create([
                    'indikator_id' => $data['indikator_id'][$i],
                    'komentar' => $data['komentar_indikator'][$i],
                ]);
            }
        }

        return [
            'status' => true,
            'message' => 'Berhasil mengubah Peserta',
        ];
    }
}
