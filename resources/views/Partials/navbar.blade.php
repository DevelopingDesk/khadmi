                               
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: white;
    color:#5ac9ca;
    padding: 16px;
    padding-right: 20px;
    font-size: 16px;
    border: none;
     text-transform: uppercase;
}

.dropdown {
    position: relative;
    display: inline-block;
    
   
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 68px 116px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: white}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: white;
}
</style>
</head>
<body>


@foreach($cat as $ct)
<div class="dropdown">
  <button class="dropbtn"><span>{{$ct->name}}</span><span class="fa fa-angle-down"></span></button>
  <div class="dropdown-content">
  @foreach($sub as $sb)
  @if($sb->category_id==$ct->id)
    <a href="{{route('subcategory.product',$sb->id)}}">{{$sb->name}}</a>
    @endif
  @endforeach
   
  </div>

</div>
@endforeach



</body>
</html>