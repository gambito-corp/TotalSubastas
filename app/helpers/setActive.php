<?php
    function setActive($ruta)
    {
        return request()->routeis($ruta) ? 'active' : '';
    }
