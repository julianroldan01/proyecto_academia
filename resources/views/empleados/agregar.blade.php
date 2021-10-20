<div id="Login">
    @extends('partials.layaout')

    @section('content')

    <p>
        <center>
            <h1><span style="color: white;">Empleados</span></h1>
        </center>
    <p>
    <div class="col-12">
        <div class="card-body">
            <div class="card text-white bg-dark mb-2">
                <div class="card-header">
                    <h5>
                        <center>Agregar</center>
                    </h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <form action="{{route('empleados.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="usuario" placeholder="nombre" aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="apellido" placeholder="apellido" aria-label="Last name">
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" name="contrasena" placeholder="contrasena">
                            </div>
                            <p>
                            <div class="row-6">
                                <input type="email" class="form-control" name="correo" placeholder="correo electronico">
                            </div>
                            <p>
                            <div class="row-3">
                                <center>
                                    Sube una imagen:
                                    <input type="file" name="img" accept="image/png, .jpeg, .jpg, image/gif">
                                </center>
                            </div>
                        </div>
                        <p>
                            <center><button type="submit" class="btn btn-success" id="btn">Enviar</button></center>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">foto</th>
                            <th scope="col">nombre</th>
                            <th scope="col">apellido</th>
                            <th scope="col">contraseña</th>
                            <th scope="col">correo electronico</th>
                            <th scope="col">opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $user)
                        <tr>
                            <th scope="row"><img src="{{$user->img}}" srcset="{{$user->img}} x1" class="float-start" width="90px"></th>
                            <th scope="row">{{$user->usuario}}</th>
                            <td>{{$user->apellido}}</td>
                            <td>{{$user->contrasena}}</td>
                            <td>{{$user->correo}}</td>
                            <td>
                                <form action="{{route('empleados.destroy',$user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">eliminar</button>
                                </form>
                                <!-- Button trigger modal -->
                                <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$user->id}}">
                                    Editar
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('empleados.update', $user->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-content" id="letra">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Editar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="usuario" value="{{$user->usuario}}" aria-label="First name">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="apellido" value="{{$user->apellido}}" aria-label="First name">
                                                        </div>
                                                        <div class="col">
                                                            <input type="password" class="form-control" name="contrasena" value="{{$user->contrasena}}" aria-label="Last name">
                                                        </div>
                                                        <p>
                                                        <div class="row-6">
                                                            <input type="email" class="form-control" name="correo" value="{{$user->correo}}">
                                                        </div>
                                                        <div class="row-3">
                                                            <center>
                                                                Sube una imagen:
                                                                <input type="file" name="img"  accept="image/png, .jpeg, .jpg, image/gif">
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" id="body">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-warning">Aceptar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
            </div>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection