<?php

    function setActive($routeName)
    {
        return request()->routeis($routeName) ? 'active' : '';
    }
