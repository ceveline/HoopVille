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
     * Define custom actions here
     */
     /**
     * @Given I am on :arg1
     */
     public function iAmOn($arg1)
     {
         $this->amOnPage($url);
     }

    /**
     * @When I enter :arg1 as the email, :arg2 as the first name, :arg3 as the last name, :arg4 as the phone number, and :arg5 as the message
     */
     public function iEnterAsTheEmailAsTheFirstNameAsTheLastNameAsThePhoneNumberAndAsTheMessage($arg1, $arg2, $arg3, $arg4, $arg5)
     {
         $this->fillField('email', $arg1);
         $this->fillField('firstName', $arg2);
         $this->fillField('lastName', $arg3);
         $this->fillField('phoneNumber', $arg4);
         $this->fillField('message', $arg5);
     }

    /**
     * @When click the Send button
     */
     public function clickTheSendButton()
     {
         $this->click('Send');
     }

    /**
     * @Then I see :arg1
     */
     public function iSee($arg1)
     {
         $this->see($arg1);
     }

    /**
     * @When I leave the text fields empty
     */
     public function iLeaveTheTextFieldsEmpty()
     {
         // no action here (empty fields)
     }

    /**
     * @When I enter :arg1 as the first name, :arg2 as the last name, and :arg3 as the phone number
     */
     public function iEnterAsTheFirstNameAsTheLastNameAndAsThePhoneNumber($arg1, $arg2, $arg3)
     {
         $this->fillField('firstName', $arg1);
         $this->fillField('lastName', $arg2);
         $this->fillField('phoneNumber', $arg3);
     }

    /**
     * @When click the Save button
     */
     public function clickTheSaveButton()
     {
        $this->click('Save');
     }

    /**
     * @When I enter :arg1 as the first name and don't modify the other fields
     */
     public function iEnterAsTheFirstNameAndDontModifyTheOtherFields($arg1)
     {
         $this->fillField('firstName', $arg1);
     }

    /**
     * @When I chose to filter the services by :arg1
     */
     public function iChoseToFilterTheServicesBy($arg1)
     {
         $this->selectOption('service', $arg1);
     }

    /**
     * @When click the Filter button
     */
     public function clickTheFilterButton()
     {
         $this->click('Filter');
     }

    /**
     * @When I enter :arg1 as the email
     */
     public function iEnterAsTheEmail($arg1)
     {
         $this->fillField('email', $arg1);
     }

    /**
     * @When click Send
     */
     public function clickSend()
     {
         $this->click('Send');
     }

    /**
     * @When I enter :arg1 as the email and :arg2 as the password
     */
     public function iEnterAsTheEmailAndAsThePassword($arg1, $arg2)
     {
         $this->fillField('email', $arg1);
         $this->fillField('password', $arg2);
     }

    /**
     * @When I click the Login button
     */
     public function iClickTheLoginButton()
     {
         $this->click('Login');
     }

    /**
     * @Given I click on the Login button
     */
     public function iClickOnTheLoginButton()
     {
         $this->click('Login');
     }

    /**
     * @When I click the Register button
     */
     public function iClickTheRegisterButton()
     {
         $this->click('Register');
     }

    /**
     * @When I enter :arg1 as the email, :arg2 as the first name, :arg3 as the last name, and :arg4 as the password
     */
     public function iEnterAsTheEmailAsTheFirstNameAsTheLastNameAndAsThePassword($arg1, $arg2, $arg3, $arg4)
     {
          $this->fillField('email', $arg1);
          $this->fillField('firstName', $arg2);
          $this->fillField('lastName', $arg3);
          $this->fillField('password', $arg4);
     }

    /**
     * @Given I click on the Register button
     */
     public function iClickOnTheRegisterButton()
     {
          $this->click('Register');
     }

}
