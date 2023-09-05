<x-layout>
    <div class="container py-5 mt-5 bg-secondary shadow">
     <div class="row justify-content-center">
        <div class="col-12 col-md-8">
             <p class="h6  text-center text-white">Un link di verifica è stato madato al tuo indirizzo di posta elettronica.</p>
             <form action="/email/verification-notification" method="post">
                 @csrf
                 <div class="row justify-content-center">
                     <div class="col-12 col-md-8">
                         <input type="submit" class="btn btn-largr btn-primary" value="Invia nuovamente il tuo link di conferma">
                     </div>
                 </div>
             </form>
        </div>
     </div>
    </div>
 </x-layout>
