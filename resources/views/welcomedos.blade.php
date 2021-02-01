

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/iconos/css/fontawesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/principal.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/summernote-bs4.css')}}" rel="stylesheet">
 
    <link href="{{asset('assets/css/summernote-lite.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/summernote.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/summernote-bs4.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/bootstrap_fileinput/css/fileinput.min.css')}}" rel="stylesheet">

  
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin = "anónimo" >   
<link href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput.min.css" media = "all" rel = "stylesheet" type = "text / css " />     
<! - si usa la orientación RTL (de derecha a izquierda), cargue el archivo CSS RTL después de fileinput.css descomentando a continuación ->
<! - link href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput-rtl.min.css" media = "all" rel = "stylesheet" type = "text / css" / ->
<! - la biblioteca de iconos de fuente impresionante si se usa con el tema `fas` (o Bootstrap 4.x). Tenga en cuenta que los iconos predeterminados utilizados en el complemento son glificones que se incluyen solo con Bootstrap 3.x. ->
<link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin = "anónimo" >   
<script src = "https://code.jquery.com/jquery-3.3.1.min.js" crossorigin = "anónimo" > </script>  
<! - piexif.min.js es necesario para orientar automáticamente los archivos de imagen O al restaurar datos exif en imágenes redimensionadas y cuando
    desea cambiar el tamaño de las imágenes antes de subirlas. Esto debe cargarse antes de fileinput.min.js ->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/piexif.min.js" type = "text / javascript" > </script>  
<! - sortable.min.js solo es necesario si desea ordenar / reorganizar archivos en la vista previa inicial. 
    Esto debe cargarse antes de fileinput.min.js ->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/sortable.min.js" type = "text / javascript" > </script>  
<! - purify.min.js solo es necesario si desea purificar el contenido HTML en su vista previa para 
    Archivos HTML Esto debe cargarse antes de fileinput.min.js ->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/purify.min.js" type = "text / javascript" > </script>  
<! - popper.min.js a continuación es necesario si usa bootstrap 4.x (para popover y tooltips). También puedes usar el bootstrap js
   3.3.x versiones sin popper.min.js. ->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" > </script> 
<! - bootstrap.min.js a continuación es necesario si desea ampliar y obtener una vista previa del contenido del archivo en un modo detallado
    diálogo. bootstrap 4.x es compatible. También puede usar las versiones bootstrap js 3.3.x. ->
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin = "anónimo" > </script>  
<! - el archivo de complemento de entrada de archivo principal ->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/fileinput.min.js" > </script> 
<! - se necesita el siguiente script de tema para usar el tema Font Awesome 5.x (`fas`) ->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/themes/fas/theme.min.js"> </ script - >
<! - opcionalmente, si necesita traducción para su idioma, incluya el archivo de configuración regional como se menciona a continuación (reemplace LANG.js con la configuración regional de su idioma) ->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/locales/LANG.js" > </script> 

    <title>Sinasp</title>
  </head>
  <body>

  <div class="container bg-primary" >

  <div class="row d-flex justify-content-around align-items-center" >
      <div class="col-3">
      <img   style="width:100%;" src="{{asset('Img/sinasp/logo_ministerio.jpg')}}">
      </div>
      <div class="col-3">
      <img   style="width:100%;" src="{{asset('Img/sinasp/logo_SiNASP.gif')}}">
      </div>
      <div class="col-3">
      <img  style="width:100%;" src="{{asset('Img/sinasp/logo_pcsns.gif')}}">
      </div>
  </div>


  </div>

  <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand"  href="">SiNASP</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actualidad SiNASP
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="">Noticias</a>
                      <a class="dropdown-item" href="#">Agenda</a>
                      <a class="dropdown-item" href="#">Seminarios on-line</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Comunidad SiNASP
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="">Noticias</a>
                      <a class="dropdown-item" href="#">Agenda</a>
                      <a class="dropdown-item" href="#">Seminarios on-line</a>
                    </div>
                </li>
            </ul>

                <ul class="navbar-nav ml-auto">
                  
                </ul>
              
                </div>
              </nav>
  </div>

  <div class="container">
    @yield('jumbotron')
  </div>

  <div class="container">
    
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Nueva Noticia</h1>
      <p class="lead">Rellene la infiormacion y pulse cargar</p>
    </div>
  </div>

  


<div class="row shadow-sm p-3 mb-5 bg-white rounded">
    

    <div class="row">
    <div class="col-12 offset-sm-1">
        @if(count($errors)>0)

    
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('mensaje'))
        <div class="alert alert-info">
            {{Session::get('mensaje')}}
        </div>
        @endif
    </div>
</div>

<div class="col-10 mt-5 ml-2">
    <h2> </h2>
</div>
<div class="row mb-4 col-12 d-flex justify-content-around align-items-center">

     

    <div class="col-6">
        <form method="POST" action="{{route('Noticias.store')}}" enctype="multipart/form-data">
            {{@csrf_field()}}
            <span><b>Titulo Noticia</b></span>
            <input type="text" name="titulo" class="form-control mb-2">
            <input type="hidden" name="autor" value="">
            <span><b>Estado</b></span>
            <select class="form-control form-control-lg  mb-4" name="activo">
                <option value="1">Activo</option>
                <option value="-1">Inactivo</option>
            </select>
            <p class="mt-1"><b>Autor activo</b> </p><br>
            <p>agrego un comtenido</p>
            <p>cargaos otro documentos
        
    </div>

    {{--data-initial-preview="{{isset($data->imagen) ? Storage::url("Imagenes/noticias/$data->imagen") :"http://www.placehold.it/200*150/EFEFEF/AAAAAA&text=Caratula"}}"--}}

    <div class="col-5 form-froup">
        
    <input name="imagen" type = "file">   

</div>




</div>

<div class="col-12">

    <p class="mb-1"><b>Descripcion</b></p>
    <textarea class="mt-1" name="descripcion" id="summernote"></textarea>
</div>

        <div class="col-12">

        <input  type="submit" value="cargar" class="btn btn-primary btn-block mt-2">
        <a href="" class="btn btn-success btn-block mt-2"> Volver</a>
        </form>

        </div>
        <button class="btn primary">gggggggg</button>
        <button class="btn primary">ottro botn </button>
        <button class="btn primary">ottro botn </button>
  
</div>



  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
           
  
  <script src="{{asset('assets/js/funcionesSinasp.js')}}" ></script>
            <script src="{{asset('assets/js/jquery.js')}}" ></script>
            <script src="{{asset('assets/js/bootstrap.min.js')}}" ></script>
            <script src="{{asset('assets/js/summernote-bs4.js')}}" ></script>

{{-- SCRIPT DE CARGA DE ARCHIVO--}}
  
            
<script>    
               
              
            </script>        
            
  </body>
</html>





