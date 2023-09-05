<x-layout>


   
    <div class="container">
       <div class="row justify-content-center">
          <div class=" col-12 col-md-8">
             <h4 class="h1 text-center">Aggiungi articolo</h4>
             <form action="" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="text" name="titolo" placeholder="titolo articolo" class="form-control" value="{{old('titolo')}}">
                
              <textarea name="contenuto"  cols="3" rows="3" placeholder="Descrizione articolo" class="form-control">{{old('contenuto')}}</textarea>
              
              <button type="submit"  class="btn btn-primary mt-1">Aggiungi</button>
              </form> 
          </div>
       </div>
    </div>
    
    
 

 </x-layout>
 
