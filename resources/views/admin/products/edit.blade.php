@extends('admin.home')

@section('content')


<div class="row d-flex justify-content-center" >
    <div class="col-8 grid-margin" >
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Edit Product </h4>
 
                <form action="{{ Route('products.update', $product->id)}}" method="post" class="form-card">
                    @csrf
                    @method('PUT')
                    {{-- {{ Route('products.update')}} --}}

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex">
                            <label class="form-control-label px-3">Référence du Produit</label>
                            <input class="form-control" type="text" id="id" name="id" placeholder="" value="{{ $product->id }}" readonly>
                        </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Nom du Produit<span class="text-danger"> *</span></label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="" value="{{ $product->name }}" required>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Catégory<span class="text-danger"> *</span></label> 
                            <input class="form-control" type="text" id="category" name="category" placeholder=""> 
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Prix :<span class="text-danger"> *</span></label> 
                            <input class="form-control" type="number" id="price" name="price" placeholder="" value="{{ $product->price }}" required>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Quantité<span class="text-danger"> *</span></label> 
                            <input class="form-control" type="number" id="quantity" name="quantity" placeholder="" value="{{ $product->quantity }}" required>  
                        </div>
                    </div>
                   
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> 
                            <label class="form-control-label px-3">Déscription:<span class="text-danger"> *</span></label>  
                            <textarea class="form-control" name="description" id="description" cols="30" rows="4" required>{{ $product->description }}</textarea>
                            <br>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                    
                        <input type="submit" class="btn btn-outline-secondary" value="Enregistrer">
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>



@endsection