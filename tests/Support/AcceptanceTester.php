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
     public function iAmOn($url) 
     { 
        $this->amOnPage($url);
     } 

     /**
     * @When I enter :arg1 in the email field
     */
     public function iEnterInTheEmailField($arg1)
     {
         $this->fillField('email', $arg1);
     }

    /**
     * @When click Register
     */
     public function clickRegister()
     {
         $this->click('#register-btn');
     }

    /**
     * @Then I see an alert with text :arg1
     */
     public function iSeeAnAlertWithText($arg1)
     {
		if ($this->tryToSeeElement('.alert')) {
			$this->waitForText($arg1);
			$this->click('OK');
		}
     }

    /**
     * @When I enter :arg1 in the first name field
     */
     public function iEnterInTheFirstNameField($arg1)
     {
         $this->fillField('first_name', $arg1);
     }

    /**
     * @When I enter :arg1 in the last name field
     */
     public function iEnterInTheLastNameField($arg1)
     {
         $this->fillField('last_name', $arg1);
     }

    /**
     * @When I enter :arg1 in the password field
     */
     public function iEnterInThePasswordField($arg1)
     {
         $this->fillField('password_hash', $arg1);
     }

    /**
     * @When I enter :arg1 in the re-type password field
     */
     public function iEnterInTheRetypePasswordField($arg1)
     {
         $this->fillField('retype-password', $arg1);
     }

    /**
     * @When I enter :arg1 in the phone number field
     */
     public function iEnterInThePhoneNumberField($arg1)
     {
         $this->fillField('phone', $arg1);
     }

    /**
     * @When I enter :arg1 in the date of birth field
     */
     public function iEnterInTheDateOfBirthField($arg1)
     {
         $this->fillField('date_of_birth', $arg1);
     }

    /**
     * @When I click Register
     */
     public function iClickRegister()
     {
         $this->click('register-btn');
     }

    /**
     * @Then I should be redirected to :arg1
     */
     public function iShouldBeRedirectedTo($arg1)
     {
         $this->amOnPage($arg1);
     }
	 
	 /**
     * @Then I click Login
     */
     public function iClickLogin()
     {
         $this->click('.login-button');
     }

    /**
     * @Then I navigate to :arg1
     */
     public function iNavigateTo($arg1)
     {
          $this->amOnPage($arg1);
     }

    /**
     * @Given I successfully registered
     */
     public function iSuccessfullyRegistered()
     {
         
     }

    /**
     * @Then I see :arg1
     */
     public function iSeeYourProfile()
     {
         $this->see('your-profile');
     }

    /**
     * @When click Edit Profile
     */
     public function clickEditProfile()
     {
         $this->click('edit-profile-btn');
     }

    /**
     * @Then I see :arg1 on my profile
     */
     public function iSeeOnMyProfile($arg1)
     {
         $this->see($arg1);
     }

    /**
     * @When I leave the text fields empty
     */
     public function iLeaveTheTextFieldsEmpty()
     {
         
     }

    /**
     * @Then I should see an alert with text :arg1
     */
     public function iShouldSeeAnAlertWithText($arg1)
     {
         if ($this->tryToSeeElement('.alert')) {
			$this->waitForText($arg1);
			$this->click('OK');
		}
     }

}
