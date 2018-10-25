<?php

namespace App\Http\Controllers;

use App\Block;

class ApiController extends Controller
{
    public function getBlockClassrooms(Block $block)
    {
        $block->load('classrooms:id,name,block_id');
        return $block->classrooms;
    }
}
