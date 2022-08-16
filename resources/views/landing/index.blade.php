@extends('layouts.app')

@section('template_title')
    Landing
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Landing') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('landings.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha</th>
										<th>Hora</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Cedula</th>
										<th>Departamento</th>
										<th>Ciudad</th>
										<th>Celular</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($landings as $landing)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $landing->fecha }}</td>
											<td>{{ $landing->hora }}</td>
											<td>{{ $landing->nombre }}</td>
											<td>{{ $landing->apellido }}</td>
											<td>{{ $landing->cedula }}</td>
											<td>{{ $landing->departamento }}</td>
											<td>{{ $landing->ciudad }}</td>
											<td>{{ $landing->celular }}</td>
											<td>{{ $landing->email }}</td>

                                            <td>
                                                <form action="{{ route('landings.destroy',$landing->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('landings.show',$landing->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('landings.edit',$landing->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $landings->links() !!}
            </div>
        </div>
    </div>
@endsection
