Feature: populate
  In order to perform tests
  As an administrator of the database
  I want to see data be initialized in the database

  Scenario: Populate table Camp_Type
	Given I am on "localhost/phpmyadmin"
	When I add "Winter" in the table Camp_Type
	Then I see "Winter" in the table Camp_Type
	
  Scenario: Populate table Membership_Type
	Given I am on "localhost/phpmyadmin"
	When I add "VIP" in the table Membership_Type
	Then I see "VIP" in the table Membership_Type

  Scenario: Populate table Booking_Type
	Given I am on "localhost/phpmyadmin"
	When I add "full" in the table Booking_Type
	Then I see "full" in the table Booking_Type
