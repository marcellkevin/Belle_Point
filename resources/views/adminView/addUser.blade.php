@extends('template/templateAdmin')

@section('content')
<br><br>
<h3 style="margin-top: 40px;margin-left: 40px;">Add User</h3>
    <section class="page-section" id="masterService">
        <section class="page-section" id="tambahCustomer">
        <div class="d-flex justify-content-around px-5 py-4">
            <div class="container shadow p-5 m-0 bg-body rounded" style="width:450px;">
                <form action="/addUser" method="post">
                    @csrf
                    <p>Nomor Handphone </p> <input class="form-control" name="nomor_hp" id="nomor_hp" type="text"/><br>
                    @error('nomor_hp')
                    <div  class="invalid-feedback">
                        {{'Nomor HP Salah'}}
                    </div>
                    @enderror
                    <p>Password </p> <input class="form-control" name="password" id="password" type="password"/><br>
                    @error('nomor_hp')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <p>Nama </p> <input class="form-control" name="nama" id="nama" type="text" required/>
                    
                    <p>Role </p> 
                    <select id="role" name="role"  style="width:300px">
                    <option value="admin">Admin</option>
                    <option value="approver">Approver</option>
                    <option value="bank">Bank</option>
                    <option value="marketing">Marketing</option>
                    </select> <br><br><br>
                    <input type="submit" name="btnCust" class="btn btn-primary" value="Tambah User">
                </form>
            </div>
        </div>
    </section>
@endsection