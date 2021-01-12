<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ideas</title>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

    <div class="container">
        <h1>Ideas</h1>
        <form class="container__form" action="{{url('create')}}" method="post">
            {{csrf_field()}}
            <input type="text" id="title" name="title" placeholder="Título..">
            <input type="text" id="description" name="description" placeholder="Crear nota..">
            <input type="submit" name=crear value="Crear">

        </form>

        <table class="table table-hover">

            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th colspan='2'>Modificaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listNotes as $notes)
                <tr>
                    <td>{{$notes->title}}</td>
                    <td>{{$notes->description}}</td>
                    <td>
                        <button type='submit' class='btn btn-primary'>Actualizar</button>
                    </td>

                    <td>
                        <!-- /* esto en realidad es un metodo delete*/ -->
                        <form method="post" action="{{url('/destroy/'.$notes->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type='submit' class='btn btn-danger'>Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @foreach($listNotes as $notes)
        <div class="modal">
            <i class="far fa-times-circle"></i>
            <h4>ACTUALIZA LOS DATOS</h4>
            <form action="{{url('update/'.$notes->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <label>Título</label>
                <input type="text" name="title" value="{{$notes->title}}" required>

                <label>Crear nota</label>
                <input type="text" name="description" value="{{$notes->description}}" required>

                <input type="submit" name="update" value="Actualizar">
            </form>
        </div>
        @endforeach
    </div>

    <script src="{{asset('js/modal.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
