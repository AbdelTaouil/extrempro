@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Images') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vous pouvez ajouter des images ici!') }}

                    <form action="/add-image" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
                        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Votre image :</label>
                            <input type="file" value="{{old('photo')}}" class="form-control " id="inputCity" name="photo">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Votre Catégorie :</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="categorie_id">
                                <option>Choissisez votre categorie</option>

                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->categorie}}</option>

                                @endforeach
                              </select>                        
                            </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Votre Utilisateur :</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                                <option>Quelle est votre user</option>
                                @foreach ($users as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>

                                @endforeach
                            </select>                       
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
