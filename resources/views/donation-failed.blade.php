@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <h4 class="alert-heading">FAILED!</h4>
                                        <p>Dear <strong> {{\App\Models\Payment::find($id)->name}}</strong>,<br> you failed to paid amount of <strong>{{\App\Models\Payment::find($id)->currency}} {{\App\Models\Payment::find($id)->amount}}</strong> for donation!</p>
                                        <hr>
                                        <p class="mb-0">Please try again!</p>

                                    </div>
                                </div>
                                <div class="panel-body">
                                    <a class="btn btn-info" href="/pay-with-momo"> Pay with momo</a>
                                    | 
                                    <a class="btn btn-success" href="/pay-with-card"> Pay with card</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


@endsection