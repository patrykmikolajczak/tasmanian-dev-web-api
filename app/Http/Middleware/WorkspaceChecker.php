<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Workspace;
use Illuminate\Support\Facades\Redis;

class WorkspaceChecker
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
        $subdomain = $request->route('workspace');
        if (!Redis::exists($subdomain)){
            $workspace = Workspace::where('subdomain', $subdomain)->firstOrFail();
            Redis::set($subdomain, json_encode($workspace));
            return $next($request);
        }
        return response()->json([], 404);
    }
}
