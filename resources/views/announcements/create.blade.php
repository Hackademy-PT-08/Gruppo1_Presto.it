<x-layout>

   <div class="container">
      <div class="row justify-content-center">
         <div class=" col-12 col-md-8">
            <h4 class="h1 text-center text-white">Aggiungi annuncio </h4>
            <form action="{{route('annoucements.store')}}" method="POST" enctype="multipart/form-data">
               @csrf
               <input type="text" name="titolo" placeholder="titolo annuncio" class="form-control" value="{{old('titolo')}}">
                  
               <textarea name="descrizione"  cols="3" rows="3" placeholder="Descrizione annuncio" class="form-control">{{old('descrizione')}}</textarea>
               
               <input type="number" name="prezzo" placeholder="prezzo"><br>
               <button type="submit"  class="btn btn-primary mt-1">Aggiungi</button>
            </form> 
         </div>
      </div>
   </div>
    
</x-layout>
 
