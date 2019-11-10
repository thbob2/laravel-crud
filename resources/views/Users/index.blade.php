@extends('layouts.app')
@section('content')
    <div class="card card-default">
        <div class="card-header">Users</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Posts Count</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                        <img  width="40px" height="40px" style="border-radios:50%" src="{{Gravatar::src($user->email)}}" alt="">
                        </td>
                        <td>
                            <!--put user name-->
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            <!-- posts count for the user-->
                            {{$user->posts->count()}}
                        </td>
                        <td class="float-right">
                            <!-- buttons link -->

                            @if (!$user->isAdmin())
                                <form action="{{route('users.make-admin',$user->id)}}" method="POST" class="float-left">
                                    @csrf
                                    <button type="submit" class="btn btn-warning btn-sm mr-1 " style="color:white">Make Admin</button>
                                </form>
                            @endif


                            <a href="" class="btn btn-info btn-sm mr-1 ">Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
