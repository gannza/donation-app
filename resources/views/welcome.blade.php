@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Payments</div>

                <div class="panel-body">
                 <a class="btn btn-info" href="pay-with-momo"> Pay with momo</a> &nbsp; | &nbsp;
                 <a class="btn btn-success" href="pay-with-card"> Pay with card</a> 
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection