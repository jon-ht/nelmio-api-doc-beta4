<?php


namespace App\Controller;


use OpenApi\Annotations as OA;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController
{
    /**
     *  @Route(
     *     "/api/user/{email}",
     *     name="find_user",
     *     methods={"GET"}
     * )
     * @OA\Response(
     *     response=200,
     *     description="Returns the user of the given email",
     *     @OA\JsonContent(
     *         type="object",
     *         @OA\Property(
     *             type="object",
     *             property="data",
     *             allOf={
     *                 @OA\Schema(ref="#/components/schemas/Item"),
     *                 @OA\Schema(
     *                     type="object",
     *                     @OA\Property(
     *                         type="object",
     *                         property="attributes",
     *                         ref="#/components/schemas/UserView:profile"
     *                     )
     *                 )
     *             }
     *         ),
     *     )
     * )
     */
    public function __invoke()
    {
        return new JsonResponse();
    }

}