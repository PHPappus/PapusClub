<?php

namespace papusclub\Http\Middleware;

use Closure;

class AdminPagos
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
        if (\Auth::user()->perfil_id != '3') {
            $request->session()->flash('message', 'Usted no esta autorizado!.');
            $request->session()->flash('alert-class', 'alert-danger');
            switch (\Auth::user()->perfil_id) {
                case '5':
                    return redirect('/gerente');
                    break;
                case '4':
                    return redirect('/admin-registros');
                    break;
                case '1':
                    return redirect('/socio');
                    break;
                case '2':
                    return redirect('/admin-general');
                    break;
                default:
                    return redirect('/');
                    break;
            }
        }
        return $next($request);
    }
}
