<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;


   /**
    * @Given I am on :arg1
    */
    public function iAmOn($arg1)
    {
        $this->amOnPage($arg1); 
    }

   /**
    * @When I enter :arg1 in the first name field
    */
    public function iEnterInTheFirstNameField($arg1)
    {
        $this->fillField('guest_fname', $arg1);
    }

   /**
    * @When I enter :arg1 in the last name field
    */
    public function iEnterInTheLastNameField($arg1)
    {
        $this->fillField('guest_lname', $arg1);
    }

   /**
    * @When I enter :arg1 in the date of birth field
    */
    public function iEnterInTheDateOfBirthField($arg1)
    {
        $this->fillField('guest_dob', $arg1);
    }

   /**
    * @When I click Register
    */
    public function iClickRegister()
    {
        $this->click('Register');
    }

   /**
    * @Then I should be redirected to :arg1
    */
    public function iShouldBeRedirectedTo($arg1)
    {
       $this->amOnPage($arg1);
    }

   /**
    * @Then I see an alert with text :arg1
    */
    public function iSeeAnAlertWithText($arg1)
    {
        if ($this->tryToSeeElement('.alert')) {$this->waitForText($arg1);$this->click('OK');}
    }
}
