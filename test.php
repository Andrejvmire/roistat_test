<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 21.12.18
 * Time: 15:30
 */

use PHPUnit\Framework\TestCase;

require_once 'index.php';

class Test extends TestCase
{
    /**
     * @dataProvider dataProvider()
     */
    public function testRevertPunctuationMarks($text, $result)
    {
        $this->assertEquals($result, revertPunctuationMarks($text));
    }

    public function dataProvider()
    {
        return [
            ['', ''],
            [',.!?;:', ':;?!.,'],
            ['Текст на русском без знаков припинания', 'Текст на русском без знаков припинания'],
            ['какой-то текст, со... знаками! припинания!?', 'какой-то текст? со!!. знаками. припинания.,']
        ];
    }
}
