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


    //TESTS FOR 010 camp enrolment 

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

//TESTS FOR 011 purchase memberships
    /**
     *  /**
     * @When I select the :arg1 membership option ERROR ON THIS ONE!
     */
     public function iSelectTheMembershipOption($arg1)
     {
        $this->selectOption('selected_membership_option',$arg1);
    }

    /**
     * @When I click Next
     */
     public function iClickNext()
     {
        $this->click('Next');
     }

    /**
     * @When I click Confirm
     */
     public function iClickConfirm()
     {
        $this->click('Confirm');
     }

     /**
      * TEST FOR 012 MEMBERSHIP MODIFY
      */

       /**
     * @Given I click Modify
     */
     public function iClickModify()
     {
        $this->click('Modify Membership');
     }

    /**
     * @Given I select :arg1 as the membership type
     */
     public function iSelectAsTheMembershipType($arg1)
     {
        $this->selectOption('membership_type',$arg1);
     }

    /**
     * @Then I should see my updated membership
     */
     public function iShouldSeeMyUpdatedMembership()
     {
        $this->seeElement('membership_type');
     }

     /**
      * TESTS FOR 13 CANCEL MEMBERSHIP
      */

       /**
     * @When I click Cancel Membership
     */
     public function iClickCancelMembership()
     {
        $this->click('cancel membership');
     }

    /**
     * @When I enter :arg1 in the confirmation field
     */
     public function iEnterInTheConfirmationField($arg1)
     {
        $this->fillField('confirmationInput', $arg1);
     }

    /**
     * @Then my membership should be canceled
     */
     public function myMembershipShouldBeCanceled()
     {
     }
     
     /**
      * 14 CREATE REVIEWS TESTS
      */

       /**
     * @When I select :arg1 from the purchase type dropdown
     */
     public function iSelectFromThePurchaseTypeDropdown($arg1)
     {
        $this->selectOption('purchase_type',$arg1);
     }

    /**
     * @When I enter :arg1 in the review text field
     */
     public function iEnterInTheReviewTextField($arg1)
     {
        $this->fillField('review_text',$arg1);
     }

    /**
     * @When I select the :arg1 rating
     */
     public function iSelectTheRating($arg1)
     {
        $this->selectOption('rating',$arg1);
     }

    /**
     * @When I click Create Review
     */
     public function iClickCreateReview()
     {
        $this->click('create');
     }

    /**
     * @Given I am on "User/review/create"
     */
     public function iAmOnUserreviewcreate()
     {
        $this->amOnPage("User/review/create"); 
     }

     /**
      * TESTS FOR 15 edit review
      */

      /**
     * @When I click Update Review
     */
    public function iClickUpdateReview()
    {
        $this->click('update');
    }
    /**
     * TESTS FOR 16 DELETE REVIEW
     */

      /**
     * @When I click delete DONT WORK!!!!!!
     */
    public function iClickDelete()
    {
        $this->click('delete');
    }

    /**
     * TESTS FOR 17 Filter by keyword
     */
     /**
     * @Given I am on "/Publication
     */
    public function iAmOnPublication()
    {
        $this->amOnPage("Publication");
    }

   /**
    * @Then I enter :arg1 in the search bar field
    */
    public function iEnterInTheSearchBarField($arg1)
    {
        $this->fillField('query', $arg1);
    }

   /**
    * @Then I click search
    */
    public function iClickSearch()
    {
        $this->click('search');
    }

   /**
    * @Then I will see publications containing :arg1
    */
   /**
     * @Then I should be redirected to :arg1 with publications containing :arg2
     */
    public function iShouldBeRedirectedToWithPublicationsContaining($arg1, $arg2)
    {
        $this->amOnPage($arg1);
    }

    /**
     * TESTS FOR 19: ADMIN LOGIN
     */
     /**
     * @When I enter :arg1 in the email field
     */
    public function iEnterInTheEmailField($arg1)
    {
        $this->fillField('email',$arg1);
    }

   /**
    * @When I enter :arg1 in the password field
    */
    public function iEnterInThePasswordField($arg1)
    {
        $this->fillField('password_hash',$arg1);
    }

   /**
    * @When I click Login
    */
    public function iClickLogin()
    {
        $this->click('login');
    }

   /**
    * @Then I see an alert with test :arg1
    */
    public function iSeeAnAlertWithTest($arg1)
    {
        if ($this->tryToSeeElement('.alert')) {$this->waitForText($arg1);$this->click('OK');}
    }

   





          

     
}
     
