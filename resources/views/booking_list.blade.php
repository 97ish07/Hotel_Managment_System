<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Management - Menus</title>
        <link href="{{ asset('../css/booking.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <div class="row">
          <div class="col-6">
            @include('dashboard')
          </div>
          <div class="col-6" style="margin-left: -300px; margin-top: 100px">
            <div class="container-fluid">
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control w-75" placeholder="Search">
                  </div>
        
                  <table class="table table-light">
                    <thead class="p-3">
                      <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Booking ID</th>
                        <th scope="col">Room ID</th>
                        <th scope="col">CheckIn Date</th>
                        <th scope="col">CheckOut Date</th>
                        <th scope="col">Operations</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- @foreach($dinein as $dinein) --}}
                      <tr>
                          <td>123</td>
                          <td>123</td>
                          <td>123</td>
                          <td>123</td>
                          <td>123</td>
                          <td>123</td>
                          <td>123</td>
                          <td>123</td>
                          <td>123</td>
                          <td class="text-center" style="padding-right:60px">
                              <div class="row">
                                  <div class="col-6">
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                  </div>
                                  <div class="col-6">
                                    <form action="" method="post" style="display: inline-block">
                                        {{-- @csrf
                                        @method('DELETE') --}}
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                      </form>
                                  </div>
                              </div>
   
                          </td>
                      </tr>
                      {{-- @endforeach --}}
                  
                    </tbody>
                  </table>
                  <hr class = "line2">
              </div>
          </div>
      </div>
    </body>

</html>