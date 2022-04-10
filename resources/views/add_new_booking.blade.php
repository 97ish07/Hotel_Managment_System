<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Management - Add Menu</title>
        <link href="{{ asset('../css/booking.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- <link href = "/css/invCreate.css" rel="stylesheet"> -->
        <script src = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-6">
                @include('dashboard')
            </div>
            <div class="col-6" style="margin-top: 90px; margin-left: -300px">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="menuBody">
                            <h2 class="menu-title mb-4">Add New Booking</h2>
                            <form method="post" action="{{ route('booking.store') }}">
                            @csrf <!-- {{ csrf_field() }} -->            
                            <div class="form-group row">
                                <label for="cusId" class="col-6">Customer ID :</label>
                                <input type="text" class="form-control col-6" style="padding-right: 100px" id="cusId" placeholder="" name="customer_id">
                            </div>
                            <div class="form-group row">
                                <label for="cusName" class="col-6">Customer Name :</label>
                                <input type="text" class="form-control col-6" id="cusName" placeholder="" name="name">
                            </div>
                            <div class="form-group row">
                                <label for="cusContact" class="col-6">Contact No :</label>
                                <input type="text" class="form-control col-6" id="cusContact" placeholder="" name="contact_no">
                            </div>
                            <div class="form-group row">
                                <label for="cusEmail" class="col-6">Email :</label>
                                <input type="text" class="form-control col-6" id="cusEmail" placeholder="" name="email">
                            </div>
                            <div class="form-group row">
                                <label for="cusAddr" class="col-6">Address :</label>
                                <input type="text" class="form-control col-6" id="cusAddr" placeholder="" name="address">
                            </div>
                            <div class="form-group row" >
                                <label for="bookingId" class="col-6">Booking ID :</label>
                                <input type="text" class="form-control col-6" id="bookingId" placeholder="" name="booking_id">
                            </div>
                            <div class="form-group row">
                                <label for="roomId" class="col-6">Room Id :</label>
                                <input type="text" class="form-control col-6" id="roomId" placeholder="" name="room_id">
                            </div>
                            <div class="form-group row">
                                <label for="checkIn" class="col-6">Check In :</label>
                                <input type="text" class="form-control col-6" id="checkIn" placeholder="" name="check_in_date">
                            </div>
                            <div class="form-group row">
                                <label for="checkOut" class="col-6">Check Out :</label>
                                <input type="text" class="form-control col-6" id="checkOut" placeholder="" name="check_out_date">
                            </div>
                            <div class="row">
                                <button type="submit" class="btn  btn-lg btn-block submit-btn col-6">Submit</button>
                                <div> </div>
                                <button type="button" class="btn  btn-lg btn-block col-6">Cancel</button>
                            </div>
                            
                            </form>
                        </div>
                    </div>
                    <hr class = "line2">
                </div>
            </div>
        </div>
    </body>

</html>