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
      /**
     * @When I add :arg1 in the table Camp_Type
     */
    public function iAddInTheTableCamp_Type($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I add :arg1 in the table Camp_Type` is not defined");
    }

   /**
    * @Then I see :arg1 in the table Camp_Type
    */
    public function iSeeInTheTableCamp_Type($arg1)
    {
        $this->see($arg1);
    }

   /**
    * @When I add :arg1 in the table Membership_Type
    */
    public function iAddInTheTableMembership_Type($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I add :arg1 in the table Membership_Type` is not defined");
    }

   /**
    * @Then I see :arg1 in the table Membership_Type
    */
    public function iSeeInTheTableMembership_Type($arg1)
    {
        $this->see($arg1);
    }

   /**
    * @When I enter :arg1 in the email field
    */
    public function iEnterInTheEmailField($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 in the email field` is not defined");
    }

   /**
    * @When click :arg1
    */
    public function click($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `click :arg1` is not defined");
    }

   /**
    * @Then I see :arg1
    */
    public function iSee($arg1)
    {
        $this->see($arg1);
    }

   /**
    * @When I enter :arg1 in the first name field
    */
    public function iEnterInTheFirstNameField($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 in the first name field` is not defined");
    }

   /**
    * @When I enter :arg1 in the last name field
    */
    public function iEnterInTheLastNameField($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 in the last name field` is not defined");
    }

   /**
    * @When I enter :arg1 in the password field
    */
    public function iEnterInThePasswordField($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 in the password field` is not defined");
    }

   /**
    * @When I enter :arg1 in the re-type password field
    */
    public function iEnterInTheRetypePasswordField($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 in the re-type password field` is not defined");
    }

   /**
    * @When I enter :arg1 in the phone number field
    */
    public function iEnterInThePhoneNumberField($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 in the phone number field` is not defined");
    }

   /**
    * @When I enter :arg1 in the date of birth field
    */
    public function iEnterInTheDateOfBirthField($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 in the date of birth field` is not defined");
    }

   /**
    * @When I click the Register button
    */
    public function iClickTheRegisterButton()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the Register button` is not defined");
    }

   /**
    * @Then I should be redirected to :arg1
    */
    public function iShouldBeRedirectedTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to :arg1` is not defined");
    }

   /**
    * @Given I click :arg1
    */
    public function iClick($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click :arg1` is not defined");
    }

   /**
    * @When click the :arg1 button
    */
    public function clickTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `click the :arg1 button` is not defined");
    }

   /**
    * @When I enter :arg1 as the email
    */
    public function iEnterAsTheEmail($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 as the email` is not defined");
    }

   /**
    * @When click Send
    */
    public function clickSend()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `click Send` is not defined");
    }

   /**
    * @Given I click on the Login button
    */
    public function iClickOnTheLoginButton()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the Login button` is not defined");
    }

   /**
    * @Given I am a registered user
    */
    public function iAmARegisteredUser()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am a registered user` is not defined");
    }

   /**
    * @When I navigate to :arg1
    */
    public function iNavigateTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I navigate to :arg1` is not defined");
    }

   /**
    * @Then I should see my profile
    */
    public function iShouldSeeMyProfile()
{
    $this->see('My Profile');
}

   /**
    * @Then I see :arg1 on my profile
    */
    public function iSeeOnMyProfile($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I see :arg1 on my profile` is not defined");
    }

   /**
    * @When I leave the text fields empty
    */
    public function iLeaveTheTextFieldsEmpty()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I leave the text fields empty` is not defined");
    }

   /**
    * @Given I am on /User/Booking/create
    */
    public function iAmOnUserBookingcreate()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on /User/Booking/create` is not defined");
    }

   /**
    * @When I select :arg1 as the time, :arg2 as the date for a :arg3
    */
    public function iSelectAsTheTimeAsTheDateForA($arg1, $arg2, $arg3)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select :arg1 as the time, :arg2 as the date for a :arg3` is not defined");
    }

   /**
    * @When input :arg1 as the first name, :arg2 as the last name, and :arg3 as the phone number
    */
    public function inputAsTheFirstNameAsTheLastNameAndAsThePhoneNumber($arg1, $arg2, $arg3)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `input :arg1 as the first name, :arg2 as the last name, and :arg3 as the phone number` is not defined");
    }

   /**
    * @Given I am on /User/Bookings/create
    */
    public function iAmOnUserBookingscreate()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on /User/Bookings/create` is not defined");
    }

   /**
    * @Then I will see my :arg1 membership
    */
    public function iWillSeeMyMembership($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will see my :arg1 membership` is not defined");
    }

   /**
    * @Then my :arg1 camps
    */
    public function myCamps($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `my :arg1 camps` is not defined");
    }

   /**
    * @Then my :arg1 booking
    */
    public function myBooking($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `my :arg1 booking` is not defined");
    }

   /**
    * @Given I have an existing booking for “:num:num2 PM, April :num2:num3th” for a “basket”
    */
    public function iHaveAnExistingBookingForPMAprilThForAbasket($num1, $num2, $num3)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I have an existing booking for “:num:num2 PM, April :num2:num3th” for a “basket”` is not defined");
    }

   /**
    * @When I select the :arg1 button
    */
    public function iSelectTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select the :arg1 button` is not defined");
    }

   /**
    * @Then I will be navigated to :arg1
    */
    public function iWillBeNavigatedTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will be navigated to :arg1` is not defined");
    }

   /**
    * @When I change the date to “April :num1:num1nd”
    */
    public function iChangeTheDateToAprilNd($num1, $num2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I change the date to “April :num1:num1nd”` is not defined");
    }

   /**
    * @When I click :arg1 button
    */
    public function iClickButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click :arg1 button` is not defined");
    }

   /**
    * @Then the booking should be successfully modified to “:num1PM, April :num1:num1nd” for a “basket”
    */
    public function theBookingShouldBeSuccessfullyModifiedToPMAprilNdForAbasket($num1, $num2, $num3)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the booking should be successfully modified to “:num1PM, April :num1:num1nd” for a “basket”` is not defined");
    }

   /**
    * @Given I have an existing reservation for a “basket” at “:num:num2PM on April :num2:num2th”
    */
    public function iHaveAnExistingReservationForAbasketAtPMOnAprilTh($num1, $num2, $num3)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I have an existing reservation for a “basket” at “:num:num2PM on April :num2:num2th”` is not defined");
    }

   /**
    * @When I select :arg1 button
    */
    public function iSelectButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select :arg1 button` is not defined");
    }

   /**
    * @Then I click on :arg1
    */
    public function iClickOn($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on :arg1` is not defined");
    }

   /**
    * @Then the reservation should be successfully cancelled
    */
    public function theReservationShouldBeSuccessfullyCancelled()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the reservation should be successfully cancelled` is not defined");
    }

   /**
    * @When I select the :arg1 option
    */
    public function iSelectTheOption($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select the :arg1 option` is not defined");
    }

   /**
    * @When input :arg1 as the first name
    */
    public function inputAsTheFirstName($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `input :arg1 as the first name` is not defined");
    }

   /**
    * @When :arg1 as the last name
    */
    public function asTheLastName($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `:arg1 as the last name` is not defined");
    }

   /**
    * @When :arg1 as the age
    */
    public function asTheAge($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `:arg1 as the age` is not defined");
    }

   /**
    * @When :arg1 as my card number
    */
    public function asMyCardNumber($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `:arg1 as my card number` is not defined");
    }

   /**
    * @When :arg1 as my card expiry date
    */
    public function asMyCardExpiryDate($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `:arg1 as my card expiry date` is not defined");
    }

   /**
    * @When :arg1 as the cvv
    */
    public function asTheCvv($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `:arg1 as the cvv` is not defined");
    }

   /**
    * @When I select the :arg1 membership option
    */
    public function iSelectTheMembershipOption($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select the :arg1 membership option` is not defined");
    }

   /**
    * @Given I have an existing :arg1 membership
    */
    public function iHaveAnExistingMembership($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I have an existing :arg1 membership` is not defined");
    }

   /**
    * @When the customer selects the :arg1 button
    */
    public function theCustomerSelectsTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer selects the :arg1 button` is not defined");
    }

   /**
    * @Then the user will be navigated to :arg1
    */
    public function theUserWillBeNavigatedTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user will be navigated to :arg1` is not defined");
    }

   /**
    * @Then the user clicks on the :arg1 membership
    */
    public function theUserClicksOnTheMembership($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user clicks on the :arg1 membership` is not defined");
    }

   /**
    * @Then the membership should be change levels
    */
    public function theMembershipShouldBeChangeLevels()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the membership should be change levels` is not defined");
    }

   /**
    * @When I selects the :arg1 button
    */
    public function iSelectsTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I selects the :arg1 button` is not defined");
    }

   /**
    * @Then I click on the :arg1 membership
    */
    public function iClickOnTheMembership($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the :arg1 membership` is not defined");
    }

   /**
    * @Then I should see :arg1
    */
    public function iShouldSee($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see :arg1` is not defined");
    }

   /**
    * @Then the membership should be successfully cancelled
    */
    public function theMembershipShouldBeSuccessfullyCancelled()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the membership should be successfully cancelled` is not defined");
    }

   /**
    * @Then I shoud see :arg1
    */
    public function iShoudSee($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I shoud see :arg1` is not defined");
    }

   /**
    * @Given I have a completed booking
    */
    public function iHaveACompletedBooking()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I have a completed booking` is not defined");
    }

   /**
    * @When I select the booking I want to leave a review for
    */
    public function iSelectTheBookingIWantToLeaveAReviewFor()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select the booking I want to leave a review for` is not defined");
    }

   /**
    * @When enter :arg1 as the review text
    */
    public function enterAsTheReviewText($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `enter :arg1 as the review text` is not defined");
    }

   /**
    * @When I click the :arg1 button
    */
    public function iClickTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the :arg1 button` is not defined");
    }

   /**
    * @Then the review should be successfully created and visible on the review page
    */
    public function theReviewShouldBeSuccessfullyCreatedAndVisibleOnTheReviewPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the review should be successfully created and visible on the review page` is not defined");
    }

   /**
    * @Given I have an existing review that says :arg1
    */
    public function iHaveAnExistingReviewThatSays($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I have an existing review that says :arg1` is not defined");
    }

   /**
    * @When I edit the text to :arg1
    */
    public function iEditTheTextTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I edit the text to :arg1` is not defined");
    }

   /**
    * @Then the review should be successfully edited and visible on the website
    */
    public function theReviewShouldBeSuccessfullyEditedAndVisibleOnTheWebsite()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the review should be successfully edited and visible on the website` is not defined");
    }

   /**
    * @When I click the :arg1 the option to delete this review
    */
    public function iClickTheTheOptionToDeleteThisReview($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the :arg1 the option to delete this review` is not defined");
    }

   /**
    * @Then the review should be successfully deleted from the platform
    */
    public function theReviewShouldBeSuccessfullyDeletedFromThePlatform()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the review should be successfully deleted from the platform` is not defined");
    }

   /**
    * @Then I will see a search bar to filter
    */
    public function iWillSeeASearchBarToFilter()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will see a search bar to filter` is not defined");
    }

   /**
    * @Then I enter a :arg1
    */
    public function iEnterA($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter a :arg1` is not defined");
    }

   /**
    * @Then I will only see articles containing :arg1 in their content
    */
    public function iWillOnlySeeArticlesContainingInTheirContent($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will only see articles containing :arg1 in their content` is not defined");
    }

   /**
    * @When I enter :arg1 as the first name
    */
    public function iEnterAsTheFirstName($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 as the first name` is not defined");
    }

   /**
    * @When I enter :arg1 as the last name
    */
    public function iEnterAsTheLastName($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 as the last name` is not defined");
    }

   /**
    * @When I enter :arg1 as the phone number
    */
    public function iEnterAsThePhoneNumber($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 as the phone number` is not defined");
    }

   /**
    * @When I enter :arg1 as the message
    */
    public function iEnterAsTheMessage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 as the message` is not defined");
    }

   /**
    * @When click the Send button
    */
    public function clickTheSendButton()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `click the Send button` is not defined");
    }

   /**
    * @When I enter :arg1 as the message    And click the Send button
    */
    public function iEnterAsTheMessageAndClickTheSendButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 as the message    And click the Send button` is not defined");
    }

   /**
    * @When I enter :arg1 as the email and :arg2 as the password
    */
    public function iEnterAsTheEmailAndAsThePassword($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 as the email and :arg2 as the password` is not defined");
    }

   /**
    * @Given I click on the :arg1 button
    */
    public function iClickOnTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the :arg1 button` is not defined");
    }

   /**
    * @Then I should be able to access the list of all user bookings
    */
    public function iShouldBeAbleToAccessTheListOfAllUserBookings()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be able to access the list of all user bookings` is not defined");
    }

   /**
    * @Then I will see a dropdown menu to filter
    */
    public function iWillSeeADropdownMenuToFilter()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will see a dropdown menu to filter` is not defined");
    }

   /**
    * @When I click the dropdown menu
    */
    public function iClickTheDropdownMenu()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the dropdown menu` is not defined");
    }

   /**
    * @When I choose the :arg1 option
    */
    public function iChooseTheOption($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I choose the :arg1 option` is not defined");
    }

   /**
    * @Then I will only see bookings with the status :arg1
    */
    public function iWillOnlySeeBookingsWithTheStatus($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will only see bookings with the status :arg1` is not defined");
    }

   /**
    * @Given I am in :arg1
    */
    public function iAmIn($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am in :arg1` is not defined");
    }

   /**
    * @Given I see the option to filter my search
    */
    public function iSeeTheOptionToFilterMySearch()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I see the option to filter my search` is not defined");
    }

   /**
    * @When I select the :arg1 field
    */
    public function iSelectTheField($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select the :arg1 field` is not defined");
    }

   /**
    * @When I enter the username :arg1
    */
    public function iEnterTheUsername($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter the username :arg1` is not defined");
    }

   /**
    * @Then I should only see the :arg1 booking history
    */
    public function iShouldOnlySeeTheBookingHistory($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should only see the :arg1 booking history` is not defined");
    }

   /**
    * @When I click the :arg1 button on a booking
    */
    public function iClickTheButtonOnABooking($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the :arg1 button on a booking` is not defined");
    }

   /**
    * @When I select a booking to modify
    */
    public function iSelectABookingToModify()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select a booking to modify` is not defined");
    }

   /**
    * @Then I should be able to edit the date to :arg1 and the time to :arg2
    */
    public function iShouldBeAbleToEditTheDateToAndTheTimeTo($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be able to edit the date to :arg1 and the time to :arg2` is not defined");
    }

   /**
    * @Then the booking should be modified as per the updated detail
    */
    public function theBookingShouldBeModifiedAsPerTheUpdatedDetail()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the booking should be modified as per the updated detail` is not defined");
    }

   /**
    * @Then I will see a message :arg1
    */
    public function iWillSeeAMessage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will see a message :arg1` is not defined");
    }

   /**
    * @When I see a booking request status for :arg1 being :arg2
    */
    public function iSeeABookingRequestStatusForBeing($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I see a booking request status for :arg1 being :arg2` is not defined");
    }

   /**
    * @Then I will be given the option to change the status to :arg1
    */
    public function iWillBeGivenTheOptionToChangeTheStatusTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will be given the option to change the status to :arg1` is not defined");
    }

   /**
    * @Then I will see the status change from :arg1 to :arg2
    */
    public function iWillSeeTheStatusChangeFromTo($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will see the status change from :arg1 to :arg2` is not defined");
    }

   /**
    * @When I fill in :arg1 as the publication title
    */
    public function iFillInAsThePublicationTitle($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I fill in :arg1 as the publication title` is not defined");
    }

   /**
    * @When :arg1 as the publication text
    */
    public function asThePublicationText($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `:arg1 as the publication text` is not defined");
    }

   /**
    * @Then the publication should be successfully created and visible on the website
    */
    public function thePublicationShouldBeSuccessfullyCreatedAndVisibleOnTheWebsite()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the publication should be successfully created and visible on the website` is not defined");
    }

   /**
    * @Given I have an existing publication titled :arg1
    */
    public function iHaveAnExistingPublicationTitled($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I have an existing publication titled :arg1` is not defined");
    }

   /**
    * @When I edit the title to :arg1
    */
    public function iEditTheTitleTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I edit the title to :arg1` is not defined");
    }

   /**
    * @When the publication text to :arg1
    */
    public function thePublicationTextTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the publication text to :arg1` is not defined");
    }

   /**
    * @Then the publication should be successfully edited and visible on the website
    */
    public function thePublicationShouldBeSuccessfullyEditedAndVisibleOnTheWebsite()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the publication should be successfully edited and visible on the website` is not defined");
    }

   /**
    * @Then the publication should be successfully deleted from the platform
    */
    public function thePublicationShouldBeSuccessfullyDeletedFromThePlatform()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the publication should be successfully deleted from the platform` is not defined");
    }

   /**
    * @When I see review text :arg1
    */
    public function iSeeReviewText($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I see review text :arg1` is not defined");
    }

   /**
    * @Then I should see a list of all user accounts and their emails
    */
    public function iShouldSeeAListOfAllUserAccountsAndTheirEmails()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a list of all user accounts and their emails` is not defined");
    }

   /**
    * @When I see user :arg1
    */
    public function iSeeUser($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I see user :arg1` is not defined");
    }

   /**
    * @When I accidentally click the :arg1 button
    */
    public function iAccidentallyClickTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I accidentally click the :arg1 button` is not defined");
    }

   /**
    * @Then I will be navigated back to :arg1
    */
    public function iWillBeNavigatedBackTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will be navigated back to :arg1` is not defined");
    }

   /**
    * @Given I am on page :arg1
    */
    public function iAmOnPage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on page :arg1` is not defined");
    }

   /**
    * @When I click the button :arg1
    */
    public function iClickTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the button :arg1` is not defined");
    }

   /**
    * @Then I will see :arg1 form
    */
    public function iWillSeeForm($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will see :arg1 form` is not defined");
    }

   /**
    * @When I specify the service as :arg1
    */
    public function iSpecifyTheServiceAs($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I specify the service as :arg1` is not defined");
    }

   /**
    * @When I specify the date as :arg1
    */
    public function iSpecifyTheDateAs($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I specify the date as :arg1` is not defined");
    }

   /**
    * @When I specify the start time as :arg1
    */
    public function iSpecifyTheStartTimeAs($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I specify the start time as :arg1` is not defined");
    }

   /**
    * @When I specify the end time as :arg1
    */
    public function iSpecifyTheEndTimeAs($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I specify the end time as :arg1` is not defined");
    }

   /**
    * @Then I should be able to access the entire schedule
    */
    public function iShouldBeAbleToAccessTheEntireSchedule()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be able to access the entire schedule` is not defined");
    }

   /**
    * @When I select :arg1 on a time slot
    */
    public function iSelectOnATimeSlot($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select :arg1 on a time slot` is not defined");
    }

   /**
    * @Then I should be able to edit the date as :arg1
    */
    public function iShouldBeAbleToEditTheDateAs($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be able to edit the date as :arg1` is not defined");
    }

   /**
    * @Then time as :arg1
    */
    public function timeAs($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `time as :arg1` is not defined");
    }

   /**
    * @Then I will be redirected to :arg1
    */
    public function iWillBeRedirectedTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I will be redirected to :arg1` is not defined");
    }

   /**
    * @Then I should be able to access the list of all user memberships
    */
    public function iShouldBeAbleToAccessTheListOfAllUserMemberships()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be able to access the list of all user memberships` is not defined");
    }

   /**
    * @When I click the :arg1 button on a memberships
    */
    public function iClickTheButtonOnAMemberships($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the :arg1 button on a memberships` is not defined");
    }

   /**
    * @Given I navigate to  :arg1
    */
    public function iNavigateTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I navigate to  :arg1` is not defined");
    }

   /**
    * @Then I should see a list of all camps and their details
    */
    public function iShouldSeeAListOfAllCampsAndTheirDetails()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a list of all camps and their details` is not defined");
    }

   /**
    * @Then I should see a list of all membership types and their details
    */
    public function iShouldSeeAListOfAllMembershipTypesAndTheirDetails()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a list of all membership types and their details` is not defined");
    }

   /**
    * @Then I should see a list of all booking types and their details
    */
    public function iShouldSeeAListOfAllBookingTypesAndTheirDetails()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a list of all booking types and their details` is not defined");
    }

   /**
    * @Then I should see a list of all publications
    */
    public function iShouldSeeAListOfAllPublications()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a list of all publications` is not defined");
    }
}
