@extends('layout')
@section('titulo', 'Corretivas')
@section('conteudo')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 cabecalho">Manutenções Corretivas</h1>

</div>
<div class="container-fluid">
  <table class="table table-striped table-hover table-lg table-bordered" id='corretivas'>
    <thead class="table-primary">
      <tr>
        <th style="text-align: center" scope="col">Data</th>
        <th style="text-align: center" scope="col">Embarcação</th>
        <th style="text-align: center" scope="col">Descrição</th>
        <th style="text-align: center" scope="col">Horimetros</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($corretivas as $corretiva)
        <tr>
          <td style="text-align: center;">{{ $corretiva->data }}</td>
          <td style="text-align: center;">{{ $corretiva->embarcacao }}</td>
          <td style="text-align: center;">{{ $corretiva->descricao }}</td>
          <td style="text-align: center;">BB: {{ $corretiva->horimetroBB }} | BE: {{ $corretiva->horimetroBE }} </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@push('script')
    <script src="{{ URL('js/corretivas.js') }}"></script>
@endpush
@endsection