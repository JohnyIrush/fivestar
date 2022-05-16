<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Contracts;

Interface TransactionInterface
{
    public function transaction($request);

    public function result($result, $user);
}
