<?php


namespace App\Controller;


use OpenApi\Annotations as OA;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AuthController
{
    /**
     * @Route(
     *     "/api/auth_check",
     *     name="auth_check",
     *     methods={"POST"},
     *     requirements={
     *      "_username": "\w+",
     *      "_password": "\w+"
     *     }
     * )
     * @OA\Response(
     *     response=200,
     *     description="Login success"
     * )
     * @OA\RequestBody(
     *     description="Credentials",
     *     @OA\JsonContent(
     *         type="object",
     *         @OA\Property(property="_password", type="string", description="password"),
     *         @OA\Property(property="_username", type="string", description="user email")
     *     )
     * )
     *
     * @OA\Tag(name="Auth")
     */
    public function __invoke()
    {
        return new JsonResponse();
    }

}