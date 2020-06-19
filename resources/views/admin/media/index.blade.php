@extends('layouts.admin')



@section('content')

<h1>Media</h1>

@if($photos)

    <form action="delete/media" method="post" class="form-inline">

        {{csrf_field()}}

        {{method_field('delete')}}

        <div class="form-group">
            <select name="checkBoxArray" id="" class="form-control">
                <option value="">Delete</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit"  name="delete_all" class="btn btn-primary">
        </div>
    
    

    <table class="table table-bordered">
        <thead>
            <tr>
                <th><input type="checkbox" id="options"></th>
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
                    <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                    <td>{{$photo->id}}</td>
                    <td><img height="50px" src="{{$photo->file}}" alt=""></td>
                    <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'NoDate' }}</td>
                    <td>{{$photo->updated_at ? $photo->updated_at->diffForHumans() : 'No Date'}}</td>
                    <td>
                        <input type="hidden" name="photo" value="{{$photo->id}}">
                            <div class="form-group">
                                <input type="submit" value="Delete" class="btn btn-danger" name="delete_single">
                            </div>
                    
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
    </form>

@endif





@endsection



@section('scripts')

<script>

    $(document).ready(function(){

        $('#options').click(function(){

            if(this.checked){
                $('.checkBoxes').each(function(){
                    this.checked = true;
                });
            } else {
                $('.checkBoxes').each(function(){
                    this.checked = false;
                });
            }

        });

    });


</script>


@endsection