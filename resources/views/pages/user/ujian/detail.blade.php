@extends('layouts.base_front')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')

        <div class="col-xl-9 col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="settings-widget">
                        <form action="{{ url('user/dokumen-ujian/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="hidden" name="user_id" value="{{ @$user_id }}"> --}}
                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space">
                                    <h3>Reviews</h3>
                                    <p>You have full control to manage your own account setting.</p>
                                </div>
                                <div class="comman-space bdr-bottom-line bg-secondary text-white">
                                    <div class="instruct-review-blk ">
                                        <div class="review-item ">
                                            <div class="instructor-wrap text-center border-0 m-0">
                                                <div class="col-md-3">
                                                    Preview Dokumen
                                                </div>
                                                <div class="col-md-3">
                                                    Nama Dokumen <br> / Status Dokumen
                                                </div>
                                                <div class="col-md-3">
                                                    Komentar Dokumen
                                                </div>
                                                <div class="col-md-3">
                                                    Upload Dokumen
                                                </div>
                                                <div class="col-md-3">
                                                    Status Review
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                                {{-- POKJA --}}
                                @foreach ($data as $item)
                                {{-- {{ dd($item) }} --}}
                                    <div class="comman-space bdr-bottom-line">
                                        <div class="instruct-review-blk">
                                            <div class="review-item">
                                                <div class="instructor-wrap border-0 m-0 text-center">
                                                    <div class="col-md-3 p-3">
                                                        <iframe src="{{ asset('/laraview/#../dokumen/'.$item->path_file) }}" width="200px" height="130" allowfullscreen webkitallowfullscreen></iframe>
                                                    </div>
                                                    <div class="col-md-3 p-3">
                                                        <p class="text-break">{{ $item->name }}</p>
                                                        <input type="hidden" name="name_indikator[]" value="{{ $item->name }}">
                                                        @switch($item->status)
                                                            @case('Menunggu Review')
                                                                <p class="btn btn-outline-info">Menunggu Review</p>
                                                                @break
                                                            @case('Setuju')
                                                                
                                                                <p class="btn btn-outline-success">Setuju</p>
                                                                @break
                                                            @case('Ditolak')
                                                                
                                                                <p class="btn btn-outline-danger">Ditolak</p>
                                                                @break
                                                            @case('Revisi')
                                                                
                                                                <p class="btn btn-outline-warning">Revisi</p>
                                                                @break
                                                            @default
                                                                
                                                        @endswitch
                                                    </div>
                                                    <div class="col-md-3 p-3">
                                                        <textarea id="" cols="30" class="form-control" rows="5" placeholder="Komentar Admin" readonly>{{ App\Helpers\Helper::getLastKomentar($item->id) }}</textarea>
                                                    </div>

                                                    <div class="col-md-3 p-3">
                                                        <input type="file" name="dokumen_indikator[]" class="form-control dropify" @if ($item->status == 'Setuju')
                                                            value="{{ $item->path_file }}"

                                                            @else

                                                            value=""
                                                        @endif data-height="120">

                                                        <small class="text-danger">Jika dokumen telah disetujui. mohon untuk dikosongkan</small>
                                                    </div>
                                                    {{-- <div class="col-md-3 p-3">
                                                        <p class="btn btn-outline-success text-success">Dokumen telah Disetujui</p>
                                                        <input type="hidden" name="dokumen_indikator[]" value="{{ $item->path_file }}">
                                                    </div> --}}
                                                    {{-- @if ($item->status != 'Setuju')
                                                        @else
                                                    @endif --}}
                                                </div>  
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                {{-- End Pokja --}}
                            </div>
                            <div class="d-flex p-2 justify-content-center">
                                <button type="button" class="btn btn-outline-danger m-2">Kembali</button>
                                <button type="submit" class="btn btn-outline-primary m-2">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
