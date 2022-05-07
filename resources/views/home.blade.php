@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sales Team') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" id='alert'>

                        </div>
                    @endif
                    <button type="button" class="btn btn-primary btn-sm" style="margin-bottom:10px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
                    <table class="table">
                        <thead class='table-primary'>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Current Route</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                         @if(sizeof($users) >0)
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->telephone}}</td>
                                <td>{{$user->current_route}}</td>
                                <td>{{$user->current_route}}</td>
                            </tr>
                            @endforeach
                         @endif
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modal.add')
<script>
    $("#Add").click(function(){

      $name= $('#name').val();
      $email = $('#email').val();
      $tel = $('#telephone').val();
      $route = $('#route').val();
      $comment = $('#comment').val();

      $.ajax({
            type: "POST",
            url: "{{ url('add') }}",
            data: {
                "_token": "{{ csrf_token() }}",

                'name': $name,
                'email': $email,
                'tel': $tel,
                'comment': $comment,
                'route':$route

            },
            cache: false,
            success: function (data) {
                window.location.href = "{{ url('home') }}";
            }
        });
    });
</script>
@endsection

