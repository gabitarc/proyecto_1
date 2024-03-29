@extends('layouts.app')

@section('template_title')
Procedure to User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tramite a Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('procedure.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
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
                        @if($procedures)
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Titulo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($procedures as $procedure)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                           
                                                <td>{{ $procedure->title }}</td>

                                                <td>
                                                    <form action="{{ route('procedure.destroy',$procedure->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('procedure.show',$procedure->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('procedure.edit',$procedure->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
