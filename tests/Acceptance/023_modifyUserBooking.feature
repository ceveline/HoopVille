Feature: Modify User Booking
  In order to accomodate changes in the schedule
  As a logged-in administrator
  I need to be able to modify bookings

  Scenario: Modify User booking
	Given I am in "/booking/edit?id=1"
	Then I click "Next"
	Then I click "23"
	Then I click "Next"
	Then I click "4:00 p.m. - 6:00 p.m."
	Then I click "Modify"
	Then I should be redirected to "/Home"
