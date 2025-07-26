@extends('layout')
@section('titulo', 'Corretivas')
@section('conteudo')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 cabecalho">Horimetros</h1>

</div>
<div class="container-fluid">
  <table class="table table-striped table-hover table-lg table-bordered" id='horimetros'>
    <thead class="table-primary">
      <tr>
        <th style="text-align: center" scope="col">Data</th>
        <th style="text-align: center" scope="col">Embarcação</th>
        <th style="text-align: center" scope="col">Bombordo</th>
        <th style="text-align: center" scope="col">Boreste</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($horimetros as $horimetro)
        <tr>
          <td style="text-align: center;">{{ $horimetro->dataF }}</td>
          <td style="text-align: center;">{{ $horimetro->embarcacao }}</td>
          <td style="text-align: center;">{{ $horimetro->BB }}</td>
          <td style="text-align: center;">{{ $horimetro->BE }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@push('script')
    <script src="{{ URL('js/horimetros.js') }}"></script>
@endpush
@endsection