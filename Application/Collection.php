<?php

namespace Application;

use ArrayAccess;

class Collection implements  ArrayAccess, \Iterator
{
    use TCollection;
}