<?php

namespace Project\Core;

abstract class BaseEntity implements IEntity{

    public function __construct() {
        $this->createdAt = date("Y-m-d H:i:s.u");
    }

    public function getCreatedAt(): string{
        return $this->createdAt;
    }
}


?>