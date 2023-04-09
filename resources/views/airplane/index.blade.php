@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif
<style>
    .content{
        width: 100%;
    }
    .content-header{
        text-align: center;
        font-size: 40px;
        font-family: 'Courier New', Courier, monospace;
    }
    table {
        width: 70%;
        
        margin: auto;
        border: 1px solid black;
    }
    th,td{
        height: 40px;
        border: 1px solid black;
        font-size: 18px;
        font-family: 'Courier New', Courier, monospace;
        padding-left: 10px;
    }
    input {
        border: none;
        height: 25px;
        background-color: red;
        color: white;
    }
    a{
        text-decoration: none;
        padding: 2.5px;
    }
    .add-client{
        text-align: center;
        font-size: 20px;
        margin: 15px 0px;

    }
    .add-client a{
        text-decoration: none;
        color: black;
        background-color: lightblue;
        padding: 5px;
        font-family: 'Courier New', Courier, monospace;
    }
</style>

<div class="content">
    <div class="content-header">
        Clients Data
    </div>
    <div class="add-client">
        <a href="" > Add Client</a>
    </div>
    <div class="content-body">
        <table class="table-bordered">
            <tr>
                <th>Registration Number</th>
                <th>Model Number</th>
                <th>Capacity</th>
                <th>Edit</th>
            </tr>
            @if(count($data) > 0)

                @foreach($data as $key => $airplane)
                    <tr>
                        <td>{{ $airplane->registration_number }}</td>
                        <td>{{ $airplane->model_number}}</td>
                        <td>{{ $airplane->capacity }}</td>
                        <td>
                     
                        <form method="post" action="{{ route('airplanes.destroy', $airplane->registration_number) }}">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-primary btn-sm" 
                                style="background-color: blue;color:white; ">View</a>
                                <a href="" class="btn btn-warning btn-sm"
                                style="background-color: green ;color:black;">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" >
                            </form>
                        </td>
                    </tr>
                    @endforeach

                @else
                    <tr>
                        <td colspan="5" class="text-center">No Data Found</td>
                    </tr>
            @endif
        </table>
        {!! $data->links() !!}
    </div>
</div>

@endsection