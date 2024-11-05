<?php

namespace App\Http\Controllers\Transport;

use Domains\Transport\Actions\TransportCreator;
use Domains\Transport\Dtos\TransportData;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class TransportCreatePostController
{
    public function __invoke(
        Request          $request,
        TransportCreator $creator
    ): Response
    {
        $transport = $creator->create(TransportData::from($request->all()));

        return new Response(content: json_encode($transport), status: 201);
    }
}
