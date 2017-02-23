@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h4>Editar Banco</h4>
            {!! Form::model($bank,[
                'route' => ['admin.banks.update', $bank->id],
                'method' => 'PUT',
                'files' => true
            ]) !!}

                @include('admin.banks._form')

                <div class="row">
                    {!! Form::submit('gravar banco',['class' => 'btn waves-effect']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection