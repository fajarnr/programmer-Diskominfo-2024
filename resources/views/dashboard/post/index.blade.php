@extends('dashboard.layout.main')

@section('container')

<div class="row">
  <div class="col">
      <div class="card">
          <div class="card-header">
              <i class="fa fa-align-justify"></i>
              
              <table class="table table-hover table-listing">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Course</th>
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($course as $post)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->course }}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>


          </div>
      </div>
  </div>
</div>

@endsection