@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ma Galerie') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <header>

                        <div class="container">
                    
                            <div class="profile">
                    
                                <div class="profile-image">
                    
                                    <img src="{{asset('images/defaut.png')}}" width="100px" alt="">
                    
                                </div>
                    
                                <div class="profile-user-settings">
                    
                                    <h1 class="profile-user-name">{{ Auth::user()->name }}</h1>
                                        
                                    <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
                    
                                </div>
                    
                                <div class="profile-stats">
                    
                                    <ul>
                                        <li><span class="profile-stat-count">10</span> posts</li>
                                        <li><span class="profile-stat-count">18</span> followers</li>
                                        <li><span class="profile-stat-count">213</span> following</li>
                                    </ul>
                    
                                </div>
                    
                                <div class="profile-bio">
                    
                                    <p>Hey, mon nom est<span class="profile-real-name"> {{ Auth::user()->name }}</span> </p>
                                    <p>J'ai {{ Auth::user()->age }}ans !</p>
                                    <p>Pour me contacter : {{ Auth::user()->email }}</p>
                                    <p>Ps: j'ai ENCORE le meilleur projet de la classe</p>

                                </div>
                    
                            </div>
                            <!-- End of profile section -->
                    
                        </div>
                        <!-- End of container -->
                    
                    </header>
                    
                    <main>
                    
                        <div class="container">
                    
                            <div class="gallery">


                                @foreach ($image as $item)

                                    @if($item->user_id ==  Auth::user()->id)

                                        <div class="gallery-item" tabindex="0">
                            
                                            <img src="{{asset('images/' . $item->photo)}}" class="gallery-image" alt="">
                            
                                            <div class="gallery-item-info">
                            
                                                <ul>
                                                    <li class="gallery-item-likes">
                                                        <form action="/download" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn ">Download</button>
                                                        </form>
                                                        
                                                   
                                                </ul>
                            
                                            </div>
                            
                                        </div>

                                    @endif
                                @endforeach
                                    
                    
                                
                    
                            </div>
                    
                            <div class="loader"></div>
                    
                        </div>
                    
                    </main>
                    
                </div>
                   
                
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
