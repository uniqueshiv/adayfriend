@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="col-md-offset-8 btn btn-success btn-sm"><a href="{{ route('interests.create') }}" class='' style="color:#fff;">Add New Interest</a></div>

          @if($user->count())
            <table class="table table-responsive" style="display:table;">
              <thead>

              </thead>
              <tbody>
                <?php $i=1; //print_r($user);?>
            @foreach($user as $int)
              <tr><td>Name</td><td>{{ $int->name }}</td></tr>
              <tr><td>Email</td><td>{{ $int->email }}</td></tr>
              <tr><td>Age</td><td>{{ $int->age }}</td></tr>
              <tr><td>About</td><td>{{ $int->about }}</td></tr>
              <tr><td>Interest</td><td>{{ $int->interest }}</td></tr>
              <tr><td>Gender</td><td>{{ $int->gender }}</td></tr>
              <tr><td>Work</td><td>{{ $int->work }}</td></tr>

            @endforeach

          </tbody>

          </table>
                <a href="" class="btn btn-sm btn-primary">Edit Profile</a>
          @endif
        </div>
    </div>
</div>
@endsection
