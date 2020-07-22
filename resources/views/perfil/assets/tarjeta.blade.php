<div class="bg-light-card shadow-sm radius">
    <img src="{{asset(Auth::user()->avatar)}}" class=" mt-4" with="" alt="..." style="width: 90px;
                                    height: 90px; border-radius:50%;">
    <div class="card-body pl-0 pr-0">
        <h5 class="card-title font-weight-bold text-dark">{{$persona->nombres.' '.$persona->apellidos}}</h5>
        <p class="card-text">{{Auth::user()->email}}</p>
        {{--                            <p>--}}
        {{--                                <span><i class=" fas fa-star bg-rating_star"></i></span>--}}
        {{--                                <span><i class=" fas fa-star bg-rating_star"></i></span>--}}
        {{--                                <span><i class=" fas fa-star bg-rating_star"></i></span>--}}
        {{--                                <span><i class=" fas fa-star bg-rating_star"></i></span>--}}
        {{--                                <span><i class="darken-flat fas fa-star"></i></span>--}}
        {{--                            </p>--}}
        {{--                            <p class="font-weight-bold text-dark">3 pts</p>--}}
        <hr>
        <a href="{{route('perfil.edit')}}"> editar perfil</a>
    </div>
</div>
