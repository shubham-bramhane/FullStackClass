@extends('layouts.main')




@section('page-content')


<div class="container">
    <h1 class="text-center">table</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>address</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">shubham</td>
                <td>shubham@gmil.com</td>
                <td>ghugus</td>
                <td><a href="http://" class="btn btn-primary">edit</a>
                    <a href="http://" class="btn btn-danger">delete</a>
                </td>

            </tr>
            <tr>
                <td scope="row">kavita mam</td>
                <td>kavita@gmail.com</td>
                <td>chandrapur</td>
            </tr>

        </tbody>
    </table>

</div>

@endsection
