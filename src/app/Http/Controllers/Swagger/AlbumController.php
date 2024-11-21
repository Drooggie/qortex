<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;


/**
 * @OA\Get(
 *      path="/api/albums",
 *      summary="Index method of Album controller",
 *      tags={"Album"},
 *
 *      @OA\Response(
 *         response=200,
 *         description="List of albums retrieved successfully",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                  property="data",
 *                  type="array",
 *                  description="Array of albums",
 *                  @OA\Items(
 *                      ref="#/components/schemas/Album"
 *                  )
 *             )
 *         )
 *     ),
 * ),
 *
 *
 * @OA\Get(
 *   path="/api/albums/{id}",
 *   summary="Show method of AlbumController",
 *   tags={"Album"},
 *
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     @OA\Schema(type="integer", example="3")
 *   ),
 *
 *   @OA\Response(
 *     response=200,
 *     description="OK",
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="data",
 *         ref="#/components/schemas/Album"
 *       )
 *     )
 *   )
 * ),
 *
 *
 * @OA\Post(
 *      path="/api/albums",
 *      summary="store method of Album Controller",
 *      tags={"Album"},
 *
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *            allOf={
 *              @OA\Schema(
 *                  @OA\Property(
 *                    property="title",
 *                    type="string",
 *                    example="Album Title",
 *                  ),
 *                  @OA\Property(
 *                    property="release_year",
 *                    type="string",
 *                    example="2001"
 *                  ),
 *                  @OA\Property(
 *                    property="artist_id",
 *                    type="integer",
 *                    example=1,
 *                  ),
 *                  @OA\Property(
 *                    property="songs",
 *                    type="array",
 *                    @OA\Items(
 *                      type="object",
 *                      @OA\Property(
 *                        property="id",
 *                        type="integer",
 *                        example=1
 *                      ),
 *                      @OA\Property(
 *                        property="track_number",
 *                        type="integer",
 *                        example=1
 *                      )
 *                    )
 *                  )
 *              )
 *          }
 *          )
 *      ),
 *     @OA\Response(
 *         response=200,
 *         description="Album was added",
 *
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 example="Album was added"
 *              ),
 *              @OA\Property(
 *                 property="data",
 *                 ref="#/components/schemas/Album"
 *              )
 *         )
 *     ),
 * ),
 *
 * @OA\Schema(
 *     schema="Album",
 *     type="object",
 *     required={"title", "release_year", "artist_id", "songs"},
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         example=1,
 *         description="The unique ID of the album"
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         example="Album Title",
 *         description="The title of the album"
 *     ),
 *     @OA\Property(
 *         property="release_year",
 *         type="string",
 *         example="2001",
 *         description="The release year of the album"
 *     ),
 *     @OA\Property(
 *         property="artist_id",
 *         type="integer",
 *         example=1,
 *         description="The Artist_id property of Album"
 *     ),
 *     @OA\Property(
 *         property="songs",
 *         type="array",
 *         description="Songs in Album",
 *         @OA\Items(
 *             type="object",
 *             required={"id", "track_number"},
 *             @OA\Property(
 *                 property="id",
 *                 type="integer",
 *                 example=1,
 *                 description="The unique ID of the song",
 *             ),
 *             @OA\Property(
 *                 property="title",
 *                 type="string",
 *                 example="Song Title",
 *                 description="The Title of the song",
 *             ),
 *             @OA\Property(
 *                 property="track_number",
 *                 type="integer",
 *                 example=1,
 *                 description="The track number of the song",
 *             ),
 *         )
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the album was created"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the album was last updated"
 *     )
 * )
 */


class AlbumController extends Controller {}
