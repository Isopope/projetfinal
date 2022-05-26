<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
  @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
      @include("admin.navbar")
      <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
          @csrf
        <div>
              <label>Nom</label>
              <input style="bgcolor:blue"type="text" name="name" value="{{$data->name}}">
          </div>

          <div>
            <label>Specialite</label>
            <input style="bgcolor:blue"type="text" name="specialite" value="{{$data->speciality}}">
        </div>
        <div>
            <label>Ancienne Image</label>
            <img height="200" width="200"src="/chefimage/{{$data->image}}" alt="chef">
        </div>
        <div>
            <label>Nouvelle Image</label>
            <input type="file" name="image" name="image">
        </div>
        <div>
            <input type="submit" value="Enregistrer">
        </div>
      </form>
    </div>
  
@include("admin.adminscript")
  </body>
</html>