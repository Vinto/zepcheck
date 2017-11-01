<?php

class ZepTrackingPageCest
{
    public function frontPageWorks(AcceptanceTester $I)
    {
        $I->am('Applicant');
        $I->wantTo('Track the progress of my VISA application without having to hit the browser everyday.');   
        $I->amOnPage('/OnlineTracking/OnlineTracking.aspx');
        $I->see('ONLINE TRACKING');
        $I->fillField('//*[@id="ContentMain_txtgwfNumber"]', 'ZEP2113659');
        $I->fillField('//*[@id="ContentMain_txtLastName"]', 'Chitekwe');
        $I->click('//*[@id="ContentMain_btnSubmit"]');
        $I->dontSee('Dear Applicant,your application is in progress.');
    }
}
