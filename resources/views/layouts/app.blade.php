<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  
</head>

<body>
    <div style="margin-top:50px;margin-bottom:20px">


        @yield('content')
    </div>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->


    <script src="/js/jquery.validate.min.js"></script>
    <script src="https://checkout.flutterwave.com/v3.js"></script>

    <script>
    $(document).ready(function(){

$('.paymentForm').validate({
            rules: {
             
				firstName: {
                    required: true,
                    minlength: 2
                },
                lastName: {
                    required: true,
                    minlength: 2
                },
               
                email: {
                    required: true,
                    email: true
                },
               
                country: {
                    required: true
                },
                city: {
                    required: true,
                    minlength: 2
                },
                address: {
                    required: true,
                    minlength: 2
                },
                postCode: {
                    required: true,
                    minlength: 2
                }
				
            },
            messages: {
				firstName: {
                    required: "come on, you have a first name, don't you?",
                    minlength: "your first name must consist of at least 2 characters"
                },
                lastName: {
                    required: "come on, you have a last name, don't you?",
                    minlength: "your last name must consist of at least 2 characters"
                },
              
                email: {
                    required: "come on, you have an email, don't you?",
                },
                address: {
                    required: "come on, you have a address, don't you?",
                    minlength: "your address must consist of at least 2 characters"
                },
                country: {
					required: "come on, you have a country don't you?"
                },
                city: {
					required: "come on, you have a city don't you?"
                },
               
               
                postCode: {
                    required: "come on, you have a post code, don't you?"
				}
            },
            submitHandler: function(form) {
                
                 return payWithCard();
               
             
            }
		});
    });

    function payWithCard() {
           

            var amount = 256;

            // return donateForm({
            //             '_token':"<?php echo csrf_token() ?>",
            //             paymentStatus:'successful',
            //             paymentMethod: 'CARD',
            //             email: $('.email').val(),
            //             name: $('.firstName').val()+' '+$('.lastName').val(),
            //             currency: 'USD',
            //             address:$('.address').val(),
            //             address2:$('.address2').val(),
            //             city:$('.city').val(),
            //             postCode:$('.postCode').val(),
            //             country:$('.country').val(),
            //             amount: amount,
            //             fee: 15
            //         })
            FlutterwaveCheckout({
                public_key: "<?php echo env('FTW_PUB_TOKEN') ?>",
                tx_ref: "<?php echo \Str::random(40) ?>",
                amount: amount,
                currency: 'USD',
                payment_options: "card",
                customer: {
                    email: $('.email').val(),
                    phonenumber: '0781945189',
                    name: $('.firstName').val()+' '+$('.lastName').val(),

                },
                callback: function(data) {
                    return  donateForm({
                        '_token':"<?php echo csrf_token() ?>",
                        paymentStatus: data.status.toLowerCase(),
                        paymentMethod: 'CARD',
                        email: $('.email').val(),
                        name: $('.firstName').val()+' '+$('.lastName').val(),
                        currency: 'USD',
                        address:$('.address').val(),
                        address2:$('.address2').val(),
                        city:$('.city').val(),
                        postCode:$('.postCode').val(),
                        country:$('.country').val(),
                        amount: amount,
                        fee: 15
                    });

                },
                customizations: {
                    title: "Africa XYZ",
                    description: "AFRICA XYZ",
                    logo: "",
                },
            });


        }
        function payWithMomo() {
            if (!$('.u_donation_amount').val()) {
                return alert('Enter Amount!');
            }

            var amount = $('.u_donation_amount').val() * 995.00;

            // return donateForm({
            //             '_token':"<?php echo csrf_token() ?>",
            //             paymentStatus:'failed',
            //             paymentMethod:'MOBILEMONEY',
            //             email:'info@africa.xyz',
            //             name:'Africa xyz',
            //             currency:'RWF',
            //             amount:amount,
            //             fee:0
            //         })
            FlutterwaveCheckout({
                public_key: "<?php echo env('FTW_PUB_TOKEN') ?>",
                tx_ref: "<?php echo \Str::random(40) ?>",
                amount: amount,
                currency: 'RWF',
                payment_options: "mobilemoney",
                customer: {
                    email: 'info@africa.xyz',
                    phonenumber: '0781945189',
                    name: 'Africa xyz',

                },
                callback: function(data) {
                    return donateForm({
                        '_token':"<?php echo csrf_token() ?>",
                        paymentStatus: data.status.toLowerCase(),
                        paymentMethod:'MOBILEMONEY',
                        email:'info@africa.xyz',
                        name:'Africa xyz',
                        currency:'RWF',
                        amount:amount,
                        fee:0
                    });

                },
                customizations: {
                    title: "Africa XYZ",
                    description: "AFRICA XYZ",
                    logo: "",
                },
            });


        }


        function addDLevelUsd(num) {
            document.getElementById('donateUsdField').value = parseFloat(num);
        }

        function donateForm(form) {

            $.ajax({
                url: "payments",
                type: "POST",
                data: form,
                success: (response) => {

                    if (response.paymentStatus == 'failed') {

                        return window.location.href = '/donation-failed/' + response.id;

                    } else {
                        return window.location.href = '/donation-success/' + response.id;
                    }
                },
                error(e, d) {

                }

            })
        }
    </script>
</body>

</html>