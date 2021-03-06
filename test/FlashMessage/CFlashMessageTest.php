<?php

namespace FRD\FlashMessage;

class CFlashMessageTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @runInSeparateProcess
     */
    public function testAddError() {

        $fm = new \FRD\FlashMessage\CFlashMessage();

        $fm->addError('testError');
        $res = $fm->getFlashMessages();
        $exp = "<div id='flashMessage' class='error'>testError</div>";
        $this->assertEquals($res, $exp, "HTML flash message missmatch.");
    }

    /**
     * @runInSeparateProcess
     */
    public function testAddSuccess() {

        $fm = new \FRD\FlashMessage\CFlashMessage();

        $fm->addSuccess('testSuccess');
        $res = $fm->getFlashMessages();
        $exp = "<div id='flashMessage' class='success'>testSuccess</div>";
        $this->assertEquals($res, $exp, "HTML flash message missmatch.");
    }

    /**
     * @runInSeparateProcess
     */
    public function testAddNotice() {

        $fm = new \FRD\FlashMessage\CFlashMessage();

        $fm->addNotice('testNotice');
        $res = $fm->getFlashMessages();
        $exp = "<div id='flashMessage' class='notice'>testNotice</div>";
        $this->assertEquals($res, $exp, "HTML flash message missmatch.");
    }

    /**
     * @runInSeparateProcess
     */
    public function testAddWarning() {

        $fm = new \FRD\FlashMessage\CFlashMessage();

        $fm->addWarning('testWarning');
        $res = $fm->getFlashMessages();
        $exp = "<div id='flashMessage' class='warning'>testWarning</div>";
        $this->assertEquals($res, $exp, "HTML flash message missmatch.");
    }

    /**
     * @runInSeparateProcess
     */
    public function testGetFlashMessages() {

        $fm = new \FRD\FlashMessage\CFlashMessage();

        $res = $fm->getFlashMessages();
        $exp = null;
        $this->assertEquals($res, $exp, "HTML flash message missmatch.");
    }
}

