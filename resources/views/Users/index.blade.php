@extends('layouts.app')
@section('content')
    <div class="card card-default">
        <div class="card-header">Users</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>User</th>
                    <th>Email</th>
                    <th>Posts Count</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                            <td>
                                <!--put user name-->
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                <!-- posts count for the user-->
                                0
                            </td>
                            <td class="float-right">
                                <!-- buttons link -->

                                @if (!$user->isAdmin())
                                    <button href="" class="btn btn-warning btn-sm mr-1 " style="color:white">Make Admin</button>
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
