<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <link rel="stylesheet" href="{{ asset('css/mycart.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>
    <div class="header">
        <h6>Second Hand Book Reselling</h6>
    
        
      </div>

      <div class="navbar">
        <a href="{{ url('/sellbooks') }}">Sell Books</a>
        <a href="{{ url('/mybooks') }}">My Books</a>
        <a href="{{ url('/u-viewbooks') }}">View Books</a>
        <a href="{{ url('/myorders') }}">My Orders</a>
      </div>

      <form action="{{ url('/payment') }}">

        <div class="container">
                    <h3>My Cart</h3>
                    
                    <table>
                        <tr>
                            <th>Item   </th>
                            <th>Details  </th>
                            <th>Cost  </th>
                            <th>Action  </th>
        
                        </tr>
                        <tr>
                            <td>image   </td>
                            <td>
                                Author Name    : Ram 
                                Category       : Comics <br>
                                Purchase Date  : 2020-11-02 <br>
                                Language       : English <br>
                                Book condition : Good <br>
                                Description    : Testing Books <br> 
                            </td>
                            <td>Rs.240  </td>
                            <td>Delivered  </td>
                            
                        </tr>
                         
                        
                    </table>


                    
                    
                        <h4>
                            Total Price: Rs.240
                        </h4>

                        <button type="submit" class="registerbtn">Buy</button>

        </div>
    </form>

    <div class="footer">
        <h2>Second Hand Book Reselling</h2>
    </div> 

</body>
</html>
