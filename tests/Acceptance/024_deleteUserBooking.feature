Feature: Delete User Booking
  In order to remove reservations due to unforseen circumstances
  As a logged-in administrator
  I need to be able to remove user Bookings

  Scenario: Delete User Booking
	Given I am on "/Admin/dashboard"
 	And I navigate to "/Admin/reviews/list"
  	When I see review text "324234324"
	And I click the "Delete" button
	Then I will see a message "Would you like to delete this review?"
	When I click the "Delete" button
	Then I will see a message "Review has been deleted"


