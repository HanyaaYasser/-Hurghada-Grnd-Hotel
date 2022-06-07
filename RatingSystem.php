<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 
.container
{
    width: 400px;
    background-color: darkgrey;
    padding: 20px 30px;
    border: 1px solid;
    display: flex;
    justify-content: center;
   align-items: center;
   margin:auto;
  
}
.container .StarWidget input
{
    display: none;
}
.StarWidget label
{
    font-size:40px;
    color:black;
    padding:10px;
    float:right;
} input:not(:checked) ~ label:hover, 
input:not(:checked) ~ label:hover~label
{
    color:yellow;
}
input:checked ~label
{
    color:yellow;
}
#rate1:checked ~ form header:before
{
    content:"Just bad";
}
#rate2:checked ~ form header:before
{
    content:"Below average";
}
#rate3:checked ~ form header:before
{
    content:"Average";
}
#rate4:checked ~ form header:before
{
    content:"Great";
}
#rate5:checked ~ form header:before
{
    content:"Amazing";
}
input#rate5:checked ~label
{
    color:#fe7;
    text-shadow: 0 0 20px #952;
}
form header
{
    width:100%;
    font-size:25px;
    color:yellow;
    text-align:center;   
    display: flex;
    justify-content: center;
   align-items: center;
}
form textarea
{
    height:100px;
    width:100%;
    overflow:hidden;
    background:white;
    padding:10px;
    font-size:17px;
    resize:none;
}

</style>
</head>

<body>
    <div class="container">
      <div class="StarWidget">
      <form action="RatingSystemconnection.php" method="post">   
      <input type="radio" name="rate" id="rate5" value="5-star">
            <label for="rate5" class="fa fa-star"></label>

            <input type="radio" name="rate" id="rate4"value="4-star">
            <label for="rate4" class="fa fa-star"></label>

            <input type="radio" name="rate" id="rate3"value="3-star">
            <label for="rate3" class="fa fa-star"></label>

            <input type="radio" name="rate" id="rate2"value="2-star">
            <label for="rate2" class="fa fa-star"></label>

            <input type="radio" name="rate" id="rate1"value="1-star">
            <label for="rate1" class="fa fa-star"></label>
            
                <header></header>
                <textarea cols="30" placeholder="Please enter Details........" name="comment"></textarea>
                <button type="submit">Rate</button>
            </form>
      </div>
    </div>


</body>

</html>