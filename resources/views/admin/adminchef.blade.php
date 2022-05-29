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

    <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
        <div>
            <label>Nom</label>
            <input style="color:blue" type="text" name="name" placeholder="votre nom" required>
            @csrf
        </div>
        <div>
            <label>Specialite</label>
            <input style="color:blue" type="text" name="speciality" placeholder="Entrez la specialite" required>
        </div>
        <div>
            <input style="color:blue" type="file" name="image" required>
        </div>
        <div>
            <input style="color:blue" type="submit" value="Enregistrer">
        </div>
    </form>

    <table style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center; width: 600px;">
        <tr>
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Nom</th>
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Specialite</th>
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: rgb(88, 14, 36);color: white;">Image</th>
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Action</th>
            <th style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;background-color: blue;color: white;">Action2</th>
        </tr>
        @foreach($data as $data)
        <tr>
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;">{{$data->name}}</td>
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;">{{$data->speciality}}</td>
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;"><img height="100" width="100"src="/chefimage/{{$data->image}}"></td>
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;"><a href="{{url('/updatechef',$data->id)}}">Mettre a jour</a></td>
            <td style="padding: 20px;border: 1px solid lightgray;border-collapse: collapse;text-align: center;"><a href="{{url('/deletechef',$data->id)}}">Supprimer</a></td>

        </tr>

        @endforeach
    </table>
      
    </div>
  
@include("admin.adminscript")
  </body>
</html>