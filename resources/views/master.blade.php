<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="utf-8">
    <title>@yield('baslik')</title>
    @yield('CSS')

      <a class="icerik" href="{{route('anasayfa')}}">BLOGDENEME</a> <br
      >
    <style>
    ul {

      list-style:none;
    }
    .link {
      width:100px;
      height:60px;
      background:white;
      float:left;
    }
        .link:hover 
        {
      background:red;
    }

    .link:active { background: #FF0080 }

    .icerik
    {
      display:block;
    }
    </style>
  </head>
  <body>
  <ul>
  <li>
  <a class="link" href="{{ route('anasayfa') }}"> Anasayfa </a>
  </li>
  <li>
    <a class="link" href="{{ route('hakkimizda')}}"> Hakkımızda </a>
    </li>
    <li>
  <a class="link" href="-"> Pricing </a>
  </li>
  <li>
  <a class="link" href="-"> Disabled </a>
  </li> 
  </ul>
  <hr>
  <br>
 
<br>

  menü
    @yield('icerik')

 <br>
<br>
<br><br><br><br><br><br>
     
  </body>
</html>
