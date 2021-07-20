<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
    * @OA\Info(
    *   title="TasManian Dev",
    *   description="Task Management For Developers",
    *   version="0.0.1",
    *   @OA\Contact(
    *       email="patryk.mikolajczak@12makers.pl",
    *       name="Dev 12Makers",
    *       url="https://12makers.pl"
    *   ),
    *   @OA\License(
    *       name="Apache 2.0",
    *       url="http://www.apache.org/licenses/LICENSE-2.0.html"
    *   )
    * ),
    */

    /**
    * @OA\Server(
    *   url="{schema}://{host}",
    *   description="OpenApi parameters",
    *   @OA\ServerVariable(
    *       serverVariable="schema",
    *       enum={"https", "http"},
    *       default=L5_SWAGGER_CONST_SCHEMA
    *   ),
    *   @OA\ServerVariable(
    *       serverVariable="host",
    *       default=L5_SWAGGER_CONST_HOST
    *   ),
    * )
    */

    /**
    * @OA\Header(
    *   header="test-header",
    *   description="test description",
    *   @OA\Schema(
    *       type="string",
    *       example="10"
    *   )
    *)
    */

    /**
    * @OA\Tag(
    *   name="Init",
    *   description="Firs endpoint - test swagger",
    * )
    */

    /**
    * @OA\Get(
    *   path="/api/",
    *   tags={"Init"},
    *   summary="",
    *   description="",
    *   @OA\Response(
    *       response=200,
    *       description="",
    *       @OA\MediaType(
    *           mediaType="application/json",
    *       ),
    *   ),
    * )
    */
}
