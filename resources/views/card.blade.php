@extends('layouts.app')

@section('content')
<a class="btn btn-info" href="/"> Back</a> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7 border-right">
                        <form  class="paymentForm">
                            <div class="container">
                                <div class="mb-4">
                                    <strong>Step2 </strong> > Payment

                                </div>
                                <br>
                                <div>
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body" style="text-align: center;">
                                            <img src="/payment.png" style="text-align: center;" width="220px" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <br>
                                        <h4>Contact information</h4>
                                    </div>

                                    <div class="col-md-5" align="right">
                                        <a href="#">Terms & Conditions</a>
                                        <br>
                                        Already a supporter? <a href="#">Login</a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <input type="email" placeholder="Email" class="form-control email" name="email">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h4>Billing address</h4>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" class="form-control firstName" name="firstName" placeholder="First name">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" class="form-control lastName" name="lastName" placeholder="Last name">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input type="text" placeholder="Address" class="form-control address" name="address">
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <input type="text" placeholder="Apartment,suite,etc (optional)" class="form-control address2" name="address2">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input type="text" placeholder="City" class="form-control city" name="city">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <select name="country" class="form-control country" id="">
                                            <option value="Rwanda">Rwanda</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" class="form-control postCode" name="postCode" placeholder="Post code">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12" align="right">
                                        <button type="submit" class="btn btn-secondary">Continue to payment</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        </div>
                        <div class="col-md-5">
                            <div class="container">
                                <div class="row border-bottom pb-3">
                                    <div class="col-md-8 mt-3">
                                        <h6>One-time Donation</h6>
                                        $250 Donation
                                    </div>
                                    <div class="col-md-4 mt-3" align="right">
                                        <strong> $250.00</strong>
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <h6>Fee Coverage</h6>
                                        Processing fees for a $250 donation
                                    </div>
                                    <div class="col-md-4 mt-3" align="right">
                                        <strong> $15.00</strong>
                                    </div>
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <h6>Total</h6>
                                    </div>
                                    <div class="col-md-6 mt-3" align="right">
                                        <div>USD <strong style="font-size:27px"> $256.00</strong></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection