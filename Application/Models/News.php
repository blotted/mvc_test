<?php

namespace Application\Models;


use Application\Model;


/**
 * Class News
 * @package Application\Models
 *
 * @property \Application\Models\Author $author
 */
class News extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

    public function __get($name)
    {
        switch($name) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($name)
    {
        switch($name) {
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;
        }
    }
}
