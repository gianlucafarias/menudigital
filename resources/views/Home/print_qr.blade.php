@extends('Home.home_layout.app')



@section('home_content')


    <section>


        <div class="row mx-0 pt-5 d-flex justify-content-center">
            <div class="col-xs-4 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card shadow-lg">
                    <div class="card-header card-header-divider text-center pt-4"> <h1>{{$data->store_name}}</h1><br>
                        {!! QrCode::size(250)->generate(route('view_store',['view_id'=>$data->view_id])); !!}</div>
                    <div class="card-body px-0">
                        <p class="text-center"><strong>Hacé tu pedido desde tu celular</strong></p>

                        <h4 class="text-center"><strong>Mesa N°:</strong></h4>

                        <p class="text-muted text-center"> <strong>Solo tenes que escanear el código QR con tu celular.<br>
                            Se abrirá unan pestaña con un link. Hacé click en el link para ingresar.</strong><br><br><br>
                            Desarrollado por:<br>
                            <img src="{{asset($account_info !=NULL ? $account_info->application_logo:'assets_home/images/logo/logo.png')}}" alt="logo" width="292px" height="69px;"><br>
                        </p>


                    </div>
                </div>

            </div>
        </div>


    </section>






@endsection
