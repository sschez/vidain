@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Crear Paciente</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('user.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Nombre completo" name="name" value="{{ old('name') }}" />    
              Tipo de documento:          
              <input type="radio" required name= "typedoc" value="{{ old('cc') }}" /> C.C
              <input type="radio" required name= "typedoc" value="{{ old('ti') }}" /> T.I
              <input type="radio" required name= "typedoc" value="{{ old('ce') }}" /> C.E
              <input type="text" class="form-control mb-2" placeholder="Numero de documento de identidad" name="doc" value="{{ old('document') }}" />
              <input type="text" class="form-control mb-2" placeholder="Nombre del doctor" name="namedoc" value="{{ old('namedoc') }}" />
              <input type="text" class="form-control mb-2" placeholder="Nombre de Contacto Emergencia" name="nameem" value="{{ old('nameem') }}" />
              <input type="text" class="form-control mb-2" placeholder="Contacto de Emergencia" name="c.eme" value="{{ old('c.emergencia') }}" />
              <input type="submit" class="crear-paciente-b" value="Crear Paciente" />
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
