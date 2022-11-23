<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tshirt List</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Tshirt List</h2>
            </div>

            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif

            <div style="margin-right: 10%; float:right;">
                <a href="{{url('add-tshirt')}}" class="btn btn-primary">Add Tshirt</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Batch No.</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $i = 1;
                    @endphp 
                    @foreach($data as $tsi)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$tsi->batchno}}</td>
                        <td>{{$tsi->qty}}</td>
                        <td>{{$tsi->status}}</td>
                        <td>{{$tsi->remarks}}</td>
                        <td><a href="{{url('edit-tshirt/'.$tsi->id)}}" class="btn btn-primary">Edit</a> <a href="{{url('delete-tshirt/'.$tsi->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>