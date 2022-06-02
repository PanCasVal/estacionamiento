@extends('layouts.app')

@section('content')
<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div-->
<div class="">
        <div class="d-flex flex-row" style="margin-left: 5px">
            <!--DIV QUE ESTA AL FRENTE DE AUDITORIO-->
            <div class="flex-column col-1">
                <div class="fila p-2"   name = 'lugar1'>.</div>
                <div class="fila p-2"   name = 'lugar2'>.</div>
                <div class="fila p-2"   name = 'lugar3'>.</div>
                <div class="fila p-2"   name = 'lugar4'>.</div>
                <div class="fila p-2"   name = 'lugar5'>.</div>
                <div class="fila p-2"   name = 'lugar6'>.</div>
                <div class="fila p-2"   name = 'lugar7'>.</div>
                <div class="fila p-2"   name = 'lugar8'>.</div>
                <div class="fila p-2"   name = 'lugar9'>.</div>
            </div>

            <div class="flex-column col-1">
                <div class="fila-m">.</div>
            </div>

            <div class="flex-column col-1">
                <div class="fila p-2"   name = 'lugar10'>.</div>
                <div class="fila p-2"   name = 'lugar11'>.</div>
                <div class="fila p-2"   name = 'lugar12'>.</div>
                <div class="fila p-2"   name = 'lugar13'>.</div>
                <div class="fila p-2"   name = 'lugar14'>.</div>
                <div class="fila p-2"   name = 'lugar15'>.</div>
                <div class="fila p-2"   name = 'lugar16'>.</div>
                <div class="fila p-2"   name = 'lugar17'>.</div>
                <div class="fila p-2"   name = 'lugar18'>.</div>
            </div>

            <div class="col-6"></div>
            <!--DIV DE PROFESORES-->
            <div class="flex-column col-1">
                <div class="fila p-2"  name = 'lugar19'>.</div>
                <div class="fila p-2"  name = 'lugar20'>.</div>
                <div class="fila p-2"  name = 'lugar21'>.</div>
                <div class="fila p-2"  name = 'lugar22'>.</div>
                <div class="fila p-2"  name = 'lugar23'>.</div>
                <div class="fila p-2"  name = 'lugar24'>.</div>
                <div class="fila p-2"  name = 'lugar25'>.</div>
                <div class="fila p-2"  name = 'lugar26'>.</div>
                <div class="fila p-2"  name = 'lugar27'>.</div>
            </div>

            <div class="flex-column col-1">
                <div class="fila-m">.</div>
            </div>

            <div class="flex-column col-1">
                <div class="fila p-2" name = 'lugar28'>.</div>
                <div class="fila p-2" name = 'lugar29'>.</div>
                <div class="fila p-2" name = 'lugar30'>.</div>
                <div class="fila p-2" name = 'lugar31'>.</div>
                <div class="fila p-2" name = 'lugar32'>.</div>
                <div class="fila p-2" name = 'lugar33'>.</div>
                <div class="fila p-2" name = 'lugar34'>.</div>
                <div class="fila p-2" name = 'lugar35'>.</div>
                <div class="fila p-2" name = 'lugar36'>.</div>
            </div>

        </div>
        <!--DIV QUE ESTA A  LADO DE INGLES-->
        <div class="d-flex flex-row">
            <div class="col-6"></div>
            <div class="col-2 d-flex flex-row " style="margin-left: 70px">
                <div class="col-2 lado-ingles fila"  name = 'lugar35'>.</div>
                <div class="col-2 lado-ingles fila"  name = 'lugar36'>.</div>
                <div class="col-2 lado-ingles fila"  name = 'lugar37'>.</div>
                <div class="col-2 lado-ingles fila"  name = 'lugar38'>.</div>
                <div class="col-2 lado-ingles fila"  name = 'lugar39'>.</div>
                <div class="col-2 lado-ingles fila"  name = 'lugar40'>.</div>
            </div>

        </div>

        <!--DIV abajo de electrica-->
        <div class="d-flex flex-row" style="margin-left: 5px">
            <div class="flex-column col-1">
                <div class="fila p-2"    name = 'lugar41'>.</div>
                <div class="fila p-2"    name = 'lugar42'>.</div>
                <div class="fila p-2"    name = 'lugar43'>.</div>
                <div class="fila p-2"    name = 'lugar44'>.</div>
                <div class="fila p-2"    name = 'lugar45'>.</div>
                <div class="fila p-2"    name = 'lugar46'>.</div>
                <div class="fila p-2"    name = 'lugar47'>.</div>
                <div class="fila p-2"    name = 'lugar48'>.</div>
                <div class="fila p-2"    name = 'lugar49'>.</div>
            </div>

            <div class="flex-column col-1">
                <div class="fila-m">.</div>
            </div>

            <div class="flex-column col-1">
                <div class="fila p-2"  name = 'lugar50'>.</div>
                <div class="fila p-2"  name = 'lugar51'>.</div>
                <div class="fila p-2"  name = 'lugar52'>.</div>
                <div class="fila p-2"  name = 'lugar53'>.</div>
                <div class="fila p-2"  name = 'lugar54'>.</div>
                <div class="fila p-2"  name = 'lugar55'>.</div>
                <div class="fila p-2"  name = 'lugar56'>.</div>
                <div class="fila p-2"  name = 'lugar57'>.</div>
                <div class="fila p-2"  name = 'lugar58'>.</div>
            </div>

            <div class="col-1"></div>

            <!--DIV ingles-->

            <div class="flex-colum col-1">
                <div class="fila-m">.</div>
            </div>

            <div class="flex-column col-1">
                <div class="fila p-2"  name = 'lugar59'>.</div>
                <div class="fila p-2"  name = 'lugar60'>.</div>
                <div class="fila p-2"  name = 'lugar61'>.</div>
                <div class="fila p-2"  name = 'lugar62'>.</div>
                <div class="fila p-2"  name = 'lugar63'>.</div>
                <div class="fila p-2"  name = 'lugar64'>.</div>
                <div class="fila p-2"  name = 'lugar65'>.</div>
                <div class="fila p-2"  name = 'lugar66'>.</div>
                <div class="fila p-2"  name = 'lugar67'>.</div>
            </div>

            <div class="col-3"></div>
            <!--DIV PROFESORES 2-->
            <div class="flex-column col-1">
                <div class="fila p-2" name = 'lugar68'>.</div>
                <div class="fila p-2" name = 'lugar69'>.</div>
                <div class="fila p-2" name = 'lugar70'>.</div>
                <div class="fila p-2" name = 'lugar71'>.</div>
                <div class="fila p-2" name = 'lugar72'>.</div>
                <div class="fila p-2" name = 'lugar73'>.</div>
                <div class="fila p-2" name = 'lugar74'>.</div>
                <div class="fila p-2" name = 'lugar75'>.</div>
                <div class="fila p-2" name = 'lugar76'>.</div>
            </div>

            <div class="flex-column col-1">
                <div class="fila-m">.</div>
            </div>

            <div class="flex-column col-1">
                <div class="fila p-2" name = 'lugar77'>.</div>
                <div class="fila p-2" name = 'lugar78'>.</div>
                <div class="fila p-2" name = 'lugar79'>.</div>
                <div class="fila p-2" name = 'lugar80'>.</div>
                <div class="fila p-2" name = 'lugar81'>.</div>
                <div class="fila p-2" name = 'lugar82'>.</div>
                <div class="fila p-2" name = 'lugar83'>.</div>
                <div class="fila p-2" name = 'lugar84'>.</div>
                <div class="fila p-2" name = 'lugar85'>.</div>
            </div>
        </div>



    </div>
@endsection
