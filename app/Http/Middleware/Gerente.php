<?php

namespace papusclub\Http\Middleware;

use Closure;

class Gerente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if (\Auth::user()->perfil_id != '5') {
            $request->session()->flash('message', 'Usted no esta autorizado!.');
            $request->session()->flash('alert-class', 'alert-danger');
            switch (\Auth::user()->perfil_id) {
                case '4':
                    return redirect('/admin-registros');
                    break;
                case '3':
                    return redirect('/admin-pagos');
                    break;
                case '2':
                    return redirect('/admin-general');
                    break;
                case '1':
                    return redirect('/socio');
                    break;
                default:
                    return redirect('/');
                    break;
            }
        }
        return $next($request);
    }
}
