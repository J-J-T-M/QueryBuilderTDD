<?php

use app\database\Select;
use PHPUnit\Framework\TestCase;

/**
 * SelectTest
 * @group group
 */
class SelectTest extends TestCase
{
    /** @test */
    public function test_get_simple_select()
    {
        $select = new Select;

        $query = $select->query("select * from users")->get();
        
        $this->assertEquals(1,1);
    }

}




