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
          <div class="col-6" style="margin-left: -375px; margin-top: 100px">
            <div class="container-fluid">
              <form action="{{ route('dinein.index') }}" method="GET" role="search">
                <div class="form-group has-search">
                  <span class="input-group-btn mr-5 mt-1">
                    <button class="btn btn-info" type="submit" title="Search projects">
                        <span class="fas fa-search"></span>
                    </button>
                </span>
                    <input type="text" class="form-control w-75" placeholder="Search"  id="term"  name="term">
                    <a href="" class=" mt-1">
                      <span class="input-group-btn">
                          <button class="btn btn-danger" type="button" title="Refresh page">
                              <span class="fas fa-sync-alt"></span>
                          </button>
                      </span>
                  </a>
                </div>
              </form>
        
                  <table class="table table-light">
                    <thead class="p-3">
                      <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Category</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Meal Code</th>
                        <th scope="col">Small Portion Price</th>
                        <th scope="col">Medium Portion Price</th>
                        <th scope="col">Large Portion Price</th>
                        <th scope="col">Operations</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($dinein as $dinein)
                      <tr>
                          <td>{{$dinein->country}}</td>
                          <td>{{$dinein->category}}</td>
                          <td>{{$dinein->meal_code}}</td>
                          <td>{{$dinein->menu}}</td>
                          <td>{{$dinein->small_portion_price}}</td>
                          <td>{{$dinein->medium_portion_price}}</td>
                          <td>{{$dinein->large_portion_price}}</td>
                          <td class="text-center">
                              <a href="{{ route('dinein.edit', $dinein->id)}}" class="btn btn-primary btn-sm">Edit</a>
                              <form action="{{route('dinein.destroy', $dinein->id)}}" method="post" style="display: inline-block">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  
                    </tbody>
                  </table>

                  <hr class = "line2">
                  <div class="row">
                      <div class="text-center col-6">
                        <button class="btn btn-block btn-lg btn-outline-dark" type="button" onclick="window.location='/addDinein'">Add Details</button>
                      </div>
                      <div class="text-center col-6">
                        <button class="btn btn-block btn-lg btn-outline-dark" type="button">Generate Reports</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </body>
</html>