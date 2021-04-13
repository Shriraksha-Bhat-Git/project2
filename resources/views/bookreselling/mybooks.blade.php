<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  
  <link rel="stylesheet" href="{{ asset('css/mybooks.css') }}">
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
        <h3>My Books</h3>
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
        <br>

            <table>
                <tr>
                    <th>Image</th>
                    <th>Book Name</th>
                    <th>Description</th>
                    <th>Author Name</th>
                    <th>Category</th>
                    <th>Language</th>
                    <th>Purchase Date</th>
                    <th>Book Condition</th>
                    <th>Price</th>
                    <th>Selling Date</th>
                    <th>Book Status</th>

                </tr>
                <tr>
                  <td><img src="/img/ACA-1.jpg"  width="100" height="150"></td>
                  <td>Getting Coding Jobs</td>
                  <td>Learn coding</td>
                  <td>Nikhil Abraham</td>
                  <td>Education</td>
                  <td>English</td>
                  <td>20-03-2018</td>
                  <td>Good</td>
                  <td>200</td>
                  <td>30-12-2019</td>
                  <td>Available</td>
              </tr>
               
              <tr>
                <td><img src="/img/BIO-1.jpg"  width="100" height="150"></td>
                <td>Wings of Fire</td>
                <td>An Autobiography</td>
                <td>APJ Abdul Kalam with Arun Tiwari</td>
                <td>History</td>
                <td>English</td>
                <td>20-03-2019</td>
                <td>New</td>
                <td>250</td>
                <td>27-02-2020</td>
                <td>Available</td>
            </tr>

            <tr>
              <td><img src="/img/lit-24.jpg"  width="100" height="150"></td>
              <td>Your Dreams are mine now</td>
              <td>Love story</td>
              <td>Ravinder Singh</td>
              <td>Drama</td>
              <td>English</td>
              <td>15-07-2020</td>
              <td>Fair</td>
              <td>350</td>
              <td>16-01-2021</td>
              <td>Available</td>
          </tr>
                 
              
            </table>
    </div>
  </form>

        <div class="footer">
            <h2>Second Hand Book Reselling</h2>
        </div>

</body>
</html>