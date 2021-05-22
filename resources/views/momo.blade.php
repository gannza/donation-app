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
                                <div class="row">
                                    <div class="col-4">
                                        <button type="button"  class="btn btn-info btn-block pt-3 pb-3" onclick="addDLevelUsd('0.25')"> <span>&nbsp;$0.25</span> </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button"  class="btn btn-info btn-block pt-3 pb-3" onclick="addDLevelUsd('25')"> <span>&nbsp;&nbsp;$25</span> </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button"  class="btn btn-info btn-block pt-3 pb-3" onclick="addDLevelUsd('50')"> <span>&nbsp;&nbsp;$50</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <button type="button" class="btn btn-info btn-block pt-3 pb-3" onclick="addDLevelUsd('100')"> <span>$100</span> </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button"  class="btn btn-info btn-block pt-3 pb-3" onclick="addDLevelUsd('250')"> <span>$250</span> </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button"  class="btn btn-info btn-block pt-3 pb-3" onclick="addDLevelUsd('500')"> <span>$500</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <input type="text" id="donateUsdField" required class="form-control u_donation_amount" placeholder="Name your own amount, maybe $44?">
                            </div>

                        </div>

                        <div class="row mt-4">
                            <div class="col-12" align="right">
                                <input type="checkbox" checked > I'll cover my transaction fees
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <button id="submit" name="submit" style="background-color: #563d7c!important; border-radius:10px" onclick="payWithMomo()" class="btn btn-success text-center btn-block text-white" type="button">
                                    <h4 class="text-white">DONATE</h4>
                                </button>
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