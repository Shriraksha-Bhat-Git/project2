<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <link rel="stylesheet" href="{{ asset('css/u-viewbooks.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>
    <div class="header">
        <h6>Second Hand Book Reselling</h6>
    
        <a href="{{ url('/mycart') }}"><button type="button" class="fa fa-shopping-cart">
          <span class="glyphicon glyphicon-log-out"></span> Cart
        </button></a>
      
        <a href="{{ url('/home') }}"><button type="button" class="btn fa-sign-out">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button></a>
      </div>
       
      <div class="navbar">
        <a href="{{ url('/sellbooks') }}">Sell Books</a>
        <a href="{{ url('/mybooks') }}">My Books</a>
        <a href="{{ url('/u-viewbooks') }}">View Books</a>
        <a href="{{ url('/myorders') }}">My Orders</a>
      </div>

      
      <form>
    <div class="container">
                    <h3>View Books</h3>
                    <div class="search"> 
                      <form action="#"> 
                          <input type="text" placeholder=" Search Book Name" name="search"> 
                          <button> 
                              <i class="fa fa-search"> </i> 
                          </button> 
                      </form> 
                    </div> 
                    
                    <div class="row">
                      <div class="col-md-4">
                          <div class="card mt-3">
                              <div class="card"> <img src="/img/BIO-2.jpg" class="rounded" width="160">
                                  <h5>APJ</h5>
                                  
                                  <div class="price"> <span>Rs.240</span></div>
                              </div>
                              <a href="{{ url('/mycart') }}"><p><button>Add to cart</button></p></a>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card mt-3">
                              <div class="card"> <img src="/img/CHILD-4.jpg" class="rounded" width="160">
                                  <h5>CHILD</h5>
                                  
                                  <div class="price"> <span>RS.260</span></div>
                              </div>
                              <a href="{{ url('/mycart') }}"> <p><button>Add to cart</button></p></a>
                          </div>
                      </div>
                    </div>
                    {{-- <div class="card">
                        <img src="/img/BIO-1.jpg" alt="APJ Bio" >
                        <h1>Book Name</h1>
                        <p class="price">Rs.220</p>
                        <p><button>Add to Cart</button></p>
                    </div> --}}
                    {{-- <div class="card">
                      <img src="/img/CHILD-5.jpg" alt="children" >
                      <h1>Book Name</h1>
                      <p class="price">Rs.250</p>
                      <p><button>Add to Cart</button></p>
                  </div>
                   --}}

        </div>
      </form>
{{-- 
    <div class="footer">
        <h2>Second Hand Book Reselling</h2>
    </div>  --}}

</body>
</html>
