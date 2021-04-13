<!DOCTYPE html>
<html lang="en"></html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  
  <link rel="stylesheet" href="{{ asset('css/a-viewbooks.css') }}">

  {{-- <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
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
                <h3>View Books</h3>
                <div class="search">
                  <form action="#"> 
                      <input type="text" placeholder=" Search Book Name" name="search"> 
                      <button> 
                          <i class="fa fa-search"
                              style="font-size: 18px;"> 
                          </i> 
                      </button> 
                      {{-- <form class="example" action=" " style="margin:auto;max-width:300px">
                        <input type="text" placeholder="Search Book Name" name="search2">
                        <button type="submit"><i class="fa fa-search"></i></button>
                      </form> --}}
                  </form> 
             </div> 

                <table>
                  <tr>
                    <th>Username</th>
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
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Germany</td>
                    <td>Germany</td>
                    <td>Germany</td>
                    <td>Germany</td>
                    <td>Germany</td>
                    <td>Germany</td>
                    <td>Germany</td>
                    <td>Germany</td>
                    <td>Germany</td>
                  </tr>
                 
              
                </table>
    </div>
  </form>

<div class="footer">
  <h2>Second Hand Book Reselling</h2>
</div>

</body>
</html>
