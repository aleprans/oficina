@extends('layout')
@section('titulo', 'Preventivas')
@section('conteudo')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 cabecalho">Manutenções Preventivas</h1>

</div>
<div class="container-fluid">
  <table class="table table-striped table-hover table-lg table-bordered" id='preventivas'>
    <thead class="table-primary">
      <tr>
        <th style="text-align: center" scope="col">Data</th>
        <th style="text-align: center" scope="col">Embarcação</th>
        <th style="text-align: center" scope="col">Horimetros</th>
        <th style="text-align: center" scope="col">Itens Trocados</th>
        <th style="text-align: center" scope="col">Obs</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($preventivas as $preventiva)
        <tr>
          <td style="text-align: center;">{{ $preventiva->dataF }}</td>
          <td style="text-align: center;">{{ $preventiva->emb }}</td>
          <td style="text-align: center;">BB: {{ $preventiva->BB }} | BE: {{ $preventiva->BE }}</td>
          <td style="text-align: center;">
            @if ($preventiva->olub == 1) Oleo lubrificante @endif
            @if ($preventiva->filOlub == 1) | filtro do oleo lubrificante @endif
            @if ($preventiva->filComb == 1) | filtro Combustivel @endif
            @if ($preventiva->filRacor == 1) | filtro Racor @endif
            @if ($preventiva->olRev == 1) | Oleo do reversor @endif
            @if ($preventiva->filRev == 1) | filtro do reversor @endif
          </td>
          <td style="text-align: center;">{{ $preventiva->obs }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@push('script')
    <script src="{{ URL('js/preventivas.js') }}"></script>
@endpush
@endsection