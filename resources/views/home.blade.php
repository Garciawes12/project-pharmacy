@extends('tablar::page')

@section('content')
  <div class="row col-6">
    <canvas id="myChart"></canvas>
  </div>

  <div class="row col-6">
    <canvas id="myChart2"></canvas>
  </div>


  {{-- <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Fecha Caducidad</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach ($medicamentos as $medicamento)
        <tr>
          <td>{{ $medicamento->nombre }}</td>
          <td>{{ $medicamento->cantidad_stock }}</td>
          <td>{{ $medicamento->fecha_caducidad }}</td>
        </tr>
      @endforeach
    </tbody>
  </table> --}}

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Filtrar medicamentos por caducidad
    const medicamentosPorCaducar = @json($medicamentos->filter(function($medicamento) {
        return \Carbon\Carbon::parse($medicamento->fecha_caducidad)->diffInDays(\Carbon\Carbon::now()) <= 30;
    })->pluck('nombre'));

    const cantidadesMedicamentosPorCaducar = @json($medicamentos->filter(function($medicamento) {
        return \Carbon\Carbon::parse($medicamento->fecha_caducidad)->diffInDays(\Carbon\Carbon::now()) <= 30;
    })->pluck('cantidad_stock'));

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: medicamentosPorCaducar,
        datasets: [{
          label: 'Medicamentos por caducar',
          data: cantidadesMedicamentosPorCaducar,
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
@endsection

