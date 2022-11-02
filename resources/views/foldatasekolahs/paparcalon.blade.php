@extends('layouts.admin')

@section('content')
<div class="card-header bg-primary">
    <h6>JANA MERIT DAN KOD PPD</h6>
</div>

<div class="w-full mt-8 bg-wh.ite rounded">
    <div>
        <br />
        <!--Halaman : {{-- $datamurids->currentPage() --}} <br />  -->
        Jumlah Data : {{ $datamurids->total() }} <br />
        Data Per Halaman : {{ $datamurids->perPage() }} <br />
        {{ $datamurids->links( "pagination::bootstrap-4") }}
    </div>
    <form action="{{url('jana.url')}}" method="POST">

        <div class="mt-6">
            <button
                class="btn btn-warning"
                type="submit">
                JANA MARKAH MERIT
            </button>
        </div>
        
        <div class="button" >
            <a class="btn btn-success" href="{{ url('janakodppd.url') }}">
                JANA KOD PPD
                {{-- trans('global.add') }} {{ trans('cruds.user.title_singular') --}}
            </a>
        </div>
        <div class="card">
            <table class="table table-bordered table-striped table-hover datatable datatable-Permission">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NOKP</th>
                        <th scope="col">MERIT</th>
                        <th scope="col">KOD PPD SP1</th>
                        <th scope="col">KOD PPD SP2</th>
                        <th scope="col">KOD PPD SP3</th>
                       

                    </tr>
                </thead>
                <tbody>
                    <tr>@foreach ($datamurids as $key =>$dm)
                        @csrf
                        <th scope="row">{{  $key + $datamurids->firstItem()}}</th>
                        <th>{{ $dm->NAMA }} </th>
                        <th>{{ $dm->NOKP }}</th>
                        <!--th>{{-- $dm->point }}
                            <input type="hidden" id="pt[{{$dm->id}}]" name="pt[{{$dm->id}}]" class="form-control"
                            value="{{number_format($dm->jumlah,1)--}}"
                            {{--$dm->sekolah_jantina_L == '' ? 'readonly' : ''--}}>               
                        </th-->
                        <th>{{number_format($dm->point,2)}}</th>
                        <th>{{ $dm->PPD_SP1 }}</th>
                        <th>{{ $dm->PPD_SP2 }}</th>
                        <th>{{ $dm->PPD_SP3 }}</th>

                         
                    </tr>@endforeach

                </tbody>
            </table>

        </div>
        <div>
            <br />
            <!--Halaman : {{-- $datamurids->currentPage() --}} <br />  -->
            Jumlah Data : {{ $datamurids->total() }} <br />
            Data Per Halaman : {{ $datamurids->perPage() }} <br />
            {{ $datamurids->links( "pagination::bootstrap-4") }}
        </div>
</div>

</div>

</div>

</form>

</div>
</div>
</div>
@endsection