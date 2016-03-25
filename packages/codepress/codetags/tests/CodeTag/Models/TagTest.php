<?php

namespace CodePress\CodeTag\Tests\Models;

use CodePress\CodeTag\Models\Tag;
use CodePress\CodeTag\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function test_check_tag_name_is_saved()
    {
        $newtag = Tag::create(['name' => 'My Tag']);

        $this->assertEquals('My Tag', $newtag->name);

        $tag = Tag::all()->first();

        $this->assertEquals('My Tag', $tag->name);
    }

    public function test_check_that_tags_are_taggable()
    {
        $first_tag = Tag::create(['name' => 'First Tag']);

        $second_tag = Tag::create(['name' => 'Second Tag']);

        $first_tag->taggable()->associate($second_tag);

        $this->assertEquals($second_tag, $first_tag->taggable);
    }
}
