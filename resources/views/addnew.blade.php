<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="background">
      <div class="container">
        <div class="navigationbar">
          <div class="logo-wrapper"><div class="logo"></div></div>
          <div class="flex-row">
            <div class="homelogo"></div>
            <div>Home</div>
          </div>
          <div class="flex-row">
            <div class="RoomBookinglogo"></div>
            <div>Room Booking</div>
          </div>
          <div class="flex-row">
            <div class="RoomManagementlogo"></div>
            <div>Room Management</div>
          </div>
          <div class="flex-row">
            <div class="Dininglogo"></div>
            <div>Dining</div>
          </div>
          <div class="flex-row border-bottom">
            <div class="Inventorylogo"></div>
            <div>Inventory</div>
          </div>
        </div>
        <div class="dashboardback">
          
            <div class="card">
              <form action="create" method="POST">
                <h2>Add new booking</h2>
                <br />
                @csrf
                <div class="box">
                  <div class="form-group">
                    <div class="label" for="exampleInputName">
                      Customer Name
                    </div>
                    <input
                      type="name"
                      name="cus_name"
                      class="form-control"
                      id="exampleInputName"
                      placeholder=""
                      required
                    />
                  </div>
                  <br /><br/>

                  <div class="form-group">
                    <div class="label" for="exampleInputContactNo">
                      Contact No
                    </div>
                    <input
                      type="tel"
                      pattern="[0-9]{10}"
                      name="contact_No"
                      class="form-control"
                      id="exampleInputContactNo"
                      placeholder=""
                      required
                    />
                  </div>
                  <br /><br/>

                  <div class="form-group">
                    <div class="label" for="exampleInputEmail">Email</div>
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      id="exampleInputEmail"
                      placeholder=""
                      required
                    />
                  </div>
                  <br /><br />

                  <div class="form-group">
                    <div class="label" for="exampleInputAddress">Address</div>
                    <input
                      type="text"
                      name="address"
                      class="form-control"
                      id="exampleInputAddress"
                      placeholder=""
                      required
                    />
                  </div>
                  <br /><br />

                  <div class="form-group">
                    <div class="label" for="exampleInputBookID">Booking ID</div>
                    <input
                      type="text"
                      name="book_ID"
                      class="form-control"
                      id="exampleInputBookID"
                      placeholder=""
                      required
                    />
                  </div>
                  <br /><br />

                  <div class="form-group">
                    <div class="label" for="exampleInputRoomID">Room ID</div>
                    <input
                      type="text"
                      name="room_ID"
                      class="form-control"
                      id="exampleInputRoomID"
                      placeholder=""
                      required
                    />
                  </div>
                  <br /><br />

                  <div class="form-group">
                    <div class="label" for="exampleInputCIdate">
                      Checked In Date
                    </div>
                    <input
                      type="date"
                      name="checked_in"
                      class="form-control"
                      id="exampleInputCDdate"
                      placeholder=""
                      required
                    />
                  </div>
                  <br /><br />
                  <div class="form-group">
                    <div class="label" for="exampleInputCOdate">
                      Check out Date
                    </div>
                    <input
                      type="date"
                      name="checked_out"
                      class="form-control"
                      id="exampleInputCOdate"
                      placeholder=""
                      required
                    />
                  </div>
                  <br /><br />
                </div>
                <div class="btn1">
                  <button type="submit" class="btn-primary">Submit</button>
                  <button type="cancel" class="btn-danger">Cancel</button>
        
                </div>
              </form>
            </div>
          
        </div>
      </div>
    </div>
  </body>
</html>
