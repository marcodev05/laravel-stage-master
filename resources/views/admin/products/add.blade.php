@extends('admin.home')

@section('content')



<div class="row d-flex justify-content-center" >
    <div class="col-8 grid-margin" >
        <div class="card">
            <div class="card-body">
                   <h5 class="text-center mb-4">Ajouter un nouveau produit</h5>
                    <form action="{{ Route('products.store')}}" method="post" class="form-card">
                        @csrf
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nom du Produit<span class="text-danger"> *</span></label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="" required>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Catégory<span class="text-danger"> *</span></label>
                                <select class="form-control" id="category">
                                    <option>---catégory---</option>
                                    <option>Ordinateur</option>
                                    <option>Telephone</option>
                                    <option>Accessoire</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Prix :<span class="text-danger"> *</span></label>
                                <input class="form-control" type="number" id="price" name="price" placeholder="" required>
                             </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Quantité<span class="text-danger"> *</span></label>
                                 <input class="form-control" type="number" id="quantity" name="quantity" placeholder="" required> 
                            </div>
                        </div>
                       
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">Déscription:<span class="text-danger"> *</span></label> 
                                <textarea class="form-control" name="description" id="description" cols="30" rows="4" required></textarea><br></div>
                        </div>
                        <div class="row justify-content-end">
                        
                            <input type="submit" class="btn btn-outline-success" value="Ajouter">
    
                        </div>
                    </form>
            </div>
                {{-- Card body --}}

        </div>
             {{-- Card --}}

    </div>
</div>
    



@endsection