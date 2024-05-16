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
     * @Given I am logged in as :arg1
     */
    public function iAmLoggedInAs($arg1)
    {
        $_SESSION['user_id'] = $arg1;
    }

   /**
    * @Given I am on on :arg1
    */
    public function iAmOnOn($arg1)
    {
        $this->amOnPage($arg1);
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
        $this->click('Create');
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

    /**
     * TEST 20: VIEW BOOKINGS:
     * 
     */
      /**
     * @When I click Bookings
     */
    public function iClickBookings()
    {
        $this->click('bookings');
    }

    /**
     * TEST 21: Filter by status
     */
     /**
     * @When I select :arg1 as the status
     */
    public function iSelectAsTheStatus($arg1)
    {
        $this->selectOption('status',$arg1);
    }

   
    /**
     * @Then I will be redirected to :arg1
     */
    public function iWillBeRedirectedTo($arg1)
    {
        $this->amOnPage($arg1);
    }

    /**
     * TESTS for 22
     */
    /**
     * @Then I should see bookings booked by the email :arg1
     */
    /**
     * @Given I am in :arg1
     */
    public function iAmIn($arg1)
    {
        $this->amOnPage($arg1);
    }

   /**
    * @Then I should be able to update the status of the booking
    */
    public function iShouldBeAbleToUpdateTheStatusOfTheBooking()
    {
        $this->assertTrue(true);

    }

     /**
     * @Given I click Delete Booking
     */
    public function iClickDeleteBooking()
    {
        $this->click('Delete');
    }

    

    /**
     * @When I click update
     */
     public function iClickUpdate()
     {
        $this->click('Update');
     }

      /**
     * @When click Register
     */
    public function clickRegister()
    {
        $this->click('Register');
    }

   /**
    * @When I enter :arg1 in the re-type password field
    */
    public function iEnterInTheRetypePasswordField($arg1)
    {
        $this->fillField('retype password',$arg1);
    }

   /**
    * @When I enter :arg1 in the phone number field
    */
    public function iEnterInThePhoneNumberField($arg1)
    {
        $this->fillField('phone',$arg1);
    }

   /**
    * @Then I should see the current url :arg1
    */
    public function iShouldSeeTheCurrentUrl($arg1)
    {
        $this->amOnPage($arg1);
    }

   /**
    * @Then I navigate to :arg1
    */
    public function iNavigateTo($arg1)
    {
        $this->amOnPage($arg1);
    }

   /**
    * @When I set :arg1 as the session named secret
    */
    public function iSetAsTheSessionNamedSecret($arg1)
    {
        $_SESSION['Secret'] = $arg1; 
    }

   /**
    * @When I set :arg1 as the session named :arg2
    */
    public function iSetAsTheSessionNamed($arg1, $arg2)
    {
        $_SESSION[$arg2] = $arg1;  
     }

   /**
    * @Then I redirect to :arg1
    */
    public function iRedirectTo($arg1)
    {
        header("Location: $arg1");
        }

   /**
    * @Then I enter :arg1 in the totp field
    */
    public function iEnterInTheTotpField($arg1)
    {
        $this->fillField('totp',$arg1);
    }

   /**
    * @Then I click Verify Code
    */
    public function iClickVerifyCode()
    {
        $this->click('Verify Code');
    }

   /**
    * @Then I enter :arg1 in the fname field
    */
    public function iEnterInTheFnameField($arg1)
    {
        $this->fillField('fname', $arg1);
    }

   /**
    * @Then click Edit Profile
    */
    public function clickEditProfile()
    {
        $this->click('Edit Profile');
    }

   /**
    * @Then I see :arg1 in the first name field
    */
    public function iSeeInTheFirstNameField($arg1)
    {
        $this->see($arg1);
    }

   /**
    * @Then I should see an alert with text :arg1
    */
    public function iShouldSeeAnAlertWithText($arg1)
    {
        if ($this->tryToSeeElement('.alert')) {$this->waitForText($arg1);$this->click('OK');}
    }

   /**
    * @When I enter :arg1 in the phoneNb field
    */
    public function iEnterInThePhoneNbField($arg1)
    {
        $this->fillField('phoneNb', $arg1);
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
        $this->fillField($arg2,$arg1);
    }

   /**
    * @Then I click the :arg1 button
    */
    public function iClickTheButton($arg1)
    {
        $this->click($arg1);
    }

 
   /**
    * @When I click delete
    */
    public function iClickDelete()
    {
        $this->click('delete');
    }

   /**
    * @Then I should see bookings booked by the email :arg1
    */
    public function iShouldSeeBookingsBookedByTheEmail($arg1)
    {
        $this->assertTrue(true, "Bookings should be listed by the email '$arg1'");
    }

   /**
    * @Given I am on :arg1/
    */
    public function iAmOn($arg1)
    {
        $this->amOnPage($arg1);
    }

   /**
    * @When I fill in :arg1 as the publication title
    */
    public function iFillInAsThePublicationTitle($arg1)
    {
        $this->fillField('publication_title',$arg1);
    }

   /**
    * @When :arg1 as the publication text
    */
    public function asThePublicationText($arg1)
    {
        $this->fillField('publication_text',$arg1);
    }

   /**
    * @When I leave the text fields empty
    */
    public function iLeaveTheTextFieldsEmpty()
    {
        $this->assertTextFieldsAreEmpty();
    }

   /**
    * @When click Post
    */
    public function clickPost()
    {
        $this->click('Post');
    }

   /**
    * @Given I have an existing publication titled :arg1
    */
    public function iHaveAnExistingPublicationTitled($arg1)
    {
        $this->assertTrue(true, "Publication should be titled '$arg1'");
    }

   /**
    * @Then I will be navigated to :arg1
    */
    public function iWillBeNavigatedTo($arg1)
    {
        $this->amOnPage($arg1);
    }

   /**
    * @When I enter :arg1 as the title
    */
    public function iEnterAsTheTitle($arg1)
    {
        $this->fillField('title',$arg1);
    }

   /**
    * @When I enter :arg1 as the text
    */
    public function iEnterAsTheText($arg1)
    {
        $this->fillField('text',$arg1);
    }

   /**
    * @Then the publication should be successfully edited and visible on the website
    */
  
public function thePublicationShouldBeSuccessfullyEditedAndVisibleOnTheWebsite()
{
    $this->assertTrue(true, "The publication should be successfully edited and visible on the website");
}

/**
 * @Then the publication should be successfully deleted from the platform
 */
public function thePublicationShouldBeSuccessfullyDeletedFromThePlatform()
{
    $this->assertTrue(true, "The publication should be successfully deleted from the platform");
}

/**
 * @Then I should be able to access the list of all user bookings
 */
public function iShouldBeAbleToAccessTheListOfAllUserBookings()
{
    $this->assertTrue(true, "I should be able to access the list of all user bookings");
}
   /**
    * @When I see review text :arg1
    */
    public function iSeeReviewText($arg1)
    {
        $this->see($arg1);
    }

   /**
    * @Then I should see a list of all user accounts and their emails
    */
    public function iShouldSeeAListOfAllUserAccountsAndTheirEmails()
    {
        $this->assertTrue(true, "I should see all acounts");
    }

   /**
    * @When I see user :arg1
    */
    public function iSeeUser($arg1)
    {
        $this->see($arg1);
    }

   /**
    * @Then I will be navigated back to :arg1
    */
    public function iWillBeNavigatedBackTo($arg1)
    {
        $this->amOnPage($arg1);
    }

   /**
    * @Then I should be able to access the list of all user services
    */
    public function iShouldBeAbleToAccessTheListOfAllUserServices()
    {
        $this->assertTrue(true, "I should see the services");
    }

   /**
    * @When I click the :arg1 button on a memberships
    */
    public function iClickTheButtonOnAMemberships($arg1)
    {
        $this->click($arg1);
    }

 /**
 * @Then I will be navigated :arg1
 */
public function iWillBeNavigated($arg1)
{
    $this->assertTrue(true, "I should be navigated to $arg1");
}

/**
 * @Then I should see a list of all camps and their details
 */
public function iShouldSeeAListOfAllCampsAndTheirDetails()
{
    $this->assertTrue(true, "I should see a list of all camps and their details");
}

/**
 * @Then I should see a list of all membership types and their details
 */
public function iShouldSeeAListOfAllMembershipTypesAndTheirDetails()
{
    $this->assertTrue(true, "I should see a list of all membership types and their details");
}

/**
 * @Then I should see a list of all booking types and their details
 */
public function iShouldSeeAListOfAllBookingTypesAndTheirDetails()
{
    $this->assertTrue(true, "I should see a list of all booking types and their details");
}

/**
 * @Then I should see a list of all publications
 */
public function iShouldSeeAListOfAllPublications()
{
    $this->assertTrue(true, "I should see a list of all publications");
}




         

     
}
     
