<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        $dtime = Carbon::parse($date)->format('d/m/Y');
        return $dtime;
    }
}

if (!function_exists('set_active')) {
    function set_active($uri, $output = 'active')
    {
        if (is_array($uri)) {
            foreach ($uri as $u) {
                if (Route::is($u)) {
                    return $output;
                }
            }
        } else {
            if (Route::is($uri)) {
                return $output;
            }
        }
    }
}


    if (!function_exists('formatMontant')) {
        function formatMontant($montant_du)
        {
            if ($montant_du) {
                $montant = number_format($montant_du, 0, ',', ' ');
                return $montant;
            } else {
                return 0;
            }
            // $montant = number_format($montant_du, 3, ',', ' ');
        }
    }

