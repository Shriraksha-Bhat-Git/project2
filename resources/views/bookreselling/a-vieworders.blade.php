<!DOCTYPE html>
<html lang="en"></html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/a-vieworders.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  
</head>
<body>

  <div class="header">
    <h6>Second Hand Book Reselling</h6>


  
    <a href="{{ url('/home') }}"><button type="button" class="btn fa-sign-out">
      <span class="glyphicon glyphicon-log-out"></span> Log out
    </button></a>
  </div>
   
  <div class="navbar">
    <a href="{{ url('/a-viewbooks') }}">View Books</a>
    <a href="{{ url('/a-vieworders') }}">View Orders</a>
    <a href="{{ url('/a-viewusers') }}">View Users</a>
   
  </div>

  <form action="/action_page.php">

    <div class="container">
                <h3>View Orders</h3>
                <div class="search"> 
                  <form action="#"> 
                      <input type="text" placeholder=" Search Book Name" name="search"> 
                      <button> 
                          <i class="fa fa-search"
                              style="font-size: 18px;"> 
                          </i> 
                      </button> 
                  </form> 
              </div> 

                <table>
                  <tr>
                    <th>Username</th>
                    <th>Order ID</th>
                    <th>Book Name</th>
                    <th>Date</th>
                    <th>Shipping Address</th>
                    <th>Total Amount</th>
                    <th>Moode of Payment</th>

                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>1</td>
                    <td>Adventure Cartoon</td>
                    <td>2020-02-01</td>
                    <td>Mangalore</td>
                    <td>240</td>
                    <td>Cash on Delivery</td>
                  </tr>
                 
              
                </table>
    </div>
  </form>

<div class="footer">
  <h2>Second Hand Book Reselling</h2>
</div>

</body>
</html>
