Feature: Create Profile
  In order to create a profile
  As a logged-in user
  I need to access the profile page and enter my details

  Scenario: Successful profile creation
    Given I am a registered user 
    When I navigate to "/User/myAccount"
    Then I should see my profile
