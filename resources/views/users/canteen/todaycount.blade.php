@extends('layouts.app')
@section('title')
    {{__('Today Over all Count')}}
@endsection
@section('main')
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-2">
                    <div class="row">
                        <div class="col-lg-12"> <h3 class="fw-bold  text-primary">{{date('d-m-Y')}} - Todays Count </h3></div>
                        <div class="col-lg-6 text-lg-end"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table datatable">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Emp ID</th>
                                      <th scope="col">SPM</th>
                                      <th scope="col">SIM</th>
                                      <th scope="col">CURD</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    
                                    <!-- @forelse ($results as $result)
                                    
                                    <tr>
                                      <td>{{$loop->iteration}}</td>
                                      <td>{{ $result->emp_id }}</td>
                                      <td>{{ $result->total_spm }}</td>
                                      <td>{{ $result->total_sim }}</td>
                                      <td>{{ $result->total_curd }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        
                                        <td colspan="5"> No Data Found</td>
                                    </tr>
                                    @endforelse -->
                                    @php
                                        $totalEmpId = 0;
                                        $totalSpm = 0;
                                        $totalSim = 0;
                                        $totalCurd = 0;
                                    @endphp

                                    @forelse ($results as $result)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $result->emp_id }}</td>
                                            <td>{{ $result->total_spm }}</td>
                                            <td>{{ $result->total_sim }}</td>
                                            <td>{{ $result->total_curd }}</td>
                                        </tr>

                                        @php
                                            // Update total values
                                            $totalEmpId += (int)$result->emp_id;
                                            $totalSpm += (int)$result->total_spm;
                                            $totalSim += (int)$result->total_sim;
                                            $totalCurd += (int)$result->total_curd;
                                        @endphp

                                    @empty
                                        <tr>
                                            <td colspan="5"> No Data Found</td>
                                        </tr>
                                    @endforelse

                                    @if(count($results) > 0)
                                        <tr>
                                            <td></td>
                                            <td >Total</td>
                                            <td>{{ $totalSpm }}</td>
                                            <td>{{ $totalSim }}</td>
                                            <td>{{ $totalCurd }}</td>
                                        </tr>
                                    @endif
                                  </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection