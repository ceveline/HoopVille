Feature: Modify Schedule
In order to accommodate changes in schedules
As a logged in administrator
I need to be able to modify the schedule

Scenario: Modify Schedule
Given I am on page "/Admin/dashboard"
When I navigate to "/Admin/schedule"
Then I should be able to access the entire schedule
When I select "modify" on a time slot
Then I should be able to edit the date as "05/26/2024" and time as "19:00"
When I click the button "Validate"
Then I will see a message "The modification does not cause conflicts"
When I click "save" 
Then I will see a message "The time slot has been modified"

Scenario: Modify Schedule with a conflict
Given I am on page "/Admin/dashboard"
When I navigate to "/Admin/schedule"
Then I should be able to access the entire schedule
When I select "modify" on a time slot
Then I should be able to edit the date as "05/26/2024" and time as "19:00"
When I click the button "Validate"
Then I will see a message "The modification causes conflicts"
And I will be redirected to "/Admin/schedule/"

