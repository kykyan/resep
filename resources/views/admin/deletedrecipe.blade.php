@extends('admin.master')

@section('content')

<table class="table" id="myTable">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Author</th>
        <th scope="col">Nama Resep</th>
        <th scope="col">Tanggal Publish</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($recipe as $recipes)
        <tr>
        <td>{{ $recipes->user->name }}</th>
        <td>{{ $recipes->recipe_name }}</td>
        <td>{{ date('d M Y', strtotime($recipes->created_at)) }}</td>
        <td><a href="{{ route('admin.restorerecipe', $recipes) }}" class="badge badge-primary">Restore</a></td>
        </tr> 
    @endforeach
    </tbody>
  </table>

@endsection