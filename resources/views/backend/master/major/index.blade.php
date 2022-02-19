@extends('layouts.backend.app')
@section('content')
    @component('components.backend.table.datatable')
        @slot('header')
        <div class="card-header">
            <h4></h4>
            <div class="card-header-action">
                <a href="" class="btn btn-primary">Tambah</a>
            </div>
        </div>
        @endslot
        @slot('head')
            <tr>
                <th>Name</th>
                <th>Total Classroom</th>
                <th>Created By</th>
                <th>Created Date</th>
                <th>Action</th>
            </tr>
        @endslot
        @slot('body')
            @foreach ($data['majors'] as $major)
                <tr>
                    <td>{{ $major['name'] }}</td>
                    <td>1</td>
                    <td>{{ $major['CreatedBy']['name'] }}</td>
                    <td>Yesterday</td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection
