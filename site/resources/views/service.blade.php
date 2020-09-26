@extends('layout.app')
@section('title','Service')


@section('content')

<div class="container margin-top">
  <div class="row">

  <div class="col-md-3 p-2">
      <div class="card" style="width:100% ">
        <img class="card-img-top" src="{{asset('images/love.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title</p>
            <button class="btn btn-primary">Learn More</button>
         </div>
        </div>
      </div>


      <div class="col-md-3 p-2">
      <div class="card" style="width:100% ">
        <img class="card-img-top" src="{{asset('images/love.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title</p>
            <button class="btn btn-primary">Learn More</button>
         </div>
        </div>
      </div>


      <div class="col-md-3 p-2">
      <div class="card" style="width:100% ">
        <img class="card-img-top" src="{{asset('images/love.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title</p>
            <button class="btn btn-primary">Learn More</button>
         </div>
        </div>
      </div>


      <div class="col-md-3 p-2">
      <div class="card" style="width:100% ">
        <img class="card-img-top" src="{{asset('images/love.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title</p>
            <button class="btn btn-primary">Learn More</button>
         </div>
        </div>
      </div>

  </div>
</div>


<div class="container mt-5 mb-5">
<div class="row">
  <div class="col-md-6">
  
 <h4 class="text-center p-2">Contact Now</h4>
 <hr>


  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Your Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Your Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Your Message</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <button type="submit" class="btn btn-block btn-primary">Send Now</button>
</form>


  </div>

  <div class="col-md-6">
      <h4 class="text-center p-2">Address</h4>
      <hr>
      <span class="p-2"></span>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.261462847471!2d90.3559111145247!3d23.773701984577954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a2db4ab937%3A0x859d0196ae53ac2!2s5%20Adabor%20Main%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1601153632363!5m2!1sen!2sbd" width="550" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

</div>
</div>

@endsection