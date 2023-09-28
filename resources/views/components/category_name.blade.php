<div>

@switch($categoryName)
    @case(1)
    {{$categoryName='Motori'}}
        @break
    @case(2)
    {{$categoryName='Elettronica'}}
        @break
    @case(3)
    {{$categoryName='Arredamento'}}
    @break
    @case(4)
    {{$categoryName='Elettrodomestici'}}
    @break
    @case(5)    
    {{$categoryName='Musica e film'}}
    @break
    @case(6)    
    {{$categoryName='Animali'}}
    @break
    @case(7) 

    {{$categoryName='Libri'}}
    @break   
    @case(8)  
    {{$categoryName='Riviste'}}
    @break
    @case(9)  
    {{$categoryName='Collezionismo'}}
    @break  
    @case(10) 
    
    {{$categoryName='Sport'}}
    @break

    @default
    
    {{$categoryName='Categoria'}}   
        @break
    @endswitch


</div>