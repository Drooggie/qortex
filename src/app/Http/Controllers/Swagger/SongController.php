<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *   tags={"Song"},
 *   path="/api/songs/",
 *   summary="Index method of Song Controller",
 *
 *   @OA\Response(
 *     response=200,
 *     description="OK",
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Song")
 *       )
 *     )
 *   ),
 *   @OA\Response(response=401, description="Unauthorized"),
 *   @OA\Response(response=404, description="Not Found")
 * ),
 *
 *
 * @OA\Get(
 *   tags={"Song"},
 *   path="/api/songs/{id}",
 *   summary="Show method of Song Controller",
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
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(
 *         property="data",
 *         type="object",
 *         ref="#/components/schemas/Song"
 *       )
 *     )
 *   )
 *
 * )
 *
 *
 * @OA\Post(
 *   tags={"Song"},
 *   path="/api/songs/",
 *   summary="Store method of Song Controller",
 *
 *   @OA\RequestBody(
 *     required=true,
 *     @OA\JsonContent(ref="#/components/schemas/RequestBodySong")
 *   ),
 *
 *   @OA\Response(
 *     response=200,
 *     description="OK",
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(property="message", type="string", example="Song information was added"),
 *       @OA\Property(property="data", ref="#/components/schemas/Song")
 *     )
 *   )
 * ),
 *
 *
 * @OA\Patch(
 *   tags={"Song"},
 *   path="/api/songs/{id}",
 *   summary="Update method of Song Controller",
 *
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     @OA\Schema(type="integer", example=1),
 *   ),
 *
 *   @OA\RequestBody(
 *     required=true,
 *     @OA\JsonContent(ref="#/components/schemas/RequestBodySong"),
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
 *         example="Song was updated",
 *       ),
 *       @OA\Property(
 *         property="data",
 *         type="object",
 *         ref="#/components/schemas/Song"
 *       )
 *     )
 *   )
 *
 * )
 *
 *
 * @OA\Delete(
 *   tags={"Song"},
 *   path="/api/songs/{id}",
 *   summary="Destroy method of Song Controller",
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
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(
 *         property="message",
 *         type="string",
 *         example="Song was deleted"
 *       )
 *     )
 *   )
 *
 * )
 *
 *
 * @OA\Schema(
 *   schema="Song",
 *   type="object",
 *   @OA\Property(
 *     property="id",
 *     type="integer",
 *     example=1
 *   ),
 *   @OA\Property(
 *     property="title",
 *     type="string",
 *     example="Song Title",
 *   ),
 *   @OA\Property(
 *     property="artist_id",
 *     type="integer",
 *     example=1,
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
 *
 *
 * @OA\Schema(
 *   schema="RequestBodySong",
 *   type="object",
 *   @OA\Property(property="title", type="string", example="Song Title"),
 *   @OA\Property(property="artist_id", type="integer", example=1),
 * )
 *
 *
 */

class SongController extends Controller {}
