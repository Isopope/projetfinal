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

      <div style="position:relative;top:70px;right:-150px">
        <table style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center; width: 600px;">

          <tr>
        
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;"
        >Nom</th>
        
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Email</th>
        
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Telephone</th>
        
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Date</th>
        
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;"
        >Heure</th>
        <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;"
        >Message</th>
        
          </tr>
        @foreach($data as $data)
          <tr>
        
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;">{{$data->name}}</td>
        
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;">{{$data->email}}</td>
        
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;">{{$data->phone}}</td>
        
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;">{{$data->date}}</td>
        
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;">{{$data->time}}</td>
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;">{{$data->message}}</td>
        
          </tr>
          @endforeach
        
        </table>




      </div>
    </div>
  
@include("admin.adminscript")
  </body>
</html>