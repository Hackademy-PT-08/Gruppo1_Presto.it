<div>
@if ($categoryName==1)
    {{$categoryName='Motori'}}

@elseif($categoryName==2)   
{{$categoryName='Elettronica'}}

@elseif($categoryName==3)   
{{$categoryName='Arredamento'}}
@elseif($categoryName==4)   
{{$categoryName='Elettrodomestici'}}
@elseif($categoryName==5)   
{{$categoryName='Musica e film'}}
@elseif($categoryName==6)   
{{$categoryName='Animali'}}
@elseif($categoryName==7)   
{{$categoryName='Libri'}}
@elseif($categoryName==8)   
{{$categoryName='Riviste'}}
@elseif($categoryName==9)   
{{$categoryName='Collezionismo'}}
@elseif($categoryName==10)   
{{$categoryName='Sport'}}
@endif


</div>