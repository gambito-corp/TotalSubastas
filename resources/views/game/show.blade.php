@extends('layouts.app')
@push('styles')
    <style type="text/css">
        @keyframes rotate {
            from{
                transform: rotate(0deg);
            }
            to{
                transform: rotate(360deg);
            }
        }
        .refresh{
            animation: rotate 1.5s linear infinite;
        }
    </style>

@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ruleta de Ofertas</div>

                    <div class="card-body">
                        <h1>
                            Ruleta de Ofertas
                        </h1>
                        <div class="text-center">
                            <img id="circle" src="{{asset('img/circle.png')}}" alt="" width="250" height="250" class="">
                            <p id="winner" class="display-1 d-none text-primary">10</p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <label class="font-weight-bold h5">Your Bet</label>
                            <select name="bet" id="bet" class="custom-select col-auto">
                                <option selected>Not in</option>
                                @foreach( range(1, 12) as $number )
                                    <option value="{{$number}}">{{$number}}</option>
                                @endforeach
                            </select>
                            <hr>
                            <p class="font-weight-bold h5">Remainig Time</p>
                            <p id="timer" class="text-danger h5">Waiting to start</p>
                            <hr>
                            <p id="result" class="h1"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        const CIRCLE_ELMENT = document.getElementById('circle');
        const TIMER_ELMENT = document.getElementById('timer');
        const WINNER_ELMENT = document.getElementById('winner');
        const BET_ELMENT = document.getElementById('bet');
        const RESULT_ELMENT = document.getElementById('result');

        Echo.channel('game')
        .listen('Game.RemainingTimeChanged', (e)=>{

            TIMER_ELMENT.innerText = e.time;
            CIRCLE_ELMENT.classList.add('refresh');
            WINNER_ELMENT.classList.add('d-none');
            RESULT_ELMENT.innerText = '';
            RESULT_ELMENT.classList.remove('text-success');
            RESULT_ELMENT.classList.remove('text-danger');
        })
        .listen('Game.WinnerNumberGenerated', (e)=>{

            CIRCLE_ELMENT.classList.remove('refresh');

            let winner = e.number;
            WINNER_ELMENT.innerText = winner;
            WINNER_ELMENT.classList.remove('d-none');

            let bet = BET_ELMENT[BET_ELMENT.selectedIndex].innerText;
            if(bet == winner){
                RESULT_ELMENT.innerText = 'You Win';
                RESULT_ELMENT.classList.add('text-success');
            }else{
                RESULT_ELMENT.innerText = 'You Lose';
                RESULT_ELMENT.classList.add('text-danger');
            }
        });
    </script>
@endpush
