@extends('template/templateAdmin')

@section('content')
<br><br><br><br>
<div class="container">
    <section class="page-section">
    <h3 style="margin-top: 40px;">List Bank</h3>
    @csrf
        <table class="table">
            <tr>
                <th>Nomor Rekening</th>
                <th>Nama Rekening</th>
                <th>Action</th>
            </tr>
            @foreach ($bank as $item)
                    <tr>
                        <td>{{$item->nomor_rekening}}</td>
                        <td>{{$item->nama_bank}}</td>
                        <td><form action="login" method="POST" class="user">
                        <button type="button" class="btn btn-danger">Delete</button>
                        </form></td>
                    </tr>   
            @endforeach
        </table>
<!-- </form> -->
    
       


</section>
@endsection