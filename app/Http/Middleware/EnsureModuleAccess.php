<?php

namespace App\Http\Middleware;

use App\Enums\AssessmentLevel;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureModuleAccess
{
    public function handle(Request $request, Closure $next, string $module): Response
    {
        $config = config("assessments.{$module}");
        abort_if(! $config, 404);

        abort_unless(
            $request->user()->user_type->canAccess(AssessmentLevel::from($config['level'])),
            403,
        );

        return $next($request);
    }
}