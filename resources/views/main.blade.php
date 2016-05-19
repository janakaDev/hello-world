
@include('partials._head')

<body>

@include('partials._javascripts')


 <div class='container'>

     @include('partials._nav')
     
     
     
     <div class="container">
       @include('partials._messages')
       @yield('content')


     </div>
        

@include('partials._footer')
	
</div>
	
	@yield('scripts')


</body>
</html>
