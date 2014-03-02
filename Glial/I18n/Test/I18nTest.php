<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Glial\I18n\Test;

use \Glial\I18n\I18n;

class TestI18n extends \PHPUnit_Framework_TestCase
{

    public function testGoogleTranslate()
    {
        $res = I18n::get_answer_from_google("home", "fr");
        $this->assertEquals($res[0], "maison");
    }

}
