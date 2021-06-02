<form action="{{url('register')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Name">
            <span style="color:red">@error('name'){{$message}}@enderror</span>
          </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
        <span style="color:red">@error('email'){{$message}}@enderror</span>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
        <span style="color:red">@error('password'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
      <span style="color:red">@error('address'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      <span style="color:red">@error('address2'){{$message}}@enderror</span>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" name="city" class="form-control" id="inputCity">
        <span style="color:red">@error('city'){{$message}}@enderror</span>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" name="state" class="form-control" id="inputAddress2" placeholder="State..">
        <span style="color:red">@error('state'){{$message}}@enderror</span>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" name="zip" class="form-control" id="inputZip">
        <span style="color:red">@error('zip'){{$message}}@enderror</span>
      </div>
    </div>
    </div>
    <button  class="btn btn-primary">Sign Up</button>
    <a href="{{URL::to('login')}}" class="btn btn-primary">Login</button>
  </form>
