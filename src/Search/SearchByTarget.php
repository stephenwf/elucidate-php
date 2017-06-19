<?php

namespace Elucidate\Search;

use Assert\Assertion;

class SearchByTarget implements SearchQuery
{
    use UriQueryString;

    private $fields;
    private $value;
    private $strict;
    private $xyhw;
    private $page;
    private $t;

    public function __construct(array $fields, $value, bool $strict = false, $xyhw = null, $t = null, $page = null)
    {
        Assertion::allInArray($fields, ['id', 'source']);

        $this->fields = implode($fields, ',');
        $this->value = $value;
        $this->strict = $strict;
        $this->xyhw = $xyhw;
        $this->t = $t;
        $this->page = $page;
    }

    public function getPath() : string
    {
        return 'services/search/target';
    }
}
