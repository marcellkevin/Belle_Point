@extends('template/templateAdmin')

@section('content')
<br><br>
<h3 style="margin-top: 40px;margin-left: 40px;">Add Point</h3>
            <section class="page-section" id="masterService">
                <section class="page-section" id="tambahCustomer">

                <div class="d-flex justify-content-around px-5 py-4">
                    <div class="container shadow p-5 m-0 bg-body rounded" style="width:450px;">

                        <form action="/addPoint" method="post">
                            @csrf
                            <p>Nama Customer </p> <input class="form-control" name="nama_customer" id="nama" type="text"/><br>
                            
                            <p>Bank</p>
                            <select style="width: 350px">
                                @foreach($bank as $row)
                                  <option>
                                    {{$row->nomor_rekening}} - {{$row->nama_bank}}
                                  </option>
                                @endforeach
                              </select><br><br>
                            <p>Total Pembelian : </p> <input class="form-control" name="nama" id="nama" type="number" required/><br>
                            
                            <input type="submit" name="btnCust" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </section>
            @endsection