@extends('dashboard.layout.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-8">


            <table class="table table-hover table-listing">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Course</th>
                      <th scope="col">Mentor</th>
                      <th scope="col">Tittle</th>
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->course }}</td>
                    <td>{{ $post->mentor }}</td>
                    <td>{{ $post->tittle }}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection