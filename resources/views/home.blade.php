@extends('layouts.app')

@section('content')
<div class="container">
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

                    {{ __('Vous pouvez créer des avatars ici!') }}

                    <form action="/create-avatar" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
                        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Prenom de l'avatar :</label>
                            <input type="text" value="{{old('prenom')}}" class="form-control" id="inputCity" name="prenom">
                          </div>
                        
                        <div class="form-group mx-5 pt-4">
                          <label for="imagee">Votre avatar :</label>
                          <input type="file" name="image" id="imagee">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Crée un avatar</button>
            
                    </form>
                </div>
                   
                
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
