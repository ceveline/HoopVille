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
     public function iAmOn($url)
     {
         $this->amOnPage($url);
     }

    /**
     * @When I add :arg1 in the table Camp
     */
     public function iAddInTheTableCamp($term)
     {
         $this->add($term);
     }

    /**
     * @Then I see :arg1 in the table Camp
     */
     public function iSeeInTheTableCamp($arg1)
     {
         $this->see($arg1);
     }

    /**
     * @When I add :arg1 in the table Membership
     */
     public function iAddInTheTableMembership($term)
     {
         $this->add($term);
     }

    /**
     * @Then I see :arg1 in the table Membership
     */
     public function iSeeInTheTableMembership($arg1)
     {
         $this->see($arg1);
     }

    /**
     * @When I add :arg1 in the table Booking_Type
     */
     public function iAddInTheTableBooking_Type($term)
     {
         $this->add($term);
     }

    /**
     * @Then I see :arg1 in the table Booking_Type
     */
     public function iSeeInTheTableBooking_Type($arg1)
     {
         $this->see($arg1);
     }
}
