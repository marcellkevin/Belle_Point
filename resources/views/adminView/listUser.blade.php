@extends('template/templateAdmin')

@section('content')
<br><br><br><br>
<div class="container">
    <section class="page-section">
    <h3 style="margin-top: 40px;">List User</h3>
    @csrf
        <table class="table">
            <tr>
                <th>Nomor Handphone</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            @foreach ($users as $item)
                    <tr>
                        <td>{{$item->nomor_hp}}</td>
                        <td><input class="form-control" name="password" id="password" type="password" value="{{$item->password}}" disabled/></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->nama_role}}</td>
                        <td><form action="login" method="POST" class="user">
                        <button type="button" class="btn btn-danger">Edit</button>
                        </form></td>
                    </tr>   
            @endforeach
        </table>
<!-- </form> -->
    
       


</section>
@endsection