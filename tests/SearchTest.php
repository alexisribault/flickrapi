<?php

class SearchTest extends TestCase
{
    public function searchPhotoTest()
    {
        $this->visit('/')
            ->type('dog', 'photoSearch')
            ->press('Submit')
            ->seePageIs('/search');    }
    }
