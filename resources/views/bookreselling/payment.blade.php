<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /> -->
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">

</head>
<body>
    <div class="header">
        <h6>Second Hand Book Reselling</h6>
    </div>

    <div class="navbar">
        <a >Make Payment</a>
       
      </div>
 
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
          <br><br>
          
          <h4>Payment Options:</h4>
          <a href="{{ url('/cod') }}"><input type="radio" name="paymethod" value="COD" checked="checked" > Cash On Delivery</a>

    
          <a href="{{ url('/creditcard') }}"><input type="radio" name="paymethod" value="Credit card"> Credit card <br /><br /></a>
{{--       
         <div class="row">
          <div class="col-50">
          <br><br><br>
            
            <label for="adr"><i class="fa fa-address-card-o"></i> Shipping Address</label>
            <input type="text" id="adr" name="address" placeholder="Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <br><br><br>
           
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Enter Name on Card">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
                <label for="amount">Total Amount</label>
                <input type="text" id="amount" name="amount" placeholder="Rs.">
                 <input type="submit" value="Make Payment" class="btn">
              </div>
             
            </div> --}}
          {{-- </div>  --}}
          
        </div>
        
      </form>
    </div>
  </div>
 
  <div class="footer">
    <h2>Second Hand Book Reselling</h2>
</div>
</body>
</html>
