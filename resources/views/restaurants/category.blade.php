@extends("restaurants.layouts.restaurantslayout")

@section("restaurantcontant")


    <div class="container-fluid mt--6">

        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-0">Category
                            <span
                                class="badge badge-md badge-circle badge-floating badge-info border-white">{{$category_count}}</span>
                        </h3>
                    </div>
                    <div class="col-6 text-right">
                        <a  href="{{route('store_admin.addcategories')}}"
                                class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip"
                                data-original-title="Add Category">
                            <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                            <span class="btn-inner--text">Add Category</span>
                        </a>

                    </div>
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Status</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php $i=1 @endphp
                    @foreach($category as $cat)
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $cat->name }}</td>
                            <td> <img src="{{asset($cat->image_url)}}" class="avatar rounded-circle mr-3"></td>

                            <td>
                                <span class="badge badge-{{$cat->is_active == 1 ? "success":"danger"}}">{{$cat->is_active == 1 ? "ENABLED":"DISABLED"}}</span>
                            </td>

                            <td style="text-align: center">
                                    <span>
                                    <a href="{{route('store_admin.update_category',$cat->id)}}"  class="table-action" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                        </span>

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>


@endsection
