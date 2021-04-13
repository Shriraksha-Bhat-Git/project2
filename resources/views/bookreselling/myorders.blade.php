<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  
  <link rel="stylesheet" href="{{ asset('css/myorders.css') }}">
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

  <form action="/action_page.php">

    <div class="container">
        <h3>My Orders</h3>
        <div class="search"> 
            <form action="#"> 
                <input type="text" placeholder=" Search Book Name" name="search"> 
                <button> 
                    <i class="fa fa-search"
                        style="font-size: 15px;"> 
                    </i> 
                </button> 
            </form> 
        </div> 
        <br>

            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Book Name</th>
                    <th>Date</th>
                    <th>Shipping Address</th>
                    <th>Total Amount</th>
                    <th>Mode of Payment</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Adventure Cartoon</td>
                    <td>2020-02-11</td>
                    <td>Mulki</td>
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