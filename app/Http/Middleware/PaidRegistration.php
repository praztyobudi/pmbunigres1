<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class PaidRegistration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // yang belum bayar tampilkan ke instruksi bayar
        $user = auth()->user();
        $pembayaran = $user->pembayaranRegistrasi();

        if(is_null($pembayaran) ) {
            return response()->redirectToRoute('instruksi-bayar');
        } else if(!$pembayaran->status) {
            if(checkBrivaStatus($pembayaran)) {
                $pembayaran->status = true;
                $pembayaran->dibayar_pada = now();
                $pembayaran->save();
            } else {
                return response()->redirectToRoute('instruksi-bayar');
            }
        }

        return $next($request);
    }
}
