@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="pull-right"><a href="{{ route('interests.create') }}" class=''>Add New Interest</a></div>

          @if($intr->count())
            <table class="table table-responsive" style="display:table;">
              <thead>
                <tr><th>ID</th><th>Name</th><th>Action</th></tr>
              </thead>
              <tbody>
                <?php $i=1;?>
            @foreach($intr as $int)
              <tr><td>{{ $i }}</td><td>{{ $int->name }}</td><td><a href="" class="btn btn-sm btn-success">Edit</a> <a href="" class="btn btn-sm btn-danger">Delete</a></tr>
              <?php $i++;?>
            @endforeach

          </tbody>

          </table>
            {{ $intr->links() }}
          @endif
        </div>
    </div>
</div>
@endsection
