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
      
      <div style="position: relative; top:60px;right:-150px">
          <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div>
                 <label>Titre</label> 
                 <input type="text" name="title" placholder="donner un titre" required>
              </div>
              <div>
                <label>Prix</label> 
                <input style="color:blue"type="number" name="price" placholder="saisir le prix " required>
             </div>
             <div>
                <label>Image</label> 
                <input type="file" name="image"  required>
             </div>
             <div>
                <label>Description</label> 
                <input style="color:blue" type="text" name="description" placholder="donnez une description" required>
             </div><div>
                
                <input style="color:black" type="submit" value="Enregistrer">
             </div>

          </form>
      </div>
      <table bgcolor="black">
         <tr>
            <th style="padding:30px">Nom du plat</th>
            <th style="padding:30px">Prix</th>
            <th style="padding:30px">Description</th>
            <th style="padding:30px">Image</th>
            <th style="padding:30px">Action</th>
         </tr>
         @foreach($data as $data)
         <tr align="center">
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img  height="100" width="100"src="/foodimage/{{$data->image}}"</td>
            <td><a href="{{url('/deletemenu',$data->id)}}">Supprimer</a></td>
            <td><a href="{{url('/updateview',$data->id)}}">Modifier</a></td>
            
         </tr>
         @endforeach
      </table>
    </div>
  
@include("admin.adminscript")
  </body>
</html>