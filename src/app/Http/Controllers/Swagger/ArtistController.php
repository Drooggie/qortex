<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;


/**
 * @OA\Get(
 *   tags={"Artist"},
 *   path="/api/artists/",
 *   summary="Index method of Artist Controller",
 *
 *   @OA\Response(
 *     response=200,
 *     description="OK",
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Artist")
 *       )
 *     )
 *   ),
 *
 *   @OA\Response(response=401, description="Unauthorized"),
 *   @OA\Response(response=404, description="Not Found")
 * ),
 *
 * @OA\Post(
 *   tags={"Artist"},
 *   path="/api/artists/",
 *   summary="Show method of Artist Controller",
 *
 *   @OA\RequestBody(
 *     required=true,
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="name",
 *         type="string",
 *         example="Artist name",
 *       )
 *     )
 *   ),
 *
 *   @OA\Response(
 *     response="200",
 *     description="OK",
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(
 *         property="message",
 *         type="string",
 *         example="Artist Created",
 *       ),
 *       @OA\Property(
 *         property="data",
 *         type="object",
 *         ref="#/components/schemas/Artist"
 *       ),
 *     ),
 *   )
 * ),
 *
 * @OA\Get(
 *   tags={"Artist"},
 *   path="/api/artists/{id}",
 *   summary="Show method of Artist Controller",
 *
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     @OA\Schema(type="integer", example=1),
 *   ),
 *
 *   @OA\Response(
 *     response=200,
 *     description="OK",
 *     @OA\JsonContent(ref="#/components/schemas/Artist")
 *   )
 * ),
 *
 *
 * @OA\Patch(
 *   tags={"Artist"},
 *   path="/api/artists/{id}",
 *   summary="Update method of Artist Controller",
 *
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     @OA\Schema(type="string", example=1)
 *   ),
 *
 *   @OA\RequestBody(
 *     required=true,
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="name",
 *         type="string",
 *         example="Artist name",
 *       )
 *     )
 *   ),
 *
 *   @OA\Response(
 *     response="200",
 *     description="OK",
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(
 *         property="message",
 *         type="string",
 *         example="Artist info updated",
 *       ),
 *       @OA\Property(
 *         property="data",
 *         type="object",
 *         ref="#/components/schemas/Artist"
 *       ),
 *     ),
 *   )
 * ),
 *
 *
 * @OA\Delete(
 *   tags={"Artist"},
 *   path="/api/artists/{id}",
 *   summary="Destroy method of Artist Controller",
 *
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     @OA\Schema(type="integer", example=1)
 *   ),
 *
 *   @OA\Response(
 *     response=200,
 *     description="OK",
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(
 *         property="message",
 *         type="string",
 *         example="You deleted artist information",
 *       )
 *     )
 *   )
 * ),
 *
 *
 * @OA\Schema(
 *   schema="Artist",
 *   type="object",
 *   @OA\Property(
 *     property="id",
 *     type="integer",
 *     example=1,
 *     description="The unique ID of artist"
 *   ),
 *   @OA\Property(
 *     property="name",
 *     type="string",
 *     example="Artist name",
 *   ),
 *   @OA\Property(
 *     property="created_at",
 *     type="string",
 *     format="date-time",
 *     description="Timestamp when the album was created"
 *   ),
 *   @OA\Property(
 *     property="updated_at",
 *     type="string",
 *     format="date-time",
 *     description="Timestamp when the album was last updated"
 *   )
 * ),
 */
class ArtistController extends Controller {}
