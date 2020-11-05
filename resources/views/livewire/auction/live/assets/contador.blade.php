<div class=" col col-md-3 order-md-1 live-push_action-ranking">
    <article class="border-bottom">
        <h5 class="text-uppercase r-timer_live">Subasta en vivo</h5>
    </article>
    <div class="row p-4">
        <div class="col-12 pb-5 text-center" id="app">
            <div class="base-timer">
                <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <g class="base-timer__circle">
                        <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
                        <path
                            id="base-timer-path-remaining"
                            stroke-dasharray="283"
                            class="base-timer__path-remaining"
                            d="
                                  M 50, 50
                                  m -45, 0
                                  a 45,45 0 1,0 90,0
                                  a 45,45 0 1,0 -90,0
                                ">
                        </path>
                    </g>
                </svg>
                <span id="base-timer-label" class="base-timer__label">

                    </span>
            </div>
        </div>
        <div class="col live-push_auction-timer_bottom">
            <div class="text-center">
                <span class="content-icono-show"> <i class="fas fa-gavel fa-rotate-270 pr gavel-live"></i></span>
                <span class="d-block text-center">
                    <p class="text-dark text text-_to-auction_bottom">{{$mensajes}}</p>
                    Ofertas
                </span>
            </div>
        </div>
        <div class="col live-push_auction-timer_bottom">
            <div class="text-center">
                <span class="content-icono-show"><i class="fas fa-user" style="font-size: 23px"> </i></span>
                <span class="d-block">
                    <p class="text-dark text text-_to-auction_bottom">{{$participantes}}</p>
                </span>
                <span class="d-block">
                    Participantes
                </span>
            </div>
        </div>
    </div>
</div>
@push('styles')
    <style>
        .base-timer {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .base-timer__svg {
            transform: scaleX(-1);
        }

        .base-timer__circle {
            fill: none;
            stroke: none;
        }

        .base-timer__path-elapsed {
            stroke-width: 7px;
            stroke: grey;
        }

        .base-timer__path-remaining {
            stroke-width: 7px;
            stroke-linecap: round;
            transform: rotate(90deg);
            transform-origin: center;
            transition: 1s linear all;
            fill-rule: nonzero;
            stroke: currentColor;
        }

        .base-timer__path-remaining.green {
            color: rgb(65, 184, 131);
        }

        .base-timer__path-remaining.orange {
            color: orange;
        }

        .base-timer__path-remaining.red {
            color: red;
        }

        .base-timer__label {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
        }
    </style>
@endpush
@push('scripts')
    <script>
        //Declaracion de Variables y constantes
            var TiempoRestante = @json($tiempo);
            var CuentaRegresiva = true;
            const FULL_DASH_ARRAY = 283;
            const WARNING_THRESHOLD = 30;
            const ALERT_THRESHOLD = 15;
            const COLOR_CODES = {
                info: {
                    color: "green"
                },
                warning: {
                    color: "orange",
                    threshold: WARNING_THRESHOLD
                },
                alert: {
                    color: "red",
                    threshold: ALERT_THRESHOLD
                }
            };
            const TIME_LIMIT = 300;
            var timePassed = 0;
            var timeLeft = @json($tiempo);
            var timerInterval = null;
            var remainingPathColor = COLOR_CODES.info.color;


            //Declaracion de las Funciones

        function onTimesUp () {
            clearInterval(timerInterval);
        }
        startTimer()
        function startTimer() {
            timerInterval = setInterval(() => {
                momentoActual = new Date()
                hora = momentoActual.getHours()
                if(hora < 10){hora = `0${hora}`;}
                minuto = momentoActual.getMinutes()
                if(minuto < 10){minuto = `0${minuto}`;}
                segundo = momentoActual.getSeconds()
                if(segundo < 10){segundo = `0${segundo}`;}
                Tiempo2 = `${hora}:${minuto}:${segundo}`
                inicio = @json($inicio);

                if(inicio >= Tiempo2) {
                    timeLeft = TiempoRestante--;
                }
                if(inicio <= Tiempo2) {
                    timeLeft = TiempoRestante++;
                }

                document.getElementById("base-timer-label").innerHTML = formatTime(
                    timeLeft
                );
                setCircleDasharray();
                setRemainingPathColor(timeLeft);
                if (timeLeft === 0) {
                    onTimesUp();
                }
            }, 1000);
        }

        function formatTime (time) {
            const minutes = Math.floor(time / 60);
            var seconds = time % 60;
            if (seconds < 10) {
                seconds = `0${seconds}`;
            }
            return `${minutes}:${seconds}`;
        }

        function setRemainingPathColor(timeLeft) {
            const { alert, warning, info } = COLOR_CODES;
            if (timeLeft <= alert.threshold) {
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(warning.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(alert.color);
            } else if (timeLeft <= warning.threshold) {
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(info.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(warning.color);
            }
        }
        function calculateTimeFraction() {
            const rawTimeFraction = timeLeft / TIME_LIMIT;
            return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
        }
        function setCircleDasharray() {
            const circleDasharray = `${(
                calculateTimeFraction() * FULL_DASH_ARRAY
            ).toFixed(0)} 283`;
            document
                .getElementById("base-timer-path-remaining")
                .setAttribute("stroke-dasharray", circleDasharray);
        }
    </script>
@endpush
