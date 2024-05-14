Feature: populate
  In order to perform tests
  As an administrator of the database
  I want to see data be initialized in the database

  Scenario: Populate table Camp_Type
	Given I am on "localhost/phpmyadmin"
	When I add "Winter Camp" in the table Camp
	Then I see "Winter Camp" in the table Camp
	
  Scenario: Populate table Membership_Type
	Given I am on "localhost/phpmyadmin"
	When I add "VIP Training" in the table Membership
	Then I see "VIP Training" in the table Membership

  Scenario: Populate table Booking_Type
	Given I am on "localhost/phpmyadmin"
	When I add "full" in the table Booking_Type
	Then I see "full" in the table Booking_Type
