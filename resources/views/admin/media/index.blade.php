@extends('layouts.admin')



@section('content')

<h1>Media</h1>

@if($photos)

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td><img height="50px" src="{{$photo->file}}" alt=""></td>
                    <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'NoDate' }}</td>
                    <td>{{$photo->updated_at ? $photo->updated_at->diffForHumans() : 'No Date'}}</td>
                    <td>

                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediaController@destroy', $photo->id]]) !!}         
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}                            
                            </div>
                        {!! Form::close() !!}
                    
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>

@endif




@endsection