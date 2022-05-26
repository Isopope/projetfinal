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
      
    </div>
  
@include("admin.adminscript")
  </body>
</html>