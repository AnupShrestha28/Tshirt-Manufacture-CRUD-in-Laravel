<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Tshirt</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Tshirt</h2>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
            </div>

            <form action="{{url('update-tshirt')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="mb-3">
                    <label class="form-label">Batch No.</label>
                    <input type="text" name="batch" class="form-control" placeholder="Enter a batch number" value="{{$data->batchno}}">
                    @error('batch')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="text" name="quantity" class="form-control" placeholder="Enter a quantity" value="{{$data->qty}}">
                    @error('quantity')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <input type="text" name="status" class="form-control" placeholder="Enter a status" value="{{$data->status}}">
                    @error('status')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Remarks</label>
                    <input type="text" name="remarks" class="form-control" placeholder="Enter a remarks" value="{{$data->remarks}}">
                    @error('remarks')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>

                <a href="{{url('tshirt-list')}}" class="btn btn-danger">Go Back</a>
            </form>
        </div>
    </div>
</body>
</html>