  @extends('master')

   @section('content')
     <div class="container custom-style">
          <div class="row">
              <div class="col-md-4 offset-md-4">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a class="btn btn-primary" href="{{URL::to('register')}}">Register</a>
                  </form>
              </div>
          </div>
     </div>
   @endsection

