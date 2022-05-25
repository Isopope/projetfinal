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
@csrf
      <div style="position: relative; top:60px;right:-150px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
          @csrf
            <div>
               <label>Titre</label> 
               <input type="text" name="title" value="{{$data->title }}" required>
            </div>
            <div>
              <label>Prix</label> 
              <input style="color:blue"type="number" name="price" value="{{$data->price }}" required>
           </div>

           <div>
              <label>old Image</label> 
              <img height="100" width="100"src="/foodimage/{{$data->image}}">
           </div>
           <div>
            <label>Image</label> 
            <input type="file" name="image"  required>
         </div> 

           <div>
              <label>Description</label> 
              <input style="color:blue" type="text" name="description" value="{{$data->description}}" required>
           </div><div>
              
              <input style="color:black" type="submit" value="Enregistrer">
           </div>

        </form>
    </div> 
    </div>
  
@include("admin.adminscript")
  </body>
</html> 