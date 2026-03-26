@extends("layouts.template")

@section("content")

    <div class="row justify-content-center">
        <div class="col-md-10">

           <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Lista de Personas</h4>
                </div>

                <div class="card-body p-4">

                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($personas as $persona)
                                <tr>
                                    <td class="fw-bold">{{$persona->id_persona}}</td>
                                    <td>{{$persona->nombre}}</td>
                                    <td>{{$persona->apellido_paterno}}</td>
                                    <td>{{$persona->apellido_materno}}</td>
                                    <td>
                                        <span class="badge bg-info text-dark">
                                            {{$persona->fecha_nacimiento}}
                                        </span>
                                    </td>
                                    <td>
                                        <form action="{{route("personas.destroy",$persona)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
