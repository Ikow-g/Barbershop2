@extends('layouts.header-barber')

@section('content')

<section class="barber-profile mt-5 mb-5">
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class="col-lg">
                <div class="card">
                    <h5 class="card-header">Account Details</h5>
                    <div class="card-body">
                        <form action="/barber-profile-inti-insert" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="barber_desc_id">Barber ke </label>
                                <select class="form-control form-control-solid" name="barber_desc_id" id="barber_desc_id">                            
                                    <option value="{{ $data->barber_id }}">{{ $data->barber_id }}</option>
                                </select>
                            </div> --}}
                            <div class="row row-cols-auto">
                                <div class="col-lg-6 mb-3">
                                    <label for="fname">First Name</label>
                                    <select class="form-control form-control-solid" name="fname" id="fname">                            
                                        <option>{{ $dataUser->fname }}</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="lname">Last Name</label>
                                    <select class="form-control form-control-solid" name="lname" id="fname">                            
                                        <option>{{ $dataUser->lname }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row row-cols-auto">
                                <div class="col-lg-6">   
                                                    
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Umur</label>
                                        <input type="number" name="age" class="form-control" required id="age">
                                    </div>  
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" name="harga" class="form-control" required id="harga">
                                    </div>  
                                     
                                </div>
                                <div class="col-lg-6">                        
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">No Handphone</label>
                                        <input type="tel" name="phone" class="form-control" required id="phone">
                                    </div>                      
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control form-control" name="gender" required id="gender">                            
                                            <option>Pilih</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option> 
                                        </select>
                                    </div> 
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="address" class="form-control" required id="alamat" >                       
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" required id="alamat">                       
                            </div>
                            <label for="gambarbarber" class="form-label">Upload Foto Anda</label>
                            <div class="input-group mb-3">
                                <input type="file" name="gambarbarber" class="form-control" required id="gambarbarber">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>  
                            <label for="sertif" class="form-label">Upload Sertifikat Anda</label>
                            <div class="input-group mb-3">
                                <input type="file" name="certificate" class="form-control" required id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>  
                            <button type="submit" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Save changes</button>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</section>

@endsection