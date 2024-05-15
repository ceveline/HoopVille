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
    * @Then I see an alert with text :arg1
    */
    public function iSeeAnAlertWithText($arg1)
    {
        if ($this->tryToSeeElement('.alert')) {$this->waitForText($arg1);$this->click('OK');}
    }
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
     * @When I set :arg1 as the session named secret
     */
     public function iSetAsTheSessionNamedSecret($arg1)
     {
          $_SESSION['secret'] = $arg1;
     }
	 
	 /**
     * @Then I see the Your Profile section
     */
     public function iSeeTheYourProfileSection()
     {
         $this->see('#your-profile');
     }
	 
	 /**
     * @When I set :arg1 as the session named :arg2
     */
     public function iSetAsTheSessionNamed($arg1, $arg2)
     {
          $_SESSION[$arg1] = $arg2;
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
     public function iSee($arg1)
     {
         $this->see($arg1);
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
         $this->see('#your-profile');
     }
	 
	   /**
     * @Then I should see the current url :arg1
     */
     public function iShouldSeeTheCurrentUrl($arg1)
     {
         $this->canSeeInCurrentUrl($arg1);
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
	 
	 /**
     * @When I set cookie :arg1 to :arg2
     */
     public function iSetCookieTo($arg1, $arg2)
     {
        $this->setCookie($arg1, $arg2);
     }

	 /**
     * @Then I enter :arg1 in the totp field
     */
     public function iEnterInTheTotpField($arg1)
     {
         $this->fillField('totp', $arg1);
     }
	 

    /**
     * @Then I click Verify Code
     */
     public function iClickVerifyCode()
     {
         $this->click('.verify-code-btn');
     }

    /**
     * @Then I redirect to :arg1
     */
     public function iRedirectTo($arg1)
     {
         $this->amOnPage($arg1);
     }
	 
	  /**
     * @When I enter :arg1 in the fname field
     */
     public function iEnterInTheFnameField($arg1)
     {
         $this->fillField('fname', $arg1);
     }

    /**
     * @Then I enter :arg1 in the lname field
     */
     public function iEnterInTheLnameField($arg1)
     {
         $this->fillField('lname', $arg1);
     }

    /**
     * @Then I enter :arg1 in the dob field
     */
     public function iEnterInTheDobField($arg1)
     {
         $this->fillField('dob', $arg1);
     }

    /**
     * @Then I navigate :arg1
     */
     public function iNavigate($arg1)
     {
         $this->amOnPage($arg1);
     }
	 
 /**
     * @Then I enter :arg1 in the phoneNb field
     */
     public function iEnterInThePhoneNbField($arg1)
     {
         $this->fillField('phoneNumber', $arg1);
     }

	/**
     * @Then I see :arg1 in the first name field
     */
     public function iSeeInTheFirstNameField($arg1)
     {
         $this->see($arg1);
     }
	 
	  /**
     * @Then I click :arg1
     */
     public function iClick($arg1)
     {
         $this->click($arg1);
     }

    /**
     * @Then I input :arg1 for :arg2
     */
     public function iInputFor($arg1, $arg2)
     {
         $this->fillField($arg1, $arg2);
     }

    /**
     * @Then I click the :arg1 button
     */
     public function iClickTheButton($arg1)
     {
         $this->click($arg1);
     }

}
