

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



    <title>Sinasp</title>
  </head>
  <body>

  
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

        {{dd($error)}}
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
        <form method="POST" action="" enctype="multipart/form-data">
            {{@csrf_field()}}
            <span><b>Titulo Noticia</b></span>
            <input type="text" name="titulo" class="form-control mb-2">
            <input type="hidden" name="autor" >
            <span><b>Estado</b></span>
            <select class="form-control form-control-lg  mb-4" name="activo">
                <option value="1">Activo</option>
                <option value="-1">Inactivo</option>
            </select>
        
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
        <button>gggggggg</button>
  
</div>



  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
           
  
            <script src="{{asset('assets/js/funcionesSinasp.js')}}" ></script>
            <script src="{{asset('assets/js/jquery.js')}}" ></script>
            <script src="{{asset('assets/js/bootstrap.min.js')}}" ></script>
            <script src="{{asset('assets/js/summernote-bs4.js')}}" ></script>

     
            
  </body>
</html>





