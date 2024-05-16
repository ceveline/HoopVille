Feature: 025_modifyBookingStatus.feature
  In order to decide on the state of a booking
  As a logged-in administrator
  I need to be able to change the status of the booking

  Scenario: Confirm a user booking
	Given I am on "/booking/edit?id=1"/
	When I click update
	And I select "accepted" as the status
	Then I should be redirected to "Admin/dashboard"

 Scenario: Decline a user booking
        Given I am on "/booking/edit?id=1"/
        When I click update
        And I select "Refused" as the status
        Then I should be redirected to "Admin/dashboard"
