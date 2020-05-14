<?php
    function setOpen($ruta)
    {
        return request()->routeis($ruta) ? 'menu-open' : '';
    }
