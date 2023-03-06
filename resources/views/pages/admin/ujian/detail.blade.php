@extends('layouts.base_front')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')

        <div class="col-xl-9 col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="settings-widget">
                        {{-- {{ dd($data) }} --}}
                        <form action="{{ url('admin/list-ujian/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="hidden" name="user_id" value="{{ $data['user']->id }}"> --}}
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
                                                    Preview Dokumen Peserta
                                                </div>
                                                <div class="col-md-3">
                                                    Nama Dokumen
                                                </div>
                                                <div class="col-md-3">
                                                    Komentar Dokumen
                                                </div>
                                                <div class="col-md-3">
                                                    Status
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                                {{-- POKJA --}}

                                @foreach ($data as $item)
                                    {{-- {{ dd($data) }} --}}
                                    <input type="hidden" name="indikator_id[]" value="{{ $item->id }}">
                                    <div class="comman-space bdr-bottom-line">
                                        <div class="instruct-review-blk">
                                            <div class="review-item">
                                                <div class="instructor-wrap border-0 m-0 text-center">
                                                    <div class="col-md-3 p-3">
                                                        <iframe src="{{ asset('/laraview/#../dokumen/'.$item->path_file.'') }}" width="200px" height="130" allowfullscreen webkitallowfullscreen></iframe>
                                                    </div>
                                                    <div class="col-md-3 p-3">
                                                        <p class="text-break">{{ $item['name'] }}</p>
                                                    </div>
                                                    <div class="col-md-3 p-3">
                                                        <textarea name="komentar_indikator[]" id="" cols="30" class="form-control" rows="5" placeholder="Komentar Admin">{{ App\Helpers\Helper::getLastKomentar($item->id) }}</textarea>
                                                    </div>
                                                    <div class="col-md-3 p-3">
                                                        <select name="status_indikator[]" class="form-control" id="">
                                                            <option value="" selected disabled>== Pilih ==</option>
                                                            <option value="Menunggu Review" @if ($item->status == 'Menunggu Review')
                                                                selected
                                                            @endif>Menunggu Review</option>
                                                            <option value="Revisi" @if ($item->status == 'Revisi')
                                                                selected
                                                            @endif>Revisi</option>
                                                            <option value="Ditolak" @if ($item->status == 'Ditolak')
                                                                selected
                                                            @endif>Ditolak</option>
                                                            <option value="Setuju" @if ($item->status == 'Setuju')
                                                                selected
                                                            @endif>Setuju</option>
                                                        </select>
                                                    </div>
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


        {{-- <div class="col-xl-9 col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="settings-widget">
                        <div class="settings-inner-blk p-0">
                            <div class="sell-course-head comman-space">
                                <h3>Courses</h3>
                                <p>Manage your courses and its update like live, draft and insight.</p>
                            </div>
                            <div class="comman-space pb-0">
                                <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                    <table class="table table-nowrap table-responsive mb-2">
                                        <thead>
                                            <tr class="text-center">
                                                <th width="20%">Contoh Dokumen</th>
                                                <th>Nama Dokumen</th>
                                                <th>Komentar</th>
                                                <th>Dokumen Peserta</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center mb-2" style="height: 170px">
                                                <td class="text-center">
                                                    <div class="sell-table-group d-flex align-items-center" style="height: 100px">
                                                        <div class="sell-group-img text-center">
                                                            <a href="course-details.html" class="text-center">
                                                                <iframe src="{{ asset('/laraview/#../pdf/indikator1.pdf') }}" width="200px" height="130" allowfullscreen webkitallowfullscreen></iframe>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-break p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ad.</td>
                                                <td>
                                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                                </td>
                                                <td>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input dropify" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="text-center">
                                                    <div class="sell-table-group d-flex align-items-center" style="height: 100px">
                                                        <div class="sell-group-img text-center">
                                                            <a href="course-details.html" class="text-center">
                                                                <iframe src="{{ asset('/laraview/#../pdf/indikator1.pdf') }}" width="200px" height="130" allowfullscreen webkitallowfullscreen></iframe>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3200</td>
                                                <td>3200</td>
                                                <td><span class="badge info-low">Live</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>

@endsection
