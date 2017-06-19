<?php

namespace Elucidate\Search;

use Assert\Assertion;

class SearchByBody implements SearchQuery
{
    use UriQueryString;

    private $fields;
    private $strict;
    private $value;
    private $page;

    public function __construct(array $fields, $value, $strict = false, $page = null)
    {
        Assertion::allInArray($fields, ['id', 'source']);
        $this->page = $page;
        $this->fields = implode($fields, ',');
        $this->value = $value;
        $this->strict = $strict;
    }

    public function getPath() : string
    {
        return 'services/search/body';
    }
}
