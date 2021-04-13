<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('css/sellbooks.css') }}">

</head>
<body>

<div class="header">
  <h1>Second Hand Book Reselling</h1>
  
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


<div class="container">
  @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <form action="{{ url('sellbooks') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Sell Books</h3>
    <label for="name">Book Name</label>

    <input type="text" name="bookname" placeholder="Enter Book Name">

    <label for="category">Category</label>

     <select name="category" >

       <option>--Select Category--</option>

       <option >Science</option>
       <option >Drama</option>
       <option >Action and Adventure</option>
        <option >Romance</option>
        <option >Mystery</option>
        <option >Health</option>
        <option >Children</option>
        <option >Dictionaries</option>
        <option >Cookbooks</option>
        <option >History</option>
        <option >Math</option>
        <option >Comic</option>
        <option >Travel</option>
        <option >Horror</option>

     </select>


     <label for="date">Purchase Date</label>
     <input type="date" name="Purchase_date" placeholder="Select Purchase Date">

     <label for="price">Price</label>
     <input type="amount" name="price" placeholder="Enter Price">
              
     <label for="updateimage">Update Image</label>
     <input type="file"  name="update_image">

     <label for="authorname">Author Name</label>
     <input type="text" name="authorname" placeholder="Enter Author Name">
     
     <label for="booklanguage">Book Language</label>
     <select   name="booklanguage"> 
       <option >--Select Book Language--</option>
       <option >English</option>
       <option >Hindi</option>
       <option >Kannada</option>
       <option >Tamil</option>
       <option >Telugu</option>
       <option >Marathi</option>
     </select>

     <label for="bookcondition">Book Condition</label>
     <select  name="bookcondition"> 
       <option >--Select Book Condition--</option>
       <option >New</option>
       <option >Good</option>
       <option>Fair</option>
       <option >Poor</option>
     </select>

     <label for="description">Description</label>
     <textarea id="description" name="description" placeholder="Enter Description" style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>

</div>
        
          
            
      


<div class="footer">
  <h2>Second Hand Book Reselling</h2>
</div>

</body>
</html>
