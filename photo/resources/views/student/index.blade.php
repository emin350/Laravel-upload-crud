{{-- <!-- @extends('layouts.app')

@section('content')
 --> --}}

<div class="container">

    <h1>Laravel 8 IMAGE CRUD<h1>

            <a href="{{url('add-student')}}" class="btn btn-primary"> ekle </a>

            <div>

                <table>
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Course </th>
                            <th> Image </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($student as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->course}}</td>
                            <td>
                                <img src="{{ asset('uploads/students/'.$item->profile_image) }}" width="180px" alt="Image">
                            </td>
                            <td>
                               <a href="{{ url('edit-student/'.$item->id)}}" class="btn btn-primary">Edit </a>
                            </td>
                            <td>
                                <a href="{{ url('delete-student/'.$item->id)}}">Delete </a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                    <table>

            </div>

</div>
