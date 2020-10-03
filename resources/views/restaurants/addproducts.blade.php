@extends("restaurants.layouts.restaurantslayout")

@section("restaurantcontant")


    <div class="container-fluid mt--6">
        <div class="card mb-4">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">Agregar productos</h3>
                @if(session()->has("MSG"))
                    <div class="alert alert-{{session()->get("TYPE")}}">
                        <strong> <a>{{session()->get("MSG")}}</a></strong>
                    </div>
                @endif
                @if($errors->any()) @include('admin.admin_layout.form_error') @endif
            </div>
            <!-- Card body -->
            <div class="card-body">
                <form method="post" action="{{route('store_admin.addproducts')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <!-- Form groups used in grid -->
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="example3cols1Input">Foto</label>




                                <div class="custom-file">
                                    <input name="image_url"  class="file-name input-flat ui-autocomplete-input" type="file" readonly="readonly" placeholder="Browses photo" autocomplete="off">


                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="example3cols2Input">Nombre del producto</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="form-control-label" for="example3cols2Input">Precio</label>
                                <input type="number" name="price" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="form-control-label" for="example3cols2Input">Tiempo de preparación</label>
                                <input type="number" name="cooking_time" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlSelect1">Seleccionar Categoría</label>
                                <select class="form-control" name="category_id" required>
                                    @foreach($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlSelect1">Está disponible?</label>
                                <select class="form-control" name="is_active" required>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlSelect1">Es un producto destacado?</label>
                                <select class="form-control" name="is_recommended" required>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlSelect1">Es Veg?</label>
                                <select class="form-control" name="is_veg" required>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlSelect1">Descripción</label>
                                 <textarea class="form-control"name="description" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Publicar</button>
                        </div>


                    </div>

                </form>
            </div>



        </div>


@endsection
