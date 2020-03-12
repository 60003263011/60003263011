@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  ข้อมูลสาขา
                  <table class="table table-striped">
                      <tr>
                          <th>ลำดับ</th>
                          <th>รหัสสาขา</th>
                          <th>ชื่อสาขา</th>



                      </tr>
                      @foreach ($majors as $major)
                      <tr>
                          <td>{{$major->id}} </td>
                          <td>{{$major->major_id}} </td>
                          <td>{{$major->major_name}} </td>



                      </tr>

                      @endforeach
                  </table>
                  {!! $majors->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
