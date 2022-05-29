<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
   
    </x-app-layout>
    
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
      @include("admin.admincss")
      </head>
      <body>
        <div class="container-scroller">
        
          @include("admin.navbar")

          <div style="position:relative;top:60px;right:-150px">
            <table style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center; width: 600px;">
              <tr>
                <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Nom</th>
                <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Email</th>
                <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Action</th>
              </tr>
              @foreach ($data as $data )
                <tr align="center">
                  <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;" >{{$data->name}}</th>
                  <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">{{$data->email}}</th>
                  @if ($data->usertype=="0")
                     <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;"><a href="{{url('/deleteuser',$data->id)}}">Supprimer</a></th>
                     @else
                     <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;"><a>Non autorise</a></th>
                  @endif
                  
                </tr>
              @endforeach
              
              
            </table>
          </div>
      
    @include("admin.adminscript")
      </body>
    </html>
</body>
</html>