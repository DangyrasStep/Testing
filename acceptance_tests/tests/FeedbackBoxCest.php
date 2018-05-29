<?php


class FeedbackBoxCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->comment("Testing: End-to-End");
        $I->waitForElement('#button');
        $I->click('#button');
        $I->waitForElement('#red');
    }
}
