
   
        <h1>@yield('titulo')</h1>
 
        
    <br>
    @yield('contenido')
    <h3 style="color: magenta">Obras:</h3>
    <img src="@yield('imagen1')" style="width: 265px;"><img src="@yield('imagen2')" style="width: 265px;"><img src="@yield('imagen3')" style="width: 265px;"> <img src="@yield('imagen4')" style="width: 265px;"> <img src="@yield('imagen5')" style="width: 265px;">
    <pre style="color: white">@yield('titulo1') (@yield('fecha1'))                 @yield('titulo2') (@yield('fecha2'))                    @yield('titulo3') (@yield('fecha3'))                   @yield('titulo4') (@yield('fecha4'))                @yield('titulo5') (@yield('fecha5'))  </pre>
    