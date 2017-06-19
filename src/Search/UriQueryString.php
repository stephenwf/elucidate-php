<?php

namespace Elucidate\Search;

trait UriQueryString
{
    abstract public function getPath(): string;

    public function __toString(): string
    {
        return $this->getPath().'?'.http_build_query(array_filter(get_object_vars($this), function ($value) {
                return $value !== null;
            }));
    }
}
