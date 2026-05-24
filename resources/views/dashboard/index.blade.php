@extends('layouts.app')
@section('content')
<h2 class="mb-4">Dashboard</h2>
<div class="row g-3">
  @foreach(['Students'=>540,'Teachers'=>38,'Classes'=>16,'Attendance %'=>92] as $k=>$v)
  <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><h6>{{$k}}</h6><h3>{{$v}}</h3></div></div></div>
  @endforeach
</div>
<div class="card mt-4 shadow-sm"><div class="card-body"><canvas id="chart"></canvas></div></div>
@push('scripts')<script>new Chart(document.getElementById('chart'),{type:'line',data:{labels:['Jan','Feb','Mar','Apr'],datasets:[{label:'Attendance',data:[89,90,93,92]}]}})</script>@endpush
@endsection
