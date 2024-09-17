<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl">This is the Blog Page</h3> --}}
    <img src="img/boby.jpg" alt="", width=300>

  
        
    
    <article class="py-8 max-w-screen-md ">
      
            <h2 class= "mb-1 text-3xl trackin-tight font-bold text-gray-900"> {{ $post ['title'] }}</h2>
     
        <div class="text-base text-gray-500 ">
            <a href="#"> {{ $post ['author'] }}</a> | 1 January 2024
        </div>
        <p class="my-4 font-light"> 
            {{ ($post ['body']) }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Back to posts </a>
    </article>
  
   

</x-layout>