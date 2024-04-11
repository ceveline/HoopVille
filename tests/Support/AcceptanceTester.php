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
<<<<<<< HEAD
     * @Given I am on page :arg1
     */
     public function iAmOnPage($arg1)
     {
		 $this->amOnPage($arg1);
     }

    /**
     * @When I navigate to :arg1
     */
     public function iNavigateTo($arg1)
     {
		 $this->amOnPage($arg1);
     }

    /**
     * @When I click the button :arg1
     */
     public function iClickTheButton($arg1)
     {
		 $this->click($arg1);
     }

    /**
     * @Then I will see :arg1 form
     */
     public function iWillSeeForm($arg1)
     {
		 $this->see($arg1);
     }

    /**
     * @When I specify the service as :arg1
     */
     public function iSpecifyTheServiceAs($arg1)
     {
		 $this->fillField('Service', $arg1);
     }

    /**
     * @When I specify the date as :arg1
     */
     public function iSpecifyTheDateAs($arg1)
     {
		 $this->fillField('Date', $arg1);
     }

    /**
     * @When I specify the start time as :arg1
     */
     public function iSpecifyTheStartTimeAs($arg1)
     {
         $this->fillField('Start time', $arg1);
     }

    /**
     * @When I specify the end time as :arg1
     */
     public function iSpecifyTheEndTimeAs($arg1)
     {
         $this->fillField('End time', $arg1);
     }

    /**
     * @Then I will see a message :arg1
     */
     public function iWillSeeAMessage($arg1)
     {
         $this->see($arg1);
     }

    /**
     * @When I click :arg1
     */
     public function iClick($arg1)
     {
         $this->click($arg1);
     }
	 
	 //Delete User Accounts
	 
	 /**
=======
     * Define custom actions here
     */
     /**
>>>>>>> DenisBranch
     * @Given I am on :arg1
     */
     public function iAmOn($arg1)
     {
<<<<<<< HEAD
         $this->amOnPage($arg1);
     }

    /**
     * @When I see user :arg1
     */
     public function iSeeUser($arg1)
=======
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
>>>>>>> DenisBranch
     {
         $this->see($arg1);
     }

    /**
<<<<<<< HEAD
     * @When I accidentally click the :arg1 button
     */
     public function iAccidentallyClickTheButton($arg1)
     {
         $this->click($arg1);
     }

    /**
     * @Then I will be navigated back to :arg1
     */
     public function iWillBeNavigatedBackTo($arg1)
     {
		 $this->amOnPage(arg1);
     }
	 
	 /**
     * @When I see a booking request for :arg1
     */
     public function iSeeABookingRequestFor($arg1)
     {
         $this->see($arg1);
     }

    /**
     * @Then I will be given the option to change the status to :arg1
     */
     public function iWillBeGivenTheOptionToChangeTheStatusTo($arg1)
     {
         $this->click($arg1);
     }

    /**
     * @Then I will see the status change from :arg1 to :arg2
     */
     public function iWillSeeTheStatusChangeFromTo($arg1, $arg2)
     {
         $this->see($arg1);
         $this->dontSee($arg2);
     }


    /**
     * @Then I will see a dropdown menu to filter
     */
     public function iWillSeeADropdownMenuToFilter()
     {
         $this->seeElement('select.filter-dropdown');
     }

    /**
     * @When I click the dropdown menu
     */
     public function iClickTheDropdownMenu()
     {
         $this->click('select.filter-dropdown');
     }

    /**
     * @When I choose the :arg1 option
     */
     public function iChooseTheOption($arg1)
     {
         $this->selectOption('select.filter-dropdown', $arg1);
     }

    /**
     * @Then I will only see bookings with the status :arg1
     */
     public function iWillOnlySeeBookingsWithTheStatus($arg1)
     {
         $this->seeInField('select.filter-dropdown', $arg1);
     }
	 

    /**
     * @Given I am logged in as an administrator
     */
     public function iAmLoggedInAsAnAdministrator()
     {
      
	 }

    /**
     * @Then I should see a list of all user accounts
     */
     public function iShouldSeeAListOfAllUserAccounts()
     {
         $this->amOnPage('/Admin/user-accounts');
		 $this->seeElement('.user-account-list');
     }
	 
	 /**
     * @Then I should be able to access the list of all user bookings
     */
     public function iShouldBeAbleToAccessTheListOfAllUserBookings()
     {
         $this->amOnPage('/admin/booking');
		 $this->seeElement('.user-booking-list');
     }

    /**
     * @Then I should have the option to search for a specific booking based on username
     */
     public function iShouldHaveTheOptionToSearchForASpecificBookingBasedOnUsername()
     {
         $this->seeElement('.booking-search-input');
     }

    /**
     * @When I select a booking to modify
     */
     public function iSelectABookingToModify()
     {
         $this->click('.booking-item:first-child');
     }

    /**
     * @Then I should be able to edit details such as the date and time
     */
     public function iShouldBeAbleToEditDetailsSuchAsTheDateAndTime()
     {
         $this->seeElement('.booking-date-input');
		 $this->seeElement('.booking-time-input');
     }

    /**
     * @Then I should be able to update the booking accordingly
     */
     public function iShouldBeAbleToUpdateTheBookingAccordingly()
     {
        
     }

    /**
     * @When I save the changes
     */
     public function iSaveTheChanges()
     {
         $this->click('.save-changes-button');
     }

    /**
     * @Then the booking should be modified as per the updated detail
     */
     public function theBookingShouldBeModifiedAsPerTheUpdatedDetail()
     {
          $this->see('Booking details updated successfully');
     }
	 
	 /**
	 * @When I see a user review with inappropriate content
	 */
	public function iSeeAUserReviewWithInappropriateContent()
	{
		$this->see('Inappropriate content');
	}

	/**
	 * @When I select the option to remove the review
	 */
	public function iSelectTheOptionToRemoveTheReview()
	{
		$this->click('.remove-review-button');
	}

	/**
	 * @Then the user review should be removed from the platform
	 */
	public function theUserReviewShouldBeRemovedFromThePlatform()
	{
		$this->dontSee('Inappropriate content');
	}
	
	/**
     * @When I fill in the publication details
     */
     public function iFillInThePublicationDetails()
     {
		 $this->fillField('Title', 'Summer Camp 2023');
		 $this->fillField('Content', 'Summer camp 2023 was amazing');
     }

    /**
     * @Then the publication should be successfully created and visible on the website
     */
     public function thePublicationShouldBeSuccessfullyCreatedAndVisibleOnTheWebsite()
     {
         $this->see('Summer Camp 2023');
		 $this->view('Summer camp 2023 was amazing');
     }

	/**
	 * @When I navigate to the :arg1 page
	 */
	public function iNavigateToThePage($arg1)
	{
		$this->amOnPage($arg1);
	}


	/**
	 * @When I navigate to the publication to be edited
	 */
	public function iNavigateToThePublicationToBeEdited()
	{
		$this->iNavigateToThePage('/publications/edit/1'); // Adjust the URL accordingly
	}

	/**
	 * @When I select the option to edit the publication
	 */
	public function iSelectTheOptionToEditThePublication()
	{
		$this->click('Edit Publication');
	}

	/**
	 * @When I update the publication's title
	 */
	public function iUpdateThePublicationsTitle()
	{
		$this->fillField('.publication-title', 'New Publication Title');
	}

	/**
	 * @Then the publication should be successfully updated with the new title
	 */
	public function thePublicationShouldBeSuccessfullyUpdatedWithTheNewTitle()
	{
		$this->see('New Publication Title');
	}

	/**
	 * @When I update the publication's content
	 */
	public function iUpdateThePublicationsContent()
	{
		$this->fillField('.publication-content', 'Updated publication content');
	}

	/**
	 * @Then the publication should be successfully updated with the new content
	 */
	public function thePublicationShouldBeSuccessfullyUpdatedWithTheNewContent()
	{
		$this->see('Updated publication content');
	}

	/**
	 * @When I navigate to the publication to be deleted
	 */
	public function iNavigateToThePublicationToBeDeleted()
	{
		$this->amOnPage('/publication/1');
	}

	/**
	 * @When I select the option to delete the publication
	 */
	public function iSelectTheOptionToDeleteThePublication()
	{
		$this->click('Delete');
	}

	/**
	 * @Then the publication should be successfully deleted from the platform
	 */
	public function thePublicationShouldBeSuccessfullyDeletedFromThePlatform()
	{
		$this->dontSee('Publication Title');
		$this->dontSee('Publication Content');
	}

	/**
	 * @When I navigate to the user booking page
	 */
	public function iNavigateToTheUserBookingPage()
	{
		$this->amOnPage('/Admin/booking'); // Replace '/admin/user-bookings' with the actual URL of the user booking page
	}

	/**
	 * @When I see the option to filter my search
	 */
	public function iSeeTheOptionToFilterMySearch()
	{
	}

	/**
	 * @When I select the :arg1 field
	 */
	public function iSelectTheField($arg1)
	{
		
	}

	/**
	 * @When I enter the username :arg1
	 */
	public function iEnterTheUsername($arg1)
	{
		$this->fillField('Username', $arg1); // Assuming there's an input field with name or id 'Username'
	}

	/**
	 * @Then I should only see the :arg1 booking history
	 */
	public function iShouldOnlySeeTheBookingHistory($arg1)
	{
		$this->see($arg1);
	}

=======
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

>>>>>>> DenisBranch
}
