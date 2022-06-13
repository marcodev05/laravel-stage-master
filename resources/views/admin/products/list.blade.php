
@extends('admin.home')

@section('content')


    <div class="row">
        <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Products list</h4>
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th> Name </th>
                    <th> Price </th>
                    <th> quantity </th>
                    <th> Last Update </th>
                    <th> Add By </th>
                    <th colspan="2"> Action </th>
                    </tr>
                </thead>
                <tbody>

                    @if ($products->count() > 0)

                        <div class="row">
                            @foreach ($products as $product)

                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td> {{ $product->price }} </td>
                                    <td> {{ $product->quantity }}</td>
                                    <td> {{ $product->updated_at->format('Y-m-d') }}</td>
                                    <td> Admin </td>
                                    <td> <a href="{{ route('products.edit', $product->id)}}" class="btn btn-warning">Edit</a> </td>
                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce produit')" class=" btn btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                         </div>
            
                    @else
                        <h4> Il n y a pas de produits disponible</h4>
                    @endif
                    {{-- <tr>
                    <td>
                        <img src="admin/assets/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson
                    </td>
                    <td> High loading time </td>
                    <td>
                        <label class="badge badge-gradient-warning">PROGRESS</label>
                    </td>
                    <td> Dec 12, 2017 </td>
                    <td> WD-12346 </td>
                    </tr>
                 --}}
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>

      
  @endsection