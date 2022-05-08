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
                            <h2 class="menu-title mb-4">Add New Menu</h2>
                            <form method="post" action="{{ route('dinein.store') }}">
                            @csrf <!-- {{ csrf_field() }} -->            
                            <div class="form-group row">
                                <label for="country" class="col-6">Country :</label>
                                <input type="text" class="form-control col-6" style="padding-right: 100px" id="country" placeholder="" name="country">
                            </div>
                            <div class="form-group row">
                                <label for="category" class="col-6">Category :</label>
                                <input type="text" class="form-control col-6" id="category" placeholder="" name="category">
                            </div>
                            <div class="form-group row">
                                <label for="menu" class="col-6">Menu :</label>
                                <input type="text" class="form-control col-6" id="meal_code" placeholder="" name="menu">
                            </div>
                            <div class="form-group row">
                                <label for="meal_code" class="col-6">Meal Code :</label>
                                <input type="text" class="form-control col-6" id="meal_code" placeholder="" name="meal_code">
                            </div>
                            <div class="form-group row">
                                <label for="small_portion_price" class="col-6">Small Portion Price :</label>
                                <input type="text" class="form-control col-6" id="small_portion_price" placeholder="" name="small_portion_price">
                            </div>
                            <div class="form-group row" >
                                <label for="medium_portion_price" class="col-6">Medium Portion Price :</label>
                                <input type="text" class="form-control col-6" id="medium_portion_price" placeholder="" name="medium_portion_price">
                            </div>
                            <div class="form-group row">
                                <label for="large_portion_price" class="col-6">Large Portion Price :</label>
                                <input type="text" class="form-control col-6" id="large_portion_price" placeholder="" name="large_portion_price">
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