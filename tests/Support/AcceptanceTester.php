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

/**
     * @Given the customer has an existing reservation for a “basket” at “:num:num2PM on April :num2”
     */

     public function theCustomerHasAnExistingReservationForAbasketAtPMOnAprilTh($num1, $num2)
     {
         $this->see("Customer has an existing reservation for a basket at $num1:$num2 PM on April $num2");
     }
 
     /**
      * @When the customer selects the option to cancel the reservation
      */
     public function theCustomerSelectsTheOptionToCancelTheReservation()
     {
         $this->click('Cancel Reservation');
     }
 
     /**
      * @Then the reservation should be successfully cancelled
      */
     public function theReservationShouldBeSuccessfullyCancelled()
     {
         $this->see('Reservation successfully cancelled.');
     }
 
     /**
      * @Given the customer has completed their “:num1PM” “basket” booking
      */
     public function theCustomerHasCompletedTheirPMbasketBooking($num1)
     {
         $this->see("Customer has completed their $num1 PM basket booking.");
     }
 
     /**
      * @When the customer selects the option to leave a review
      */
     public function theCustomerSelectsTheOptionToLeaveAReview()
     {
         $this->click('Leave Review');
     }
 
     /**
      * @When submits their review saying how they enjoyed the booking
      */
     public function submitsTheirReviewSayingHowTheyEnjoyedTheBooking()
     {
         $this->fillField('review', 'I enjoyed the booking.');
         $this->click('Submit');
     }
 
     /**
      * @Then the review should be successfully submitted for the “basket” booking
      */
     public function theReviewShouldBeSuccessfullySubmittedForThebasketBooking()
     {
         $this->see('Review successfully submitted.');
     }
 
     /**
      * @Given that Joe has previously submitted a review for his “:num:num2PM, april :num2” booking of a “basket”
      */
     public function thatJoeHasPreviouslySubmittedAReviewForHisPMAprilThBookingOfAbasket($num1, $num2)
     {
         $this->see("Joe has previously submitted a review for his $num1:$num2 PM, April $num2 booking of a basket.");
     }
 
     /**
      * @When Joe selects the option to delete his review
      */
     public function joeSelectsTheOptionToDeleteHisReview()
     {
         $this->click('Delete Review');
     }
 
     /**
      * @Then the review should be successfully deleted
      */
     public function theReviewShouldBeSuccessfullyDeleted()
     {
         $this->see('Review successfully deleted.');
     }
 
     /**
      * @Then the review should disappear from the review list
      */
     public function theReviewShouldDisappearFromTheReviewList()
     {
         $this->dontSee('Joe\'s review');
     }
     
	 /**
	  * @Given the customer has an existing booking for “:num1:num2 PM, April :num3” for a “basket”
	  */
	 public function theCustomerHasAnExistingBookingForPMAprilThForAbasket($num1, $num2, $num3)
	 {
		 $this->see("Customer has an existing booking for $num1:$num2 PM, April $num3 for a basket.");
	 }
 
	 /**
	  * @When the customer selects the option to modify the “basket” booking
	  */
	 public function theCustomerSelectsTheOptionToModifyThebasketBooking()
	 {
		 $this->click('Modify Booking');
	 }
 
	 /**
	  * @When makes the necessary changes to the date to “April :num1”
	  */
	 public function makesTheNecessaryChangesToTheDateToAprilNd($num1)
	 {
		 $this->fillField('new_date', "April $num1");
	 }
 
	 /**
	  * @Then the booking should be successfully modified to “:num1PM, April :num2” for a “basket”
	  */
	 public function theBookingShouldBeSuccessfullyModifiedToPMAprilNdForAbasket($num1, $num2)
	 {
		 $this->see("Booking successfully modified to $num1 PM, April $num2 for a basket.");
	 }
 
	 /**
	  * @Given the customer is making a reservation for “:num:num2PM, April :num2:num3th” for a “basket”
	  */
	 public function theCustomerIsMakingAReservationForPMAprilThForAbasket()
	 {
		 $this->fillField('reservation_date', 'April 15th');
		 $this->click('Confirm Reservation');
	 }
 
	 /**
	  * @When the customer selects the payment method as “in person” payment
	  */
	 public function theCustomerSelectsThePaymentMethodAsinPersonPayment()
	 {
		 $this->selectOption('payment_method', 'In Person');
	 }
 
	 /**
	  * @Then the customer should enter their credit card information as a “hold payment” in case of a no show
	  */
	 public function theCustomerShouldEnterTheirCreditCardInformationAsAholdPaymentInCaseOfANoShow()
	 {
		 $this->fillField('credit_card_number', '1234 5678 9012 3456');
		 $this->fillField('expiration_date', '12/25');
		 $this->fillField('cvv', '123');
	 }
 
	 /**
	  * @Then the customer clicks the “book” button
	  */
	 public function theCustomerClicksThebookButton()
	 {
		 $this->click('Book');
	 }
 
	 /**
	  * @Then the customer should receive a message confirming their reservation
	  */
	 public function theCustomerShouldReceiveAMessageConfirmingTheirReservation()
	 {
		 $this->see('Reservation confirmed. Thank you!');
	 }
 
	 /**
	  * @Given the customer is making a reservation for “2PM on April 15th” for a basket
	  */
	 public function theCustomerIsMakingAReservationForPMOnAprilThForAbasket()
	 {
		 $this->fillField('reservation_date', 'April 15th');
		 $this->click('Confirm Reservation');
	 }
 
	 /**
	  * @When the customer selects the payment method as “online payment”
	  */
	 public function theCustomerSelectsThePaymentMethodAsonlinePayment()
	 {
		 $this->selectOption('payment_method', 'Online Payment');
	 }
 
	 /**
	  * @Then the customer should be able to enter their credit card information
	  */
	 public function theCustomerShouldBeAbleToEnterTheirCreditCardInformation()
	 {
		 $this->see('Enter Credit Card Information');
	 }
 
	 /**
	  * @Given the customer is logged into their account
	  */
	 public function theCustomerIsLoggedIntoTheirAccount()
	 {
		 $this->amLoggedIn();
	 }
 
	 /**
	  * @When the customer selects the :num:num2 PM slot for a “basket” on “April :num2:num3th”
	  */
	 public function theCustomerSelectsThePMSlotForAbasketOnAprilTh($num1, $num2, $num3)
	 {
		 $this->selectOption('time_slot', "$num1:$num2 PM");
	 }
 
	 /**
	  * @When confirms the reservation
	  */
	 public function confirmsTheReservation()
	 {
		 $this->click('Confirm Reservation');
	 }
 
	 /**
	  * @Then the reservation should be successfully made
	  */
	 public function theReservationShouldBeSuccessfullyMade()
	 {
		 $this->see('Reservation successfully made.');
	 }
 
	 /**
	  * @Given the customer is on the fitness centre web application homepage
	  */
	 public function theCustomerIsOnTheFitnessCentreWebApplicationHomepage()
	 {
		 $this->amOnPage('/');
	 }
 
	 /**
	  * @When the customer navigates to the :arg1 section
	  */
	 public function theCustomerNavigatesToTheSection($arg1)
	 {
		 $this->click($arg1);
	 }
 
	 /**
	  * @When the customer chooses the “half court”
	  */
	 public function theCustomerChoosesThehalfCourt()
	 {
		 $this->click('Half Court');
	 }
 
	 /**
	  * @When the customer clicks on “book now” button
	  */
	 public function theCustomerClicksOnbookNowButton()
	 {
		 $this->click('Book Now');
	 }
 
	 /**
	  * @Given the customer is logged into their account
	  */
	 public function theCustomerShouldSeeAListOfAvailableTimeSlotsForThehalfCourtTheyWantToBook()
	 {
		 $this->see('Available Time Slots for Half Court');
	 }
 
	 /**
	  * @When the customer navigates to “My Profile” section
	  */
	 public function theCustomerNavigatesToMyProfileSection()
	 {
		 $this->click('My Profile');
	 }
 
	 /**
	  * @Then the customer will see a table consisting their reservation history in order from the newest to the latest
	  */
	 public function theCustomerWillSeeATableConsistingTheirReservationHistoryInOrderFromTheNewestToTheLatest()
	 {
		 $this->seeElement('table.reservation-history');
	 }
 
	 /**
	  * @Given the customer booked a “half court”
	  */
	 public function theCustomerBookedAhalfCourt()
	 {
		 $this->haveBooked('Half Court');
	 }
 
	 /**
	  * @Then the customer will see a table consisting their reservation history
	  */
	 public function theCustomerWillSeeATableConsistingTheirReservationHistory()
	 {
		 $this->seeElement('table.reservation-history');
	 }
 
	 /**
	  * @Then the customer will see “pending” in the status section of their “half court” reservation
	  */
	 public function theCustomerWillSeependingInTheStatusSectionOfTheirhalfCourtReservation()
	 {
		 $this->see('Pending');
	 }

	 
	 /**
	  * @Given that Joe has previously submitted a review for his “:num:num2PM, april :num2:num3th” booking of a “basket”,  “it was a nice experiencees”
	  */
	 public function thatJoeHasPreviouslySubmittedAReviewForHisPMAprilThBookingOfAbasketitWasANiceExperiencees()
	 {
		 $this->amOnPage('/reviews');
		 $this->fillField('booking_date', "April 15");
		 $this->fillField('review_text', 'it was a nice experiencees');
		 $this->click('Submit Review');
	 }
 
	 /**
	  * @When Joe selects the option to edit the review at “:num:num2PM, april :num2:num3th” for the booking of “basket”
	  */
	 public function joeSelectsTheOptionToEditTheReviewAtPMAprilThForTheBookingOfbasket($num1, $num2, $num3)
	 {
		 $this->amOnPage('/my_bookings');
		 $this->click("Edit Review for $num1:$num2 PM, April $num2");
	 }
 
	 /**
	  * @Then the review should be successfully edited to the review “it was a nice experience”
	  */
	 public function theReviewShouldBeSuccessfullyEditedToTheReviewitWasANiceExperience()
	 {
		 $this->see('Review successfully edited to "it was a nice experience".');
	 }
 
	 /**
	  * @Then the review should be successfully edited to “:num:num2PM, april :num2:num3th” booking of a “basket”,  “it was a nice experience”
	  */
	 public function theReviewShouldBeSuccessfullyEditedToPMAprilThBookingOfAbasketitWasANiceExperience($num1, $num2, $num3)
	 {
		 $this->see("Review successfully edited to \"$num1 PM, April $num2$ booking of a basket\", \"it was a nice experience\".");
	 }
}
