<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color
        {
            color: black;
        }
        .center
        {
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 30px;
          border: 3px solid white;
        }
        </style>
  </head>
  <body>
  <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
  
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
       <div class="main-panel">
          <div class="content-wrapper">
           
               @if(session()->has('message'))
                    
                <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>

                {{session()->get('message')}}

                </div>

               @endif

            <div class ="div_center">
              <h2 class="h2_font">Add Catagory</h2>
              <form action="{{url('/add_catagory')}}" method="POST">

                 @csrf

                <input class="input_color" type="text" name="catagory" placeholder="Write catagory name">
                <input type="submit" class="btn btn-primary" name="submit" value="Add category">
              </form>
            </div>

            <table class="center">
              <tr>
                <td>Catagory Name</td>
                <td>Action</td>
              </tr>
                  
                  @foreach($data as $data)
              <tr>
                <td>{{$data->catagory_name}}</td>
                <td>
                  <a onclick="return confirm('Are Sure To Delete This')" class="btn btn-danger" href="{{url('delete_catagory',$data->id)}}">Delete</a>
                </td>
              </tr>

              @endforeach
            </table>

          </div>
       </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>