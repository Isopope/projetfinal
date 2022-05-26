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

    <table bgcolor="black">
        <tr>
            <th style="padding:30px">Nom</th>
            <th style="padding:30px">Specialite</th>
            <th style="padding:30px">Image</th>
            <th style="padding:30px">Action</th>
            <th style="padding:30px">Action2</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img height="100" width="100"src="/chefimage/{{$data->image}}"></td>
            <td><a href="{{url('/updatechef',$data->id)}}">Mettre a jour</a></td>
            <td><a href="{{url('/deletechef',$data->id)}}">Supprimer</a></td>

        </tr>

        @endforeach
    </table>
      
    </div>
  
@include("admin.adminscript")
  </body>
</html>