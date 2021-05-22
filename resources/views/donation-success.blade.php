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
                            <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">Well done!</h4>
                                        <p>Dear <strong> {{\App\Models\Payment::find($id)->name}}</strong>,<br> you successfully paid amount of <strong>{{\App\Models\Payment::find($id)->currency}} {{\App\Models\Payment::find($id)->amount}}</strong> for donation!</p>
                                        <hr>
                                        <p class="mb-0">Thank you for your donation!</p>
                                        </div>
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