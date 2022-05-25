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
    </div>
  
@include("admin.adminscript")
  </body>
</html>