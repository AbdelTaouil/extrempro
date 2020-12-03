@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categories') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vous pouvez créer des catégories ici!') }}

                    <form action="/create-categorie" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
                        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Nom de la catégories :</label>
                            <input type="text" value="{{old('categorie')}}" class="form-control" id="inputCity" name="categorie">
                          </div>
                        
                        
                      </div>
                      <button type="submit" class="btn btn-primary">Créer la catégorie</button>
            
                    </form>
                </div>
                   
                
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
