Feature: 010_campEnrollment
  In order to enrol in a camp
  As a logged-in user
  I need to access the camp page to view details of each camp

  Scenario: Enrol in Winter camp
	Given I am on "/User/camp/buy?camp_type=Winter/"
	When I enter "John" in the first name field
	And I enter "Doe" in the last name field
	And I enter "05/02/2005" in the date of birth field
	And I click Register
	Then I should be redirected to "/User/payment"

  Scenario: Empty Fields
        Given I am on "/User/camp/buy?camp_type=Winter/"
        When I click Register
        Then I see an alert with text "Please fill out this field"