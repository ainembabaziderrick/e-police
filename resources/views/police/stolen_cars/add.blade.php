@extends('police.layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Stolen Car</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('police/stolen_cars/add')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Car Name </label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Number Plate </label>
                    <input type="text" name="number" class="form-control" id="exampleFormControlInput1">

                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Car Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Car Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">

 </textarea>
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>

                </div>
            </form>
        </div>
    </div>



    @endsection