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
                                <div>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tambahPeserta">Tambah Peserta</button>
                                </div>
                            </div>  
                           </div>
                           <div class="comman-space pb-0">
                              <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                <table class="table table-striped data-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="10%">Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th width="100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    </tbody>
                                </table>
                                 {{-- <table class="table table-nowrap mb-0">
                                    <thead>
                                       <tr>
                                          <th>COURSES</th>
                                          <th>SALES</th>
                                          <th>INVOICE</th>
                                          <th>DATE</th>
                                          <th>METHOD</th>
                                          <th></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">Information About UI/UX Design Degree</a></p>
                                          </td>
                                          <td>34</td>
                                          <td>#10021</td>
                                          <td>10-05-20</td>
                                          <td>Mastercard</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">Wordpress for Beginners - Master Wordpress Quickly</a></p>
                                          </td>
                                          <td>30</td>
                                          <td>#12421</td>
                                          <td>10-05-20</td>
                                          <td>Visa</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">Sketch from A to Z (2022): Become an app designer</a></p>
                                          </td>
                                          <td>24</td>
                                          <td>#11021</td>
                                          <td>10-05-20</td>
                                          <td>Mastercard</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">Learn Angular Fundamentals From beginning to advance lavel</a></p>
                                          </td>
                                          <td>34</td>
                                          <td>#10021</td>
                                          <td>10-05-20</td>
                                          <td>Mastercard</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">Build Responsive Real World Websites with HTML5 and CSS3</a></p>
                                          </td>
                                          <td>34</td>
                                          <td>#10021</td>
                                          <td>10-05-20</td>
                                          <td>Mastercard</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">C# Developers Double Your Coding Speed with Visual Studio</a></p>
                                          </td>
                                          <td>34</td>
                                          <td>#10021</td>
                                          <td>10-05-20</td>
                                          <td>Mastercard</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">Learn JavaScript and Express to become a professional JavaScript</a></p>
                                          </td>
                                          <td>34</td>
                                          <td>#10021</td>
                                          <td>10-05-20</td>
                                          <td>Mastercard</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">Learn and Understand AngularJS to become a professional developer</a></p>
                                          </td>
                                          <td>34</td>
                                          <td>#10021</td>
                                          <td>10-05-20</td>
                                          <td>Mastercard</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">Responsive Web Design Essentials HTML5 CSS3 and Bootstrap</a></p>
                                          </td>
                                          <td>34</td>
                                          <td>#10021</td>
                                          <td>10-05-20</td>
                                          <td>Mastercard</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="instruct-orders-info">
                                             <p><a href="course-details.html">The Complete App Design Course - UX, UI and Design Thinking</a></p>
                                          </td>
                                          <td>34</td>
                                          <td>#10021</td>
                                          <td>10-05-20</td>
                                          <td>Mastercard</td>
                                          <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                       </tr>
                                    </tbody>
                                 </table> --}}
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

<div class="modal fade" id="tambahPeserta" tabindex="-1" aria-labelledby="tambahPesertaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPesertaLabel">Tambah Peserta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/peserta/store') }}" id="MyForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="hidden">

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Nama Peserta</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Peserta">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Email Peserta</label>
                                <input type="text" class="form-control" name="dataemail" id="dataemail" placeholder="Masukkan Email Peserta">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Re-Password</label>
                                <input type="password" class="form-control" name="repassword" placeholder="Masukkan Kembali Password">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="form-control-label">Role</label>
                                <select name="role" class="form-control" id="">
                                    <option value="" selected disabled> == Pilih Role == </option>
                                    <option value="PPK"> PPK </option>
                                    <option value="Pokja"> Pokja </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">Foto</label>
                                <input type="file" class="form-control-file dropify" name="foto" placeholder="Masukkan Kembali Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        <form>
    </div>
</div>


{{-- <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="EditPeserta" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ url('admin/peserta/edit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" id="user_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditPeserta">Edit Peserta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Nama Peserta</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Peserta">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Email Peserta</label>
                                <input type="text" class="form-control" name="dataemail" id="dataemail" placeholder="Masukkan Email Peserta">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Re-Password</label>
                                <input type="password" class="form-control" name="repassword" placeholder="Masukkan Kembali Password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">Foto</label>
                                <input type="file" class="form-control-file dropify" name="foto" placeholder="Masukkan Kembali Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        <form>
    </div>
</div> --}}
@endsection

@section('custom-scripts')

    {{-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> --}}
    <script type="text/javascript">
        $(function () {
            let i = 1
            // console.log("data")
            var table = $('.data-table').DataTable({
                processing: true,   
                serverSide: true,
                ajax: "{{ url('admin/peserta/list') }}",
                columns: [
                    {"render" : function(){
                        return i++
                    }},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
            
        });

        function edit(id){
            // $('#editModal').modal('show')
            $.ajax({
                url: "{{ url('api/peserta') }}",
                type: "POST",
                data: {
                    id: id
                },
                success: function(result){
                    // console.log(data)

                    if (result.status == false) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal !!!',
                            text: result.data.message,
                        })
                    }else{
                        $('.hidden').html('')
                        $('#tambahPesertaLabel').html('Edit Peserta')
                        $('#tambahPeserta').modal('show')
                        $('#MyForm').attr('action', "{{ url('admin/peserta/edit') }}")
                        // $('#user_id').val(result.data.id)
                        $('.hidden').append(`
                            <input type="hidden" name="user_id" id="user_id" value="${result.data.id}">
                        `)
                        $('#name').val(result.data.name)
                        $('#dataemail').val(result.data.email)
                        $('#editModal').modal('show')

                    }
                }
            })
        }

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