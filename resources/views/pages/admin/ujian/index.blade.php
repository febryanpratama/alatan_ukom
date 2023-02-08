@extends('layouts.base_front')

@section('content')
<div class="page-content instructor-page-content">
    <div class="container">
        <div class="row">
        
            @include('layouts.partials.sidebar')


            <div class="col-xl-9 col-lg-8 col-md-12">
               <div class="row">
                  <div class="col-md-12">
                     <div class="settings-widget">
                        <div class="settings-inner-blk p-0">
                           <div class="sell-course-head comman-space">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>{{ $title }}</h3>
                                </div>
                                {{-- <p>Order Dashboard is a quick overview of all current orders.</p> --}}
                                {{-- <div>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tambahPeserta">Tambah Peserta</button>
                                </div> --}}
                            </div>  
                           </div>
                           <div class="comman-space pb-0">
                              <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                <table class="table table-striped data-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="10%">Id</th>
                                            <th>Nomor Tiket</th>
                                            <th>Nama Peserta</th>
                                            <th width="100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                       @foreach ($data as $item=>$key)
                                             <tr>
                                                   <td>{{ $item+1 }}</td>
                                                   <td>{{ $key->ticket }}</td>
                                                   <td>{{ $key->user->name }}</td>
                                                   <td>
                                                      <a href="{{ url('admin/list-ujian/'.encrypt($key->id).'/detail') }}">
                                                         <button class="btn btn-sm btn-outline-primary">Detail</button>
                                                      </a>
                                                   </td>
                                             </tr>
                                       @endforeach
                                    </tbody>
                                </table>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom-scripts')

    {{-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> --}}
    <script type="text/javascript">
        $(function () {
            let i = 1
            // console.log("data")
            var table = $('.data-table').DataTable();
            
        });

        $('.dropify').dropify({
            messages: {
                'default': 'Drop Foto',
                'replace': 'Ganti',
                'remove':  'Hapus',
                'error':   'error'
            }
        });
    
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Sukses !!!',
                text: '{{ session('success') }}',
            })
            @endif
            
            @if (session('errors'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal !!!',
                    text: '{{ session('errors') }}',
                })
        @endif
    </script>
@endsection